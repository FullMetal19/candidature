<?php
if ( ! class_exists( 'Merlin' ) ) {
	return;
}
function creativesplanet_merlin_local_import_files() {
	return array(
		/*
		1. Nutrition
		2. Diet
		3. Organic Food
		4. Organic Farm
		*/
		array(  // 1. Demo 1
			'import_file_name'             => esc_attr__('Demo Content - 1st Demo', 'emphires'),
			'local_import_file'            => WP_PLUGIN_DIR . '/emphires-addons/demo-content/content.xml',
			'local_import_widget_file'     => WP_PLUGIN_DIR . '/emphires-addons/demo-content/widgets.wie',
			'local_import_customizer_file' => WP_PLUGIN_DIR . '/emphires-addons/demo-content/customizer-demo-1.dat',
			'import_preview_image_url'     => get_template_directory_uri() . '/includes/images/demo-demo-1.jpg',
			'import_notice'                => esc_attr__( 'This will setup your site same as our Demo 1 site.', 'emphires' ),
			'preview_url'                  => esc_url('http://emphires-demo.creativesplanet.com/demo1/'),
		),
		array(  // 2. Demo 2
			'import_file_name'             => esc_attr__('Demo Content - 2nd Demo', 'emphires'),
			'local_import_file'            => WP_PLUGIN_DIR . '/emphires-addons/demo-content/content.xml',
			'local_import_widget_file'     => WP_PLUGIN_DIR . '/emphires-addons/demo-content/widgets.wie',
			'local_import_customizer_file' => WP_PLUGIN_DIR . '/emphires-addons/demo-content/customizer-demo-2.dat',
			'import_preview_image_url'     => get_template_directory_uri() . '/includes/images/demo-demo-2.jpg',
			'import_notice'                => esc_attr__( 'This will setup your site same as our Demo 2 site.', 'emphires' ),
			'preview_url'                  => esc_url('http://emphires-demo.creativesplanet.com/demo2/'),
		),
		array(  // 3. Demo 3
			'import_file_name'             => esc_attr__('Demo Content - 3rd Demo', 'emphires'),
			'local_import_file'            => WP_PLUGIN_DIR . '/emphires-addons/demo-content/content.xml',
			'local_import_widget_file'     => WP_PLUGIN_DIR . '/emphires-addons/demo-content/widgets.wie',
			'local_import_customizer_file' => WP_PLUGIN_DIR . '/emphires-addons/demo-content/customizer-demo-3.dat',
			'import_preview_image_url'     => get_template_directory_uri() . '/includes/images/demo-demo-3.jpg',
			'import_notice'                => esc_attr__( 'This will setup your site same as our Demo 3 site.', 'emphires' ),
			'preview_url'                  => esc_url('http://emphires-demo.creativesplanet.com/demo3/'),
		),
		array(  // 4. Demo 4
			'import_file_name'             => esc_attr__('Demo Content - 4th Demo', 'emphires'),
			'local_import_file'            => WP_PLUGIN_DIR . '/emphires-addons/demo-content/content.xml',
			'local_import_widget_file'     => WP_PLUGIN_DIR . '/emphires-addons/demo-content/widgets.wie',
			'local_import_customizer_file' => WP_PLUGIN_DIR . '/emphires-addons/demo-content/customizer-demo-4.dat',
			'import_preview_image_url'     => get_template_directory_uri() . '/includes/images/demo-demo-4.jpg',
			'import_notice'                => esc_attr__( 'This will setup your site same as our Demo 4 site.', 'emphires' ),
			'preview_url'                  => esc_url('http://emphires-demo.creativesplanet.com/demo4/'),
		),
		array(  // 5. Demo 5
			'import_file_name'             => esc_attr__('Demo Content - 5th Demo', 'emphires'),
			'local_import_file'            => WP_PLUGIN_DIR . '/emphires-addons/demo-content/content.xml',
			'local_import_widget_file'     => WP_PLUGIN_DIR . '/emphires-addons/demo-content/widgets.wie',
			'local_import_customizer_file' => WP_PLUGIN_DIR . '/emphires-addons/demo-content/customizer-demo-5.dat',
			'import_preview_image_url'     => get_template_directory_uri() . '/includes/images/demo-demo-5.jpg',
			'import_notice'                => esc_attr__( 'This will setup your site same as our Demo 5 site.', 'emphires' ),
			'preview_url'                  => esc_url('http://emphires-demo.creativesplanet.com/demo5/'),
		),
	);
}
add_filter( 'merlin_import_files', 'creativesplanet_merlin_local_import_files' );

/**
 * Execute custom code after the whole import has finished.
 */
function cspt_merlin_after_import_setup( $selected_import_index ) {
	$main_menu   = get_term_by( 'name', esc_attr('Main Menu'), 'nav_menu' );
	$footer_menu = get_term_by( 'name', esc_attr('Footer Menu'), 'nav_menu' );
	set_theme_mod(
		'nav_menu_locations', array(
			'creativesplanet-top'		=> $main_menu->term_id,
			'creativesplanet-footer'	=> $footer_menu->term_id,
		)
	);
	$blog_page_id  = get_page_by_title( 'Blog Classic' );
	if( !empty($blog_page_id->ID) ){ update_option( 'page_for_posts', $blog_page_id->ID ); }
	if( $selected_import_index == '0' ){        // 1. Demo 1
		$front_page_id = get_page_by_title( 'Homepage 01' );
		update_option( 'show_on_front', 'page' );
		if( !empty($front_page_id->ID) ){ update_option( 'page_on_front', $front_page_id->ID ); }
	} else if( $selected_import_index == '1' ){ // 2. Demo 2
		$front_page_id = get_page_by_title( 'Homepage 02' );
		update_option( 'show_on_front', 'page' );
		if( !empty($front_page_id->ID) ){ update_option( 'page_on_front', $front_page_id->ID ); }
	} else if( $selected_import_index == '2' ){ // 3. Demo 3
		$front_page_id = get_page_by_title( 'Homepage 03' );
		update_option( 'show_on_front', 'page' );
		if( !empty($front_page_id->ID) ){ update_option( 'page_on_front', $front_page_id->ID ); }
	} else if( $selected_import_index == '3' ){ // 4. Demo 4
		$front_page_id = get_page_by_title( 'Homepage 04' );
		update_option( 'show_on_front', 'page' );
		if( !empty($front_page_id->ID) ){ update_option( 'page_on_front', $front_page_id->ID ); }
	} else if( $selected_import_index == '4' ){ // 5. Demo 5
		$front_page_id = get_page_by_title( 'Homepage 05' );
		update_option( 'show_on_front', 'page' );
		if( !empty($front_page_id->ID) ){ update_option( 'page_on_front', $front_page_id->ID ); }
	}
	// Slider Revolution - Importing Sliders
	if ( class_exists( 'RevSlider' ) ){
		$slider_array	= array(
			WP_PLUGIN_DIR . '/emphires-addons/demo-content/sliders/slider-demo-1.zip',
			WP_PLUGIN_DIR . '/emphires-addons/demo-content/sliders/slider-demo-2.zip',
			WP_PLUGIN_DIR . '/emphires-addons/demo-content/sliders/slider-demo-3.zip',
			WP_PLUGIN_DIR . '/emphires-addons/demo-content/sliders/slider-demo-4.zip',
			WP_PLUGIN_DIR . '/emphires-addons/demo-content/sliders/slider-demo-5.zip',
		);
		$slider			= new RevSlider();
		foreach($slider_array as $filepath){
			if( file_exists($filepath) ){
				$result = $slider->importSliderFromPost(true,true,$filepath);  
			}
		}
	}
	// All done.. disable Merlin wizard
	update_option( 'cspt-merlin-all-done', 'yes' );
}
add_action( 'merlin_after_all_import', 'cspt_merlin_after_import_setup' );
/**
 * Remove Child theme from Merlin Setup
 */
add_action( 'emphires_merlin_steps', 'cspt_merlin_steps',1 );
if( !function_exists('cspt_merlin_steps') ){
function cspt_merlin_steps( $steps ){
	unset($steps['child']);
	return $steps;
}
}
/**
 * Set directory locations, text strings, and settings.
 */
$wizard = new Merlin(
	$config = array(
		'base_path'            => get_template_directory(), // Location / directory where Merlin WP is placed in your theme.
		'base_url'             => get_template_directory_uri(),
		'directory'            => '/includes/merlin', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url'           => 'emphires-wizard', // The wp-admin page slug where Merlin WP loads.
		'parent_slug'          => 'themes.php', // The wp-admin parent page slug for the admin menu item.
		'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
		'child_action_btn_url' => esc_url('https://codex.wordpress.org/child_themes'), // URL for the 'child-action-link'.
		'dev_mode'             => true, // Enable development mode for testing.
		'license_step'         => false, // EDD license activation step.
		'license_required'     => false, // Require the license activation step.
		'license_help_url'     => '', // URL for the 'license-tooltip'.
		'edd_remote_api_url'   => '', // EDD_Theme_Updater_Admin remote_api_url.
		'edd_item_name'        => '', // EDD_Theme_Updater_Admin item_name.
		'edd_theme_slug'       => '', // EDD_Theme_Updater_Admin item_slug.
		'ready_big_button_url' =>  home_url( '/' ), // Link for the big button on the ready step.
	),
	$strings = array(
		'admin-menu'               => esc_html__( 'Emphires Theme Setup', 'emphires' ),
		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'emphires' ),
		'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'emphires' ),
		'ignore'                   => esc_html__( 'Disable this wizard', 'emphires' ),
		'btn-skip'                 => esc_html__( 'Skip', 'emphires' ),
		'btn-next'                 => esc_html__( 'Next', 'emphires' ),
		'btn-start'                => esc_html__( 'Start', 'emphires' ),
		'btn-no'                   => esc_html__( 'Cancel', 'emphires' ),
		'btn-plugins-install'      => esc_html__( 'Install', 'emphires' ),
		'btn-child-install'        => esc_html__( 'Install', 'emphires' ),
		'btn-content-install'      => esc_html__( 'Install', 'emphires' ),
		'btn-import'               => esc_html__( 'Import', 'emphires' ),
		'btn-license-activate'     => esc_html__( 'Activate', 'emphires' ),
		'btn-license-skip'         => esc_html__( 'Later', 'emphires' ),
		/* translators: Theme Name */
		'license-header%s'         => esc_html__( 'Activate %s', 'emphires' ),
		/* translators: Theme Name */
		'license-header-success%s' => esc_html__( '%s is Activated', 'emphires' ),
		/* translators: Theme Name */
		'license%s'                => esc_html__( 'Enter your license key to enable remote updates and theme support.', 'emphires' ),
		'license-label'            => esc_html__( 'License key', 'emphires' ),
		'license-success%s'        => esc_html__( 'The theme is already registered, so you can go to the next step!', 'emphires' ),
		'license-json-success%s'   => esc_html__( 'Your theme is activated! Remote updates and theme support are enabled.', 'emphires' ),
		'license-tooltip'          => esc_html__( 'Need help?', 'emphires' ),
		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__( 'Welcome to %s', 'emphires' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'emphires' ),
		'welcome%s'                => esc_html__( 'This wizard will set up your theme, install plugins, and import content. It is optional & should take only a few minutes.', 'emphires' ),
		'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'emphires' ),
		'child-header'             => esc_html__( 'Install Child Theme', 'emphires' ),
		'child-header-success'     => esc_html__( 'You\'re good to go!', 'emphires' ),
		'child'                    => esc_html__( 'Let\'s build & activate a child theme so you may easily make theme changes.', 'emphires' ),
		'child-success%s'          => esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.', 'emphires' ),
		'child-action-link'        => esc_html__( 'Learn about child themes', 'emphires' ),
		'child-json-success%s'     => esc_html__( 'Awesome. Your child theme has already been installed and is now activated.', 'emphires' ),
		'child-json-already%s'     => esc_html__( 'Awesome. Your child theme has been created and is now activated.', 'emphires' ),
		'plugins-header'           => esc_html__( 'Install Plugins', 'emphires' ),
		'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'emphires' ),
		'plugins'                  => esc_html__( 'Let\'s install some essential WordPress plugins to get your site up to speed.', 'emphires' ),
		'plugins-success%s'        => esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'emphires' ),
		'plugins-action-link'      => esc_html__( 'Advanced', 'emphires' ),
		'import-header'            => esc_html__( 'Import Content', 'emphires' ),
		'import'                   => esc_html__( 'Let\'s import content to your website, to help you get familiar with the theme.', 'emphires' ),
		'import-action-link'       => esc_html__( 'Advanced', 'emphires' ),
		'ready-header'             => esc_html__( 'All done. Have fun!', 'emphires' ),
		/* translators: Theme Author */
		'ready%s'                  => esc_html__( 'Your theme has been all set up. Enjoy your new theme by %s.', 'emphires' ),
		'ready-action-link'        => esc_html__( 'More Links', 'emphires' ),
		'ready-big-button'         => esc_html__( 'View your website', 'emphires' ),
		'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', esc_url('https://emphires.creativesplanet.com/docs/'), esc_html__( 'Theme Documenation', 'emphires' ) ),
		'ready-link-2'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', esc_url('https://support.creativesplanet.com/'), esc_html__( 'Get Theme Support', 'emphires' ) ),
		'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'customize.php' ), esc_html__( 'Start Customizing', 'emphires' ) ),
	)
);
