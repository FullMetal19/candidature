<?php
/**
 *
 * @package WordPress
 * @subpackage Emphires
 * @since 1.0
 * @version 1.0
 */
?>
<?php get_template_part( 'theme-parts/header/pre-header',	cspt_get_base_option('header-style') ); ?>
<div class="cspt-header-height-wrapper">
		<div class="cspt-header-inner <?php cspt_header_class(); ?> <?php cspt_header_bg_class(); ?> <?php cspt_sticky_class(); ?>">
			

				<div class="d-flex justify-content-between align-items-center cspt-header-content">
					<div class="cspt-logo-menuarea">
						<div class="site-branding cspt-logo-area">
							<div class="wrap">
								<!-- Logo area -->
								<?php echo cspt_logo(); ?>
							</div><!-- .wrap -->
						</div><!-- .site-branding -->						
						<!-- Top Navigation Menu -->
						<div class="navigation-top">
							<button id="menu-toggle" class="nav-menu-toggle">								
								<i class="cspt-base-icon-menu"></i>						
							</button>								
							<div class="wrap">
								<nav id="site-navigation" class="main-navigation cspt-navbar <?php cspt_nav_class(); ?>" aria-label="<?php esc_attr_e( 'Top Menu', 'emphires' ); ?>">
									<?php wp_nav_menu( array(
										'theme_location' => 'creativesplanet-top',
										'menu_id'        => 'cspt-top-menu',
										'menu_class'     => 'menu',
									) ); ?>
								</nav><!-- #site-navigation -->
							</div><!-- .wrap -->
						</div><!-- .navigation-top -->
					</div>
					<div class="cspt-right-box"> 
						<?php cspt_header_search(); ?>
						<?php cspt_header_button(); ?>
					</div>
				</div><!-- .justify-content-between -->

		</div><!-- .cspt-header-inner -->
	</div><!-- .cspt-header-height-wrapper -->