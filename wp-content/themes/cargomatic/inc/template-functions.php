<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package cargomatic
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cargomatic_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'cargomatic_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function cargomatic_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'cargomatic_pingback_header' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

/**
 * Proper ob_end_flush() for all levels
 *
 * This replaces the WordPress `wp_ob_end_flush_all()` function
 * with a replacement that doesn't cause PHP notices.
 */
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );
add_action( 'shutdown', function() {
   while ( @ob_end_flush() );
} );


add_filter('wpcf7_form_elements', function( $content ) {
  $dom = new DOMDocument();
  $dom->preserveWhiteSpace = false;
  $dom->loadHTML(mb_convert_encoding($content, 'HTML-ENTITIES', 'UTF-8'), LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

  $xpath = new DomXPath($dom);
  $spans = $xpath->query("//span[contains(@class, 'wpcf7-form-control-wrap')]" );

  foreach ( $spans as $span ) :
    $children = $span->firstChild;
    $span->parentNode->replaceChild( $children, $span );
  endforeach;

  return $dom->saveHTML();
});

// add_action("init", "listpost");
add_action("init", "listpost");
function listpost() {
    global $post;
    $defaultimage = get_stylesheet_directory_uri()."/images/svg/logo.svg";
    if(@$_GET["ajax"]=="listpost"){
        $category = @$_REQUEST["category"];
        $paging = @$_REQUEST["paging"];
        if($category && $paging==1){
            $offset = (($paging-1)*6);
        }
        else{
            $offset = 1 + (($paging-1)*6);
        }

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'offset' => $offset
        );  
        if($category){
            $args["tax_query"] = array(
                                        array(
                                            'taxonomy' => 'category',
                                            'field'    => 'slug',
                                            'terms'    => $category,
                                        )
                                      );
        }
        $query = new WP_Query( $args );


        $data = '';
        $counter = 0;
        while ( $query->have_posts() ) {
            $query->the_post();
           // $thumbnail_image = get_field("thumbnail_image");
            $term_list = wp_get_post_terms( $post->ID, 'category', array( 'fields' => 'names' ) );
			$permalink = get_permalink();
			$image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
            if($image==""){
                $data.='
                        <div class="content-box">
                            <h4 class="category">'.implode(", ",$term_list).'</h4>
                            <h3><a href="'.$permalink.'">'.get_the_title().'</a></h3>
                            <p>'.get_the_excerpt().'</p>
                            <a href="'.$permalink.'" class="animated-arrow">Read More</a>
                        </div>
                     ';
            }
            else{
                $data.='
                        <div class="content-box">
                            <div class="image-area">
                                <a href="'.$permalink.'">
                                    <img src="'.$image.'" alt="image event 1" class="img-fluid">
                                </a>
                            </div>
                            <h4 class="category">'.implode(", ",$term_list).'</h4>
                            <h3><a href="'.$permalink.'">'.get_the_title().'</a></h3>
                            <p>'.get_the_excerpt().'</p>
                            <a href="'.$permalink.'" class="animated-arrow">Read More</a>
                        </div>
                     ';
            }
            $counter++;
        }
        $resultdata = Array();    
        $resultdata['type'] = "success";
        $resultdata['datalist'] = $data;
        if($counter<6 || $query->found_posts<($offset+$counter)){
            $resultdata['paging'] = 0;
        }
        else{
            $resultdata['paging'] = $paging+1;
        }
        $resultdata = json_encode($resultdata);
        echo $resultdata;
        die();
    }
}

add_shortcode('shipperform', 'shipperform');
add_shortcode('carrierform', 'carrierform');

function shipperform(){
    $themeurl = get_stylesheet_directory_uri();
    $contentHTML = '
                    <script>
                      window.dataLayer = window.dataLayer || [];
                    </script>
                    <script type="text/javascript" src="'.$themeurl.'/js/signup.js?time='.time().'"></script>    
                    <div id="signup" class="full-page-form">
                          <form id="form" class="form-container" method="post">
                            <div style="display:none;">
                            <input type="checkbox" name="terms" id="terms" checked="checked" value="on">
                            <div id="select_type" class="radio-group">
                                <div class="shipper-container checked">
                                    <input id="user-shipper" type="radio" value="shipper" name="userType" checked="checked">
                                    <label class="checked" for="user-shipper">
                                        <span class="content">I am a Shipper</span>
                                    </label>
                                </div>
                            </div>
                            </div>

                            <div class="form_field first-name">
                                <input type="text" name="first_name" id="first_name" placeholder="First name" required="" maxlength="40">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field last-name">
                                <input type="text" name="last_name" id="last_name" i="" placeholder="Last name" required="" maxlength="40">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field">
                                <input type="text" name="company_name" id="company_name" placeholder="Company name" required="" maxlength="60">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field phone">
                                <input type="text" name="phone" id="phone" placeholder="Phone (555 555 5555)" required="" maxlength="12">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field city">
                                <input type="text" name="city" id="city" placeholder="City" required="">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field state">
                                <input type="text" name="state" id="state" placeholder="State" required="" maxlength="5">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field">
                                <input type="email" name="email" id="email" required="" placeholder="Email address" maxlength="40">
                                <div class="validation-error"></div>
                            </div>

                            <div class="form_field">
                                <input type="password" name="password" id="password" required="" placeholder="Password">
                                <div class="validation-error"></div>
                            </div>

                            <div class="form_field terms checkbox-container">
                                <label for="terms">
                                    By signing up I agree to the <a href="https://www.cargomatic.com/terms-of-service/">Terms of Service</a>.
                                </label>
                                <div class="validation-error"></div>
                            </div>

                            <div class="form_field submit" id="submit">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>

                            <div class="form-error-message">
                            </div>

                        </form>
                    </div>                    
                   ';
    return $contentHTML;
}
function carrierform(){
    $themeurl = get_stylesheet_directory_uri();
    $contentHTML = '
                    <script>
                      window.dataLayer = window.dataLayer || [];
                    </script>
                    <script type="text/javascript" src="'.$themeurl.'/js/signup.js?time='.time().'"></script>    
                    <div id="signup" class="full-page-form">
                          <form id="form" class="form-container" method="post">
                            <div style="display:none;">
                            <input type="checkbox" name="terms" id="terms" checked="checked" value="on">
                            <div id="select_type" class="radio-group">
                                <div class="shipper-container checked">
                                    <input id="user-carrier" type="radio" value="carrier" name="userType" checked="checked">
                                    <label class="checked" for="user-carrier">
                                        <span class="content">I am a Carrier</span>
                                    </label>
                                </div>
                            </div>
                            </div>

                            <div class="form_field first-name">
                                <input type="text" name="first_name" id="first_name" placeholder="First name" required="" maxlength="40">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field last-name">
                                <input type="text" name="last_name" id="last_name" i="" placeholder="Last name" required="" maxlength="40">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field">
                                <input type="text" name="company_name" id="company_name" placeholder="Company name" required="" maxlength="60">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field phone">
                                <input type="text" name="phone" id="phone" placeholder="Phone (555 555 5555)" required="" maxlength="12">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field city">
                                <input type="text" name="city" id="city" placeholder="City" required="">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field state">
                                <input type="text" name="state" id="state" placeholder="State" required="" maxlength="5">
                                <div class="validation-error">
                                </div>
                            </div>

                            <div class="form_field dotdot">
                                <input type="text" name="dot_number" id="dot_number" maxlength="20" placeholder="DOT number">
                                <div class="validation-error"></div>
                            </div>

                            <div class="form_field">
                                <input type="email" name="email" id="email" required="" placeholder="Email address" maxlength="40">
                                <div class="validation-error"></div>
                            </div>

                            <div class="form_field">
                                <input type="password" name="password" id="password" required="" placeholder="Password">
                                <div class="validation-error"></div>
                            </div>

                            <div class="form_field terms checkbox-container">
                                <label for="terms">
                                    By signing up I agree to the <a href="https://www.cargomatic.com/terms-of-service/">Terms of Service</a>.
                                </label>
                                <div class="validation-error"></div>
                            </div>

                            <div class="form_field submit" id="submit">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>

                            <div class="form-error-message">
                            </div>

                        </form>
                    </div>                    
                   ';
    return $contentHTML;
}


add_action('wpcf7_mail_sent', 'cargomatic_wpcf7_insert_post', 10, 1);
function cargomatic_wpcf7_insert_post(){
    $wpcf7 = WPCF7_ContactForm::get_current();
    $formid = $wpcf7->id;
    $blogid = get_current_blog_id();
    $submission = WPCF7_Submission::get_instance();
    $data = $submission->get_posted_data();
    $postdata = Array();
    //contact us http://www.dev.millennialwebdevelopment.com/cargomatic/wp/contact-us/
    if($formid==898){
        $postdata["firstname"] = $data["firstname"];
        $postdata["lastname"] = $data["lastname"];
        $postdata["email"] = $data["emailaddress"];
        $postdata["message"] = $data["message"];
        $postdata["phone"] = $data["phonenumber"];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,"https://go.cargomatic.com/l/911892/2021-03-12/n99");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postdata));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close ($ch);
    }
    //newsletter http://www.dev.millennialwebdevelopment.com/cargomatic/wp/electronics/
    if($formid==893){
        $fullname = explode(" ",$data["fullname"]);
        $firstname = trim(@$fullname[0]);
        $lastname = str_replace($firstname, "", $data["fullname"]);
        $postdata["firstname"] = trim(@$firstname);
        $postdata["lastname"] = trim(@$lastname);
        $postdata["email"] = $data["emailaddress"];
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,"https://go.cargomatic.com/l/911892/2021-03-12/n97");
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postdata));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close ($ch);
    }
}

add_action("init", "checkpardotajax");
function checkpardotajax(){
    if(@$_GET["pardotajax"]==1){
        $postdata = Array();
        $postdata["firstname"] = @$_POST["first_name"];
        $postdata["lastname"] = @$_POST["last_name"];
        $postdata["company"] = @$_POST["company_name"];
        $postdata["phone"] = @$_POST["phone"];
        $postdata["city"] = @$_POST["city"];
        $postdata["state"] = @$_POST["state"];
        $postdata["dotnumber"] = @$_POST["dot_number"];
        $postdata["email"] = @$_POST["email"];
        $postdata["password"] = @$_POST["password"];
        if(@$_POST["dot_number"]!=""){
            $url = "https://go.cargomatic.com/l/911892/2021-03-12/n93";
        }
        else{
            $url = "https://go.cargomatic.com/l/911892/2021-03-12/n95";
        }
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postdata));

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $server_output = curl_exec($ch);

        curl_close ($ch);
        exit;
    }
}

function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');