<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$steps = get_sub_field("steps");
$form = get_sub_field("form");
$link = get_sub_field("link");



if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.get-started-form::after {
        background-image: none;
    }
    </style>
    ';

}
if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color ? $background_color : '' ?>" class="get-started-form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area">
          <?php 
            if($black_title_text){
                ?>
                <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?></h2>
                <?php
            }
            if($subtitle){
                ?>
                <h4><?php echo nl2br($subtitle); ?></h4>
                <?php
            }
          
          ?>
        </div>
        <div class="form-content text-center">
          <?php 
            if($link){
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
              ?>
              <a <?php echo $link_url != '#' ? 'href="'.$link_url.'"' : '' ?> target="<?php echo $link_target ?>" class="btn btn-primary"><?php echo $link_title ?></a>
              <?php
          }
          
          ?>
          <!-- <div class="step-area">
            <?php 
                if($steps){
                    $counter = 0;
                    foreach($steps as $data){
                        $counter++;
                        $number = $data['number'];
                        $detail_text = $data['detail_text'];
                        if($counter == 1){
                            ?>
                            <div class="step-box step-<?php echo $counter; ?> active">
                                <?php 
                                    if($number){
                                        ?>
                                        <div class="number"><?php echo $number ?></div>
                                        <?php
                                    }
                                    if($detail_text){
                                        ?>
                                        <h3><?php echo $detail_text; ?></h3>
                                        <?php
                                    }
                                
                                ?>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="step-box step-<?php echo $counter; ?>">
                                <?php 
                                    if($number){
                                        ?>
                                        <div class="number"><?php echo $number ?></div>
                                        <?php
                                    }
                                    if($detail_text){
                                        ?>
                                        <h3><?php echo $detail_text; ?></h3>
                                        <?php
                                    }
                                
                                ?>
                            </div>
                                <?php
                        }
                    }
                }
            ?>



          </div>
          <div class="form-area">
            <?php echo $form; ?>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>