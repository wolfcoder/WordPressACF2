<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$description = get_sub_field("description");
$right_image_area = get_sub_field("right_image_area");
$flip_image = get_sub_field("flip_image");
$bottom_description = get_sub_field("bottom_description");
$link = get_sub_field("link");


if($id=="")
  $id = "row".get_row_index();



if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.two-column-overlap::before {
        background-image: none;
    }
    </style>
    ';
    if($background_color){
        echo'
        <style>
        #'.$id.' .two-column-overlap-content .left-area .title-area {
            background-color: '.$background_color.';
        }
        </style>
        ';
        $background_color = 'background-color: '.$background_color.';';
    }
}

?>
<section id="<?php echo $id ?>" class="two-column-overlap" style="<?php echo $background_color ? $background_color : ''; ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="two-column-overlap-content">
            <?php 
                if($flip_image){
                    
                    ?>
                    <div class="right-area">
                        <?php
                        if($right_image_area){
                            ?>
                            <img src="<?php echo $right_image_area['url'] ?>" alt="<?php echo $right_image_area['alt'] ?>" class="img-fluid">
                            <?php
                        }
                        echo $bottom_description;
                        if($link){
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a <?php echo $link_url != '#' ? 'href="'.$link_url.'"' : '' ?> target="<?php echo $link_target ?>" class="btn btn-primary mt-3"><?php echo $link_title ?></a>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="left-area">
                        <div class="title-area">
                        <?php
                            if($black_title_text){
                                ?>
                                <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                                <?php
                            }
                            if($subtitle){
                                ?>
                                <h3><?php echo $subtitle; ?></h3>
                                <?php
                            }
                        ?>
                        </div>
                        <?php 
                         echo str_replace('<p>','<p class="pr-lg-3">',$description);

                        ?>
                    </div>

                    <?php
                } else {
                    ?>
                    <div class="left-area">
                        <div class="title-area">
                        <?php
                            if($black_title_text){
                                ?>
                                <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                                <?php
                            }
                            if($subtitle){
                                ?>
                                <h3><?php echo $subtitle; ?></h3>
                                <?php
                            }

                        ?>
                        </div>
                        <?php 
                         echo str_replace('<p>','<p class="pr-lg-3">',$description);

                        ?>
                    </div>
                    <div class="right-area">
                        <?php
                        if($right_image_area){
                            ?>
                            <img src="<?php echo $right_image_area['url'] ?>" alt="<?php echo $right_image_area['alt'] ?>" class="img-fluid">
                            <?php
                        }
                        echo $bottom_description;
                        if($link){
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                            ?>
                            <a <?php echo $link_url != '#' ? 'href="'.$link_url.'"' : '' ?> target="<?php echo $link_target ?>" class="btn btn-primary mt-3"><?php echo $link_title ?></a>
                            <?php
                        }
                        ?>
                    </div>
                    <?php
                }

            
            ?>
        </div>
      </div>
    </div>
  </div>
</section>