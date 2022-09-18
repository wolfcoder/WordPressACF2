<?php 
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$background_triangle = get_sub_field("background_triangle");
$background_color = get_sub_field("background_color");
$title = get_sub_field("title");
$green_text = get_sub_field("green_text");
$tabs = get_sub_field("tabs");



if($id=="")
  $id = "row".get_row_index();

if(!$background_triangle){
    echo '
    <style>
    #'.$id.'.horizontal-tabs:before {
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
    </style>
    ';
    if($background_color){
        $background_color = 'background-color:'.$background_color;
    }
}
?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color; ?>" class="horizontal-tabs section-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="horizontal-tabs-content">
          <?php 
            if($title){
                ?>
                <h2><?php echo $title; ?><span class="green"><?php echo $green_text ? $green_text : '' ?></span></h2>
                <?php
            }
          
          ?>
          <ul class="nav nav-tabs justify-content-center" id="HorizontalTabs" role="tablist">
            <?php 
                if($tabs){
                    $counter= 0;
                    foreach($tabs as $data){
                        $counter++;
                        $nav_title = $data['nav_title'];
                        $id_tab = explode(" ", $nav_title);
                        $href = $id_tab[0];
                        $id_tab = $id_tab[0]. '-tab';
                        if($counter == 1){
                            ?>
                            <li class="nav-item " role="presentation">
                                <a class="nav-link active" id="<?php echo $id_tab ?>" data-toggle="tab" href="#<?php echo $href; ?>" role="tab" aria-controls="<?php echo $href; ?>" aria-selected="true"><?php echo $nav_title; ?></a>
                            </li>
                            <?php
                        } else {
                            ?>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="<?php echo $id_tab ?>" data-toggle="tab" href="#<?php echo $href; ?>" role="tab" aria-controls="<?php echo $href; ?>" aria-selected="true"><?php echo $nav_title; ?></a>
                            </li>
                            <?php
                        }


                    }
                }
            
            ?>
          </ul>
          <div class="tab-content" id="HorizontalTabsContent">
            <?php 
                if($tabs){
                    $counter2 = 0;
                    foreach($tabs as $data){
                        $counter2++;
                        $nav_title = $data['nav_title'];
                        $title_content = $data['title_content'];
                        $text_content = $data['text_content'];
                        $secondary_link = $data['secondary_link'];
                        $primary_link = $data['primary_link'];
                        $id_tab = explode(" ", $nav_title);
                        $href = $id_tab[0];
                        $id_tab = $id_tab[0]. '-tab';
                        if($counter2 == 1){
                            ?>
                            <div class="tab-pane fade show active" id="<?php echo $href ?>" role="tabpanel" aria-labelledby="<?php echo $id_tab; ?>">
                                <div class="mobile-toggle-area-hrz-tabs d-lg-none active">
                                    <?php echo $nav_title ? $nav_title : '' ?> <span>></span>
                                </div>
                                <div class="content-area mobile-active">
                                    <?php 
                                        if($title_content){
                                            ?>
                                            <h3 class="title"><?php echo $title_content;?></h3>
                                            <?php
                                        }
                                        if($text_content){
                                            ?>
                                            <div class="text-area">
                                                <?php echo $text_content; ?>
                                            </div>
                                            <?php
                                        }
                                    
                                    ?>

                                    <div class="button-area">
                                    <?php
                                        if($secondary_link){
                                        $secondary_link_url = $secondary_link['url'];
                                        $secondary_link_title = $secondary_link['title'];
                                        $secondary_link_target = $secondary_link['target'] ? $secondary_link['target'] : '_self';
                                            ?>
                                            <a <?php echo $secondary_link_url != '#' ? 'href="'.$secondary_link_url.'"' : ''; ?> target="<?php echo $secondary_link_target; ?>" class="btn btn-secondary"><?php echo $secondary_link_title; ?></a>
                                            <?php
                                        }
                                        if($primary_link){
                                        $primary_link_url = $primary_link['url'];
                                        $primary_link_title = $primary_link['title'];
                                        $primary_link_target = $primary_link['target'] ? $primary_link['target'] : '_self';
                                            ?>
                                            <a <?php echo $primary_link_url != '#' ? 'href="'.$primary_link_url.'"' : ''; ?> target="<?php echo $primary_link_target; ?>" class="btn btn-primary"><?php echo $primary_link_title; ?></a>
                                            <?php
                                        }
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                        } else {
                            ?>
                            <div class="tab-pane fade" id="<?php echo $href ?>" role="tabpanel" aria-labelledby="<?php echo $id_tab; ?>">
                                <div class="mobile-toggle-area-hrz-tabs d-lg-none">
                                    <?php echo $nav_title ? $nav_title : '' ?> <span>></span>
                                </div>
                                <div class="content-area ">
                                    <?php 
                                        if($title_content){
                                            ?>
                                            <h3 class="title"><?php echo $title_content;?></h3>
                                            <?php
                                        }
                                        if($text_content){
                                            ?>
                                            <div class="text-area">
                                                <?php echo $text_content; ?>
                                            </div>
                                            <?php
                                        }
                                    
                                    ?>

                                    <div class="button-area">
                                    <?php
                                        if($secondary_link){
                                        $secondary_link_url = $secondary_link['url'];
                                        $secondary_link_title = $secondary_link['title'];
                                        $secondary_link_target = $secondary_link['target'] ? $secondary_link['target'] : '_self';
                                            ?>
                                            <a <?php echo $secondary_link_url != '#' ? 'href="'.$secondary_link_url.'"' : ''; ?> target="<?php echo $secondary_link_target; ?>" class="btn btn-secondary"><?php echo $secondary_link_title; ?></a>
                                            <?php
                                        }
                                        if($primary_link){
                                        $primary_link_url = $primary_link['url'];
                                        $primary_link_title = $primary_link['title'];
                                        $primary_link_target = $primary_link['target'] ? $primary_link['target'] : '_self';
                                            ?>
                                            <a <?php echo $primary_link_url != '#' ? 'href="'.$primary_link_url.'"' : ''; ?> target="<?php echo $primary_link_target; ?>" class="btn btn-primary"><?php echo $primary_link_title; ?></a>
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