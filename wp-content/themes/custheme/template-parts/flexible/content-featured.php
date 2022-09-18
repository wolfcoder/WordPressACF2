<?php
$featured_item = get_sub_field('featured_item');

?>

<section class="featured" data-aos="fade">
	<?php foreach($featured_item as $item):
        $link = $item['link']
    ?>

        <a href="<?php echo $link['url']; ?>" class="featured-list" style="background-image:url(<?php echo $item['image']; ?>)">
            <div class="featured-caption">
                <h2><?php echo $item['title']; ?>
                Learn More <span class="float-right"><i class="fa fa-arrow-right"></i></span>
            </div>
        </a>
	<?php endforeach ?>
</section>


