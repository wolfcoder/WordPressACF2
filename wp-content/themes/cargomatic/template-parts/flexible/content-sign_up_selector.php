<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$left_area_background = get_sub_field("left_area_background");
$left_area_background_color = get_sub_field("left_area_background_color");
$left_area_background_color_opacity = get_sub_field("left_area_background_color_opacity");
$left_area_text_content = get_sub_field("left_area_text_content");
$left_area_link = get_sub_field("left_area_link");
$right_area_background = get_sub_field("right_area_background");
$right_area_background_color = get_sub_field("right_area_background_color");
$right_area_background_color_opacity = get_sub_field("right_area_background_color_opacity");
$right_area_text_content = get_sub_field("right_area_text_content");
$link = get_sub_field("link");



if($id=="")
  $id = "row".get_row_index();

function hex2rgb($hex) {
  $hex = str_replace("#", "", $hex);

    if(strlen($hex) == 3) {
    $r = hexdec(substr($hex,0,1).substr($hex,0,1));
    $g = hexdec(substr($hex,1,1).substr($hex,1,1));
    $b = hexdec(substr($hex,2,1).substr($hex,2,1));
  } else {
    $r = hexdec(substr($hex,0,2));
    $g = hexdec(substr($hex,2,2));
    $b = hexdec(substr($hex,4,2));
  }
  return $r .','. $g .','. $b; // RETURN ARRAY INSTEAD OF STRING
}


if($left_area_background_color){
    if(!$left_area_background_color_opacity){
        $left_area_background_color_opacity = '0.85';
    }
    $left_area_background_color = hex2rgb($left_area_background_color);
    echo'
    <style>
    #'.$id.'.sign-up-selector .content-area .left-area .bg-area::after {
        background: linear-gradient(0deg,rgba('.$left_area_background_color.','.$left_area_background_color_opacity.'),rgba('.$left_area_background_color.','.$left_area_background_color_opacity.'));
    }
    </style>
    ';
}

if($right_area_background_color){
    if(!$right_area_background_color_opacity){
        $right_area_background_color_opacity = '0.85';
    }
    $right_area_background_color = hex2rgb($right_area_background_color);

    echo'
    <style>
    #'.$id.'.sign-up-selector .content-area .right-area .bg-area::after {
        background: linear-gradient(0deg,rgba('.$right_area_background_color.','.$right_area_background_color_opacity.'),rgba('.$right_area_background_color.','.$right_area_background_color_opacity.'));
    }
    </style>
    ';
}

?>
<section id="<?php echo $id; ?>" class="sign-up-selector">
  <div class="content-area">
    <div class="left-area text-center">
      <div class="bg-area">
        <?php 
            if($left_area_background){
                ?>
                <img src="<?php echo $left_area_background['url'] ?>" alt="<?php echo $left_area_background['alt'] ?>" class="img-fluid">
                <?php
            }
        
        ?>
      </div>
      <?php 
        echo $left_area_text_content;
        if($left_area_link){
            $left_area_link_url = $left_area_link['url'];
            $left_area_link_title = $left_area_link['title'];
            $left_area_link_target = $left_area_link['target'] ? $left_area_link['target'] : '_self';
            ?>
            <a <?php echo $left_area_link_url != '#' ? 'href="'.$left_area_link_url.'"' : ''; ?> target="<?php echo $left_area_link_target; ?>" class="btn btn-primary"><?php echo $left_area_link_title; ?></a>
            <?php
        }
      ?>
    </div>
    <div class="right-area text-center">
      <div class="bg-area">
        <?php 
            if($right_area_background){
                ?>
                <img src="<?php echo $right_area_background['url'] ?>" alt="<?php echo $right_area_background['alt'] ?>" class="img-fluid">
                <?php
            }
        
        ?>
      </div>
      <?php 
        echo $right_area_text_content;
        if($link){
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a <?php echo $link_url != '#' ? 'href="'.$link_url.'"' : ''; ?> target="<?php echo $link_target; ?>" class="btn btn-primary"><?php echo $link_title; ?></a>
            <?php
        }
      ?>
    </div>
  </div>
</section>