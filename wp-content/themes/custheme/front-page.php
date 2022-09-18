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

//$background_image = get_field( "background_image" );

get_header();
get_template_part( 'template-parts/flexible/content', 'work_with_us' );
?>

    <section class="hero" style="background-image:url(<?php echo '' ?>)">

        <div class="hero-caption">
            <h2>We are a leading manufacturer of separators for lead-acid batteries.</h2>
        </div>
    </section>

<?php if ( have_rows( 'content' ) ): ?>
	<?php while ( have_rows( 'content' ) ): the_row(); ?>

		<?php if ( get_row_layout() == 'column_section' ):?>
            <?php get_template_part('parts/section' ,'columns');?>
		<?php endif; ?>

		<?php if ( get_row_layout() == 'textarea_with_image' ):?>
			<?php get_template_part('parts/section' ,'textwithimage');?>
		<?php endif; ?>

        <?php get_template_part('template-parts/flexible','work_with_us') ;?>

	<?php endwhile; ?>
<?php endif; ?>


<?php
get_footer();
