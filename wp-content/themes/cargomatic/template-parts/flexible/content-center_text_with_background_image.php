<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$clip_color = get_sub_field("clip_color");
$top_background_color_gradient = get_sub_field("top_background_color_gradient");
$top_background_color_gradient_opacity = get_sub_field("top_background_color_gradient_opacity");
$bottom_background_color_gradient = get_sub_field("bottom_background_color_gradient");
$bottom_background_color_gradient_opacity = get_sub_field("bottom_background_color_gradient_opacity");
$background_image = get_sub_field("background_image");
$white_title_text = get_sub_field("white_title_text");
$green_title_text = get_sub_field("green_title_text");
$text_content = get_sub_field("text_content");
$button = get_sub_field("button");

$id = "";
if($id=="")
  $id = "row".get_row_index();

if($background_image){
    $background_image = 'background-image: url('.$background_image["url"].');';
}

if($clip_color){
    $clip_color = 'background-color: '.$clip_color.';';
}

if($top_background_color_gradient && $bottom_background_color_gradient){
    if(!$top_background_color_gradient_opacity){
        $top_background_color_gradient_opacity = '0.75';
    }
    if(!$bottom_background_color_gradient_opacity){
        $bottom_background_color_gradient_opacity = '0.75';
    }
    list($r1, $g1, $b1) = sscanf($top_background_color_gradient, "#%02x%02x%02x");
    list($r2, $g2, $b2) = sscanf($bottom_background_color_gradient, "#%02x%02x%02x");
    $top_background_color_gradient = $r1 . ',' . $g1 . ',' . $b1. ',';
    $bottom_background_color_gradient = $r2 . ',' . $g2 . ',' . $b2 . ',';
    echo '
    <style>
    .center-text-bg-image::before {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: linear-gradient(0deg ,rgba('.$top_background_color_gradient.$top_background_color_gradient_opacity.'),rgba('.$bottom_background_color_gradient.$bottom_background_color_gradient_opacity.'));
  }
    </style>
    ';
  }
?>
<section id="<?php echo $id; ?>" class="center-text-bg-image" style="<?php echo $background_image ? $background_image : '' ?>">
  <div class="top-triangle" style="<?php echo $clip_color; ?>"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-area text-center">
          <div class="text-box">
            <?php 
                if($white_title_text){
                    ?>
                    <h2><?php echo $white_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                    <?php
                }
                echo $text_content;
                if($button){
                    $button_url = $button['url'];
                    $button_title = $button['title'];
                    $button_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <a <?php echo $button_url != '#' ? 'href="'.$button_url.'"' : '' ?> target="<?php echo $button_target ?>" class="btn btn-primary"><?php echo $button_title ?></a>
                    <?php
                }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>