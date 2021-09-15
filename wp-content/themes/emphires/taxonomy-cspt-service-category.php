<?php
/**
 * The template for displaying category pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Emphires
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>
<div id="primary" class="content-area <?php if( cspt_check_sidebar() ) { ?>col-md-9 col-lg-9<?php } ?>">
	<main id="main" class="site-main">
		<?php
		// Term Description
		$desc = term_description();
		if( !empty($desc) ){
			?>
			<div class="cspt-term-desc">
				<?php echo do_shortcode( $desc ); ?>
			</div>
			<?php
		}
		?>
		<?php
		$atts = array();
		$atts['style']	= cspt_get_base_option('service-cat-style');
		$atts['style']	= str_replace('style-','', $atts['style'] );
		$atts['column']	= cspt_get_base_option('service-cat-column');
		$atts['show']	= cspt_get_base_option('service-cat-count');
		// Starting container
		echo creativesplanet_element_container( array(
			'position'	=> 'start',
			'cpt'		=> 'service',
			'data'		=> $atts
		) );
		?>
		<?php
		if ( have_posts() ) :
			$style		= cspt_get_base_option('service-cat-style');
			$column		= cspt_get_base_option('service-cat-column');
			$style		= str_replace('style-','', $style );
			?>
			<div class="cspt-element-cat-wrapper row multi-columns-row">
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();
				// Icon
				$icon_html = '';
				$icon_lib = get_post_meta( get_the_ID(), 'cspt-service-icon-library', true );
				$icon_class = get_post_meta( get_the_ID(), 'cspt-service-icon-'.$icon_lib, true );
				if( !empty($icon_class) ){ 
					wp_enqueue_style($icon_lib);
					$icon_html = '<i class="'.esc_attr($icon_class).'"></i>';
				}
				$more_text	= esc_attr__('More Details','emphires'); // Show
				if( file_exists( get_template_directory() . '/theme-parts/service/service-style-'.$style.'.php' ) ){
					echo cspt_element_block_container( array(
						'position'	=> 'start',
						'column'	=> $column,
						'cpt'		=> 'service',
					) );
					// calling template
					include( get_template_directory() . '/theme-parts/service/service-style-'.$style.'.php' );
					echo cspt_element_block_container( array(
						'position'	=> 'end',
					) );
				} else {
					echo '<!-- Template file not found -->';
				}
				?>
				<?php
			endwhile;
			?>
			<?php
			// Ending wrapper of the whole arear
			echo creativesplanet_element_container( array(
				'position'	=> 'end',
				'cpt'		=> 'service',
				'data'		=> $atts
			) );
			?>
			<?php
			/* Restore original Post Data */
			wp_reset_postdata();
			?>
			</div><!-- .cspt-element-cat-wrapper row multi-columns-row -->
			<?php
			// Pagination
			cspt_pagination();
		else :
			get_template_part( 'template-parts/post/content', 'none' );
		endif;
		?>
	</main><!-- #main -->
</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer();
