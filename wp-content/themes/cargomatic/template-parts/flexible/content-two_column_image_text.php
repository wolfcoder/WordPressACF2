<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$background_color = get_sub_field("background_color");
$clip_color = get_sub_field("clip_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$image_with_text = get_sub_field("image_with_text");



$id = "";
if($id=="")
  $id = "row".get_row_index();

if($background_color) {
    $background_color = 'background-color: '.$background_color.';';
}
if($clip_color) {
    $clip_color = 'background-color: '.$clip_color.';';
}

?>
<section id="<?php echo $id; ?>" class="half-image-text" style="<?php echo $background_color ? $background_color : '' ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content-area">
          <div class="title-area text-center">
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
          <div class="image-text-boxes">
            <?php 
                if($image_with_text){
                    foreach($image_with_text as $data){
                        $image = $data['image'];
                        $title = $data['title'];
                        $subtitle = $data['subtitle'];
                        ?>
                        <div class="image-text-box">
                            <?php 
                                if($image){
                                    ?>
                                    <div class="image-area">
                                        <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
                                    </div>
                                    <?php
                                }
                                if($title){
                                    ?>
                                    <h5 class="green"><?php echo $title; ?></h5>
                                    <?php
                                }
                                if($subtitle){
                                    ?>
                                    <p><?php echo $subtitle; ?></p>
                                    <?php
                                }
                            
                            ?>

                        </div>
                        <?php
                    }
                }            
            ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom-triangle" style="<?php echo $clip_color ? $clip_color : '' ?>"></div>
</section>