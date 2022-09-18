<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$geometric_background = get_sub_field("geometric_background");
$subtitle = get_sub_field("subtitle");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$text_content = get_sub_field("text_content");
$image = get_sub_field("image");
$button = get_sub_field("button");



$id = "";
if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.landing-banner-1::before {
        background-image: none;
    }
    </style>
    ';
}

?>
<section id="<?php echo $id; ?>" class="landing-banner-1">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="landing-banner-1-content">
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
                if($image){
                    ?>
                    <div class="float-right">
                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
                    </div>
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
</section>