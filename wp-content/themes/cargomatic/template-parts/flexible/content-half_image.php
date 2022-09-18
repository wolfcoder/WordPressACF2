<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$background_color = get_sub_field("background_color");
$flip_image = get_sub_field("flip_image");
$image = get_sub_field("image");
$text_content = wpautop(get_sub_field("text_content"));



if($id=="")
  $id = "row".get_row_index();

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.half-img::after {
        background-image: none;
    }
    </style>
    ';
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color; ?>" class="half-img">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="half-img-content <?php echo $flip_image ? 'image-left' : '' ?>">
          <!-- add class image-left on half-img-content to set image on left -->
          <div class="image-area">
            <?php 
                if($image){
                    ?>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
                    <?php
                }
            
            ?>
          </div>
          <div class="text-area">
            
            <?php 
            if($black_title_text){
              ?>
              <h2><?php echo $black_title_text; echo  $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
              <?php
            }
            echo $text_content; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>