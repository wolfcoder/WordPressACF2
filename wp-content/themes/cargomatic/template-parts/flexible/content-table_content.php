<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$clip_color = get_sub_field("clip_color");
$bottom_clip_color = get_sub_field("bottom_clip_color");
$white_title_text = get_sub_field("white_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$table_check_content = get_sub_field("table_check_content");

$id = "";
if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.table-check::before {
        background-image: none;
    }
    </style>
    ';
}
if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}
if($clip_color){
    $clip_color = 'background-color: '.$clip_color.';';
}
if($bottom_clip_color){
    $bottom_clip_color = 'background-color: '.$bottom_clip_color.';';
}
echo '
<style>
.table-check .table-check-content .check-box::before {
    background-image: url('.$siteurl.'/wp-content/uploads/2021/03/check-round.svg);
}
</style>
';

?>
<section id="<?php echo $id; ?>" class="table-check" style="<?php echo $background_color ? $background_color : ''; ?>">
  <div class="top-triangle" style="<?php echo $clip_color ? $clip_color : ''; ?>"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area text-center">
          <?php 
            if($white_title_text){
                ?>
                <h2><?php echo $white_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                <?php
            }
            if($subtitle){
                ?>
                <h5><?php echo $subtitle; ?></h5>
                <?php
            }
          
          ?>
        </div>
        <div class="table-check-content">
          <?php 
            if($table_check_content){
                foreach($table_check_content as $data){
                    $left_area = $data['left_area'];
                    $right_area = $data['right_area'];
                    ?>
                    <div class="check-box">
                        <?php 
                            if($left_area){
                                ?>
                                <div class="left-area">
                                    <h3><?php echo $left_area; ?></h3>
                                </div>
                                <?php
                            }
                            if($right_area){
                                ?>
                                <div class="right-area">
                                    <?php echo $right_area; ?>
                                </div>
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
  <div class="bottom-triangle" style="<?php echo $bottom_clip_color ? $bottom_clip_color : ''; ?>"></div>
</section>