<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$large_content = get_sub_field("large_content");
$background_image = get_sub_field("background_image");
$background_color_opacity = get_sub_field("background_color_opacity");
$background_color_image_overlay = get_sub_field("background_color_image_overlay");
$background_overlay_mode = get_sub_field("background_overlay_mode");
$broadcumb = get_sub_field("broadcumb");
$green_title_text = get_sub_field("green_title_text");
$black_title_text = get_sub_field("black_title_text");
$subtitle = wpautop(get_sub_field("subtitle"));
$anchor_links = get_sub_field("anchor_links");
$page_content = get_sub_field("page_content");
$switch_text_position = get_sub_field("switch_text_position");
$clip_top = get_sub_field("clip_top");


if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.page-banner::before {
        content: "";
        position: absolute;
        background-image: none;
        background-repeat: no-repeat;
        background-size: contain;
        width: 45.734%;
        height: 82.935%;
        top: -100px;
        left: 0;
        z-index: -1;
    }
    #primary {
        background-color: #f6f6f6;
    }
    </style>
    ';
}

if($background_color_image_overlay){
    if(!$background_color_opacity){
        $background_color_opacity = '0.2';
    }

    if($background_overlay_mode == 'fade'){
      echo '
      <style>
      #'.$id.'.page-banner .banner-bg::before{
        background: linear-gradient(
          269.13deg
          ,rgba(33,60,72,'.$background_color_opacity.') 8.02%,'.$background_color_image_overlay.' 71.98%);
      }
      </style>
      ';
    } else {
      echo '
      <style>
      #'.$id.'.page-banner .banner-bg.radial-overlay::before {
          background: radial-gradient(85.17% 42.02% at 100% 55.78%,rgba(33,60,72,'.$background_color_opacity.') 0,'.$background_color_image_overlay.' 99.95%);
          transform: matrix(1,0,0,-1,0,0);
      }
      </style>
      ';
    }
}


?>
<section id="<?php echo $id ?>" class="page-banner <?php echo $large_content ?  'large-content' : '' ?> <?php echo $clip_top ? ' clip-top ' : ''; ?>">
  <!-- add class large-content on page-banner for larger content -->
  <div class="banner-bg <?php echo $background_overlay_mode == 'circle' ? 'radial-overlay' : '' ?>">
    <!-- add class radial-overlay on banner-bg for radial overlay -->
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
        <div class="page-banner-content">
          <?php 
            if($broadcumb){
                ?>
                <h1><?php echo $broadcumb; ?></h1>
                <?php
            }
            if($black_title_text){
                if(!$switch_text_position){
                  ?>
                  <h2><?php echo $green_title_text ? '<span class="green">'.$green_title_text.'</span> ' : ''  ?> <?php echo $black_title_text; ?></h2>
                  <?php
                } else {
                  ?>
                  <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span> ' : ''  ?></h2>
                  <?php
                }

            }
            if($page_content == 'anchor'){
              if($anchor_links){
                foreach($anchor_links as $data){
                    if($data['title']){
                      ?>
                        <h4><a href="#<?php echo $data['id'] ? $data['id'] : '' ?>" class="animated-arrow smoothscroll"><?php echo $data['title'] ? $data['title'] : '' ?></a></h4>
                      <?php
                    }
                }
              }
            } else {
              if($subtitle){
                  echo $subtitle;
              }
            }
          
          ?>
        </div>
      </div>
    </div>
  </div>
</section>