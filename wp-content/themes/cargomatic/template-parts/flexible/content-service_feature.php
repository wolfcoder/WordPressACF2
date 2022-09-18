<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$services = get_sub_field("services");
$service_three_column = get_sub_field("service_three_column");
$black_bottom_title_text = get_sub_field("black_bottom_title_text");
$green_bottom_title_text = get_sub_field("green_bottom_title_text");
$link_cta = get_sub_field("link_cta");
$right_area_content = wpautop(get_sub_field("right_area_content"));



if($id=="")
  $id = "row".get_row_index();

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.service-feature::before {
        background-image: none;
    }
    </style>
    ';
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color; ?>" class="service-feature">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="service-feature-content">
          <div class="title-area">
            <?php 
                if($black_title_text){
                    ?>
                    <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                    <?php
                }
                echo $subtitle
            
            ?>
          </div>
          <div class="service-boxes four-column">
            <!-- add class four-column or three-column to service-boxes -->
            <?php 
                if($services){
                    foreach($services as $data){
                        $icon = $data['icon'];
                        $icon_active = $data['icon_active'];
                        $title = $data['title'];
                        $subtitle = $data['subtitle'];
                        ?>
                        <div class="service-box">
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
                                    <h3><?php echo nl2br($title); ?></h3>
    
                                    <?php
                                }
                                if($subtitle){
                                    ?>
                                    <p><?php echo nl2br($subtitle); ?></p>
                                    <?php
                                }
                            
                            ?>
                        </div>
                        <?php
                    }
                }
            
            ?>
          </div>
          <div class="service-boxes three-column">
            <!-- add class four-column or three-column to service-boxes -->
            <?php 
            if($service_three_column){
                foreach($service_three_column as $data){
                    $icon = $data['icon'];
                    $icon_active = $data['icon_active'];
                    $title = $data['title'];
                    $subtitle = $data['subtitle'];
                    ?>
                    <div class="service-box">
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
                                <h3><?php echo nl2br($title); ?></h3>

                                <?php
                            }
                            if($subtitle){
                                ?>
                                <p><?php echo nl2br($subtitle); ?></p>
                                <?php
                            }
                        
                        ?>
                    </div>
                    <?php
                }
            }
            
            ?>
          </div>
          <div class="individual-cta">
            <div class="left-area">
                <?php 
                    if($black_bottom_title_text){
                        ?>
                        <h2><?php echo $black_bottom_title_text; echo $green_bottom_title_text ? ' <span class="green">'.$green_bottom_title_text.'</span>' : '' ?> </h2>
                        <?php
                    }
                    if($link_cta){
                        $link_cta_url = $link_cta['url'];
                        $link_cta_title = $link_cta['title'];
                        $link_cta_target = $link_cta['target'] ? $link_cta['target'] : '_self';
                        ?>
                        <a <?php echo $link_cta && $link_cta_url != '#' ? 'href="'.$link_cta_url.'"' : '' ?> target="<?php echo $link_cta_target ?>" class="btn btn-primary"><?php echo $link_cta_title ?></a>
                        <?php
                    }
                
                ?>
            </div>
            <div class="right-area">
              <?php echo $right_area_content ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>