<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Emphires
 * @since 1.0
 * @version 1.0
 */
?>
<?php
$sidebar	= 'cspt-sidebar-post';
$aria_label	= esc_attr__( 'Blog Sidebar', 'emphires' );
if( is_page() ){
	// page sidebar
	$sidebar	= 'cspt-sidebar-page';
	$aria_label	= esc_attr__( 'Page Sidebar', 'emphires' );
	if( function_exists('is_woocommerce') && is_woocommerce() ){
		$sidebar	= 'cspt-sidebar-wc-shop';
		$aria_label	= esc_attr__( 'WooCommerce Sidebar', 'emphires' );
	}
} else if( is_search() ){
	$sidebar	= 'cspt-sidebar-search';
	$aria_label	= esc_attr__( 'Search Results Sidebar', 'emphires' );
} else if( function_exists('is_woocommerce') && is_woocommerce() && !is_product() ){
	$sidebar	= 'cspt-sidebar-wc-shop';
	$aria_label	= esc_attr__( 'WooCommerce Sidebar', 'emphires' );
} else if( function_exists('is_product') && is_product() ){
	$sidebar	= 'cspt-sidebar-wc-single';
	$aria_label	= esc_attr__( 'WooCommerce Sidebar', 'emphires' );
} else if( is_singular('cspt-portfolio') ){
	$sidebar		= 'cspt-sidebar-portfolio';
	$aria_label		= esc_attr__( 'Portfolio Sidebar', 'emphires' );
} else if( is_tax('cspt-portfolio-category') ){
	$sidebar		= 'cspt-sidebar-portfolio-cat';
	$aria_label		= esc_attr__( 'Portfolio Category Sidebar', 'emphires' );
} else if( is_singular('cspt-service') ){
	$sidebar		= 'cspt-sidebar-service';
	$aria_label		= esc_attr__( 'Service Sidebar', 'emphires' );
} else if( is_tax('cspt-service-category') ){
	$sidebar		= 'cspt-sidebar-service-cat';
	$aria_label		= esc_attr__( 'Service Category Sidebar', 'emphires' );
} else if( is_singular('cspt-team-member') ){
	$sidebar		= 'cspt-sidebar-team';
	$aria_label		= esc_attr__( 'Team Member Sidebar', 'emphires' );
} else if( is_tax('cspt-team-group') ){
	$sidebar		= 'cspt-sidebar-team-group';
	$aria_label		= esc_attr__( 'Team Group Sidebar', 'emphires' );
}
?>
<?php if ( is_active_sidebar( $sidebar ) && cspt_check_sidebar()==true ) : ?>
<aside id="secondary" class="widget-area creativesplanet-sidebar col-md-3 col-lg-3" aria-label="<?php echo esc_attr( $aria_label ); ?>">
	<?php dynamic_sidebar( $sidebar ); ?>
</aside><!-- #secondary -->
<?php endif; ?>