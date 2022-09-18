<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$geometric_background = get_sub_field("geometric_background");
$subtitle = get_sub_field("subtitle");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$text_content = get_sub_field("text_content");
$background_color_form = get_sub_field("background_color_form");
$black_title_text_form = get_sub_field("black_title_text_form");
$green_title_text_form = get_sub_field("green_title_text_form");
$form = get_sub_field("form");
$clip_color = get_sub_field("clip_color");



$id = "";
if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.landing-banner-2::before  {
        background-image: none;
    }
    </style>
    ';
}
if($background_color_form){
    $background_color_form = 'background-color: '.$background_color_form.';';
}
if($clip_color){
    $clip_color = 'background-color: '.$clip_color.';';
}

?>
<section id="<?php echo $id; ?>" class="landing-banner-2">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="landing-banner-2-content">
          <div class="title-area">
            <?php 
                if($subtitle){
                    ?>
                    <h2 class="subtitle"><?php echo $subtitle; ?></h2>
                    <?php
                }
                if($black_title_text){
                    ?>
                    <h1 class="title"><?php echo $black_title_text; echo $green_title_text ? ' <br><span class="green">'.$green_title_text.'</span>' : '' ?> </h1>
                    <?php
                }
            
            ?>
          </div>
          <div class="flex-content">
            <?php 
                if($text_content){
                    ?>
                    <div class="text-area">
                        <?php echo $text_content; ?>
                    </div>
                    <?php
                }
            ?>

            <div class="form-area">
              <div class="form-box" style="<?php echo $background_color_form ? $background_color_form : '' ?>">
                <?php 
                    if($black_title_text_form){
                        ?>
                        <h3><?php echo $black_title_text_form; echo $green_title_text_form ? ' <span class="green">'.$green_title_text_form.'</span>' : '' ?> </h3>
                        <?php
                    }
                 echo $form;
                ?>
                <!-- <form action="#">
                  <div class="half-input">
                    <input type="text" placeholder="First name*">
                  </div>
                  <div class="half-input">
                    <input type="text" placeholder="Last name*">
                  </div>
                  <div class="half-input">
                    <input type="email" placeholder="Work Email*">
                  </div>
                  <div class="half-input">
                    <input type="text" placeholder="Phone*">
                  </div>
                  <div class="full-input">
                    <input type="text" placeholder="Company name*">
                  </div>
                  <div class="submit-button text-center w-100 mt-4">
                    <input type="submit" value="Submit" class="btn btn-primary">
                  </div>
                </form> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-triangle" style="<?php echo $clip_color ? $clip_color : '' ?>"></div>
</section>