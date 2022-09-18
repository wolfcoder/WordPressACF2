<?php 
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$desktop_background_image = get_sub_field("desktop_background_image");
$mobile_background_image = get_sub_field("mobile_background_image");
$background_color_opacity = get_sub_field("background_color_opacity");
$opacity = get_sub_field("opacity");
$title = get_sub_field("title");
$green_text = get_sub_field("green_text");
$testimonial = get_sub_field("testimonial");
$author_testimonial = get_sub_field("author_testimonial");



if($id=="")
  $id = "row".get_row_index();
if($background_color_opacity){
    if(!$opacity){
        $opacity = 0.8;
    }
    echo '
    <style>
    #'.$id.' .home-testimonials-bg::after {
        content: "";
        background: '.$background_color_opacity.';
        opacity: '.$opacity.';
        display: block;
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
    }
    </style>
    ';
}
?>
<section id="<?php echo $id; ?>" class="home-testimonials">
  <div class="home-testimonials-bg">
    <?php 
        if($desktop_background_image){
            ?>
            <img src="<?php echo $desktop_background_image['url'] ?>" alt="<?php echo $desktop_background_image['alt'] ?>" class="img-fluid d-none d-md-block">
            <?php
        }
        if($mobile_background_image){
            ?>
            <img src="<?php echo $mobile_background_image['url'] ?>" alt="<?php echo $mobile_background_image['alt'] ?>" class="img-fluid d-md-none">
            <?php
        }
    
    ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-testimonials-content text-md-center">
        <?php 
            if($title){
                ?>
                <h2><?php echo $title; ?> <span class="green"><?php echo $green_text ? $green_text : '' ?></span></h2>
                <?php
            }    
            if($testimonial){
                ?>
                <h3><?php echo $testimonial; ?></h3>
                <?php
            }    
            if($author_testimonial){
                ?>
                <h4><?php echo $author_testimonial; ?></h4>
                <?php
            }    
        ?>
        </div>
      </div>
    </div>
  </div>
</section>