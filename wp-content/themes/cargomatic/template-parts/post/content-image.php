<?php 
$image = get_sub_field("image");
$caption = get_sub_field("caption");


if($image){
    if($caption){
        ?>
<div class="img-with-caption">
              <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
              <p><?php echo $caption; ?></p>
</div>
        <?php
    } else {
        ?>
                      <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" class="img-fluid">
        <?php
    }
}
?>
