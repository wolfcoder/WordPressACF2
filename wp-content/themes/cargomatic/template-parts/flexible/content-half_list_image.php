<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$text_content = get_sub_field("text_content");
$image = get_sub_field("image");
$button = get_sub_field("button");
$clip_color = get_sub_field("clip_color");

$id = "";
if($id=="")
  $id = "row".get_row_index();

if($clip_color) {
    $clip_color = 'background-color: '.$clip_color.';';
}
if($background_color) {
    $background_color = 'background-color: '.$background_color.';';
}

?>
<section id="<?php echo $id; ?>" class="half-list-image" style="<?php echo $background_color ? $background_color : '' ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area text-center">
          <?php 
            if($black_title_text){
                ?>
                <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">the supply chain.</span>' : '' ?> </h2>
                <?php
            }
            if($subtitle){
                ?>
                <h5><?php echo $subtitle; ?></h5>
                <?php
            }
          ?>
        </div>
        <div class="half-list-image-content">
          <div class="text-area">
            <?php echo $text_content; ?>
          </div>
          <?php 
            if($image){
                ?>
                <div class="image-area">
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
                </div>
                <?php
            }
          ?>

        </div>
        <?php 
            if($button){
                $button_url = $button['url'];
                $button_title = $button['title'];
                $button_target = $button['target'] ? $button['target'] : '_self';
                ?>
                <div class="button-area text-center">
                    <a <?php echo $button_url != '#' ? 'href="'.$button_url.'"' : '' ?> target="<?php echo $button_target ?>" class="btn btn-primary"><?php echo $button_title ?></a>
                </div>
                <?php
            }
        
        ?>

      </div>
    </div>
  </div>
  <div class="bottom-triangle" style="<?php echo $clip_color ? $clip_color : '' ?>"></div>
</section>