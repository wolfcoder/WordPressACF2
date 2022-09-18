<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$content_drive = get_sub_field("content_drive");



if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.drive-us-content::before  {
        background-image: none;
    }
    #'.$id.'.drive-us-content::after  {
        background-image: none;
    }
    #'.$id.'.drive-us-content .bottom-geometry::before  {
        background-image: none;
    }
    </style>
    ';

}
if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

?>
<section id="<?php echo $id ?>" style="<?php echo $background_color ? $background_color : '' ?>" class="drive-us-content">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area">
          <div class="left-area">
            <?php 
                if($black_title_text){
                    ?>
                    <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?></h2>
                    <?php
                }
            ?>
          </div>
          <div class="right-area">
            <?php 
                if($subtitle){
                    ?>
                    <h5><?php echo $subtitle; ?></h5>
                    <?php
                }
            
            ?>

          </div>
        </div>
        <div class="nav-area">
          <?php 
            if($content_drive){
                foreach($content_drive as $data){
                    $title = $data['block_title_text'];
                    $icon = $data['icon'];
                    $icon_active = $data['icon_active'];
                    $href = '';
                    if($title){
                        $href = strtolower($title);
                        $href = str_replace(' ','-', $href);
                    }
                    ?>
                    <div class="nav-box">
                        <a href="#<?php echo $href; ?>" class="stretched-link smoothscroll"><span class="sr-only">link <?php echo $href; ?></span></a>
                        <div class="icon-area">
                        <?php 
                            if($icon){
                                ?>
                                <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="img-fluid inactive">
                                <?php
                            }
                            if($icon_active){
                                ?>
                                <img src="<?php echo $icon_active['url'] ?>" alt="<?php echo $icon_active['alt'] ?>" class="img-fluid active">
                                <?php
                            }
                        
                        ?>
                        </div>
                        <?php 
                            if($title){
                                ?>
                                <h5><?php echo $title; ?></h5>
                                <?php
                            }
                        
                        ?>
                    </div>
                    <?php
                }
            }
          
          ?>
        </div>
        <div class="content-area">
          <?php 
          if($content_drive){
              foreach($content_drive as $data){
                  $title = $data['block_title_text'];
                  $image = $data['image'];
                  $flip_image = $data['flip_image'];
                  $text_content = $data['text_content'];
                  $size_text_content = $data['size_text_content'];
                  $classSize = '';
                  if($size_text_content == 'small'){
                      $classSize = 'small-width';
                  } else if($size_text_content == 'large'){
                      $classSize = 'large-width';
                  }
                  $href = '';
                  if($title){
                      $href = strtolower($title);
                      $href = str_replace(' ','-', $href);
                  }
                  ?>
                    <div class="content-box <?php echo $flip_image ? 'image-right' : '' ?>">
                        <a class="anchor" id="<?php echo $href; ?>"></a>
                        <div class="image-area">
                        <?php 
                            if($image){
                                ?>
                                <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid" width="<?php echo $data['width'] ? $data['width'] : '180px' ?>">
                                <?php
                            }
                        ?>
                        </div>
                        <div class="text-area <?php echo $classSize; ?>">
                        <?php echo $text_content ?>
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
  <div class="bottom-geometry"></div>
</section>