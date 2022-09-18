<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$white_title_text = get_sub_field("white_title_text");
$green_title_text = get_sub_field("green_title_text");
$form = get_sub_field("form");

$id = "";
if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.sign-up-form-landing::after {
        background-image: none;
    }
    </style>
    ';
}
if($background_color) {
    $background_color = 'background-color: '.$background_color.';';
}

?>
<section id="<?php echo $id; ?>" class="sign-up-form-landing" style="<?php echo $background_color ? $background_color : '' ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area text-center mb-5">
          <?php 
            if($white_title_text){
                ?>
                 <h2 class="text-white"><?php echo $white_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                <?php
            }
          
          ?>
        </div>
        <div class="form-area">
          <?php echo $form; ?>
        </div>
      </div>
    </div>
  </div>
</section>