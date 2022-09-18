<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$geometric_background = get_sub_field("geometric_background");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$star_content = get_sub_field("star_content");

$id = "";
if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.link-star::before {
        background-image: none;
    }
    </style>
    ';
}

echo '
<style>
.link-star .link-star-content .right-area ul li::before {
    background-image: url('.$siteurl.'/wp-content/uploads/2021/03/star-rect.svg);
}
</style>
';
?>
<section id="<?php echo $id; ?>" class="link-star">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="link-star-content">
          <div class="left-area">
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
          <div class="right-area">
            <?php echo $star_content; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>