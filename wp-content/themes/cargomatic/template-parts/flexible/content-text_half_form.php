<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id ="";
$background_color_opacity = get_sub_field("background_color_opacity");
$opacity = get_sub_field("opacity");
$background_image = get_sub_field("background_image");
$black_title_desktop = get_sub_field("black_title_desktop");
$green_title_desktop = get_sub_field("green_title_desktop");
$subtitle = get_sub_field("subtitle");
$form = get_sub_field("form");

if($id=="")
  $id = "row".get_row_index();
if($background_color_opacity){
    if(!$opacity){
        $opacity = 65;
    }
    else{
        $opacity = $opacity*100;
    }
    echo '
    <style>
    #'.$id.' .text-half-form-bg::after {
      content: "";
      background: radial-gradient(65% 65% at 50% 50%,rgba(33,60,72,.2) 0,'.$background_color_opacity.' '.$opacity.'%);
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      display: block;
      position: absolute;
  }
    </style>
    ';
}



?>
<section id="<?php echo $id ?>" style="<?php echo $background_color_opacity ? 'background-color:'.$background_color_opacity.';' : '' ?>" class="text-half-form">
  <div class="text-half-form-bg">
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
        <div class="text-half-form-content">
          <div class="text-area">
            <?php 
                if($black_title_desktop){
                    ?>
                    <h2><?php echo nl2br($black_title_desktop); echo $green_title_desktop ?  ' <span class="green">'.$green_title_desktop.'</span>' : '' ?> </h2>
                    <?php
                }
            
            ?>
            <?php 
            if($subtitle){
                ?>
                <h3><?php echo $subtitle; ?></h3>
                <?php
            }
            ?>
          </div>
          <div class="form-area">
            <?php echo $form ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>