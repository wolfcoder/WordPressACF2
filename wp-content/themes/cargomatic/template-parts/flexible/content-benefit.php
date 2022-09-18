<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$background_color = get_sub_field("background_color");
$clip_top = get_sub_field("clip_top");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$icons = get_sub_field("icons");




if($id=="")
  $id = "row".get_row_index();

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}
?>
<section class="benefit <?php echo $clip_top ? 'clip-top' : '' ?>" style="<?php echo $background_color ? $background_color : '' ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="benefit-content">
          <div class="title-area text-center">
            <?php 
                if($black_title_text){
                    ?>
                    <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                    <?php
                }
                if($subtitle){
                    ?>
                    <h4><?php echo $subtitle; ?></h4>
                    <?php
                }
            
            ?>
          </div>
          <div class="icon-boxes">
            <?php 
                if($icons){
                    foreach($icons as $data){
                        $icon = $data['icon_'];
                        $icon_active = $data['icon_active'];
                        $text = $data['text'];
                        ?>
                        <div class="icon-box">
                            <div class="icon-area">
                                <?php 
                                    if($icon){
                                        ?>
                                        <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="img-fluid inactive">
                                        <?php
                                    }
                                
                                ?>
                                <img src="<?php echo $icon_active['url'] ?>" alt="<?php echo $icon_active['alt'] ?>" class="img-fluid active">
                            </div>
                            <?php 
                                if($text){
                                    ?>
                                    <h5><?php echo nl2br($text) ?></h5>
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