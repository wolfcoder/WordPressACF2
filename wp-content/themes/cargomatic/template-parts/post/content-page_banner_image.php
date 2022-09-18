<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$breadcrumb = get_sub_field("breadcrumb");
$post_image = get_sub_field("post_image");


if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.page-banner-image::before {
        background-image: none;
    }
    </style>
    ';
} 

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}
?>

<section id="<?php echo $id; ?>" style="<?php echo $background_color; ?>" class="page-banner-image">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="page-banner-image-content">
          <div class="breadcrumb-text">
            
            <h1>News & Events <?php echo $breadcrumb ? '> '. $breadcrumb : ''; ?></h1>
          </div>
          <div class="text-area">
            <h2><?php echo get_the_title(); ?></h2>
            <h3><?php echo get_the_excerpt() ?> </h3>
          </div>
          <?php 
            if($post_image){
                ?>
                <div class="image-area">
                    <img src="<?php echo $post_image['url'] ?>" alt="<?php echo $post_image['alt'] ?>" class="img-fluid">
                </div>
                <?php
            }
          ?>

        </div>
      </div>
    </div>
  </div>
</section>