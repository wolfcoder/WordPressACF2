<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$form = get_sub_field("form");



if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.sign-up-form::after {
        background-image: none;
    }
    </style>
    ';
}


if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}


?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color ? $background_color : ''; ?>" class="sign-up-form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="form-area">
            <?php echo $form; ?>
        </div>
      </div>
    </div>
  </div>
</section>