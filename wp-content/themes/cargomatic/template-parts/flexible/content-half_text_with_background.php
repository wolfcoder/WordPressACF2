<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$background_color = get_sub_field("background_color");
$background_opacity = get_sub_field("background_opacity");
$background_image = get_sub_field("background_image");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$left_area_text = wpautop(get_sub_field("left_area_text"));
$right_area_text = wpautop(get_sub_field("right_area_text"));
$info_text = get_sub_field("info_text");
$link = get_sub_field("link");



if($id=="")
  $id = "row".get_row_index();


if($background_color){
    if(!$background_opacity){
        $background_opacity = 0.9;
    }
    echo '
    <style>
    #'.$id.'.half-text-with-bg .bg-image::after{
        background-color: '.$background_color.';
        opacity: '.$background_opacity.';
    }
    </style>
    ';
}

?>
<section id="<?php echo $id; ?>" class="half-text-with-bg">
  <div class="bg-image">
    <?php 
        if($background_image){
            ?>
            <img src="<?php echo $background_image['url'] ?>" alt="<?php echo $background_image['alt'] ?>" class="img-fluid">
            <?php
        }
    
    ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content-area">
          <div class="title-area">
            <?php 
                if($black_title_text){
                    ?>
                    <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?></h2>
                    <?php
                }
            ?>
          </div>
          <div class="subtitle">
            <?php 
                if($subtitle){
                    ?>
                    <h3><?php echo $subtitle; ?></h3>
                    <?php
                }
            
            ?>
          </div>
          <div class="text-area">
            <div class="left-area">
              <?php echo $left_area_text; ?>
            </div>
            <div class="right-area">
              <?php echo $right_area_text; ?>

            </div>
          </div>
          <div class="bottom-area">
            <div class="info-area">
              <?php 
                if($info_text){
                    ?>
                    <h5><?php echo $info_text; ?></h5>

                    <?php
                }
              ?>
            </div>
            <div class="btn-area">
              <?php 
                if($link){
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a <?php echo $link_url != '#' ? 'href="'.$link_url.'"' : '' ?> target="<?php echo $link_target ?>" class="btn btn-primary"><?php echo $link_title ?></a>
                    <?php
                }
              
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>