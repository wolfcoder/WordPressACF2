<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$right_area_text = get_sub_field("right_area_text");
$collapse_area = get_sub_field("collapse_area");



$id = "";
if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.content-collapse::after {
        background-image: none;
    }
    </style>
    ';
}
echo '
<style>
.content-collapse .collapse-area .collapse-box .title-collapse::after{
    background-image: url('.$siteurl.'/wp-content/uploads/2021/03/arrow-bottom.svg);
}
</style>
';

if($background_color) {
    $background_color = 'background-color: '.$background_color.';';
}

?>
<section id="<?php echo $id; ?>" class="content-collapse" style="<?php echo $background_color ? $background_color : '' ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area">
          <div class="left-area">
            <?php 
                if($black_title_text){
                    ?>
                    <h3><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : ''; ?> </h3>
                    <?php
                }
            ?>
          </div>
          <div class="right-area">
            <?php echo $right_area_text; ?>
          </div>
        </div>
        <div class="collapse-area">
          <?php 
            if($collapse_area){
                $counter = 0;
                foreach($collapse_area as $data){
                    $counter++;
                    ?>
                    <div class="collapse-box">
                        <a class="title-collapse collapsed" data-toggle="collapse" href="#collapse<?php echo $counter; ?>">
                        <?php echo $data['title'] ?>
                        </a>
                        <div class="collapse-content collapse" id="collapse<?php echo $counter; ?>">
                        <?php echo $data['text_content'] ?>
                        </div>
                    </div>
                    <?php
                }
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>