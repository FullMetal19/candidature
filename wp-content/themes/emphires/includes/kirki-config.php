<?php
if( !function_exists('cspt_configure_customizer') ){
function cspt_configure_customizer(){

	// Remove Kirki inline font-style css
	if (!is_customize_preview() ) {
		add_filter( 'kirki_output_inline_styles', '__return_false' );
	}
	add_filter( 'kirki/config', function( $config = array() ) {
		$config['styles_priority'] = 10;
		return $config;
	} );

	Kirki::add_config( 'creativesplanet_emphires_base_options', array(
		'capability'  => 'edit_theme_options',
		'option_type' => 'theme_mod',
	) );
	// Panel
	Kirki::add_panel( 'emphires_base_options', array(
		'priority'    => 10,
		'title'       => esc_attr__( 'Emphires Options', 'emphires' ),
		'description' => esc_attr__( 'Emphires theme options', 'emphires' ),
	) );
	// Customizer options array file
	if( file_exists(get_template_directory() . '/includes/customizer-options.php') ){
		include( get_template_directory() . '/includes/customizer-options.php' );
	}
	// Setting all options
	if( !empty($kirki_options_array) ){
		foreach( $kirki_options_array as $section_id=>$data ){
			// Sections
			if( !empty($data['section_settings']) ){
				Kirki::add_section( $section_id , $data['section_settings'] );
			}
			// Options (fields)
			if( !empty($data['section_fields']) ){
				foreach( $data['section_fields'] as $field ){
					$field['section'] = $section_id;
					Kirki::add_field( 'creativesplanet_emphires_base_options', $field );
				}
			}
		}
	}
}
}
add_action( 'init', 'cspt_configure_customizer' );

/**
 * Remove kirki css as it's not required
 */
if( !function_exists('cspt_kirki_style') ){
function cspt_kirki_style( $config ) {
	if( wp_style_is( 'kirki-styles', 'enqueued' ) ) {
		wp_dequeue_style('kirki-styles');
	}
}
}

add_action( 'wp_enqueue_scripts', 'cspt_kirki_style', 99 );

/**
 * Configuration sample for the Kirki Customizer.
 * The function's argument is an array of existing config values
 * The function returns the array with the addition of our own arguments
 * and then that result is used in the kirki_config filter
 *
 * @param $config the configuration array
 *
 * @return array
 */
if( !function_exists('cspt_kirki_demo_configuration') ){
function cspt_kirki_demo_configuration( $config ) {
	$logo = get_theme_mod('logo');
	if( !empty($logo) ){
		$logo_img = esc_url( $logo );
	} else {
		$logo_img = esc_url( get_template_directory_uri() . '/images/logo.png' );
	}
	return wp_parse_args( array(
		'logo_image'	=> esc_url( $logo_img ),
		'description'	=> esc_attr__( 'By CreativesPlanet Team.', 'emphires' ),
	), $config );
}
}
add_filter( 'kirki_config', 'cspt_kirki_demo_configuration' );
