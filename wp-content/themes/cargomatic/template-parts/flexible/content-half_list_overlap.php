<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$description = wpautop(get_sub_field("description"));
$link = get_sub_field("link");
$flip_image = get_sub_field("flip_image");
$images = get_sub_field("images");



if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.half-list-overlap::before {
        background-image: none;
    }
    </style>
    ';
}
if($background_color){
    echo '
    <style>
    #'.$id.' .half-list-overlap-content .left-area .title-area::before{
        background-color: '.$background_color.';
    }
    </style>
    ';
    $background_color = 'background-color: '.$background_color.';';
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color ? $background_color : '' ?>" class="half-list-overlap">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="half-list-overlap-content">
             <?php 
                $description = str_replace('<p>','<p class="green">', $description);
                if($flip_image){
                    ?>
                    <div class="right-area">
                        <?php 
                        if($images){
                            ?>
                            <img src="<?php echo $images['url'] ?>" alt="<?php echo $images['alt'] ?>" class="img-fluid">
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
                        <div class="list-area">
                            <?php echo $description; 
                            if($link){
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a <?php echo $link_url != '#' ? 'href="'.$link_url.'"' : '' ?> target="<?php echo $link_target ?>" class="btn btn-primary"><?php echo $link_title ?></a>
                                <?php
                            }
                            
                            
                            ?>
                        </div>
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
                        <div class="list-area">
                            <?php echo $description; 
                            if($link){
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a <?php echo $link_url != '#' ? 'href="'.$link_url.'"' : '' ?> target="<?php echo $link_target ?>" class="btn btn-primary"><?php echo $link_title ?></a>
                                <?php
                            }
                            
                            
                            ?>
                        </div>
                    </div>
                    <div class="right-area">
                        <?php 
                        if($images){
                            ?>
                            <img src="<?php echo $images['url'] ?>" alt="<?php echo $images['alt'] ?>" class="img-fluid">
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