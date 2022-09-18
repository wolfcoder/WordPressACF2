<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$add_extra_padding = get_sub_field("add_extra_padding");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$testimonials = get_sub_field("testimonials");



if($id=="")
  $id = "row".get_row_index();



if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.testimonial-image::after {
        background-image: none;
    }
    </style>
    ';
    if($background_color){
        $background_color = 'background-color: '.$background_color.';';
    }
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color ? $background_color : '' ?>" class="testimonial-image <?php echo $add_extra_padding ? " section-padding " : '' ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area text-center">
          <?php 
            if($black_title_text){
                ?>
                <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                <?php
            }
            if($subtitle){
                ?>
                <h4><?php echo $subtitle ?></h4>
                <?php
            }
          ?>
        </div>
        <div class="testimonial-img-area">
          <?php 
            if($testimonials){
                foreach($testimonials as $data){
                    $image = $data['image'];
                    $text_content = $data['text_content'];
                    ?>
                    <div class="testimonial-img-box">
                        <div class="testi-container">
                        <div class="img-area">
                            <div class="img-box">
                                <?php 
                                    if($image){
                                        ?>
                                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                                        <?php
                                    }
                                
                                ?>
                            </div>
                        </div>
                        <div class="text-area">
                            <?php echo $text_content; ?>
                            <div class="toggle">
                            <a class="testi-img-prev"></a>
                            <a class="testi-img-next"></a>
                            </div>
                        </div>
                        </div>
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