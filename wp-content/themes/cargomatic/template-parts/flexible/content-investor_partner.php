<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$background_color = get_sub_field("background_color");
$title = get_sub_field("title");
$logos = get_sub_field("logos");
$layout = get_sub_field("layout");



if($id=="")
  $id = "row".get_row_index();

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

$class = '';
if($layout == 'paddtop'){
  $class = 'padding-top';
}


?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color ? $background_color : '' ?>" class="investor-partner <?php echo $class; ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="title-area text-center">
          <?php 
            if($title){
                ?>
                 <h5><?php echo $title; ?></h5>
                <?php
            }
          
          ?>
        </div>
        <div class="logo-area">
          <?php 
            if($logos){
                foreach($logos as $data){
                    $logo = $data['logo'];

                    if($logo){
                        ?>
                        <img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['alt'] ?>" class="img-fluid">
                        <?php
                    }
                }
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>