<?php
/**
 *
 * @package WordPress
 * @subpackage Emphires
 * @since 1.0
 * @version 1.0
 */
?>
<div class="<?php cspt_header_class(); ?>">
	<?php get_template_part( 'theme-parts/header/pre-header', cspt_get_base_option('header-style') ); ?>
	<div class="cspt-header-top-area ">
		<div class="container">
			<div class="d-flex">
				<div class="col-lg-3">
					<div class="cspt-header-info">
						<div class="cspt-header-info-inner align-items-center d-flex">
							<?php cspt_header_box('1', 'cspt-left-icon'); ?>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="site-branding cspt-logo-area">
						<div class="wrap"><?php echo cspt_logo(); ?></div><!-- .wrap -->
					</div>
				</div><!-- .site-branding -->
				<div class="col-lg-3">
					<div class="cspt-header-info">
						<div class="cspt-header-info-inner align-items-center d-flex justify-content-end text-right">									
							<?php cspt_header_box('2', 'cspt-right-icon'); ?>
						</div>
					</div>
				</div>
				<div class="cspt-mobile-search">
					<?php cspt_header_search(); ?>
				</div>
				<button id="menu-toggle" class="nav-menu-toggle">
					<i class="cspt-base-icon-menu-1"></i>
				</button>
			</div>
		</div>
		<div class="cspt-header-menu-area-wrapper">
			<div class="cspt-header-menu-area <?php cspt_sticky_class(); ?> cspt-bg-color-<?php echo cspt_get_base_option('menu-bgcolor'); ?>">	
				<div class="container">											
					<div class="cspt-header-menu-area-inner d-flex align-items-center justify-content-center">
						<?php if ( has_nav_menu( 'creativesplanet-top' ) ) : ?>
						<div class="navigation-top">
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
						<?php endif; ?>
						<div class="cspt-right-side">
							<?php cspt_header_search(); ?>
							<?php cspt_cart_icon("2"); ?>									
							<?php cspt_header_button(); ?>
						</div>
					</div>
				</div><!-- .cspt-header-menu-area -->
			</div>
		</div><!-- .cspt-header-menu-area-wrapper -->
	</div>
</div><!-- .cspt-header-wrapper -->
