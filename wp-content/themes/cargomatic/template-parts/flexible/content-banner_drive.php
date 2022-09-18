<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$breadcrumb = get_sub_field("breadcrumb");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$videos_banner = get_sub_field("videos_banner");
$link = get_sub_field("link");



if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.banner-drive::before {
        background-image: none;
    }
    </style>
    ';

    if($background_color){
        $background_color = 'background-color: '.$background_color.';';
    }
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color ? $background_color : '' ?>" class="banner-drive">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="banner-drive-content">
          <div class="text-area">
            <?php 
                if($breadcrumb){
                    ?>
                    <h1><?php echo $breadcrumb; ?></h1>
                    <?php
                }
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
          <div class="media-area">
            <?php 
                if($videos_banner){
                    echo $videos_banner;
                }
            
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>