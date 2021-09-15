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
	<?php get_template_part( 'theme-parts/header/pre-header',	cspt_get_base_option('header-style') ); ?>
	<div class="cspt-header-top-area <?php cspt_header_class(); ?> <?php cspt_header_bg_class(); ?> ">
		<div class="container">
			<div class="d-flex align-items-center">
				<div class="site-branding cspt-logo-area">
					<div class="wrap"><?php echo cspt_logo(); ?></div><!-- .wrap -->
				</div><!-- .site-branding -->
				<div class="cspt-header-info ml-auto">
					<div class="cspt-header-info-inner">
						<?php cspt_header_box_contents( array( 'icon'=>'yes' ) ); ?>
						<?php cspt_header_button(); ?>
					</div>
				</div>
				<div class="cspt-mobile-search">
					<?php cspt_header_search(); ?>
				</div>
				<button id="menu-toggle" class="nav-menu-toggle">
					<i class="cspt-base-icon-menu"></i>
				</button>
			</div>
		</div>

		<div class="cspt-header-menu">

			<div class="cspt-header-menu-area-wrapper">
				<div class="cspt-header-menu-area <?php cspt_sticky_class(); ?> cspt-bg-color-<?php echo cspt_get_base_option('menu-bgcolor'); ?> cspt-bg-color-blackish">	
					<div class="container">											
						<div class="cspt-header-menu-area-inner d-flex align-items-center justify-content-between">
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
							<div class="cspt-right-box">	

								<div class="cspt-header-search-form-wrapper">									
									<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
										<label for="cspt-search-input">
											<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'emphires' ); ?></span>
										</label>
										<input type="search" id="cspt-search-input" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'emphires' ); ?>" value="" name="s">
										<button type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'emphires' ); ?></button>
									</form>
								</div>		
								<?php cspt_cart_icon("2"); ?>
							</div>
						</div>
					</div><!-- .cspt-header-menu-area -->
				</div>
			</div><!-- .cspt-header-menu-area-wrapper -->

		</div>

	</div>
</div><!-- .cspt-header-wrapper -->