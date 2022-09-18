<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custheme
 */

get_header();

?>



<?php if ( have_rows( 'content' ) ): ?>
	<?php while ( have_rows( 'content' ) ): the_row(); ?>

		<?php if ( get_row_layout() == 'hero' ):?>
			<?php get_template_part('template-parts/flexible/content' ,'hero');?>
		<?php endif; ?>
		<?php if ( get_row_layout() == 'featured' ):?>
			<?php get_template_part('template-parts/flexible/content' ,'featured');?>
		<?php endif; ?>


	<?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();

