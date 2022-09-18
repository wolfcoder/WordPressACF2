<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$title_text = get_sub_field("title_text");



if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.latest-article {
        background-image: none;
    }
    </style>
    ';
}

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}
?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color ? $background_color : ''; ?>" class="latest-article">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="latest-article-content">
          <?php 
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1
            );	
            $query = new WP_Query( $args );
            while ( $query->have_posts() ) {
                $query->the_post();
                $title = get_the_title($query->ID);
                $excerpt = get_the_excerpt($query->ID);
                $link = get_permalink($query->ID);
                $image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));

                ?>
                <div class="text-area">
                    <?php 
                        if($title_text){
                            ?>
                            <h3><?php echo $title_text; ?></h3>
                            <?php
                        }
                        
                        if($title){
                            ?>
                            <h2><a href="<?php echo $link ?>"><?php echo $title; ?></a></h2>
                            <?php
                        }
                        if($excerpt){
                            ?>
                            <p><?php echo $excerpt; ?></p>
                            <?php
                        }
                    ?>
                    <a href="<?php echo $link ?>" class="animated-arrow">Read More</a>
                </div>
                <?php 
                    if($image){
                        ?>
                        <div class="image-area">
                            <a href="<?php echo $link ?>">
                                <img src="<?php echo $image; ?>" alt="latest news image" class="img-fluid">
                            </a>
                        </div>
                        <?php
                    }
                break;
            
            }
            wp_reset_postdata();
          ?>

        </div>
      </div>
    </div>
  </div>
</section>