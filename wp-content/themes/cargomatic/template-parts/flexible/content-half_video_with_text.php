<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$video = get_sub_field("video");
$text_content = get_sub_field("text_content");
$button = get_sub_field("button");

$id = "";
if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.half-video-text::after {
        background-image: none;
    }
    </style>
    ';
}
if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

?>

<section id="<?php echo $id; ?>" class="half-video-text" style="<?php echo $background_color ? $background_color : '' ?>">
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
        <div class="video-text-content">
            <?php 
            if($video){
                ?>
                <div class="video-area">
                    <div class="embed-responsive embed-responsive-16by9">
                        <?php echo $video; ?>
                    </div>
                </div>
                <?php
            }
            ?>

          <?php 
            if($text_content){
                ?>
                <div class="text-area">
                    <?php echo $text_content; ?>
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
</section>