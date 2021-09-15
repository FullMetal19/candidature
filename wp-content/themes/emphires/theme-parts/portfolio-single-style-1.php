<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Emphires
 * @since 1.0
 * @version 1.2
 */
// Class list
$style			= cspt_get_base_option('portfolio-single-style');
$single_style	= get_post_meta( get_the_ID(), 'cspt-portfolio-single-view', true );
if( !empty($single_style) ){ $style = $single_style; }
$class_list		= 'cspt-portfolio-single-style-'.$style;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $class_list ); ?>>
	<div class="cspt-portfolio-single">

		<div class="row">	
			<div class="col-md-8 col-lg-8">							
				<h2 class="cspt-portfolio-heading"><?php echo get_the_title(); ?></h2>
				<?php
				// Short Description
				$short_desc = get_post_meta( get_the_ID(), 'cspt-short-description', true );
				if( !empty($short_desc) ){
					?>
					<div class="cspt-short-description">
						<?php echo do_shortcode($short_desc); ?>
					</div>
					<?php
				}
				?>
			</div>
			<div class="col-md-4 col-lg-4">	
				<?php cspt_portfolio_details_list(); ?>	
			</div>
		</div>	

		<?php cspt_get_featured_data( array( 'featured_img_only' => false, 'size' => 'full' ) ); ?>

		<div class="row">
			<div class="col-md-12">				
				<div class="cspt-entry-content">
					<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						'',
						get_the_title()
					) );
					?>
				</div><!-- .entry-content -->	
			</div>

		</div>
		<?php
		// Prev Next Post Link
		$cpt_name = cspt_get_base_option('portfolio-cpt-singular-title');
		the_post_navigation( array(
			'prev_text' => cspt_esc_kses( '<span class="cspt-portfolio-nav-icon"><i class="cspt-base-icon-left-open"></i></span> <span class="cspt-portfolio-nav-wrapper"><span class="cspt-portfolio-nav-head">' . sprintf( esc_attr__('Previous %1$s', 'emphires') , $cpt_name ) . '</span>' ) . cspt_esc_kses( '<span class="cspt-portfolio-nav nav-title">%title</span> </span>' ),
			'next_text' => cspt_esc_kses( '<span class="cspt-portfolio-nav-wrapper"><span class="cspt-portfolio-nav-head">' . sprintf( esc_attr__('Next %1$s', 'emphires') , $cpt_name ) . '</span>' ) . cspt_esc_kses( '<span class="cspt-portfolio-nav nav-title">%title</span> </span> <span class="cspt-portfolio-nav-icon"><i class="cspt-base-icon-right-open"></i></span>' ),
		) );
		?>
	</div>
</article><!-- #post-## -->
<?php cspt_related_portfolio(); ?>
<?php cspt_edit_link( get_the_ID() ); ?>