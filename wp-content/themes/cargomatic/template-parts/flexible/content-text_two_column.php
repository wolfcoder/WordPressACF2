<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$background_color = get_sub_field("background_color");
$padding_section = get_sub_field("padding_section");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$subtitle = get_sub_field("subtitle");
$left_area_text = wpautop(get_sub_field("left_area_text"));
$right_area_text = wpautop(get_sub_field("right_area_text"));
$link = get_sub_field("link");



if($id=="")
  $id = "row".get_row_index();

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

?>
<section id="<?php echo $id; ?>" class="text-two-column <?php echo $padding_section ? 'section-padding' : '' ?>" style="<?php echo $background_color; ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="text-two-column-content">
            <?php 
             if($black_title_text){
                 ?>
                    <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                 <?php
             }
             if($subtitle){
                 ?>
                <h4><?php echo $subtitle; ?></h4>
                 <?php
             }
            ?>
          <div class="text-column">
            <div class="left-area">
              <?php echo $left_area_text; ?>
            </div>
            <div class="right-area">
              <?php echo $right_area_text; ?>
            </div>
          </div>
          <div class="btn-area text-center">
             <?php 
                if($link){
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a <?php echo $link_url && $link_url != '#' ? 'href="'.$link_url.'"' : '' ?> target="<?php echo $link_target; ?>" class="btn btn-primary"><?php echo $link_title; ?></a>
                    <?php
                }
             ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>