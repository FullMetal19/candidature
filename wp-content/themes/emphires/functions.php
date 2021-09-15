<?php
/**
 * Emphires functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Emphires
 * @since 1.0
 */
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
if( !function_exists('cspt_theme_setup') ){
function cspt_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/emphires
	 * If you're building a theme based on Emphires, use a find and replace
	 * to change 'emphires' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'emphires', get_template_directory() . '/languages' );
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	/*
	 *  Image size
	 */
	add_image_size( 'cspt-img-600x780', 600, 780, true ); // For Emphires Portfolio
	add_image_size( 'cspt-img-600x800', 600, 800, true ); // For Emphires Portfolio Style 1
	add_image_size( 'cspt-img-770x350', 770, 350, true ); // For Emphires Blog - style3
	add_image_size( 'cspt-img-770x635', 770, 635, true ); // For Emphires Blog - style2
	add_image_size( 'cspt-img-770x500', 770, 500, true ); // For Emphires Blog - style1
	add_image_size( 'cspt-img-770x9999', 770, 9999, false ); // For Client Logos	
	add_image_size( 'cspt-img-770x770', 770, 770, true );
	add_image_size( 'cspt-img-300x300', 300, 300, true );
	add_image_size( 'cspt-img-500x560', 500, 560, true ); // For Emphires Team
	add_image_size( 'cspt-img-800x256', 800, 256, true ); // For Optimize
	/*
	 *  Editor style  
	 */
	add_editor_style();
	// Set the default content width.
	$GLOBALS['content_width'] = 847;
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'creativesplanet-top'		=> esc_attr__( 'Top Menu', 'emphires' ),
		'creativesplanet-footer'	=> esc_attr__( 'Footer Menu', 'emphires' ),
	) );
	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	/*
	 * Add WooCommerce support
	 */
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	
	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
		'status',
		'chat',
	) );
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	// Merlin
	if ( ! class_exists( 'Merlin' ) ) {
		include( get_template_directory() . '/includes/merlin/vendor/autoload.php' );
		include( get_template_directory() . '/includes/merlin/class-merlin.php' );
	}
	include( get_template_directory() . '/includes/merlin-config.php' );
}
}
add_action( 'after_setup_theme', 'cspt_theme_setup' );
if( !function_exists('cspt_init_calls') ){
function cspt_init_calls() {
	include( get_template_directory() . '/includes/core.php' );
	// Meta boxes
	include( get_template_directory() . '/includes/meta-boxes.php' );
}
}
add_action( 'init', 'cspt_init_calls' );
include( get_template_directory() . '/includes/actions.php' );
if( !function_exists('cspt_vc_set_as_theme') ){
function cspt_vc_set_as_theme() {
	vc_set_as_theme();
}
}
add_action( 'vc_before_init', 'cspt_vc_set_as_theme' );
/*
 *  Plugins
 */
require_once get_parent_theme_file_path( '/includes/class-tgm-plugin-activation.php' );
add_action( 'tgmpa_register', 'cspt_register_required_plugins' );
if( !function_exists('cspt_register_required_plugins') ){
function cspt_register_required_plugins() {
	$plugins = array(
		array(
			'name'					=> esc_attr('Slider Revolution'),
			'slug'					=> esc_attr('revslider'),
			'source'				=> get_template_directory() . '/includes/plugins/revslider.zip',
			'version'				=> esc_attr('6.3.5'),
		),
		array(
			'name'					=> esc_attr('WPBakery Page Builder'),
			'slug'					=> esc_attr('js_composer'),
			'source'				=> get_template_directory() . '/includes/plugins/js_composer.zip',
			'required'				=> true,
			'version'				=> esc_attr('6.5.0'),
		),
		array(
			'name'					=> esc_attr('Emphires Theme Addons'),
			'slug'					=> esc_attr('emphires-addons'),
			'source'				=> get_template_directory() . '/includes/plugins/emphires-addons.zip',
			'required'				=> true,
			'version'				=> esc_attr('2.1'),
		),
		array(
			'name'					=> esc_attr('Envato Market'),
			'slug'					=> esc_attr('envato-market'),
			'source'				=> get_template_directory() . '/includes/plugins/envato-market.zip',
			'required'				=> true,
		),
		array(
			'name'					=> esc_attr('CF Post Formats'),
			'slug'					=> esc_attr('cf-post-formats'),
			'source'				=> get_template_directory() . '/includes/plugins/cf-post-formats.zip',
			'required'				=> true,
			'version'				=> esc_attr('1.3.1'),
		),
		array(
			'name'					=> esc_attr('Advanced Custom Fields'),
			'slug'					=> esc_attr('advanced-custom-fields'),
			'required'				=> true,
		),
		array(
			'name'					=> esc_attr('ACF Photo Gallery Field'),
			'slug'					=> esc_attr('navz-photo-gallery'),
			'required'				=> true,
		),
		array(
			'name'					=> esc_attr('Kirki Toolkit'),
			'slug'					=> esc_attr('kirki'),
			'required'				=> true,
		),
		array(
			'name'					=> esc_attr('Breadcrumb NavXT'),
			'slug'					=> esc_attr('breadcrumb-navxt'),
		),
		array(
			'name'					=> esc_attr('MailChimp for WordPress'),
			'slug'					=> esc_attr('mailchimp-for-wp'),
		),
		array(
			'name'					=> esc_attr('Contact Form 7'),
			'slug'					=> esc_attr('contact-form-7'),
		),
		array(
			'name'					=> esc_attr('Widget: as Link, Clone, Background, CSS'),
			'slug'					=> esc_attr('widget-as-link'),
		),
		array(
			'name'					=> esc_attr('WP Job Manager'),
			'slug'					=> esc_attr('wp-job-manager'),
		),
	);
	$config = array(
		'id'           => 'emphires',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);
	tgmpa( $plugins, $config );
}
}
/**
 *  Merlin Message
 */
if( !function_exists('cspt_merlin_message') ){
function cspt_merlin_message() {
	?>
	<div class="cspt-merlin-message-box notice is-dismissible">
		<div class="cspt-merlin-message">
			<div class="cspt-merlin-message-conform">
				<div class="cspt-merlin-message-conform-inner">
					<div class="cspt-merlin-message-conform-i">
						<div class="cspt-merlin-message-conform-col cspt-merlin-message-conform-img">
							<img src="<?php echo get_template_directory_uri() ?>/includes/images/merlin-message.png" />
						</div>
						<div class="cspt-merlin-message-conform-col cspt-merlin-message-conform-text">
							<h3><?php esc_html_e('Are you sure you want to permenently close this wizard?', 'emphires'); ?></h3>
							<p><?php printf( esc_html__('You can start this wizard from %1$s Appearance > Emphires Theme Setup %2$s section', 'emphires') ,cspt_esc_kses('<strong>') ,cspt_esc_kses('</strong>') );  ?></p>
							<div class="cspt-merlin-message-conform-btn">
								<a href="#" class="button button-primary cspt-disable-merlin-message"><?php esc_html_e('Yes close this message', 'emphires'); ?></a>
								&nbsp; &nbsp;
								<a href="#" class="button cspt-disable-merlin-message-cancel"><?php esc_html_e('No, keep this message', 'emphires'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .cspt-merlin-message-conform -->
			<div class="cspt-merlin-message-inner">
				<div class="cspt-merlin-message-logo">
					<img src="<?php echo get_template_directory_uri() ?>/includes/images/logo.png" />
				</div>
				<div class="cspt-merlin-message-vline">
					<div class="cspt-merlin-message-vline-i"></div>
				</div>
				<div class="cspt-merlin-message-text">
					<h2><?php esc_html_e('Emphires Theme Setup Wizard', 'emphires'); ?></h2>
					<p><?php esc_html_e('This Emphires theme comes with one-click setup wizard. This step-by-step wizard will install all required plugins, install child theme, install demo content and also import sliders.', 'emphires'); ?></p>
				</div>
				<div class="cspt-merlin-message-btn">
					<div class="cspt-merlin-message-btn-i">
						<a href="<?php echo admin_url( 'themes.php?page=emphires-wizard' ); ?>" class="button button-primary button-hero load-customize hide-if-no-customize"><?php esc_html_e('Start Theme Setup Wizard', 'emphires'); ?></a>
						<div class="cspt-merlin-message-small"><a href="#"><?php esc_html_e('Permanently disable this message', 'emphires'); ?></a></div>
					</div>
				</div>
				<div class="clear clearfix clr"></div>
			</div><!-- .cspt-merlin-message-inner -->
		</div><!-- .cspt-merlin-message -->
	</div><!-- .notice.is-dismissible -->
	<?php
}
}
if( !function_exists('cspt_merlin_fresh_setup_call') ){
function cspt_merlin_fresh_setup_call(){
	$cspt_merlin_all_done = get_option('cspt-merlin-all-done');
	if( empty($cspt_merlin_all_done) ){
		add_action( 'admin_notices', 'cspt_merlin_message' );
	}
}
}
add_action( 'init', 'cspt_merlin_fresh_setup_call' );
/**
 *  Merlin message disable ajax call
 */
add_action( 'wp_ajax_cspt_remove_merlin_message', 'cspt_remove_merlin_message' );
if( !function_exists('cspt_remove_merlin_message') ){
function cspt_remove_merlin_message() {
	update_option( 'cspt-merlin-all-done', 'yes' );
	echo 'ok';
	wp_die(); // this is required to terminate immediately and return a proper response
}
}
/* Ratings and reviews */
/**
 *  Merlin Message
 */
if( !function_exists('cspt_ratings_message') ){
function cspt_ratings_message() {
	?>
	<div class="cspt-merlin-message-box notice is-dismissible cspt-merlin-ratings-box">
		<div class="cspt-merlin-ratings-box-back-link" style="display:none;"><a href="#"><i class="fa fa-chevron-circle-left"></i> <?php esc_html_e('Back','emphires') ?> </a></div>
		<div class="cspt-merlin-message">
			<!-- Ratings Main Box -->
			<div class="cspt-merlin-message-inner cspt-merlin-ratings-box-main" style="display:block;">
				<div class="cspt-merlin-message-logo">
					<img src="<?php echo get_template_directory_uri() ?>/includes/images/logo.png" />
				</div>
				<div class="cspt-merlin-message-vline">
					<div class="cspt-merlin-message-vline-i"></div>
				</div>
				<div class="cspt-merlin-message-text">
					<h2><?php esc_html_e('Happy with our theme?', 'emphires'); ?></h2>
					<p><?php esc_html_e('We like to know how is your experiance with our theme. If you have any question than you can create ticket on our support site', 'emphires'); ?></p>
				</div>
				<div class="cspt-merlin-message-btn">
					<div class="cspt-merlin-message-btn-1">
						<a href="#" class="button button-primary button-hero load-customize hide-if-no-customize cspt-question-btn"> <i class="fa fa-question-circle"></i> <?php esc_html_e('I have a question or problem', 'emphires'); ?></a>
					</div>
					<div class="cspt-merlin-message-btn-2 cspt-happy-btn-container">
						<a href="#" class="button button-primary button-hero load-customize cspt-happy-btn"> <i class="fa fa-thumbs-o-up"></i> <?php esc_html_e('I am happy with the theme', 'emphires'); ?></a>
					</div>
					<div class="clearfix clear"></div>
					<div class="cspt-merlin-message-small"><a href="#"><?php esc_html_e('Permanently disable this message', 'emphires'); ?></a></div>
				</div>
				<div class="clear clearfix clr"></div>
			</div><!-- .cspt-merlin-message-inner -->
			<!-- Ratings Close Permenetly message -->
			<div class="cspt-merlin-message-conform">
				<div class="cspt-merlin-message-conform-inner">
					<div class="cspt-merlin-message-conform-i">
						<div class="cspt-merlin-message-conform-col cspt-merlin-message-conform-text">
							<h3><?php esc_html_e('Are you sure you want to permenently close this box?', 'emphires'); ?></h3>
							<div class="cspt-merlin-message-conform-btn">
								<a href="#" class="button button-primary cspt-disable-ratings-message"><?php esc_html_e('Yes close this message', 'emphires'); ?></a>
								&nbsp; &nbsp;
								<a href="#" class="button cspt-disable-ratings-message-cancel"><?php esc_html_e('No, keep this message', 'emphires'); ?></a>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .cspt-merlin-message-conform -->
			<!-- Questions or problem box -->
			<div class="cspt-merlin-message-inner cspt-merlin-ratings-box-questions" style="display:none;">
				<div class="cspt-merlin-message-text">
					<h2><?php esc_html_e('Have any question or problem?', 'emphires'); ?></h2>
					<p><?php printf( esc_html__('You can read our theme documents to get how to work with the theme. Still not solved, than feel free to contact us via our support site at %1$s', 'emphires'), cspt_esc_kses('<a href="' . esc_url('https://support.creativesplanet.com') . '" target="_blank">' . esc_url('https://support.creativesplanet.com') . '</a>') ); ?></p>
				</div>
				<div class="cspt-merlin-message-btn">
					<div class="cspt-merlin-message-btn-2 cspt-happy-btn-container cspt-pright-15">
						<a href="<?php echo esc_url('http://emphires-demo.creativesplanet.com/docs/'); ?>" target="_blank" class="button button-primary button-hero load-customize cspt-ratings-doc-btn"> <i class="fa fa-book"></i> <?php esc_html_e('Emphires Theme Documents', 'emphires'); ?></a>
					</div>
					<div class="cspt-merlin-message-btn-2 cspt-happy-btn-container">
						<a href="<?php echo esc_url('https://support.creativesplanet.com/'); ?>" target="_blank" class="button button-primary button-hero load-customize cspt-ratings-support-btn"> <i class="fa fa-question-circle"></i> <?php esc_html_e('Go to creative’s Planet support site', 'emphires'); ?></a>
					</div>
					<div class="clearfix clear"></div>
				</div>
				<div class="clear clearfix clr"></div>
			</div><!-- .cspt-merlin-message-inner -->
			<!-- 5-star ratings box -->
			<div class="cspt-merlin-message-inner cspt-merlin-ratings-box-ratings" style="display:none;">
				<div class="cspt-merlin-message-text">
					<div class="cspt-merlin-message-arrow-area">
						<h2><?php esc_html_e('Glad to hear you like our theme', 'emphires'); ?></h2>
						<p><?php printf( esc_html__('Thanks for your support. Please provide us 5-star ratings. This will help us a lot.
It just take 1 minute. %1$s', 'emphires'), cspt_esc_kses('<a href="' . esc_url('https://themeforest.net/downloads') . '" target="_blank">'.esc_html__('Click here to go for review now','emphires').'</a>') ); ?></p>
					</div>
				</div>
				<div class="cspt-merlin-5star-right-area">
					<img src="<?php echo get_template_directory_uri(); ?>/includes/images/ratings-steps.png" alt="<?php esc_attr_e( 'Ratings Steps', 'emphires' ); ?>" />
				</div>
				<div class="clear clearfix clr"></div>
			</div><!-- .cspt-merlin-message-inner -->
		</div><!-- .cspt-merlin-message -->
	</div><!-- .notice.is-dismissible -->
	<?php
}
}
if( !function_exists('cspt_ratings_call') ){
function cspt_ratings_call(){
	$show_date = get_option('cspt-ratingsbox-show-date');
	if( empty($show_date) ){
		$nextWeek = time() + (7 * 24 * 60 * 60); // One week..
		$nextWeek = strval( $nextWeek );
		update_option('cspt-ratingsbox-show-date', $nextWeek);
	} else {
		$cspt_ratings_done	= get_option('cspt-ratings-done');
		$nextWeek			= get_option('cspt-ratingsbox-show-date');
		$curr_date			= time();
		if( $nextWeek < $curr_date && empty($cspt_ratings_done) ){
			add_action( 'admin_notices', 'cspt_ratings_message' );
		}
	}
}
}
add_action( 'init', 'cspt_ratings_call' );
/**
 *  Ratings message disable ajax call
 */
add_action( 'wp_ajax_cspt_remove_ratings_message', 'cspt_remove_ratings_message' );
if( !function_exists('cspt_remove_ratings_message') ){
function cspt_remove_ratings_message() {
	update_option( 'cspt-ratings-done', 'yes' );
	echo 'ok';
	wp_die(); // this is required to terminate immediately and return a proper response
}
}
