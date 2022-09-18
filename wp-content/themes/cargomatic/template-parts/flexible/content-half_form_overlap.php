<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$form = wpautop(get_sub_field("form"));
$image = get_sub_field("image");

if($id=="")
  $id = "row".get_row_index();
if($background_color){
    $background_color = 'background-color: '.$background_color.' !important;';
    echo '
    <style>
    .half-form-overlap-content .left-area .title-area::before{
       '.$background_color.'
       content: "";
       width: 50%;
       height: 100%;
       top: 0;
       right: 0;
       position: absolute;
       background-color: #fff;
       z-index: 1;
    }
    </style>
    ';
}
if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.half-form-overlap::before {
        background-image: none;
    }
    </style>
    ';
}
?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color; ?>" class="half-form-overlap">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="half-form-overlap-content">
          <div class="left-area">
            <div class="title-area">
            <?php 
            if($black_title_text){
                ?>
                <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?></h2>
                <?php
            }
            if($subtitle){
                ?>
                <h3><?php echo nl2br($subtitle) ?></h3>
                <?php
            }
            
            ?>

            </div>
            <div class="form-area">
                <?php 
                    echo $form;
                ?>
            </div>
          </div>
          <div class="right-area">
            <?php 
                if($image){
                    ?>
                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
                    <?php
                }
            
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>