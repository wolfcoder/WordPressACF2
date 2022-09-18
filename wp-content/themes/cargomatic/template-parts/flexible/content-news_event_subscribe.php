<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$background_color = get_sub_field("background_color");
$title = get_sub_field("title");
$subtitle = get_sub_field("subtitle");
$subscribe_form = get_sub_field("subscribe_form");



if($id=="")
  $id = "row".get_row_index();

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.news-event-subscribe .subscribe-box {
        background-image: none;
    }
    </style>
    ';
} else {

    echo '
    <style>
    #'.$id.'.news-event-subscribe .subscribe-box {
        background-image: url('.site_url("/").'/wp-content/uploads/2021/03/bg-news-event-subscribe.png);
    }
    </style>
    ';
}

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}
?>
<section id="<?php echo $id; ?>"  class="news-event-subscribe">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="subscribe-box" style="<?php echo $background_color ? $background_color : '' ?>">
          <?php 
            if($title){
                ?>
                <h3><?php echo $title; ?></h3>
                <?php
            }
            if($subtitle){
                ?>
                <h4><?php echo $subtitle; ?></h4>
                <?php
            }
            echo $subscribe_form;
          
          ?>
          <!-- <div class="form-area">
            <div class="input-area">
              <div class="input-box label-placeholder">
                <label for="name">Name</label>
                <input type="text" id="name">
              </div>
              <div class="input-box label-placeholder">
                <label for="email">Email</label>
                <input type="email" id="email">
              </div>
            </div>
            <div class="submit-area">
              <input type="submit" value="Submit" class="btn btn-primary">
            </div>
          </div>
          <p>By submitting this form, you agree you’d like to receive emails about news & updates from Cargomatic.</p> -->
        </div>
      </div>
    </div>
  </div>
</section>