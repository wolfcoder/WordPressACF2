<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$background_color = get_sub_field("background_color");
$geometric_background = get_sub_field("geometric_background");
$clip_top = get_sub_field("clip_top");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = wpautop(get_sub_field("subtitle"));
$number_box = get_sub_field("number_box");



if($id=="")
  $id = "row".get_row_index();

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}


?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color; ?>" class="number-highlight section-padding-bottom  <?php echo $clip_top ? ' clip-top ' : ''; echo !$geometric_background ? ' no-geometry-right' : '' ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="number-highlight-content text-center">
          <?php 
            if($black_title_text){
                ?>
                <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                <?php
            }
            echo $subtitle;
          ?>
          <div class="number-area">
            <?php 
                if($number_box){
                    foreach($number_box as $data){
                        $number = $data['number'];
                        $symbol = $data['symbol'];
                        $subtitle = $data['subtitle'];
                        ?>
                        <div class="number-box">
                            <?php 
                                if($number){
                                    ?>
                                    <h3 class="number"><?php echo $number; echo $symbol ? '<span>'.$symbol.'</span>' : '' ?></h3>
                                    <?php
                                }
                                if($subtitle){
                                    ?>
                                    <p><?php echo nl2br($subtitle) ?></p>
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