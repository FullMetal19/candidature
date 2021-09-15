<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package WordPress
 * @subpackage Emphires
 * @since 1.0
 * @version 1.2
 */
$footer_show_social		= cspt_get_base_option('footer-show-social');
$footer_show_menu		= cspt_get_base_option('footer-show-menu');
$footer_widget_columns	= cspt_footer_widget_columns(); // array
$widget_exists			= $footer_widget_columns[0];
$footer_columns			= $footer_widget_columns[1];
$footer_column			= $footer_widget_columns[2];
// Footer social and menu
$footer_column_class = '';
$social_html = '';
if( $footer_show_social==true ){
	$social_html = do_shortcode('[cspt-social-links]');
}
$menu_html = '';
if( $footer_show_menu==true && has_nav_menu('creativesplanet-footer') ){
	ob_start();
	wp_nav_menu( array(
		'theme_location' => 'creativesplanet-footer',
		'menu_id'        => 'cspt-footer-menu',
		'menu_class'     => 'cspt-footer-menu',
	) );
	$menu_html = ob_get_contents();
	ob_end_clean();
}
?>
				<?php if( cspt_check_sidebar() == true ){ ?>
					</div><!-- .row -->
				<?php } ?>
				</div><!-- #content -->
			</div><!-- .site-content-wrap -->
		<footer id="colophon" class="site-footer <?php cspt_footer_classes(); ?>">
			<?php cspt_footer_big_text_area(); ?>
			<?php if( $widget_exists==true ) : ?>
			<div class="footer-wrap cspt-footer-widget-area <?php cspt_footer_widget_classes(); ?>">
				<div class="container">
					<div class="row">
						<?php 
						$col = 1;
						foreach( $footer_columns as $column ){
							$class = ( $footer_column == '3-3-3-3' ) ? 'col-md-6 col-lg-3' : 'col-md-'.$column ;
							if ( is_active_sidebar( 'cspt-footer-'.$col ) ) { ?>
								<div class="cspt-footer-widget cspt-footer-widget-col-<?php echo esc_attr($col); ?> <?php echo esc_attr($class); ?>">
									<?php dynamic_sidebar( 'cspt-footer-'.$col ); ?>
								</div><!-- .cspt-footer-widget -->
							<?php };
							$col++;
						} // end foreach
						?>
					</div><!-- .row -->
				</div>	
			</div>
			<?php endif; ?>
			<div class="cspt-footer-text-area <?php cspt_footer_copyright_classes(); ?>">
				<div class="container">
					<div class="cspt-footer-text-inner">
						<div class="row">
							<?php if( !empty($social_html) && !empty($menu_html) ) : ?>
								<?php $footer_column_class = 'col-md-4'; ?>
								<div class="cspt-footer-copyright col-md-4">
							<?php elseif( !empty($social_html) || !empty($menu_html) ) : ?>
								<?php $footer_column_class = 'col-md-6'; ?>
								<div class="cspt-footer-copyright col-md-6">
							<?php else : ?>
								<div class="cspt-footer-copyright col-md-12 text-center">
							<?php endif; ?>
								<div class="cspt-footer-copyright-text-area">
									<?php
									$footer_column  = cspt_get_base_option('copyright-text');
									echo cspt_esc_kses($footer_column);
									?>
								</div>
							</div>
							<?php if( !empty($social_html) ) : ?>
							<div class="cspt-footer-social-area <?php echo esc_attr($footer_column_class); ?>">
								<?php echo cspt_esc_kses($social_html); ?>
							</div>
							<?php endif; ?>
							<?php if( !empty($menu_html) ) : ?>
							<div class="cspt-footer-menu-area <?php echo esc_attr($footer_column_class); ?>">
								<?php echo cspt_esc_kses($menu_html); ?>
							</div>
							<?php endif; ?>
						</div>
					</div>	
					<a href="#" class="scroll-to-top"><i class="cspt-base-icon-arrow-right"></i></a>
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
