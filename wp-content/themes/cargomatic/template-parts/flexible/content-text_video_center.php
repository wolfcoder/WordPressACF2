<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$geometric_background = get_sub_field("geometric_background");
$clip_color = get_sub_field("clip_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$video = get_sub_field("video");
$button = get_sub_field("button");



$id = "";
if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.text-video-center::before {
        background-image: none;
    }
    </style>
    ';
}

if($clip_color) {
    $clip_color = 'background-color: '.$clip_color.';';
}

?>
<section id="<?php echo $id; ?>" class="text-video-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content-area text-center">
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
            if($video){
                ?>
                <div class="video-area">
                    <div class="embed-responsive embed-responsive-16by9">
                    <?php echo $video; ?>
                    </div>
                </div>
                <?php
            }
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
  <div class="bottom-triangle" style="<?php echo $clip_color ? $clip_color : ''; ?>"></div>
</section>