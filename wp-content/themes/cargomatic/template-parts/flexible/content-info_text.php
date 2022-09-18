<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$background_color = get_sub_field("background_color");
$white_title_text = get_sub_field("white_title_text");
$white_title_color = get_sub_field("white_title_color");
$green_title_text = get_sub_field("green_title_text");
$green_title_color = get_sub_field("green_title_color");
$text_content = get_sub_field("text_content");
$text_content_color = get_sub_field("text_content_color");

if(!$green_title_color){
    $green_title_color = '#00b287';
}




if($id=="")
  $id = "row".get_row_index();

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

?>
<section id="<?php echo $id ?>" style="<?php echo $background_color ? $background_color : '' ?>" class="info-text">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="info-text-content">
          <div class="left-area">
          <?php 
            if($white_title_text){
                ?>
                <h2 style="<?php echo $white_title_color ? 'color:'.$white_title_color.';' : '' ?>"><?php echo $white_title_text; echo $green_title_text ? ' <span style="color:'.$green_title_color.'">'.$green_title_text.'</span' : '' ?> </h2>
                <?php
            }

          
          ?>
          </div>
          <div class="right-area">
            <?php 
            if($text_content_color){
                // $text_content = str_replace('<h6>','<h6 style="color:'.$text_content_color.'">', $text_content);
                $text_content = str_replace('<p>','<p style="color:'.$text_content_color.'">', $text_content);
            }
            echo $text_content;
            
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>