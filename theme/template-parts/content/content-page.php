<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package NorthstarMLS
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div <?php northstarmls_content_class( 'entry-content' ); ?>>
		<?php 
			if(have_rows('page_layout')):
				while(have_rows('page_layout')): the_row();
					get_template_part( '../page-blocks/'.get_row_layout());
				endwhile;
			endif;
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
