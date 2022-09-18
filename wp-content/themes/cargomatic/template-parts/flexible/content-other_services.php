<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$background_color = get_sub_field("background_color");
$services = get_sub_field("services");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");



if($id=="")
  $id = "row".get_row_index();

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color; ?>" class="other-services">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="other-services-content">
          <div class="title">
            <?php 
                if($black_title_text){
                    ?>
                    <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?> </h2>
                    <?php
                }
            ?>
          </div>
          <div class="services-area">
            <?php 
                if($services){
                    foreach($services as $data){
                        $link = $data['link'];
                        $icon = $data['icon'];
                        $icon_active = $data['icon_active'];
                        $width_icon = $data['width_icon'];
                        $title = $data['title'];
                        ?>
                        <div class="service-box">
                        <a <?php echo $link && $link['url'] != '#' ? 'href="'.$link["url"].'"' : '' ?> target="<?php echo $link['target'] ? $link['target'] : '' ?>">
                            <div class="icon-area">
                                <?php 
                                    if($icon){
                                        ?>
                                        <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="img-fluid inactive" width="<?php echo $width_icon ? $width_icon : '61' ?>px">

                                        <?php
                                    }
                                    if($icon_active){
                                        ?>
                                        <img src="<?php echo $icon_active['url'] ?>" alt="<?php echo $icon_active['alt'] ?>" class="img-fluid active" width="<?php echo $width_icon ? $width_icon : '61' ?>px">
                                        <?php
                                    }
                                
                                ?>
                            </div>
                            <?php 
                                if($title){
                                    echo $title;
                                }
                            
                            ?>
                        </a>
                        </div>
                        <?php
                    }
                }
            
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>