<?php 
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$desktop_background_image = get_sub_field("desktop_background_image");
$mobile_background_image = get_sub_field("mobile_background_image");
$title = get_sub_field("title");
$cta_link = get_sub_field("cta_link");
if($id=="")
  $id = "row".get_row_index();
?>
<section id="<?php echo $id; ?>" class="cta">
  <div class="cta-bg">
    <?php 
    if($desktop_background_image){
        ?>
        <img src="<?php echo $desktop_background_image['url']; ?>" alt="<?php echo $desktop_background_image['alt']; ?>" class="img-fluid d-none d-md-block">
        <?php
    }
    if($mobile_background_image){
        ?>
        <img src="<?php echo $mobile_background_image['url']; ?>" alt="<?php echo $mobile_background_image['alt']; ?>" class="img-fluid d-md-none">
        <?php
    }
    
    ?>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="cta-content">
          <?php 
            if($title){
                ?>
                 <h3><?php echo $title; ?></h3>
                <?php
            }

            if($cta_link){
                $cta_link_url = $cta_link['url'];
                $cta_link_title = $cta_link['title'];
                $cta_link_target = $cta_link['target'] ? $cta_link['target'] : '_self';
                  ?>
                    <a <?php echo $cta_link_url != '#' ? 'href="'.$cta_link_url.'"' : ''; ?> target="<?php echo $cta_link_target; ?>" class="btn btn-primary"><?php echo $cta_link_title; ?></a>
                  <?php
              }
          
          ?>
        </div>
      </div>
    </div>
  </div>
</section>