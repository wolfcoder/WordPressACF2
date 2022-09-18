<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$flip_image = get_sub_field("flip_image");
$image = get_sub_field("image");
$breadcrumb = get_sub_field("breadcrumb");
$text_breadcrumb = get_sub_field("text_breadcrumb");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$text_content = wpautop(get_sub_field("text_content"));
$link = get_sub_field("link");



if($id=="")
  $id = "row".get_row_index();



if(!$geometric_background){
  echo '
  <style>
  #'.$id.'.banner-half-img::before {
      background-image: none;
  }
  </style>
  ';
  if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color; ?>" class="banner-half-img">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="banner-half-img-content <?php echo $flip_image ? 'image-left' : '' ?>">
          <!-- add class image-left on banner-half-img-content to set image on left -->
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
            <div class="breadcrumb-area">
              <?php 
                if($text_breadcrumb){
                    ?>
                    <p><?php if($breadcrumb){
                        ?>
                        <a href="<?php echo $breadcrumb['url'] ?>" target="<?php echo $breadcrumb['target'] ?>"><?php echo $breadcrumb['title'] ?></a>
                        <?php
                    } echo $text_breadcrumb ?> </p>
                    <?php
                }
              
              
              ?>

            </div>
            <?php 
                if($black_title_text){
                    ?>
                    <h1><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h1>
                    <?php
                }
            echo $text_content;
            if($link){
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a <?php echo $link && $link_url != '#' ? 'href="'.$link_url.'"' : '' ?> target="<?php echo $link_target; ?>" class="btn btn-primary"><?php echo $link_title ?></a>
                <?php
            }
            ?>  
          </div>
        </div>
      </div>
    </div>
  </div>
</section>