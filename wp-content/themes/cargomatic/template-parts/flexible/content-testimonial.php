<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background_right = get_sub_field("geometric_background_right");
$geometric_background_left = get_sub_field("geometric_background_left");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$testimonial = get_sub_field("testimonial");



if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background_right){
    echo '
    <style>
    #'.$id.'.testimonial::before {
        background-image: none;
    }
    </style>
    ';
}

if(!$geometric_background_left){
    echo '
    <style>
    #'.$id.'.testimonial::after {
        background-image: none;
    }
    </style>
    ';

}

if(!$geometric_background_left && !$geometric_background_right){
  if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}
}

?>
<section id="<?php echo $id ?>" style="<?php echo $background_color ? $background_color : ''; ?>" class="testimonial">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area">
          <?php  
            if($black_title_text){
                ?>
                <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                <?php
            }
            if($subtitle){
                ?>
                <h3><?php echo $subtitle; ?></h3>
                <?php
            }
          
          ?>
        </div>
        <div class="testimonial-area">
            <?php 
                if($testimonial){
                    foreach($testimonial as $data){
                        $text_content_desktop = $data['text_content_desktop'];
                        ?>
                        <div class="testimonial-box">
                            <?php echo $text_content_desktop; ?>
                        </div>
                        <?php
                    }
                }
            
            ?>
        </div>
      </div>
    </div>
  </div>
</section>