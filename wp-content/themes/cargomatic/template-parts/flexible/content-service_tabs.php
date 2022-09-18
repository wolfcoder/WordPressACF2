<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$tab_content = get_sub_field("tab_content");
$background_color = get_sub_field("background_color");



if($id=="")
  $id = "row".get_row_index();
if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.services-tabs::after {
        content: "";
        position: absolute;
        background-image: none;
        background-repeat: no-repeat;
        background-position: right;
        background-size: contain;
        width: 100%;
        height: 190%;
        top: -72px;
        right: 0;
        z-index: -1;
    }
    </style>
    ';
}
if($background_color){
    echo '
    <style>
    #primary {
        background-color: '.$background_color.';
    }
    </style>
    ';
    $background_color = 'background-color:'.$background_color.'';
} else {
    echo '
    <style>
    #primary {
        background-color: #f6f6f6;
    }
    </style>
    ';
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color; ?>" class="services-tabs">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="services-tabs-content">
          <ul class="nav nav-tabs justify-content-center" id="HorizontalTabs" role="tablist">
            <?php 
                $counter = 0;
                if($tab_content){
                    foreach($tab_content as $data){
                        $counter++;
                        $tab_title = $data['tab_title'];
                        $icon = $data['icon'];
                        $icon_active = $data['icon_active'];
                        $width_icon = $data['width_icon'];
                        $id_tab = explode(" ", $tab_title);
                        $href = $id_tab[0];
                        $id_tab = $id_tab[0]. '-tab';
                        if($counter == 1){
                            ?>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="<?php echo $id_tab; ?>" data-toggle="tab" href="#<?php echo $href; ?>" role="tab" aria-controls="<?php echo $href; ?>" aria-selected="true">
                                    <div class="icon-area">
                                    <?php 
                                    if($icon){
                                        ?>
                                        <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="img-fluid inactive" width="<?php echo $width_icon ? $width_icon : '66' ?>px">
    
                                        <?php
                                    }
                                    if($icon_active){
                                        ?>
                                        <img src="<?php echo $icon_active['url'] ?>" alt="<?php echo $icon_active['alt'] ?>" class="img-fluid active" width="<?php echo $width_icon ? $width_icon : '66' ?>px">
                                        <?php
                                    }
                                    
                                    ?>
                                    </div>
                                    <?php echo $tab_title; ?>
                                </a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="<?php echo $id_tab; ?>" data-toggle="tab" href="#<?php echo $href; ?>" role="tab" aria-controls="<?php echo $href; ?>" aria-selected="true">
                                    <div class="icon-area">
                                    <?php 
                                    if($icon){
                                        ?>
                                        <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="img-fluid inactive" width="<?php echo $width_icon ? $width_icon : '66' ?>px">
    
                                        <?php
                                    }
                                    if($icon_active){
                                        ?>
                                        <img src="<?php echo $icon_active['url'] ?>" alt="<?php echo $icon_active['alt'] ?>" class="img-fluid active" width="<?php echo $width_icon ? $width_icon : '66' ?>px">
                                        <?php
                                    }
                                    
                                    ?>
                                    </div>
                                    <?php echo $tab_title; ?>
                                </a>
                            </li>
                            <?php
                        }
    
                    }
                }
            
            
            ?>
          </ul>
          <div class="tab-content" id="HorizontalTabsContent">
            <?php 
                $counter2 = 0;
                if($tab_content){
                    foreach($tab_content as $data){
                        $counter2++;
                        $tab_title = $data['tab_title'];
                        $text_content = wpautop( $data['text_content']);
                        $image = $data['image_content'];
                        $link_content = $data['link_content'];
                        $id_tab = explode(" ", $tab_title);
                        $href = $id_tab[0];
                        $id_tab = $id_tab[0]. '-tab';
                        if($counter2 == 1){
                            ?>
                        <div class="tab-pane fade show active" id="<?php echo $href; ?>" role="tabpanel" aria-labelledby="<?php echo $id_tab; ?>">
                        <div class="content-area">
                            <div class="image-area">
                            <?php 
                                if($image){
                                    ?>
                                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
                                    <?php
                                }
                            ?>
                            </div>
                            <div class="text-area">
                            <?php 
                                if($text_content){
                                    echo $text_content;
                                }
                                if($link_content){
                                    $link_content_url = $link_content['url'];
                                    $link_content_title = $link_content['title'];
                                    $link_content_target = $link_content['target'] ? $link_content['target'] : '_self';
                                    ?>
                                    <a <?php echo $link_content_url && $link_content_url != '#' ? 'href="'.$link_content_url.'"' : '';  ?> target="<?php echo esc_attr( $link_content_target ); ?>" class="animated-arrow"><?php echo $link_content_title; ?></a>
                                    <?php
                                }
    
                            ?>
                            </div>
                        </div>
                        </div>
                            <?php
                        } else {
                            ?>
                        <div class="tab-pane fade show" id="<?php echo $href; ?>" role="tabpanel" aria-labelledby="<?php echo $id_tab; ?>">
                        <div class="content-area">
                            <div class="image-area">
                            <?php 
                                if($image){
                                    ?>
                                    <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
                                    <?php
                                }
                            ?>
                            </div>
                            <div class="text-area">
                            <?php 
                                if($text_content){
                                    echo $text_content;
                                }
                                if($link_content){
                                    $link_content_url = $link_content['url'];
                                    $link_content_title = $link_content['title'];
                                    $link_content_target = $link_content['target'] ? $link_content['target'] : '_self';
                                    ?>
                                    <a <?php echo $link_content_url && $link_content_url != '#' ? 'href="'.$link_content_url.'"' : '';  ?> target="<?php echo esc_attr( $link_content_target ); ?>" class="animated-arrow"><?php echo $link_content_title; ?></a>
                                    <?php
                                }
    
                            ?>
                            </div>
                        </div>
                        </div>
                            <?php
                        }
                    }    
                }
                
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>