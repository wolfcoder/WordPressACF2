<?php
/**
 * The main template file
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package custheme
 */


get_header();

while ( have_posts() ) :
	the_post();
	if ( have_rows( 'content' ) ):
		while ( have_rows( 'content' ) ) : the_row();
//			get_template_part( "template-parts/flexible/content", get_row_layout() );
			if ( get_row_layout() == 'column_section' ):
				get_template_part('parts/section' ,'columns');
			endif;
		endwhile;
	endif;
endwhile; // End of the loop.

get_footer();
