<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$geometric_background = get_sub_field("geometric_background");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$image = get_sub_field("image");
$text_content_background_color = get_sub_field("text_content_background_color");
$title_text_content = get_sub_field("title_text_content");
$text_content = get_sub_field("text_content");
$clip_color = get_sub_field("clip_color");

$id = "";
if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.half-image-text-bg::before {
        background-image: none;
    }
    </style>
    ';
}

if($clip_color) {
    $clip_color = 'background-color: '.$clip_color.';';
}
if($text_content_background_color) {
    $text_content_background_color = 'background-color: '.$text_content_background_color.';';
}

?>
<section id="<?php echo $id; ?>" class="half-image-text-bg">
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
                <h5><?php echo $subtitle; ?></h5>
                <?php
            }
          
          ?>
        </div>
        <div class="content-area">
          <?php 
            if($image){
                ?>
                <div class="image-area">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
                </div>
                <?php
            }
          ?>
          <div class="text-area" style="<?php echo $text_content_background_color ? $text_content_background_color : ''; ?>">
            <?php 
                if($title_text_content){
                    ?>
                    <h5 class="green"><?php echo $title_text_content; ?></h5>
                    <?php
                }
                echo $text_content;
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-triangle" style="<?php echo $clip_color; ?>"></div>
</section>