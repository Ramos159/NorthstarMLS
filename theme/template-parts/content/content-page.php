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
			$page_layout = get_field('page_layout');
			if($page_layout):
				foreach($page_layout as $section):
					$block = str_replace('_','-',$section['acf_fc_layout']);
					get_template_part("/template-parts/content/page-blocks/$block" , '', $section);
				endforeach;
			endif;
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
