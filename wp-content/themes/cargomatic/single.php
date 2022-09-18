<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cargomatic
 */

get_header();



global $wp;

// get current url with query string.
$current_url =  home_url( $wp->request ); 

$header = get_field('header');
$background_color = get_field('background_color');
$geometric_background = get_field('geometric_background');
// $breadcrumb = get_field('breadcrumb');
$post_image = get_field('post_image');
$background_color_cta = get_field('background_color', 'option');
$geometric_background_cta = get_field('geometric_background', 'option');
$title = get_field('title', 'option');
$subtitle = get_field('subtitle', 'option');
$subscribe_form = get_field('subscribe_form', 'option');
if(!$geometric_background){
    echo '
    <style>
    #'.$id.'.page-banner-image::before {
        background-image: none;
    }
    </style>
    ';
} 

if($background_color){
    $background_color = 'background-color: '.$background_color.';';
}

if(!$geometric_background_cta){
    echo '
    <style>
    .news-event-subscribe .subscribe-box {
        background-image: none;
    }
    </style>
    ';
} else {

    echo '
    <style>
    .news-event-subscribe .subscribe-box {
        background-image: url('.site_url("/").'/wp-content/uploads/2021/03/bg-news-event-subscribe.png);
    }
    </style>
    ';
}

$post_bread = wp_get_object_terms(get_the_ID(), 'category', array('fields'=>'names'));

if($background_color_cta){
    $background_color_cta = 'background-color: '.$background_color_cta.';';
}
?>
	<main id="primary" class="site-main">
		<?php 
			if($header){
				?>
		    <section id="<?php echo $id; ?>" style="<?php echo $background_color; ?>" class="page-banner-image"> 
				<div class="container">
					<div class="row">
					<div class="col-12">
						<div class="page-banner-image-content">
						<div class="breadcrumb-text">
							
							<h1>News & Events <?php echo $post_bread ?  '> '. $post_bread[0] : '' ?> </h1>
						</div>
						<div class="text-area">
							<h2><?php echo get_the_title(); ?></h2>
							<h3>
								<?php 
									$excerpt = get_the_excerpt();
									$excerpt = substr($excerpt, 0, 100);
									$result = substr($excerpt, 0, strrpos($excerpt, ' '));
									echo $result;
								?>
								
							</h3>
						</div>
						<?php 
							if($post_image==""){
								$image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
								$post_image['url'] = $image;
								$post_image['alt'] = get_the_title();
							}

							if(@$post_image["url"]!=""){
								?>
								<div class="image-area">
									<img src="<?php echo $post_image['url'] ?>" alt="<?php echo $post_image['alt'] ?>" class="img-fluid">
								</div>
								<?php
							}
						?>

						</div>
					</div>
					</div>
				</div>
			</section>
				<?php
			}
		?>

					
						<?php
						while ( have_posts() ) :
							the_post();
							// $content = get_field('post_content', get_the_ID());
							// var_dump($content);
							if( have_rows('post_content') ):
								?>
								<section class="blog-content">
									<div class="container">
										<div class="row">
											<div class="col-12">
														<?php
								while ( have_rows('post_content') ) : the_row();
									if(get_row_layout() == 'event_detail'){
										get_template_part("template-parts/post/content", get_row_layout());

									} else {
										echo '<div class="content-area">';
										echo '<div class="text-area">';
											get_template_part("template-parts/post/content", get_row_layout());
										echo '<div>';
										echo '<div>';
									}
								endwhile;
								?>
								<div class="share-area">
									<h3>Share this article</h3>
									<div class="social-icon">
									<a href="http://www.facebook.com/sharer.php?u=<?php echo $current_url; ?>" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i><span class="sr-only">facebook share</span></a>
									<a href="http://twitter.com/share?url=<?php echo $current_url; ?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i><span class="sr-only">twitter share</span></a>
									<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo $current_url; ?>" target="_blank" class="linkedin"><i class="fab fa-linkedin-in"></i><span class="sr-only">linkedin share</span></a>
									</div>
								</div>
							</div>
					</div>
				</div>
			</section>
									<?php
							endif;

						endwhile; // End of the loop.
						?>
							



	<section class="related-article">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<div class="related-article-content">
				<div class="title-area">
					<h2>Related Articles</h2>
				</div>
				<?php 
				$post_terms = wp_get_object_terms(get_the_ID(), 'category', array('fields'=>'ids'));

				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 2,
					'post__not_in' => array(get_the_ID()),
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field' => 'id',
							'terms' => $post_terms
						)
					)
				);
				$the_query = new WP_Query( $args );
				while ( $the_query->have_posts() ) {
					$the_query->the_post();
					$image = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()));
               		$term_list = wp_get_post_terms( get_the_ID(), 'category', array( 'fields' => 'names' ) );
					?>
					<div class="related-box">
                    <?php 
                        if($image){
                            ?>
                            <div class="image-area">
								<a href="<?php echo get_permalink() ?>">
									<img src="<?php echo $image ?>" alt="image event 1" class="img-fluid">
								</a>
                            </div>
                            <?php
                        }
                    ?>
						<?php 
						if($term_list){
							?>
							<h3 class="category"><?php echo implode(", ",$term_list) ?></h3>
							<?php
						}

						?>
						<h2><a href="<?php echo get_permalink() ?>"><?php echo get_the_title() ?></a></h2>
						<p><?php echo get_the_excerpt() ?></p>
						<a href="<?php echo get_permalink() ?>" class="animated-arrow">Read More</a>
					</div>
					<?php

				}
				wp_reset_postdata();

				?>
				</div>
			</div>
			</div>
		</div>
	</section>

	<section class="news-event-subscribe">
		<div class="container">
			<div class="row">
			<div class="col-12">
				<div style="<?php echo $background_color_cta ? $background_color_cta : '' ?>" class="subscribe-box">
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
				</div>
			</div>
			</div>
		</div>
	</section>

	</main><!-- #main -->

<?php
get_footer();
