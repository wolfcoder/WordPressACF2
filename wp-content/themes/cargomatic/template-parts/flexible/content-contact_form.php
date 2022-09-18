<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$contact_links = get_sub_field("contact_links");
$form = get_sub_field("form");

if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.contact-form::after {
        background-image: none;
    }
    </style>
    ';
}
if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color ? $background_color : '' ?>" class="contact-form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="contact-link">
          <?php 
            if($contact_links){
                foreach($contact_links as $data){
                    $href = $data['link'];
                    $icon = $data['icon_box'];
                    $icon_active = $data['icon_active'];
                    $text_content = $data['text_content'];
                    ?>
                    <div class="link-box">
                        <a <?php echo $href && $href['url'] != '#' ? 'href="'.$href["url"].'"' : '' ?> target="<?php echo $href['target'] ? $href['target'] : '_self' ?>" class="stretched-link"><span class="sr-only">link <?php echo $text_content ?></span></a>
                        <div class="icon-area">
                            <?php 
                                if($icon){
                                    ?>
                                    <img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" class="img-fluid inactive">
                                    <?php
                                }
                                if($icon_active){
                                    ?>
                                    <img src="<?php echo $icon_active['url'] ?>" alt="<?php echo $icon_active['alt'] ?>" class="img-fluid active">
                                    <?php
                                }
                            
                            ?>
                        </div>
                        <?php echo $text_content ?>
                    </div>
                    <?php
                }
            }
          
          ?>
        </div>
        <div class="contact-form-content">
          <?php echo $form ?>
        </div>
      </div>
    </div>
  </div>
</section>