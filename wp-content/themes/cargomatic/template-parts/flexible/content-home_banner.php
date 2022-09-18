<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$background_triangle = get_sub_field("background_triangle");
$background_color = get_sub_field("background_color");
$green_text = get_sub_field("green_text");
$title_desktop = get_sub_field("title_desktop");
$subtitle = get_sub_field("subtitle");
$image_banner_for_mobile = get_sub_field("image_banner_for_mobile");
$image_banner_mobile = get_sub_field("image_banner_mobile");
$videos_banner_mobile = get_sub_field("videos_banner_mobile");
$cta_secondary = get_sub_field("cta_secondary");
$cta_primary = get_sub_field("cta_primary");
$image_banner_for_desktop = get_sub_field("image_banner_for_desktop");
$image_banner_large = get_sub_field("image_banner_large");
$image_banner_small = get_sub_field("image_banner_small");
$videos_banner_for_desktop = get_sub_field("videos_banner_for_desktop");
$title_shippers = get_sub_field("title_shippers");
$logo_shipper = get_sub_field("logo_shipper");

if($id=="")
  $id = "row".get_row_index();

if(!$background_triangle){
    echo '
    <style>
    #'.$id.'.home-banner::before {
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

    #'.$id.'.home-banner::after {
        content: "";
        position: absolute;
        background-image: none;
        background-repeat: no-repeat;
        transform: scale(-1);
        background-size: contain;
        width: 45.734%;
        height: 82.935%;
        bottom: -132px;
        right: -100px;
        z-index: -1;
    }
    </style>
    ';
  if($background_color){
      $background_color = 'background-color:'.$background_color;
  }
}

?>
<section id="<?php echo $id; ?>" class="home-banner" style="<?php echo $background_color ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-banner-content">
          <div class="text-area">
            <?php 
            if($title_desktop){
                if($title_desktop){
                    ?>
                    <h1 class="d-none d-lg-inline"><?php echo nl2br($title_desktop); echo $green_text ? ' <span class="green d-inline-block">'.$green_text.'</span>' : '' ?> </h1>
                    <?php
                }
                ?>
                <?php
            }
            if($title_desktop){
                ?>
                <h1 class="d-xl-none"><?php echo $title_desktop; echo $green_text ? ' <span class="green d-inline-block">'.$green_text.'</span>' : ''; ?> </h1>
                <?php
            }
            if($subtitle){
                ?>
                <h3><?php echo $subtitle; ?></h3>
                <?php
            }
            
            ?>
            <div class="media-mobile d-lg-none">
              <div class="main-media">
                <?php 
                    if($image_banner_for_mobile){
                        if($image_banner_mobile){
                            ?>
                            <img src="<?php echo $image_banner_mobile['url'] ?>" alt="<?php echo $image_banner_mobile['alt'] ?>" class="img-fluid">
                            <?php
                        }
                    } else {
                        echo $videos_banner_mobile;
                    }
                
                ?>
              </div>
            </div>
            <div class="button-area">
              <?php 
              if($cta_secondary){
                $cta_secondary_url = $cta_secondary['url'];
                $cta_secondary_title = $cta_secondary['title'];
                $cta_secondary_target = $cta_secondary['target'] ? $cta_secondary['target'] : '_self';
                  ?>
                    <a <?php echo $cta_secondary_url != '#' ? 'href="'.$cta_secondary_url.'"' : ''; ; ?> target="<?php echo $cta_secondary_target; ?>" class="btn btn-secondary"><?php echo $cta_secondary_title; ?></a>
                  <?php
              }
              if($cta_primary){
                $cta_primary_url = $cta_primary['url'];
                $cta_primary_title = $cta_primary['title'];
                $cta_primary_target = $cta_primary['target'] ? $cta_primary['target'] : '_self';
                  ?>
                    <a <?php echo $cta_primary_url != '#' ? 'href="'.$cta_primary_url.'"' : ''; ?> target="<?php echo $cta_primary_target; ?>" class="btn btn-primary"><?php echo $cta_primary_title; ?></a>
                  <?php
              }
              
              ?>
            </div>
          </div>
          <div class="media-area d-none d-lg-block">
            <?php 
                if($image_banner_for_desktop){
                    if($image_banner_large){
                        ?>
                        <div class="main-media">
                            <img src="<?php echo $image_banner_large['url'] ?>" alt="<?php echo $image_banner_large['alt'] ?>" class="img-fluid">
                        </div>
                        <?php
                    }
                    if($image_banner_small){
                        ?>
                        <div class="small-media">
                            <img src="<?php echo $image_banner_small['url'] ?>" alt="<?php echo $image_banner_small['alt'] ?>" class="img-fluid">
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="small-media">
                        <?php echo $videos_banner_for_desktop; ?>
                    </div>
                    <?php
                }
            
            ?>


          </div>
        </div>
        <?php if(@$logo_shipper[0]["logo"]){?>
        <div class="home-banner-shippers">
          <?php 
            if($title_shippers){
                ?>
                 <h4><?php echo $title_shippers; ?></h4>
                <?php
            }
          ?>
          <?php 
            if($logo_shipper){
                ?>
                <div class="image-area">
                    <?php
                        foreach($logo_shipper as $data){
                            $logo = $data['logo'];
                            if($logo){
                              ?>
                              <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>" class="img-fluid">
                              <?php
                            }
                        }
                    ?>
                </div>
                <?php
            }
          
          
          ?>

        </div>
        <?php }?>
      </div>
    </div>
  </div>
</section>