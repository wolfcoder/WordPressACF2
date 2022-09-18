<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$geometric_background = get_sub_field("geometric_background");
$clip_color = get_sub_field("clip_color");
$background_color = get_sub_field("background_color");
$white_title_text = get_sub_field("white_title_text");
$green_title_text = get_sub_field("green_title_text");
$highlight = get_sub_field("highlight");



$id = "";
if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.four-number-highlight::after {
        background-image: none;
    }
    </style>
    ';
} else {
    echo '
    <style>
    #'.$id.'.four-number-highlight::after {
        background-image: url('.$siteurl.'/wp-content/uploads/2021/03/four-number-geo.png) !important;
    }
    </style>
    ';
}
if($background_color) {
    $background_color = 'background-color: '.$background_color.';';
}

if($clip_color) {
    $clip_color = 'background-color: '.$clip_color.';';
}

?>
<section id="<?php echo $id; ?>" class="four-number-highlight" style="<?php echo $background_color ? $background_color : ''; ?>">
  <div class="top-triangle" style="<?php echo $clip_color ? $clip_color : ''; ?>"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="content-area">
          <?php 
            if($white_title_text){
                ?>
                <h2><?php echo $white_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?></h2>
                <?php
            }
          ?>
          <div class="number-area">
            <?php 
                if($highlight){
                    foreach($highlight as $data){
                        $number = $data['number'];
                        $title = $data['title'];
                        $subtitle = $data['subtitle'];
                        ?>
                        <div class="number-box">
                            <?php 
                                if($number){
                                    ?>
                                    <h3 class="number"><?php echo $number; ?></h3>

                                    <?php
                                }
                                if($title){
                                    ?>
                                    <h4><?php echo $title; ?></h4>

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
</section>