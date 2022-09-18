<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$breadcrumbs = get_sub_field("breadcrumbs");



if($id=="")
  $id = "row".get_row_index();



if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.page-banner-text::before {
        background-image: none;
    }
    </style>
    ';
    if($background_color){
        $background_color = 'background-color: '.$background_color.';';
    }
}

?>
<section id="<?php echo $id ?>" style="<?php echo $background_color ? $background_color : '' ?>" class="page-banner-text">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-banner-text-content">
          <?php 
            if($breadcrumbs){
                ?>
                <h1><?php echo $breadcrumbs; ?></h1>
                <?php
            }
            if($black_title_text){
                ?>
                <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?></h2>
                <?php
            }
            if($subtitle){
                ?>
                <h3><?php echo nl2br($subtitle); ?></h3>
                <?php
            }
          
          ?>
        </div>
      </div>
    </div>
  </div>
</section>