<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$breadcrumbs = get_sub_field("breadcrumbs");
$title = get_sub_field("title");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");



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
}
?>
<section id="<?php echo $id; ?>" class="page-banner-text">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-banner-text-content">
          <?php 
            if($breadcrumbs){
                ?>
                 <h1><?php echo $breadcrumbs ?></h1>
                <?php
            }
            if($title){
                ?>
                 <h2><?php echo $title; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                <?php
            }
            if($subtitle){
                ?>
                <h3><?php echo $subtitle; ?></h3>
                <?php
            }
          
          ?>
        </div>
      </div>
    </div>
  </div>
</section>