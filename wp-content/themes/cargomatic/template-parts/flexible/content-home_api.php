<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = get_sub_field("section_id");
$background_triangle = get_sub_field("background_triangle");
$background_color = get_sub_field("background_color");
$green_text = get_sub_field("green_text");
$title = get_sub_field("title");
$image_banner = get_sub_field("image_banner");
$image = get_sub_field("image");
$videos = get_sub_field("videos");
$typewritter = get_sub_field("typewritter");
$bottom_text = get_sub_field("bottom_text");
$link = get_sub_field("link");

if($id=="")
  $id = "row".get_row_index();

if(!$background_triangle){
    echo '
    <style>
    #'.$id.'.home-api::before{
        background-image: none;
    }
    </style>
    ';
    if($background_color){
        $background_color = 'background-color:'.$background_color;
    }
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color ?>" class="home-api">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="home-api-content">
        <?php
         if($title) {
              ?>
                <h2><span class="green"><?php echo $green_text; ?></span> <?php echo $title; ?></h2>
              <?php
         }    
            
        ?>
          <div class="media-area">
            <div class="code-area" data-aos="fade-up" data-aos-id="typing">
              <?php
                echo $typewritter;
              
              ?>
            </div>
            <div class="image-area">
                <?php 
                    if($image_banner){
                        if($image){
                            ?>
                            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
                            <?php
                        }
                    } else {
                        echo $videos;
                    }
                
                ?>
            </div>

          </div>
          <div class="text-area">
            <?php 
            if($bottom_text){
                ?>
                <h3><?php echo $bottom_text; ?></h3>
                <?php
            }
            if($link){
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                    <p><a <?php echo $link_url != '#' ? 'href="'.$link_url.'"' : ''; ?> target="<?php echo $link_target; ?>" class="animated-arrow"><?php echo $link_title; ?></a></p>
                  <?php
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>