<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$background_color = get_sub_field("background_color");
$background_opacity = get_sub_field("background_opacity");
$image = get_sub_field("image");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$link = get_sub_field("link");
$text_area_align = get_sub_field("text_area_align");
$alignText = '';


if($id=="")
  $id = "row".get_row_index();
if($background_color){
    if(!$background_opacity){
        $background_opacity = '0.2';
    }
    echo '
    <style>
    .text-half {
        background-color: '.$background_color.'; !important
    }
    .text-half-bg::after {
        content: "";
        background: radial-gradient(65% 65% at 50% 50%,rgba(33,60,72,'.$background_opacity.') 0,'.$background_color.' 65%);
    </style>
    ';
}

if($text_area_align == 'right'){
  $alignText = 'justify-content: flex-end';
}

?>
<section id="<?php echo $id ?>" class="text-half">
  <div class="text-half-bg">
    <?php 
        if($image){
            ?>
            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
            <?php
        }
    
    ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-half-content" style="<?php echo $text_area_align &&  $text_area_align == 'right' ? $alignText : '' ?>">
          <div class="text-area">
            <?php 
                if($black_title_text){
                    ?>
                    <h2><?php echo nl2br($black_title_text); echo $green_title_text ? ' <span class="green">with Cargomatic.</span>' : '' ?></h2>
                    <?php
                }

                if($subtitle){
                    ?>
                <h3><?php echo $subtitle ?></h3>
                    <?php
                }
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
      </div>
    </div>
  </div>
</section>