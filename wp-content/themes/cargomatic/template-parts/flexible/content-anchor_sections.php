<?php
$themeurl = get_stylesheet_directory_uri();
$siteurl = get_option("siteurl");
$id = "";
$geometric_background = get_sub_field("geometric_background");
$black_title_text = get_sub_field("black_title_text");
$green_title_text = get_sub_field("green_title_text");
$image_box_with_text = get_sub_field("image_box_with_text");
$background_color = get_sub_field("background_color");


if($id=="")
  $id = "row".get_row_index();

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.half-image::before {
        background-image: none;
    }
    </style>
    ';
}

?>
<section id="<?php echo $id; ?>" style="<?php echo $background_color ? $background_color : ''; ?>" class="half-image">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="half-image-content">
            <?php 
                if($black_title_text){
                    ?>
                    <h2><?php echo $black_title_text; echo $green_title_text ? ' <span class="green">'.$green_title_text.'</span>' : '' ?></h2>
                    <?php
                }

                if($image_box_with_text){
                  $counter = 0;
                  foreach($image_box_with_text as $data){
                    $counter++;
                    $idBox = $data['id'];
                    $image = $data['image'];
                    $description = $data['description'];
                    $flip = $data['flip_image'];
                      ?>
                      <div class="anchor" id="<?php echo $idBox ? $idBox : '' ?>"></div>
                        <div class="half-image-box <?php echo $flip ? 'image-right' : '' ?>">
                        <!-- add class image-right on half-image-box for image position on right -->
                        <div class="img-area">
                          <?php 
                            if($image){
                              ?>
                              <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
                              <?php
                            }
                          
                          ?>
                        </div>
                        <div class="text-area">
                          <?php echo $description;?>
                          
                        </div>
                      </div>
                      <?php
                    

                  }
                }
            ?>
        </div>
      </div>
    </div>
  </div>
</section>