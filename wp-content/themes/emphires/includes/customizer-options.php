<?php
// Default titles
$portfolio_cpt_singular_title	= esc_attr__('Portfolio','emphires');
$portfolio_cat_singular_title	= esc_attr__('Portfolio Category','emphires');
$service_cpt_singular_title	= esc_attr__('Service','emphires');
$service_cat_singular_title	= esc_attr__('Service Category','emphires');
$team_cpt_singular_title	= esc_attr__('Team Member','emphires');
$team_group_singular_title	= esc_attr__('Team Group','emphires');
$testimonial_cpt_singular_title		= esc_attr__('Testimonial','emphires');
$testimonial_group_singular_title	= esc_attr__('Testimonial Group','emphires');
if( class_exists('Kirki') ){
	// Portfolio
	$portfolio_cpt_singular_title2	= Kirki::get_option( 'portfolio-cpt-singular-title' );
	$portfolio_cpt_singular_title	= ( !empty($portfolio_cpt_singular_title2) ) ? $portfolio_cpt_singular_title2 : $portfolio_cpt_singular_title ;
	// Portfolio Category
	$portfolio_cat_singular_title2	= Kirki::get_option( 'portfolio-cat-singular-title' );
	$portfolio_cat_singular_title	= ( !empty($portfolio_cat_singular_title2) ) ? $portfolio_cat_singular_title2 : $portfolio_cat_singular_title ;
	// Service
	$service_cpt_singular_title2	= Kirki::get_option( 'service-cpt-singular-title' );
	$service_cpt_singular_title	= ( !empty($service_cpt_singular_title2) ) ? $service_cpt_singular_title2 : $service_cpt_singular_title ;
	// Service Category
	$service_cat_singular_title2	= Kirki::get_option( 'service-cat-singular-title' );
	$service_cat_singular_title	= ( !empty($service_cat_singular_title2) ) ? $service_cat_singular_title2 : $service_cat_singular_title ;
	// Team
	$team_cpt_singular_title2	= Kirki::get_option( 'team-cpt-singular-title' );
	$team_cpt_singular_title	= ( !empty($team_cpt_singular_title2) ) ? $team_cpt_singular_title2 : $team_cpt_singular_title ;
	// Team Group
	$team_group_singular_title2	= Kirki::get_option( 'team-group-singular-title' );
	$team_group_singular_title	= ( !empty($team_group_singular_title2) ) ? $team_group_singular_title2 : $team_group_singular_title ;
	// Testimonial
	$testimonial_cpt_singular_title2	= Kirki::get_option( 'testimonial-cpt-singular-title' );
	$testimonial_cpt_singular_title	= ( !empty($testimonial_cpt_singular_title2) ) ? $testimonial_cpt_singular_title2 : $testimonial_cpt_singular_title ;
	// Testimonial Group
	$testimonial_group_singular_title2	= Kirki::get_option( 'testimonial-group-singular-title' );
	$testimonial_group_singular_title	= ( !empty($testimonial_group_singular_title2) ) ? $testimonial_group_singular_title2 : $testimonial_group_singular_title ;
}
$pre_color_list = array(
	'transparent'		=> get_template_directory_uri() . '/includes/images/precolor-transparent.png',
	'white'				=> get_template_directory_uri() . '/includes/images/precolor-white.png',
	'light'				=> get_template_directory_uri() . '/includes/images/precolor-light.png',
	'blackish'			=> get_template_directory_uri() . '/includes/images/precolor-blackish.png',
	'globalcolor'		=> get_template_directory_uri() . '/includes/images/precolor-globalcolor.png',
	'secondarycolor'	=> get_template_directory_uri() . '/includes/images/precolor-secondarycolor.png',
	'custom'			=> get_template_directory_uri() . '/includes/images/precolor-custom.png',
);
$pre_two_color_list = array(
	''					=> get_template_directory_uri() . '/includes/images/precolor-default.png',
	'white'				=> get_template_directory_uri() . '/includes/images/precolor-white.png',
	'blackish'			=> get_template_directory_uri() . '/includes/images/precolor-blackish.png',
	'globalcolor'		=> get_template_directory_uri() . '/includes/images/precolor-globalcolor.png',
);
$pre_text_color_list = array(
	'white'				=> get_template_directory_uri() . '/includes/images/precolor-white.png',
	'blackish'			=> get_template_directory_uri() . '/includes/images/precolor-blackish.png',
	'globalcolor'		=> get_template_directory_uri() . '/includes/images/precolor-globalcolor.png',
	'secondarycolor'	=> get_template_directory_uri() . '/includes/images/precolor-secondarycolor.png',
);
$pre_text_color_2_list = array(
	'white'				=> get_template_directory_uri() . '/includes/images/precolor-white.png',
	'blackish'			=> get_template_directory_uri() . '/includes/images/precolor-blackish.png',
);
$column_list = array(
	'1'	=> get_template_directory_uri() . '/includes/images/column-1.png',
	'2'	=> get_template_directory_uri() . '/includes/images/column-2.png',
	'3'	=> get_template_directory_uri() . '/includes/images/column-3.png',
	'4'	=> get_template_directory_uri() . '/includes/images/column-4.png',
	'5'	=> get_template_directory_uri() . '/includes/images/column-5.png',
	'6'	=> get_template_directory_uri() . '/includes/images/column-6.png',
);
// Total Header Styles
$header_style_array = array(
	'1'	=> get_template_directory_uri() . '/includes/images/header-style-1.jpg',
	'2'	=> get_template_directory_uri() . '/includes/images/header-style-2.jpg',
	'3'	=> get_template_directory_uri() . '/includes/images/header-style-3.jpg',
	'4'	=> get_template_directory_uri() . '/includes/images/header-style-4.jpg',
	'5'	=> get_template_directory_uri() . '/includes/images/header-style-5.jpg',
	'6'	=> get_template_directory_uri() . '/includes/images/header-style-6.jpg',
	'7'	=> get_template_directory_uri() . '/includes/images/header-style-7.jpg',
);
// Total Single Portfolio Styles
$portfolio_single_style_array = array(
	'1'	=> get_template_directory_uri() . '/includes/images/portfolio-single-style-1.jpg',
	'2'	=> get_template_directory_uri() . '/includes/images/portfolio-single-style-2.jpg',
);
// Total Single Service Styles
$service_single_style_array = array(
	'1'	=> get_template_directory_uri() . '/includes/images/service-single-style-1.jpg',
	'2'	=> get_template_directory_uri() . '/includes/images/service-single-style-2.jpg',
);
// Total Single Portfolio Styles
$team_single_style_array = array(
	'1'	=> get_template_directory_uri() . '/includes/images/team-single-style-1.jpg',
	'2'	=> get_template_directory_uri() . '/includes/images/team-single-style-2.jpg',
);
// Social links
$social_options_array = array();
if( function_exists('cspt_social_links_list') ){
	$social_list = cspt_social_links_list();
	foreach( $social_list as $social ){
		$social_options_array[] = array(
			'type'			=> 'text',
			'settings'		=> esc_attr( $social['id'] ),
			'label'			=> esc_attr( $social['label'] ),
			'description'	=> esc_attr__( 'Write Social URL.', 'emphires' ),
			'default'		=> '',
		);
	}
}
$footer_col_width_array = array(
	'hide'	=> esc_attr__( 'Hide this column', 'emphires' ),
	'1'		=> esc_attr__( '1%', 'emphires' ),
	'2'		=> esc_attr__( '2%', 'emphires' ),
	'3'		=> esc_attr__( '3%', 'emphires' ),
	'4'		=> esc_attr__( '4%', 'emphires' ),
	'5'		=> esc_attr__( '5%', 'emphires' ),
	'6'		=> esc_attr__( '6%', 'emphires' ),
	'7'		=> esc_attr__( '7%', 'emphires' ),
	'8'		=> esc_attr__( '8%', 'emphires' ),
	'9'		=> esc_attr__( '9%', 'emphires' ),
	'10'	=> esc_attr__( '10%', 'emphires' ),
	'11'	=> esc_attr__( '11%', 'emphires' ),
	'12'	=> esc_attr__( '12%', 'emphires' ),
	'13'	=> esc_attr__( '13%', 'emphires' ),
	'14'	=> esc_attr__( '14%', 'emphires' ),
	'15'	=> esc_attr__( '15%', 'emphires' ),
	'16'	=> esc_attr__( '16%', 'emphires' ),
	'17'	=> esc_attr__( '17%', 'emphires' ),
	'18'	=> esc_attr__( '18%', 'emphires' ),
	'19'	=> esc_attr__( '19%', 'emphires' ),
	'20'	=> esc_attr__( '20%', 'emphires' ),
	'21'	=> esc_attr__( '21%', 'emphires' ),
	'22'	=> esc_attr__( '22%', 'emphires' ),
	'23'	=> esc_attr__( '23%', 'emphires' ),
	'24'	=> esc_attr__( '24%', 'emphires' ),
	'25'	=> esc_attr__( '25%', 'emphires' ),
	'26'	=> esc_attr__( '26%', 'emphires' ),
	'27'	=> esc_attr__( '27%', 'emphires' ),
	'28'	=> esc_attr__( '28%', 'emphires' ),
	'29'	=> esc_attr__( '29%', 'emphires' ),
	'30'	=> esc_attr__( '30%', 'emphires' ),
	'31'	=> esc_attr__( '31%', 'emphires' ),
	'32'	=> esc_attr__( '32%', 'emphires' ),
	'33'	=> esc_attr__( '33%', 'emphires' ),
	'34'	=> esc_attr__( '34%', 'emphires' ),
	'35'	=> esc_attr__( '35%', 'emphires' ),
	'36'	=> esc_attr__( '36%', 'emphires' ),
	'37'	=> esc_attr__( '37%', 'emphires' ),
	'38'	=> esc_attr__( '38%', 'emphires' ),
	'39'	=> esc_attr__( '39%', 'emphires' ),
	'40'	=> esc_attr__( '40%', 'emphires' ),
	'41'	=> esc_attr__( '41%', 'emphires' ),
	'42'	=> esc_attr__( '42%', 'emphires' ),
	'43'	=> esc_attr__( '43%', 'emphires' ),
	'44'	=> esc_attr__( '44%', 'emphires' ),
	'45'	=> esc_attr__( '45%', 'emphires' ),
	'46'	=> esc_attr__( '46%', 'emphires' ),
	'47'	=> esc_attr__( '47%', 'emphires' ),
	'48'	=> esc_attr__( '48%', 'emphires' ),
	'49'	=> esc_attr__( '49%', 'emphires' ),
	'50'	=> esc_attr__( '50%', 'emphires' ),
	'51'	=> esc_attr__( '51%', 'emphires' ),
	'52'	=> esc_attr__( '52%', 'emphires' ),
	'53'	=> esc_attr__( '53%', 'emphires' ),
	'54'	=> esc_attr__( '54%', 'emphires' ),
	'55'	=> esc_attr__( '55%', 'emphires' ),
	'56'	=> esc_attr__( '56%', 'emphires' ),
	'57'	=> esc_attr__( '57%', 'emphires' ),
	'58'	=> esc_attr__( '58%', 'emphires' ),
	'59'	=> esc_attr__( '59%', 'emphires' ),
	'60'	=> esc_attr__( '60%', 'emphires' ),
	'61'	=> esc_attr__( '61%', 'emphires' ),
	'62'	=> esc_attr__( '62%', 'emphires' ),
	'63'	=> esc_attr__( '63%', 'emphires' ),
	'64'	=> esc_attr__( '64%', 'emphires' ),
	'65'	=> esc_attr__( '65%', 'emphires' ),
	'66'	=> esc_attr__( '66%', 'emphires' ),
	'67'	=> esc_attr__( '67%', 'emphires' ),
	'68'	=> esc_attr__( '68%', 'emphires' ),
	'69'	=> esc_attr__( '69%', 'emphires' ),
	'70'	=> esc_attr__( '70%', 'emphires' ),
	'71'	=> esc_attr__( '71%', 'emphires' ),
	'72'	=> esc_attr__( '72%', 'emphires' ),
	'73'	=> esc_attr__( '73%', 'emphires' ),
	'74'	=> esc_attr__( '74%', 'emphires' ),
	'75'	=> esc_attr__( '75%', 'emphires' ),
	'76'	=> esc_attr__( '76%', 'emphires' ),
	'77'	=> esc_attr__( '77%', 'emphires' ),
	'78'	=> esc_attr__( '78%', 'emphires' ),
	'79'	=> esc_attr__( '79%', 'emphires' ),
	'80'	=> esc_attr__( '80%', 'emphires' ),
	'81'	=> esc_attr__( '81%', 'emphires' ),
	'82'	=> esc_attr__( '82%', 'emphires' ),
	'83'	=> esc_attr__( '83%', 'emphires' ),
	'84'	=> esc_attr__( '84%', 'emphires' ),
	'85'	=> esc_attr__( '85%', 'emphires' ),
	'86'	=> esc_attr__( '86%', 'emphires' ),
	'87'	=> esc_attr__( '87%', 'emphires' ),
	'88'	=> esc_attr__( '88%', 'emphires' ),
	'89'	=> esc_attr__( '89%', 'emphires' ),
	'90'	=> esc_attr__( '90%', 'emphires' ),
	'91'	=> esc_attr__( '91%', 'emphires' ),
	'92'	=> esc_attr__( '92%', 'emphires' ),
	'93'	=> esc_attr__( '93%', 'emphires' ),
	'94'	=> esc_attr__( '94%', 'emphires' ),
	'95'	=> esc_attr__( '95%', 'emphires' ),
	'96'	=> esc_attr__( '96%', 'emphires' ),
	'97'	=> esc_attr__( '97%', 'emphires' ),
	'98'	=> esc_attr__( '98%', 'emphires' ),
	'99'	=> esc_attr__( '99%', 'emphires' ),
	'100'	=> esc_attr__( '100%', 'emphires' ),
);

$blog_styles = cspt_element_template_list('blog', false);
unset($blog_styles['classic'], $blog_styles['3']);

/*** Options array ***/
$kirki_options_array = array(
	// General Settings
	'general_options' => array(
		'section_settings' => array(
			'title'			=> esc_attr__( 'General Options', 'emphires' ),
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			array(
				'type'			=> 'color',
				'settings'		=> 'global-color',
				'label'			=> esc_attr__( 'Global Color', 'emphires' ),
				'description'	=> esc_attr__( 'This color will be globally applied to most of elements parts and special texts', 'emphires' ),
				'default'		=> '#0aadeb',
			),
			array(
				'type'			=> 'color',
				'settings'		=> 'secondary-color',
				'label'			=> esc_attr__( 'Secondary Color', 'emphires' ),
				'description'	=> esc_attr__( 'This color will be used on some elements. Sometimes with Global Color. This should match with Global Color to look good.', 'emphires' ),
				'default'		=> '#0c121d',
			),
			array(
				'type'		=> 'multicolor',
				'settings'	=> 'gradient-color',
				'label'		=> esc_attr__( 'Gradient Color', 'emphires' ),
				'choices'		=> array(
					'first'		=> esc_attr__( 'Starting Color', 'emphires' ),
					'last'		=> esc_attr__( 'Ending Color', 'emphires' ),
				),
				'default'	=> array(
				  'first'		=> '#0aadeb',
				  'last'		=> '#5eabc9',
				),
			),
			array(
				'type'				=> 'image',
				'settings'			=> 'logo',
				'label'				=> esc_attr__( 'Logo', 'emphires' ),
				'description'		=> esc_attr__( 'Main logo', 'emphires' ),
				'default'			=> get_template_directory_uri() . '/images/logo.png',
				'partial_refresh'	=> array(
					'logo'				=> array(
						'selector'			=> '.site-title',
						'render_callback'	=> function() {
							return cspt_logo( 'yes' );
						},
					)
				),
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'logo-height',
				'label'			=> esc_attr__( 'Logo Max Height', 'emphires' ),
				'default'		=> 55,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 1000,
					'step'			=> 1,
				),
			),
			array(
				'type'			=> 'image',
				'settings'		=> 'sticky-logo',
				'label'			=> esc_attr__( 'Sticky Logo', 'emphires' ),
				'description'	=> esc_attr__( 'Sticky logo', 'emphires' ),
				'default'		=> '',
				'active_callback'=> array( array(
					'setting' => 'sticky-header',
					'operator' => '==',
					'value' => '1',
				) ),
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'sticky-logo-height',
				'label'			=> esc_attr__( 'Sticky Logo Max Height', 'emphires' ),
				'default'		=> 45,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 1000,
					'step'			=> 1,
				),
				'active_callback'=> array( array(
					'setting' => 'sticky-header',
					'operator' => '==',
					'value' => '1',
				) ),
			),
			array(
				'type'			=> 'image',
				'settings'		=> 'responsive-logo',
				'label'			=> esc_attr__( 'Responsive Logo', 'emphires' ),
				'description'	=> esc_attr__( 'This logo appear in small devices like mobile/tablet etc', 'emphires' ),
				'default'		=> '',
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'responsive-logo-height',
				'label'			=> esc_attr__( 'Responsive Logo Max Height', 'emphires' ),
				'default'		=> 50,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 1000,
					'step'			=> 1,
				),
			),
			array(
				'type'		=> 'multicolor',
				'settings'	=> 'link-color',
				'label'		=> esc_attr__( 'Link Color', 'emphires' ),
				'choices'		=> array(
					'normal'	=> esc_attr__( 'Normal Color', 'emphires' ),
					'hover'		=> esc_attr__( 'Mouse-Over (Hover) Color', 'emphires' ),
				),
				'default'	=> array(
					'normal'	=> '#0c121d',
					'hover'		=> '#0aadeb',
				),
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'preloader',
				'label'			=> esc_attr__( 'Show Preloader?', 'emphires' ),
				'description'	=> esc_attr__( 'Show or hide preloader', 'emphires' ),
				'default'		=> '0',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'preloader-image',
				'label'			=> esc_html__( 'Select preloader image', 'emphires' ),
				'default'		=> '1',
				'choices'		=> array(
					'1'   => get_template_directory_uri() . '/images/loader1.svg',
					'2'   => get_template_directory_uri() . '/images/loader2.svg',
					'3'   => get_template_directory_uri() . '/images/loader3.svg',
					'4'   => get_template_directory_uri() . '/images/loader4.svg',
					'5'   => get_template_directory_uri() . '/images/loader5.svg',
					'6'   => get_template_directory_uri() . '/images/loader6.svg',
					'7'   => get_template_directory_uri() . '/images/loader7.svg',
					'8'   => get_template_directory_uri() . '/images/loader8.svg',
					'9'   => get_template_directory_uri() . '/images/loader9.svg',
				),
				'active_callback'=> array( array(
					'setting' => 'preloader',
					'operator' => '==',
					'value' => '1',
				) ),
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'responsive-breakpoint',
				'label'			=> esc_attr__( 'Responsive Breakpoint', 'emphires' ),
				'description'	=> esc_attr__( 'Select screen size to make the menu burger menu (responsive menu) below the selected screen size and also other settings too. Preferred Sizes: 1200, 1024, 992 and 768', 'emphires' ),
				'default'		=> 1200,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 2000,
					'step'			=> 1,
				),
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'sidebar-page',
				'label'		=> esc_html__( 'Page Sidebar', 'emphires' ),
				'default'	=> 'right',
				'choices'		=> array(
					'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
					'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
					'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
				),
			),
			// Advanced Settings
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-advanced-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Advanced Settings', 'emphires' ) . '</h2> <span>' . esc_html__( 'Special advanced options', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'min',
				'label'			=> esc_attr__( 'Load Minified CSS and JS Files?', 'emphires' ),
				'description'	=> esc_attr__( 'Load minified files for CSS and JS code files. Select YES to reduce page load time.', 'emphires' ),
				'default'		=> '1',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'dynamic-css-file',
				'label'			=> esc_attr__( 'Load Static CSS file for Dynamic Code?', 'emphires' ),
				'description' => esc_attr__( 'Keep this YES to make your site load faster. Select NO if you are modifying any file via child theme or any other way.', 'emphires' ),
				'default'		=> '1',
				'choices'     => array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'load-merged-css',
				'label'			=> esc_attr__( 'Load merged file?', 'emphires' ),
				'description'	=> esc_attr__( 'Keep this YES to load merged file so only one CSS file will load instead of multiple files. This will effect theme\'s CSS files only and not other plugin related files. This will reduce load time.', 'emphires' ),
				'default'		=> '1',
				'choices'     => array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'color',
				'settings'		=> 'white-color',
				'label'			=> esc_attr__( 'White Color', 'emphires' ),
				'description'	=> esc_attr__( 'This is default white color for text.', 'emphires' ),
				'default'		=> '#ffffff',
			),
			array(
				'type'			=> 'color',
				'settings'		=> 'blackish-color',
				'label'			=> esc_attr__( 'Blackish Color', 'emphires' ),
				'description'	=> esc_attr__( 'This is default blackish color.', 'emphires' ),
				'default'		=> '#0c121d',
			),
			array(
				'type'			=> 'color',
				'settings'		=> 'light-bg-color',
				'label'			=> esc_attr__( 'Light Background Color', 'emphires' ),
				'description'	=> esc_attr__( 'This is default grey background color.', 'emphires' ),
				'default'		=> '#eef7f9',
			),
			array(
				'type'			=> 'color',
				'settings'		=> 'blackish-bg-color',
				'label'			=> esc_attr__( 'Blackish Background Color', 'emphires' ),
				'description'	=> esc_attr__( 'This is default blackish background color.', 'emphires' ),
				'default'		=> '#0c121d',
			),
		)
	),
	// Typography Settings
	'typography_options' => array(
		'section_settings' => array(
			'title'			=> esc_attr__( 'Typography Options', 'emphires' ),
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			array(
				'type'			=> 'typography',
				'settings'		=> 'global-typography',
				'label'			=> esc_attr__( 'Global Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array (
					'font-family'		=> 'Muli',
					'variant'			=> 'regular',
					'font-size'			=> '16px',
					'line-height'		=> '1.7',
					'letter-spacing'	=> '',
					'color'				=> '#6d7a8c',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 400,
					'font-style'		=> 'normal',
				  ),
				'priority'			=> 10,
				'cspt-output'		=> 'body',
				'cspt-all-variants'	=> true,
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'h1-typography',
				'label'			=> esc_attr__( 'H1 Typography', 'emphires' ),
				'tooltip'     => esc_attr__( 'This is tooltip', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> 'regular',
					'font-size'			=> '34px',
					'line-height'		=> '44px',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 800,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> 'h1',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'h2-typography',
				'label'			=> esc_attr__( 'H2 Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> 'regular',
					'font-size'			=> '30px',
					'line-height'		=> '40px',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 800,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> 'h2',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'h3-typography',
				'label'			=> esc_attr__( 'H3 Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> 'regular',
					'font-size'			=> '26px',
					'line-height'		=> '36px',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 800,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> 'h3',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'h4-typography',
				'label'			=> esc_attr__( 'H4 Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> 'regular',
					'font-size'			=> '22px',
					'line-height'		=> '32px',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 800,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> 'h4',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'h5-typography',
				'label'			=> esc_attr__( 'H5 Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> 'regular',
					'font-size'			=> '18px',
					'line-height'		=> '28px',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 800,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> 'h5',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'h6-typography',
				'label'			=> esc_attr__( 'H6 Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> 'regular',
					'font-size'			=> '16px',
					'line-height'		=> '26px',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 800,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> 'h6',
			),
			// Heading Options
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Special Heading Typography', 'emphires' ) . '</h2> <span>' . esc_html__( 'Heading typography options', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'heading-typography',
				'label'			=> esc_attr__( 'Heading Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> 'regular',
					'font-size'			=> '42px',
					'line-height'		=> '52px',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 800,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> '.cspt-ihbox.cspt-ihbox-style-hsbox .cspt-ihbox-heading .vc_custom_heading',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'subheading-typography',
				'label'			=> esc_attr__( 'Sub-heading Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Muli',
					'variant'			=> '700',
					'font-size'			=> '14px',
					'line-height'		=> '20px',
					'letter-spacing'	=> '0.5px',
					'color'				=> '#b0b6bf',
					'text-transform'	=> 'uppercase',
					'font-backup'		=> '',
					'font-weight'		=> 700,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> '.cspt-ihbox.cspt-ihbox-style-hsbox .cspt-ihbox-subheading .vc_custom_heading',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'content-typography',
				'label'			=> esc_attr__( 'Content Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Muli',
					'variant'			=> 'regular',
					'font-size'			=> '16px',
					'line-height'		=> '1.7',
					'letter-spacing'	=> '0px',
					'color'				=> '#666666',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 400,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> '.cspt-ihbox.cspt-ihbox-style-hsbox .cspt-ihbox-content',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'widget-heading-typography',
				'label'			=> esc_attr__( 'Widget Heading Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> 'regular',
					'font-size'			=> '18px',
					'line-height'		=> '22px',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 700,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> '.widget-title',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'buttons-typography',
				'label'			=> esc_attr__( 'Button Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Montserrat',
					'variant'			=> '600',
					'font-size'			=> '13px',
					'line-height'		=> '26px',
					'letter-spacing'	=> '1px',
					'text-transform'	=> 'uppercase',
					'font-backup'		=> '',
					'font-weight'		=> 600,
					'font-style'		=> 'normal',
				),
				'cspt-output'	=> '.vc_general.vc_btn3, .woocommerce .woocommerce-message .button, .woocommerce div.product form.cart .button, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, button, html input[type=button], input[type=reset], input[type=submit], .cspt-blog-classic-inner .cspt-read-more-link a',
			),
			// Extra Load Fonts Options
			array(
				'type'			=> 'custom',
				'settings'		=> 'css-only-custom-heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'CSS only Typography', 'emphires' ) . '</h2> <span>' . esc_html__( 'This will not apply to any font style but this font will be loaded so we can use anywhere.', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'css-only-1-typography',
				'label'			=> esc_attr__( 'First Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Montserrat',
					'variant'			=> '700',
					'font-weight'		=> 700,
					'font-style'		=> 'normal',
					'font-backup'		=> '',
				),
				'cspt-output'	=> '.cspt-ihbox-style-1 .vc_general.vc_btn3, .cspt-service-style-3 .vc_general.vc_btn3, .cspt-ihbox-style-1-main .vc_column_container .cspt-ihbox-style-1:before,  .cspt-header-style-3 .cspt-header-button a, .cspt-header-style-5 .cspt-header-button, .cspt-testimonial-style-4 .creativesplanet-box-title,  
					.creativesplanet-ele-fid-style-5 .cspt-fid-title,  .cspt-top-bar-bt, .cspt-contact-info, .cspt-header-button, blockquote cite, blockquote small',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'css-only-2-typography',
				'label'			=> esc_attr__( 'Second Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Montserrat',
					'variant'			=> '500',
					'font-weight'		=> 500,
					'font-style'		=> 'normal',
					'font-backup'		=> '',
				),
				'cspt-output'	=> '.cspt-testimonial-style-2 blockquote',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'css-only-3-typography',
				'label'			=> esc_attr__( 'Third Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Rubik',
					'variant'			=> 'regular',
					'font-weight'		=> 400,
					'font-style'		=> 'normal',
					'font-backup'		=> '',
				),
				'cspt-output'	=> 'blockquote',
			),
		)
	),
	// Pre-Header Options
	'preheader_options'	=> array(
		'section_settings'	=> array(
			'title'				=> esc_attr__( 'Pre-Header Options', 'emphires' ),
			'panel'				=> 'emphires_base_options',
			'priority'			=> 160,
		),
		'section_fields' => array(
			array(
				'type'			=> 'switch',
				'settings'		=> 'preheader-enable',
				'label'			=> esc_attr__( 'Show or hide Pre-header', 'emphires' ),
				'default'		=> '0',
				'choices'		=> array(
					'on'			=> esc_attr__( 'Show', 'emphires' ),
					'off'			=> esc_attr__( 'Hide', 'emphires' ),
				),
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'preheader-text-color',
				'label'				=> esc_attr__( 'Select pre-header text color', 'emphires' ),
				'default'			=> 'white',
				'choices'			=> $pre_text_color_list,
				'active_callback'	=> array(
					array(
						'setting'		=> 'preheader-enable',
						'operator'		=> '==',
						'value'			=> '1',
					)
				),
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'preheader-bgcolor',
				'label'				=> esc_html__( 'Select pre-header background color', 'emphires' ),
				'default'			=> 'blackish',
				'choices'			=> $pre_color_list,
				'active_callback'	=> array( array(
					'setting'			=> 'preheader-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
			array(
				'type'			=> 'color',
				'settings'		=> 'preheader-bgcolor-custom',
				'label'			=> esc_attr__( 'Select pre-header background custom color', 'emphires' ),
				'description'	=> esc_attr__( 'Select custom color for pre-header background', 'emphires' ),
				'default'		=> '#ff5e15',
				'active_callback'=> array(
					array(
						'setting'	=> 'preheader-bgcolor',
						'operator'	=> '==',
						'value'		=> 'custom',
					),
					array(
						'setting'			=> 'preheader-enable',
						'operator'			=> '==',
						'value'				=> '1',
					)
				),
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'preheader-responsive',
				'label'			=> esc_attr__( 'Hide in screen size', 'emphires' ),
				'description'	=> esc_attr__( 'Select screen size to hide this pre-header below the selected screen size. Preferred Sizes: 1200, 1024, 992 and 768', 'emphires' ),
				'default'		=> 1200,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 2000,
					'step'			=> 1,
				),
				'active_callback'	=> array( array(
					'setting'			=> 'preheader-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'preheader-content-heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Preheader content', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Manage preheader content from here', 'emphires' ) , $portfolio_cpt_singular_title ) . '</span></div>',
				'active_callback'	=> array( array(
					'setting'			=> 'preheader-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
			array(
				'type'			=> 'textarea',
				'settings'		=> 'preheader-left',
				'label'			=> esc_attr__( 'Pre-header Left Content', 'emphires' ),
				'default'		=> cspt_esc_kses('<i class="cspt-base-icon-marker"></i> Los Angeles Gournadi, 1230  Bariasl'),
				'active_callback'	=> array( array(
					'setting'			=> 'preheader-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
				'partial_refresh'	=> array(
					'preheader-left'		=> array(
						'selector'			=> '.cspt-pre-header-left',
						'render_callback'	=> function() {
							return get_theme_mod('preheader-left');
						},
					)
				),
			),
			array(
				'type'			=> 'textarea',
				'settings'		=> 'preheader-right',
				'label'			=> esc_attr__( 'Pre-header Right Content', 'emphires' ),
				'default'		=> cspt_esc_kses('<ul class="cspt-contact-info"><li><i class="cspt-base-icon-contact"></i> Make a call  : +1 (212) 255-5511</li><li>[cspt-social-links]</li></ul>'),
				'active_callback'	=> array( array(
					'setting'			=> 'preheader-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
				'partial_refresh'	=> array(
					'preheader-right'		=> array(
						'selector'			=> '.cspt-pre-header-right',
						'render_callback'	=> function() {
							return get_theme_mod('preheader-right');
						},
					)
				),
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'preheader-search',
				'label'			=> esc_attr__( 'Show Search Icon in Pre-header Right Area?', 'emphires' ),
				'description'	=> esc_attr__( 'Select YES to show search icon in pre-header right side.', 'emphires' ),
				'default'		=> '0',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
				'active_callback'	=> array( array(
					'setting'			=> 'preheader-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
		),
	),
	// Header Options
	'header_options' => array(
		'section_settings' => array(
			'title'			=> esc_attr__( 'Header Options', 'emphires' ),
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'header-style',
				'label'		=> esc_html__( 'Header Style', 'emphires' ),
				'default'	=> '1',
				'choices'		=> $header_style_array,
			),
			// - Infostack contents
			// 1st Box
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-header-box1-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Header 1st Box Contents', 'emphires' ) . '</h2> <span>' . esc_html__( 'Add or modify content for 1st box in header area.', 'emphires' ) . '</span></div>',
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),		
					)
				),
			),
			array(
				'type'			=> 'creativesplanet_icon_picker',
				'settings'		=> 'header-box1-icon',
				'label'			=> esc_attr__( '1st box - Icon', 'emphires' ),
				'description'	=> esc_attr__( 'Select icon for 1st box', 'emphires' ),
				'default'		=> esc_attr('cspt-emphires-icon cspt-emphires-icon-email;fa fa-map-marker;sgicon sgicon-Pointer;;vc_li vc_li-heart;vc-mono vc-mono-fivehundredpx;fa fa-map-marker;sgicon sgicon-Pointer;;vc_li vc_li-heart;vc-mono vc-mono-fivehundredpx;fa fa-map-marker;sgicon sgicon-Pointer;;vc_li vc_li-heart;vc-mono vc-mono-fivehundredpx'),
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			array(
				'type'		=> 'text',
				'settings'	=> 'header-box1-title',
				'label'		=> esc_attr__( '1st Box - Title', 'emphires' ),
				'default'	=> esc_attr('Call us for any question'),
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
				'partial_refresh'	=> array(
					'header-box1-title'		=> array(
						'selector'			=> '.cspt-header-box-1 .cspt-header-box-title',
						'render_callback'	=> function() {
							return get_theme_mod('header-box1-title');
						},
					)
				),
			),
			array(
				'type'		=> 'text',
				'settings'	=> 'header-box1-content',
				'label'		=> esc_attr__( '1st Box - Content', 'emphires' ),
				'default'	=> esc_attr('(+00)888.666.88'),
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			array(
				'type'		=> 'link',
				'settings'	=> 'header-box1-link',
				'label'		=> esc_attr__( '1st Box - Link', 'emphires' ),
				'default'	=> '',
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			// 2nd Box
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-header-box2-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Header 2nd Box Contents', 'emphires' ) . '</h2> <span>' . esc_html__( 'Add or modify content for 2nd box in header area.', 'emphires' ) . '</span></div>',
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			array(
				'type'			=> 'creativesplanet_icon_picker',
				'settings'		=> 'header-box2-icon',
				'label'			=> esc_attr__( '2nd box - Icon', 'emphires' ),
				'description'	=> esc_attr__( 'Select icon for 2nd box', 'emphires' ),
				'default'		=> esc_attr('cspt-emphires-icon cspt-emphires-icon-mail;fa fa-info-circle;sgicon sgicon-Mail;;vc_li vc_li-heart;vc-mono vc-mono-fivehundredpx;fa fa-info-circle;sgicon sgicon-Mail;;vc_li vc_li-heart;vc-mono vc-mono-fivehundredpx;fa fa-info-circle;sgicon sgicon-Mail;;vc_li vc_li-heart;vc-mono vc-mono-fivehundredpx'),
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			array(
				'type'		=> 'text',
				'settings'	=> 'header-box2-title',
				'label'		=> esc_attr__( '2nd Box - Title', 'emphires' ),
				'default'	=> esc_attr('Request on'),
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
				'partial_refresh'	=> array(
					'header-box2-title'		=> array(
						'selector'			=> '.cspt-header-box-2 .cspt-header-box-title',
						'render_callback'	=> function() {
							return get_theme_mod('header-box2-title');
						},
					)
				),
			),
			array(
				'type'		=> 'text',
				'settings'	=> 'header-box2-content',
				'label'		=> esc_attr__( '2nd Box - Content', 'emphires' ),
				'default'	=> esc_attr('Get Appointment'),
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			array(
				'type'		=> 'link',
				'settings'	=> 'header-box2-link',
				'label'		=> esc_attr__( '2nd Box - Link', 'emphires' ),
				'default'	=> '',
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			// 3rd Box
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-header-box3-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Header 3rd Box Contents', 'emphires' ) . '</h2> <span>' . esc_html__( 'Add or modify content for 3rd box in header area.', 'emphires' ) . '</span></div>',
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			array(
				'type'			=> 'creativesplanet_icon_picker',
				'settings'		=> 'header-box3-icon',
				'label'			=> esc_attr__( '3rd box - Icon', 'emphires' ),
				'description'	=> esc_attr__( 'Select icon for 3rd box', 'emphires' ),
				'default'		=> esc_attr('cspt-emphires-icon cspt-emphires-icon-;fa fa-info-circle;sgicon sgicon-Phone2;;vc_li vc_li-heart;vc-mono vc-mono-fivehundredpx;fa fa-info-circle;sgicon sgicon-Phone2;;vc_li vc_li-heart;vc-mono vc-mono-fivehundredpx;fa fa-info-circle;sgicon sgicon-Phone2;;vc_li vc_li-heart;vc-mono vc-mono-fivehundredpx'),
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			array(
				'type'		=> 'text',
				'settings'	=> 'header-box3-title',
				'label'		=> esc_attr__( '3rd Box - Title', 'emphires' ),
				'default'	=> esc_attr('000 8888 999'),
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
				'partial_refresh'	=> array(
					'header-box3-title'		=> array(
						'selector'			=> '.cspt-header-box-3 .cspt-header-box-title',
						'render_callback'	=> function() {
							return get_theme_mod('header-box3-title');
						},
					)
				),
			),
			array(
				'type'		=> 'text',
				'settings'	=> 'header-box3-content',
				'label'		=> esc_attr__( '3rd Box - Content', 'emphires' ),
				'default'	=> esc_attr('Free Call'),
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
array(
				'type'		=> 'link',
				'settings'	=> 'header-box3-link',
				'label'		=> esc_attr__( '3rd Box - Link', 'emphires' ),
				'default'	=> '',
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-header-box-typography',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Header Box Typography', 'emphires' ) . '</h2> <span>' . esc_html__( 'Select or change header box typography', 'emphires' ) . '</span></div>',
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'header-box-title-typography',
				'label'			=> esc_attr__( 'Header Typography - Box Title', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> '800',
					'font-size'			=> '17px',
					'line-height'		=> '27px',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 800,
					'font-style'		=> 'normal',
				),
				'cspt-output'	=> '.cspt-header-box-title',
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'header-box-content-typography',
				'label'			=> esc_attr__( 'Header Typography - Box Content', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Muli',
					'variant'			=> '700',
					'font-size'			=> '15px',
					'line-height'		=> '25px',
					'letter-spacing'	=> '1px',
					'color'				=> '#b0b6bf',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 700,
					'font-style'		=> 'normal',
				),
				'cspt-output'	=> '.cspt-header-box-content',
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			// Header button
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-header-button-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Header Button', 'emphires' ) . '</h2> <span>' . esc_html__( 'Set header button title and link', 'emphires' ) . '</span></div>',
			),
			array(
				'type'				=> 'text',
				'settings'			=> 'header-btn-text',
				'label'				=> esc_attr__( 'Header Button Text (1st line)', 'emphires' ),
				'default'			=> '',
				'partial_refresh'	=> array(
					'header-btn-text'	=> array(
						'selector'			=> '.cspt-header-button',
						'render_callback'	=> function() {
							return cspt_header_button( array('inneronly'=>'yes') );
						},
					)
				),
			),
			array(
				'type'				=> 'text',
				'settings'			=> 'header-btn-text2',
				'label'				=> esc_attr__( 'Header Button Text (2nd line)', 'emphires' ),
				'default'			=> '',
			),
			array(
				'type'				=> 'text',
				'settings'			=> 'header-btn-url',
				'label'				=> esc_attr__( 'Header Button Link (URL)', 'emphires' ),
				'default'			=> '',
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-header-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'General Options', 'emphires' ) . '</h2> <span>' . esc_html__( 'Common options that apply to all header styles', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'header-height',
				'label'			=> esc_attr__( 'Header Height (in pixel)', 'emphires' ),
				'description'	=> esc_attr__( 'Select header height', 'emphires' ),
				'default'		=> 120,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 900,
					'step'			=> 1,
				),
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'header-bgcolor',
				'label'				=> esc_html__( 'Select header background color', 'emphires' ),
				'default'			=> 'white',
				'choices'			=> $pre_color_list,
			),
			array(
				'type'			=> 'color',
				'settings'		=> 'header-background-color',
				'label'			=> esc_attr__( 'Header Background Color', 'emphires' ),
				'description'	=> esc_attr__( 'Select custom color for header background', 'emphires' ),
				'default'		=> '#ffffff',
				'active_callback'=> array(
					array(
						'setting'	=> 'header-bgcolor',
						'operator'	=> '==',
						'value'		=> 'custom',
					)
				),
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'menu-bgcolor',
				'label'				=> esc_html__( 'Select menu area background color', 'emphires' ),
				'default'			=> 'white',
				'choices'			=> $pre_color_list,
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '2',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
					)
				),
			),
			array(
				'type'			=> 'color',
				'settings'		=> 'menu-background-color',
				'label'			=> esc_attr__( 'Menu Area Background Color', 'emphires' ),
				'description'	=> esc_attr__( 'Select custom color for Menu area background', 'emphires' ),
				'default'		=> '#ffffff',
				'active_callback'=> array(
					array(
						'setting'	=> 'menu-bgcolor',
						'operator'	=> '==',
						'value'		=> 'custom',
					)
				),
			),
			// Search in Header
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-search-header-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Search in Header', 'emphires' ) . '</h2> <span>' . esc_html__( 'Options for search in header area', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'header-search',
				'label'			=> esc_attr__( 'Show Search Icon in Header Area?', 'emphires' ),
				'description'	=> esc_attr__( 'Select YES to show search icon in header area.', 'emphires' ),
				'default'		=> '0',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'header-search-placeholder',
				'label'			=> esc_attr__( 'Search input placeholder text', 'emphires' ),
				'description'	=> esc_attr__( 'Search input placeholder text', 'emphires' ),
				'default'		=> esc_attr__( 'Write Search Keyword & Press Enter', 'emphires' ),
				'active_callback' => array(
					array(
						'setting'	=> 'header-search',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'header-search-btn-text',
				'label'			=> esc_attr__( 'Search button text', 'emphires' ),
				'description'	=> esc_attr__( 'Search button text', 'emphires' ),
				'default'		=> esc_attr__( 'Search', 'emphires' ),
				'active_callback' => array(
					array(
						'setting'	=> 'header-search',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			// Sticky Header
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-sticky-header-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Sticky Header Options', 'emphires' ) . '</h2> <span>' . esc_html__( 'Options for sticky header area', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'sticky-header',
				'label'			=> esc_attr__( 'Sticky Header on Scroll?', 'emphires' ),
				'description'	=> esc_attr__( 'Select YES to make header sticky on scroll.', 'emphires' ),
				'default'		=> '1',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'sticky-header-height',
				'label'			=> esc_attr__( 'Sticky Area Height (in pixel)', 'emphires' ),
				'description'	=> esc_attr__( 'Select Area height for sticky header', 'emphires' ),
				'default'		=> 90,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 300,
					'step'			=> 1,
				),
				'active_callback'=> array(
					array(
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '1',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '3',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '4',
						),
						array(
							'setting'	=> 'header-style',
							'operator'	=> '==',
							'value'		=> '5',
						),
					)
				),
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'sticky-header-bgcolor',
				'label'				=> esc_html__( 'Sticky Area Background Color', 'emphires' ),
				'default'			=> 'white',
				'choices'			=> $pre_color_list,
				'active_callback'	=> array(
					array(
						'setting'	=> 'sticky-header',
						'operator'	=> '==',
						'value'		=> '1',
					)
				),
			),
			array(
				'type'			=> 'color',
				'settings'		=> 'sticky-header-background-color',
				'label'			=> esc_attr__( 'Sticky Header Background Color', 'emphires' ),
				'description'	=> esc_attr__( 'Select custom color for sticky header background', 'emphires' ),
				'default'		=> '#ffffff',
				'active_callback'=> array(
					array(
						'setting'	=> 'sticky-header',
						'operator'	=> '==',
						'value'		=> '1',
					),
					array(
						'setting'	=> 'sticky-header-bgcolor',
						'operator'	=> '==',
						'value'		=> 'custom',
					)
				),
			),
			// Responsive Header
			array(
				'type'			=> 'custom',
				'settings'		=> 'responsive-header-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Responsive Header Options', 'emphires' ) . '</h2> <span>' . esc_html__( 'Options for responsive (mobile or tablet mode) header area', 'emphires' ) . '</span></div>',
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'responsive-header-bgcolor',
				'label'				=> esc_html__( 'Select header background color', 'emphires' ),
				'default'			=> 'white',
				'choices'			=> $pre_two_color_list,
			),
		),
	),
	// Menu Options
	'menu_options' => array(
		'section_settings' => array(
			'title'			=> esc_attr__( 'Menu Options', 'emphires' ),
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			// Main Menu Options
			array(
				'type'			=> 'custom',
				'settings'		=> 'main-menu-heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Main Menu Options', 'emphires' ) . '</h2> <span>' . esc_html__( 'Set Main Menu font settings', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'main-menu-typography',
				'label'			=> esc_attr__( 'Main Menu Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> '800',
					'font-size'			=> '13px',
					'line-height'		=> '20px',
					'letter-spacing'	=> '0.5px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 800,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> '.cspt-navbar div > ul > li > a',
			),
			array(
				'type'			=> 'color',
				'settings'		=> 'main-menu-sticky-color',
				'label'			=> esc_attr__( 'Main Menu Text Color for Sticky Header', 'emphires' ),
				'description'	=> esc_attr__( 'This color will be applied to main menu text when header is sticky', 'emphires' ),
				'default'		=> '#09162a',
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'main-menu-active-color',
				'label'			=> esc_attr__( 'Main Menu Active Link Color', 'emphires' ),
				'description'	=> esc_attr__( 'This color will be applied to main menu when the menu link is active', 'emphires' ),
				'default'		=> 'globalcolor',
				'choices'		=> $pre_text_color_list,
			),
			// Dropdown Menu Options
			array(
				'type'			=> 'custom',
				'settings'		=> 'drop-down-menu-heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Dropdown Menu Options', 'emphires' ) . '</h2> <span>' . esc_html__( 'Set Dropdown font settings', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'dropdown-menu-typography',
				'label'			=> esc_attr__( 'Dropdown Menu Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> '700',
					'font-size'			=> '14px',
					'line-height'		=> '1.5',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 700,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> '.cspt-navbar ul ul a',
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'drop-down-menu-active-color',
				'label'				=> esc_html__( 'Dropdown Menu Active Color', 'emphires' ),
				'default'			=> 'globalcolor',
				'choices'			=> $pre_text_color_list,
			),
			array(
				'type'			=> 'background',
				'settings'		=> 'dropdown_background',
				'label'			=> esc_attr__( 'Dropdown Menu Background', 'emphires' ),
				'description'	=> esc_attr__( 'Background settings for Dropdown Menu', 'emphires' ),
				'default'		=> array(
					'background-color'		=> '#f6f6f6',
					'background-image'		=> '',
					'background-repeat'		=> 'repeat',
					'background-position'	=> 'center center',
					'background-size'		=> 'cover',
					'background-attachment'	=> 'scroll',
				),
				'cspt-output'	=> '.cspt-navbar ul ul,.cspt-navbar ul ul:before',
			),
		)
	),
	// Titlebar Options
	'titlebar_options' => array(
		'section_settings' => array(
			'title'			=> esc_attr__( 'Titlebar Options', 'emphires' ),
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			array(
				'type'			=> 'switch',
				'settings'		=> 'titlebar-enable',
				'label'			=> esc_attr__( 'Show Titlebar?', 'emphires' ),
				'description'	=> esc_attr__( 'Show or hide Titlebar', 'emphires' ),
				'default'		=> '1',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'titlebar-height',
				'label'			=> esc_attr__( 'Titlebar Height', 'emphires' ),
				'default'		=> 200,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 1000,
					'step'			=> 1,
				),
				'active_callback'	=> array( array(
					'setting'			=> 'titlebar-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
			array(
				'type'			=> 'select',
				'settings'		=> 'titlebar-style',
				'label'			=> esc_attr__( 'Titlebar Style', 'emphires' ),
				'description'	=> esc_attr__( 'Select style for Titlebar', 'emphires' ),
				'default'		=> 'left',
				'choices'		=>  array(
					'left'			=> esc_attr__( 'All Left Aligned', 'emphires' ),
					'center'		=> esc_attr__( 'All Center Aligned', 'emphires' ),
				),
				'active_callback'	=> array( array(
					'setting'			=> 'titlebar-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'titlebar-hide-breadcrumb',
				'label'			=> esc_attr__( 'Hide Breadcrumb?', 'emphires' ),
				'description'	=> esc_attr__( 'Show or hide breadcrumb in Titlebar', 'emphires' ),
				'default'		=> '0',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
				'active_callback'	=> array( array(
					'setting'			=> 'titlebar-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
			array(
				'type'			=> 'multicheck',
				'settings'		=> 'titlebar-bg-featured',
				'label'			=> esc_attr__( 'Featured Image as Titlebar Background', 'emphires' ),
				'description'	=> esc_attr__( 'Select which section (CPT) will show featured image as background image in Titlebar. NOTE: This will work for Single view only.', 'emphires' ),
				'default'		=> array(),
				'choices'		=> array(
					'post'				=> sprintf( esc_attr__('For %1$s', 'emphires') , '"Post"' ),
					'page'				=> sprintf( esc_attr__('For %1$s', 'emphires') , '"Page"' ),
					'cspt-portfolio'	=> sprintf( esc_attr__('For %1$s', 'emphires') , '"'.$portfolio_cpt_singular_title.'"' ),
					'cspt-team-member'	=> sprintf( esc_attr__('For %1$s', 'emphires') , '"'.$team_cpt_singular_title.'"' ),
				),
				'active_callback'	=> array( array(
					'setting'			=> 'titlebar-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'titlebar-bgcolor',
				'label'				=> esc_html__( 'Select Titlebar background color', 'emphires' ),
				'default'			=> 'custom',
				'choices'			=> array_merge( array('gradientcolor'	=> get_template_directory_uri() . '/includes/images/precolor-gradientcolor.png',), $pre_color_list),
				'active_callback'	=> array( array(
					'setting'			=> 'titlebar-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
			array(
				'type'			=> 'background',
				'settings'		=> 'titlebar-background',
				'label'			=> esc_attr__( 'Background', 'emphires' ),
				'description'	=> esc_attr__( 'Background Settings', 'emphires' ),
				'default'		=> array(
					'background-color'      => '#e6edf3',
					'background-repeat'     => 'no-repeat',
					'background-position'   => 'center center',
					'background-size'       => 'cover',
					'background-attachment' => 'scroll',
				),
				'cspt-output'	=> '.cspt-title-bar-wrapper, .cspt-title-bar-wrapper.cspt-bg-color-custom:before',
				'active_callback' => array( array(
					'setting'		=> 'titlebar-enable',
					'operator'		=> '==',
					'value'			=> '1',
				) ),
			),
			array(
				'type'		=> 'typography',
				'settings'	=> 'titlebar-heading-typography',
				'label'		=> esc_attr__( 'Titlebar Heading Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Nunito',
					'variant'			=> '800',
					'font-size'			=> '42px',
					'line-height'		=> '52px',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 800,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> '.cspt-tbar-title',
				'active_callback'	=> array( array(
					'setting'			=> 'titlebar-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'titlebar-subheading-typography',
				'label'			=> esc_attr__( 'Titlebar Sub-heading Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Muli',
					'variant'			=> '700',
					'font-size'			=> '16px',
					'line-height'		=> '1.5',
					'letter-spacing'	=> '0px',
					'color'				=> '#0c121d',
					'text-transform'	=> 'none',
					'font-backup'		=> '',
					'font-weight'		=> 700,
					'font-style'		=> 'normal',
				),
				'priority'		=> 10,
				'cspt-output'	=> '.cspt-tbar-subtitle',
				'active_callback'	=> array( array(
					'setting'			=> 'titlebar-enable',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
			array(
				'type'			=> 'typography',
				'settings'		=> 'titlebar-breadcrumb-typography',
				'label'			=> esc_attr__( 'Titlebar Breadcrumb Typography', 'emphires' ),
				'choices'		=> [ 'fonts' => [ 'google' => [ 'popularity', 600 ], ], ],
				'default'		=> array(
					'font-family'		=> 'Muli',
					'variant'			=> '700',
					'font-size'			=> '12px',
					'line-height'		=> '1.5',
					'letter-spacing'	=> '1px',
					'color'				=> '#6d7a8c',
					'text-transform'	=> 'uppercase',
					'font-backup'		=> '',
					'font-weight'		=> 700,
					'font-style'		=> 'normal',
				),
			'priority'				=> 10,
				'cspt-output'		=> '.cspt-breadcrumb, .cspt-breadcrumb a',
				'active_callback'	=> array(
					array(
						'setting'			=> 'titlebar-enable',
						'operator'			=> '==',
						'value'				=> '1',
					),
					array(
						'setting'			=> 'titlebar-hide-breadcrumb',
						'operator'			=> '==',
						'value'				=> '0',
					)
				),
			),
		),
	),
	// Footer Options
	'footer_options' => array(
		'section_settings' => array(
			'title'			=> esc_attr__( 'Footer Options', 'emphires' ),
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			// Footer Background settings
			array(
				'type'			=> 'custom',
				'settings'		=> 'footer-background-settings-heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Footer Background Settings', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Manage footer background settings from here', 'emphires' ) , $portfolio_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'footer-bgcolor',
				'label'			=> esc_html__( 'Select Footer background color', 'emphires' ),
				'default'		=> 'blackish',
				'choices'		=> array_merge( array('gradientcolor'	=> get_template_directory_uri() . '/includes/images/precolor-gradientcolor.png',), $pre_color_list),
			),
			array(
				'type'			=> 'background',
				'settings'		=> 'footer-background',
				'label'			=> esc_attr__( 'Background', 'emphires' ),
				'description'	=> esc_attr__( 'Background Settings', 'emphires' ),
				'default'		=> array(
					'background-color'		=> '#0c121d',
					'background-image'		=> '',
					'background-repeat'		=> 'repeat',
					'background-position'	=> 'center center',
					'background-size'		=> 'cover',
					'background-attachment'	=> 'scroll',
				),

				'cspt-output'	=> '.site-footer, .site-footer.cspt-bg-color-custom:before',
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'footer-text-color',
				'label'				=> esc_attr__( 'Select Footer Text Color', 'emphires' ),
				'default'			=> 'white',
				'choices'			=> $pre_text_color_list,
			),
			// Footer Big Text Area
			array(
				'type'			=> 'custom',
				'settings'		=> 'footer-big-text-area-heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Footer Big Text Area', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Manage footer big text area from here', 'emphires' ) , $portfolio_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'footer-big-text-area',
				'label'			=> esc_attr__( 'Show footer big text area?', 'emphires' ),
				'default'		=> '0',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'				=> 'textarea',
				'settings'			=> 'footer-big-text',
				'label'				=> esc_attr__( 'Footer Text Area', 'emphires' ),
				'default'			=> cspt_esc_kses( '<i class="cspt-emphires-icon cspt-base-icon-form"></i> Get Update From Anywhere<span class="cspt-footer-small-title">DONT MISS OUT ON THE GOOD NEWS</span>' ),
				'active_callback'	=> array( array(
					'setting'			=> 'footer-big-text-area',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
				'partial_refresh'	=> array(
					'preheader-left'		=> array(
						'selector'			=> '.footer-big-text-area',
						'render_callback'	=> function() {
							return get_theme_mod('footer-big-text');
						},
					)
				),
			),
			array(
				'type'				=> 'textarea',
				'settings'			=> 'footer-form-area',
				'label'				=> esc_attr__( 'Footer Form Area', 'emphires' ),
				'default'			=> '',
				'active_callback'	=> array( array(
					'setting'			=> 'footer-big-text-area',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
				'partial_refresh'	=> array(
					'preheader-left'		=> array(
						'selector'			=> '.footer-form-area',
						'render_callback'	=> function() {
							return get_theme_mod('footer-form-area');
						},
					)
				),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'footer-big-text-area-bgcolor',
				'label'			=> esc_html__( 'Select Footer Big Text Area background color', 'emphires' ),
				'default'		=> 'secondarycolor',
				'active_callback'	=> array( array(
					'setting'			=> 'footer-big-text-area',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
				'choices'		=> array_merge( array('gradientcolor'	=> get_template_directory_uri() . '/includes/images/precolor-gradientcolor.png',), $pre_color_list),
			),
			array(
				'type'			=> 'color',
				'settings'		=> 'footer-big-text-area-bgcolor-custom',
				'label'			=> esc_attr__( 'Select Footer Big Text Area background custom color', 'emphires' ),
				'description'	=> esc_attr__( 'Select custom color for Footer Big Text Area background', 'emphires' ),
				'default'		=> '#ff5e15',
				'active_callback'=> array(
					array(
						'setting'	=> 'footer-big-text-area-bgcolor',
						'operator'	=> '==',
						'value'		=> 'custom',
					),
					array(
						'setting'			=> 'footer-big-text-area',
						'operator'			=> '==',
						'value'				=> '1',
					)
				),
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'footer-big-text-area-overlay',
				'label'			=> esc_attr__( 'Overlay Footer big text area box?', 'emphires' ),
				'default'		=> false,
				'choices'		=> array(
					'on'			=> esc_attr__( 'Yes', 'emphires' ),
					'off'			=> esc_attr__( 'No', 'emphires' ),
				),
				'active_callback'	=> array( array(
					'setting'			=> 'footer-big-text-area',
					'operator'			=> '==',
					'value'				=> '1',
				) ),
			),
			// Footer Widget Area
			array(
				'type'			=> 'custom',
				'settings'		=> 'footer-widget-heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Footer Widget Area', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Manage widget area settings', 'emphires' ) , $portfolio_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'footer-column',
				'label'		=> esc_html__( 'Footer Widget Column Type', 'emphires' ),
				'description'	=> esc_html__( 'This will show widgets. You can manage it from "Admin > Appearance > Widgets" section.', 'emphires' ),
				'default'	=> '3-3-3-3',
				'choices'		=> array(
					'12'		=> get_template_directory_uri() . '/includes/images/footer-12.png',
					'6-6'		=> get_template_directory_uri() . '/includes/images/footer-6-6.png',
					'4-4-4'		=> get_template_directory_uri() . '/includes/images/footer-4-4-4.png',
					'3-3-3-3'	=> get_template_directory_uri() . '/includes/images/footer-3-3-3-3.png',
					'2-2-2-6'	=> get_template_directory_uri() . '/includes/images/footer-2-2-2-6.png',
					'6-2-2-2'	=> get_template_directory_uri() . '/includes/images/footer-6-2-2-2.png',
					'8-4'		=> get_template_directory_uri() . '/includes/images/footer-8-4.png',
					'4-8'		=> get_template_directory_uri() . '/includes/images/footer-4-8.png',
					'custom'	=> get_template_directory_uri() . '/includes/images/footer-col-custom.png',
				),
			),
			array(
				'type'			=> 'select',
				'settings'		=> 'footer-1-col-width',
				'label'			=> esc_attr__( 'Footer Widget Width - 1st Column', 'emphires' ),
				'description'	=> esc_attr__( 'Set custom width of the 1st column in footer widget area', 'emphires' ),
				'default'		=> '30',
				'choices'		=> $footer_col_width_array,
				'active_callback'	=> array(
					array(
						'setting'			=> 'footer-column',
						'operator'			=> '==',
						'value'				=> 'custom',
					)
				),
			),
			array(
				'type'			=> 'select',
				'settings'		=> 'footer-2-col-width',
				'label'			=> esc_attr__( 'Footer Widget Width - 2nd Column', 'emphires' ),
				'description'	=> esc_attr__( 'Set custom width of the 2nd column in footer widget area', 'emphires' ),
				'default'		=> '20',
				'choices'		=> $footer_col_width_array,
				'active_callback'	=> array(
					array(
						'setting'			=> 'footer-column',
						'operator'			=> '==',
						'value'				=> 'custom',
					)
				),
			),
			array(
				'type'			=> 'select',
				'settings'		=> 'footer-3-col-width',
				'label'			=> esc_attr__( 'Footer Widget Width - 3rd Column', 'emphires' ),
				'description'	=> esc_attr__( 'Set custom width of the 3rd column in footer widget area', 'emphires' ),
				'default'		=> '20',
				'choices'		=> $footer_col_width_array,
				'active_callback'	=> array(
					array(
						'setting'			=> 'footer-column',
						'operator'			=> '==',
						'value'				=> 'custom',
					)
				),
			),
			array(
				'type'			=> 'select',
				'settings'		=> 'footer-4-col-width',
				'label'			=> esc_attr__( 'Footer Widget Width - 4th Column', 'emphires' ),
				'description'	=> esc_attr__( 'Set custom width of the 4th column in footer widget area', 'emphires' ),
				'default'		=> '30',
				'choices'		=> $footer_col_width_array,
				'active_callback'	=> array(
					array(
						'setting'			=> 'footer-column',
						'operator'			=> '==',
						'value'				=> 'custom',
					)
				),
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'footer-widget-bgcolor',
				'label'				=> esc_html__( 'Select Footer Widget Area background color', 'emphires' ),
				'default'			=> 'transparent',
				'choices'			=> array_merge( array('gradientcolor'	=> get_template_directory_uri() . '/includes/images/precolor-gradientcolor.png',), $pre_color_list),
			),
			array(
				'type'			=> 'background',
				'settings'		=> 'footer-widget-background',
				'label'			=> esc_attr__( 'Footer Widget Area Background', 'emphires' ),
				'description'	=> esc_attr__( 'Background Settings for footer widget area', 'emphires' ),
				'default'		=> array(
					'background-color'		=> '#969696',
				    'background-image'		=> '',
				    'background-repeat'		=> 'repeat',
				    'background-position'	=> 'center center',
				    'background-size'		=> 'cover',
				    'background-attachment'	=> 'scroll',
				),
				'cspt-output'	=> '.cspt-footer-widget-area, .cspt-footer-widget-area.cspt-bg-color-custom:before',
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'footer-widget-color-switch',
				'label'			=> esc_attr__( 'Set Custom Text Color for Widget Area?', 'emphires' ),
				'default'		=> '0',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'footer-widget-text-color',
				'label'				=> esc_attr__( 'Footer Widget Area Text Color', 'emphires' ),
				'default'			=> 'transparent',
				'choices'			=> $pre_text_color_list,
				'active_callback'	=> array(
					array(
						'setting'			=> 'footer-widget-color-switch',
						'operator'			=> '==',
						'value'				=> '1',
					)
				),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'footer-copyright-heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Footer Copyright Text Area', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Manage bottom footer area from here', 'emphires' ) , $portfolio_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'footer-copyright-bgcolor',
				'label'				=> esc_html__( 'Select Footer Copyright Area background color', 'emphires' ),
				'default'			=> 'transparent',
				'choices'			=> array_merge( array('gradientcolor'	=> get_template_directory_uri() . '/includes/images/precolor-gradientcolor.png',), $pre_color_list),
			),
			array(
				'type'			=> 'background',
				'settings'		=> 'footer-copyright-background',
				'label'			=> esc_attr__( 'Footer Copyright Area Background', 'emphires' ),
				'description'	=> esc_attr__( 'Background Settings for footer copyright area', 'emphires' ),
				'default'		=> array(
					'background-color'		=> '#0a0a0a',
				    'background-image'		=> '',
				    'background-repeat'		=> 'repeat',
				    'background-position'	=> 'center center',
				    'background-size'		=> 'cover',
				    'background-attachment'	=> 'scroll',
				),
				'cspt-output'	=> '.cspt-footer-text-area, .cspt-footer-text-area.cspt-bg-color-custom:before',
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'footer-copyright-color-switch',
				'label'			=> esc_attr__( 'Set Custom Text Color for Copyright Area?', 'emphires' ),
				'default'		=> '0',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'footer-copyright-text-color',
				'label'				=> esc_attr__( 'Footer Copyright Area Text Color', 'emphires' ),
				'default'			=> 'white',
				'choices'			=> array_merge( array('inherit' => get_template_directory_uri() . '/includes/images/precolor-inherit.png'), $pre_text_color_list ),
				'active_callback'	=> array(
					array(
						'setting'		=> 'footer-copyright-color-switch',
						'operator'		=> '==',
						'value'			=> '1',
					)
				),
			),
			array(
				'type'			=> 'editor',
				'settings'		=> 'copyright-text',
				'label'			=> esc_attr__( 'Footer Copyright Text', 'emphires' ),
				'default'		=> sprintf( esc_attr__( 'Copyright &copy; %1$s %2$s, All Rights Reserved.', 'emphires' ), date('Y'), '<a href="' . esc_url( home_url( '/' ) ) . '">' . get_bloginfo('name') . '</a>' ),
				'priority'		=> 10,
				'partial_refresh'	=> array(
					'copyright-text'		=> array(
						'selector'			=> '.cspt-footer-copyright-text-area',
						'render_callback'	=> function() {
							return get_theme_mod('copyright-text');
						},
					)
				),
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'footer-show-social',
				'label'			=> esc_attr__( 'Show social in footer area?', 'emphires' ),
				'default'		=> '0',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'footer-show-menu',
				'label'			=> esc_attr__( 'Show menu in footer area?', 'emphires' ),
				'default'		=> '0',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
		)
	),
	// Social Links Options
	'social_links_options' => array(
		'section_settings' => array(
			'title'			=> esc_attr__( 'Social Links Options', 'emphires' ),
			'description'	=> esc_attr__( 'You can use [cspt-social-links] shortcode for social list with icon.', 'emphires' ),
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => $social_options_array
	),
	// Blog Settings
	'blog_options' => array(
		'section_settings' => array(
			'title'			=> esc_attr__( 'Blog Options', 'emphires' ),
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-blog-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Blog Settings', 'emphires' ) . '</h2> <span>' . esc_html__( 'Settings for Blogroll, Category, Tag, Archives etc section.', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'blogroll-view',
				'label'			=> esc_html__( 'Blogroll view', 'emphires' ),
				'default'		=> 'classic',
				'choices'		=> cspt_element_template_list('blog', false),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'blogroll-column',
				'label'			=> esc_html__( 'Blogroll column', 'emphires' ),
				'default'		=> '3',
				'choices'		=> $column_list,
				'active_callback'	=> array(
					array(
						'setting'		=> 'blogroll-view',
						'operator'		=> '!=',
						'value'			=> 'classic',
					)
				),
			),
			array(
			'type'			=> 'switch',
			'settings'		=> 'blog-show-related',
			'label'			=> esc_attr__( 'Show Related Post?', 'emphires' ),
			'default'		=> '0',
			'choices'     => array(
				'on'  => esc_attr__( 'Yes', 'emphires' ),
				'off' => esc_attr__( 'No', 'emphires' ),
			),
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'blog-related-title',
				'label'			=> esc_attr__( 'Related Post Section Title', 'emphires' ), 
				'description'	=> esc_attr__( 'Related Area Title', 'emphires' ),
				'default'		=> esc_attr__( 'Related Post', 'emphires' ),
				'active_callback' => array(
					array(
						'setting'	=> 'blog-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'blog-related-count',
				'label'			=> esc_attr__( 'How many post you like to show', 'emphires' ),
				'default'		=> 3,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 50,
					'step'			=> 1,
				),
				'active_callback' => array(
					array(
						'setting'	=> 'blog-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'blog-related-column',
				'label'			=>  esc_html__('Related Post Column', 'emphires' ),
				'default'		=> '3',
				'choices'     => $column_list,
				'active_callback' => array(
					array(
						'setting'	=> 'blog-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'blog-related-style',
				'label'			=> esc_html__( 'Related Post View', 'emphires' ),
				'default'		=> '4',
				'choices'     => $blog_styles,
				'active_callback' => array(
					array(
						'setting'	=> 'blog-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'multicheck',
				'settings'		=> 'blog-social-share',
				'label'			=> esc_attr__( 'Social share for Blog', 'emphires' ),
				'description'	=> esc_attr__( 'Select which social share buttons will appear on blog post.', 'emphires' ),
				'default'		=> array(),
				'choices'		=> cspt_social_share_list('customizer'),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-blog-classic-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Blog Classic Settings', 'emphires' ) . '</h2> <span>' . esc_html__( 'Settings for Blog Classic view.', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'blog-classic-limit-switch',
				'label'			=> esc_attr__( 'Limit Content Words for Blog Classic view?', 'emphires' ),
				'default'		=> '0',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'blog-classic-limit',
				'label'			=> esc_attr__( 'Set Word Limit for Blog Classic view', 'emphires' ),
				'description'	=> esc_attr__( 'This will add limited words before "Read More" link. This is useful if you didn\'t added Read More link in posts.', 'emphires' ),
				'default'		=> 15,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 900,
					'step'			=> 1,
				),
				'active_callback' => array(
					array(
						'setting'	=> 'blog-classic-limit-switch',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-blog-element-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Blog Style Elements (boxes) Settings', 'emphires' ) . '</h2> <span>' . esc_html__( 'Settings for Blog Style Elements.', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'blog-element-limit-switch',
				'label'			=> esc_attr__( 'Limit Content Words for Blog Element view?', 'emphires' ),
				'default'		=> '1',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'blog-element-limit',
				'label'			=> esc_attr__( 'Limit Words for Blog Element view', 'emphires' ),
				'description'	=> esc_attr__( 'This will add limited words before "Read More" link.', 'emphires' ),
				'default'		=> 30,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 900,
					'step'			=> 1,
				),
				'active_callback' => array(
					array(
						'setting'	=> 'blog-element-limit-switch',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-blog-sidebar-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Sidebar Settings', 'emphires' ) . '</h2> <span>' . esc_html__( 'Select sidebar position Page and Blog section.', 'emphires' ) . '</span></div>',
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'sidebar-post',
				'label'		=> esc_html__( 'Blog Sidebar', 'emphires' ),
				'default'	=> 'right',
				'choices'		=> array(
					'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
					'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
					'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
				),
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'sidebar-category',
				'label'		=> esc_html__( 'Blog Category/Tag Sidebar', 'emphires' ),
				'default'	=> 'right',
				'choices'		=> array(
					'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
					'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
					'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
				),
			),
		)
	),
	// Portfolio Settings
	'portfolio_options' => array(
		'section_settings' => array(
			'title'			=> sprintf( esc_attr__( '%1$s options', 'emphires' ) , $portfolio_cpt_singular_title ) ,
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-single-portfolio-settings',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . sprintf( esc_html__( 'Single %1$s Options', 'emphires' ), $portfolio_cpt_singular_title ) . '</h2> <span>' . sprintf( esc_attr__( 'Options for Single %1$s Section', 'emphires' ), $portfolio_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'portfolio-single-style',
				'label'		=> sprintf( esc_html__( '%1$s Single View Style', 'emphires' ), $portfolio_cpt_singular_title ),
				'default'	=> '2',
				'choices'		=> $portfolio_single_style_array,
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-single-portfolio-detailsbox-settings',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . sprintf( esc_html__( 'Single %1$s Details Box Options', 'emphires' ), $portfolio_cpt_singular_title ) . '</h2> <span>' . esc_attr__( 'Details Box Settings', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'portfolio-details-title',
				'label'			=> sprintf( esc_attr__( 'Single %1$s Details Box Title', 'emphires' ), $portfolio_cpt_singular_title ),
				'description'	=> esc_attr__( 'Details Box Title', 'emphires' ),
				'default'		=> esc_attr__( 'Project info', 'emphires' ),
			),
			array(
				'type'			=> 'repeater',
				'label'			=> sprintf( esc_attr__( 'Single %1$s Details Box', 'emphires' ), $portfolio_cpt_singular_title ),
				'row_label'		=> array(
					'type'			=> 'field',
					'value'			=> esc_attr__('Line', 'emphires' ),
					'field'			=> 'line_title',
				),
				'button_label'	=> esc_attr__('Add New Line', 'emphires' ),
				'settings'		=> 'portfolio-details',
				'fields'		=> array(
					'line_title'	=> array(
						'type'			=> 'text',
						'label'			=> esc_attr__( 'Line Title', 'emphires' ),
						'description'	=> esc_attr__( 'This will be the label for the line', 'emphires' ),
						'default'		=> '',
					),
					'line_type'		=> array(
						'type'			=> 'select',
						'label'			=> esc_attr__( 'Line Type', 'emphires' ),
						'description'	=> esc_attr__( 'This will be type for the line', 'emphires' ),
						'default'		=> 'text',
						'choices'		=> array(
							'text'			=> esc_attr__( 'Normal Text', 'emphires' ),
							'category'		=> esc_attr__( 'Category List (without link)', 'emphires' ),
							'category-link'	=> esc_attr__( 'Category List (with link)', 'emphires' ),
						)
					),
				),
				'default'		=> array(
					array(
						'line_title'	=> esc_attr__('Date', 'emphires'),
						'line_type'		=> 'text',
					),
					array(
						'line_title'	=> esc_attr__('Client', 'emphires'),
						'line_type'		=> 'text',
					),
					array(
						'line_title'	=> esc_attr__('Category', 'emphires'),
						'line_type'		=> 'category-link',
					),
					array(
						'line_title'	=> esc_attr__('Address', 'emphires'),
						'line_type'		=> 'text',
					),
    			),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-single-portfolio-related-settings',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . sprintf( esc_html__( 'Related %1$s Options', 'emphires' ), $portfolio_cpt_singular_title ) . '</h2> <span>' . sprintf( esc_html__( 'Options for Related %1$s', 'emphires' ), $portfolio_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'portfolio-show-related',
				'label'			=> sprintf( esc_attr__( 'Show Related %1$s?', 'emphires' ), $portfolio_cpt_singular_title ),
				'default'		=> '1',
				'choices'		=> array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'portfolio-related-title',
				'label'			=> sprintf( esc_attr__( 'Related %1$s Section Title', 'emphires' ), $portfolio_cpt_singular_title ),
				'description'	=> esc_attr__( 'Related Area Title', 'emphires' ),
				'default'		=> sprintf( esc_attr__( 'Related %1$s', 'emphires' ), $portfolio_cpt_singular_title ),
				'active_callback' => array(
					array(
						'setting'	=> 'portfolio-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'portfolio-related-count',
				'label'			=> sprintf( esc_attr__( 'How many %1$s you like to show', 'emphires' ), $portfolio_cpt_singular_title ),
				'default'		=> 3,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 50,
					'step'			=> 1,
				),
				'active_callback' => array(
					array(
						'setting'	=> 'portfolio-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'portfolio-related-column',
				'label'			=> sprintf( esc_html__( 'Related %1$s Column', 'emphires' ), $portfolio_cpt_singular_title ),
				'default'		=> '3',
				'choices'		=> $column_list,
				'active_callback' => array(
					array(
						'setting'	=> 'portfolio-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'portfolio-related-style',
				'label'			=> sprintf( esc_html__( 'Related %1$s View', 'emphires' ), $portfolio_cpt_singular_title ),
				'default'		=> '2',
				'choices'		=> cspt_element_template_list('portfolio', false),
				'active_callback' => array(
					array(
						'setting'	=> 'portfolio-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-portfolio-cat-view',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . sprintf( esc_html__( 'Element View Style for %1$s', 'emphires' ), $portfolio_cat_singular_title ) . '</h2> <span>' . sprintf( esc_attr__( 'Select view style for elements on %1$s', 'emphires' ) , $portfolio_cat_singular_title ) . '</span></div>',
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'portfolio-cat-style',
				'label'			=> sprintf( esc_html__( 'Element View on %1$s', 'emphires' ), $portfolio_cat_singular_title ),
				'default'		=> '1',
				'choices'		=> cspt_element_template_list('portfolio', false),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'portfolio-cat-column',
				'label'			=> sprintf( esc_html__( '%1$s View Column', 'emphires' ), $portfolio_cat_singular_title ),
				'default'		=> '3',
				'choices'		=> $column_list,
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'portfolio-cat-count',
				'label'			=> sprintf( esc_attr__( 'How many %1$s you like to show on single %2$s page', 'emphires' ), $portfolio_cpt_singular_title, $portfolio_cat_singular_title ),
				'default'		=> 9,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 50,
					'step'			=> 1,
				),
				'active_callback' => array(
					array(
						'setting'	=> 'portfolio-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-portfolio-sidebar-settings',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Sidebar Options', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Sidebar options for %1$s Section', 'emphires' ) , $portfolio_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'sidebar-portfolio',
				'label'		=> sprintf( esc_html__( '%1$s Sidebar', 'emphires' ), $portfolio_cpt_singular_title ),
				'default'	=> 'no',
				'choices'		=> array(
					'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
					'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
					'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
				),
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'sidebar-portfolio-category',
				'label'		=> sprintf( esc_html__( '%1$s Sidebar', 'emphires' ), $portfolio_cat_singular_title ),
				'default'	=> 'right',
				'choices'		=> array(
					'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
					'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
					'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
				),
			),
			// Advanced Options
			array(
				'type'			=> 'custom',
				'settings'		=> 'portfolio-advanced-heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Advanced Options', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Advanced Options for %1$s Section', 'emphires' ) , $portfolio_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'portfolio-cpt-title',
				'label'			=> sprintf( esc_attr__( '%1$s Section Title', 'emphires' ) , $portfolio_cpt_singular_title ) ,
				'description'	=> esc_attr__( 'CPT Title', 'emphires' ),
				'default'		=> esc_attr__( 'Portfolio', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'portfolio-cpt-singular-title',
				'label'			=> sprintf( esc_attr__( '%1$s Section Title (Singular)', 'emphires' ) , $portfolio_cpt_singular_title ) ,
				'description'	=> esc_attr__( 'CPT Singular Title', 'emphires' ),
				'default'		=> esc_attr__( 'Portfolio', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'portfolio-cpt-slug',
				'label'			=> sprintf( esc_attr__( '%1$s Section URl Slug', 'emphires' ) , $portfolio_cpt_singular_title ) ,
				'description'	=> esc_attr__( 'CPT URL slug.', 'emphires' ) . '<br />' . '<strong>' . esc_attr__( 'NOTE:', 'emphires' ) . '</strong> ' . sprintf( esc_attr__( 'After changing this, please go to %1$s section and save it once.', 'emphires' ), cspt_esc_kses('<a href="' . esc_url( get_admin_url().'options-permalink.php' ) . '" target="_blank"><strong>Settings > Permalinks</strong></a>') ) . '<br /><br />',
				'default'		=> esc_attr( 'portfolio' ),
				'priority'		=> 10,
			),
			// Portfolio Category
			array(
				'type'			=> 'text',
				'settings'		=> 'portfolio-cat-title',
				'label'			=> sprintf( esc_attr__( '%1$s Title', 'emphires' ) , $portfolio_cat_singular_title ) ,
				'description'	=> esc_attr__( 'Taxonomy Title', 'emphires' ),
				'default'		=> esc_attr__( 'Portfolio Categories', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'portfolio-cat-singular-title',
				'label'			=> sprintf( esc_attr__( '%1$s Title (Singular)', 'emphires' ) , $portfolio_cat_singular_title ) ,
				'description'	=> esc_attr__( 'Taxonomy Singular Title', 'emphires' ),
				'default'		=> esc_attr__( 'Portfolio Category', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'portfolio-cat-slug',
				'label'			=> sprintf( esc_attr__( '%1$s URl Slug', 'emphires' ) , $portfolio_cat_singular_title ) ,
				'description'	=> esc_attr__( 'Taxonomy URL slug', 'emphires' ),
				'description'	=> esc_attr__( 'Taxonomy URL slug.', 'emphires' ) . '<br />' . '<strong>' . esc_attr__( 'NOTE:', 'emphires' ) . '</strong> ' . sprintf( esc_attr__( 'After changing this, please go to %1$s section and save it once.', 'emphires' ), cspt_esc_kses('<a href="' . esc_url( get_admin_url().'options-permalink.php' ) . '" target="_blank"><strong>Settings > Permalinks</strong></a>') ) . '<br /><br />',
				'priority'		=> 10,
			),
		)
	),
	// Service Settings
	'service_options' => array(
		'section_settings' => array(
			'title'			=> sprintf( esc_attr__( '%1$s options', 'emphires' ) , $service_cpt_singular_title ) ,
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-single-service-settings',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . sprintf( esc_html__( 'Single %1$s Options', 'emphires' ), $service_cpt_singular_title ) . '</h2> <span>' . sprintf( esc_attr__( 'Sidebar options for %1$s Section', 'emphires' ), $service_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'service-single-style',
				'label'		=> sprintf( esc_html__( '%1$s Single View Style', 'emphires' ), $service_cpt_singular_title ),
				'default'	=> '1',
				'choices'		=> $service_single_style_array,
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'service-single-image-hide',
				'label'			=> sprintf( esc_attr__( 'Hide Featured Image on Single %1$s page? ', 'emphires' ), $service_cpt_singular_title ),
				'default'		=> '0',
				'choices'     => array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'service-show-related',
				'label'			=> sprintf( esc_attr__( 'Show Related %1$s', 'emphires' ), $service_cpt_singular_title ),
				'default'		=> '1',
				'choices'     => array(
					'on'  => esc_attr__( 'Yes', 'emphires' ),
					'off' => esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
			'type'			=> 'text',
			'settings'		=> 'service-related-title',
			'label'			=> sprintf( esc_attr__( 'Related %1$s Section Title', 'emphires' ), $service_cpt_singular_title ),
			'description'	=> esc_attr__( 'Related Area Title', 'emphires' ),
			'default'		=> sprintf( esc_attr__( 'Related %1$s', 'emphires' ), $service_cpt_singular_title ),
			'active_callback' => array(
				array(
					'setting'	=> 'service-show-related',
					'operator'	=> '==',
					'value'		=> '1',
				),
			),
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'service-related-count',
				'label'			=> sprintf( esc_attr__( 'How many %1$s you like to show', 'emphires' ), $service_cpt_singular_title ),
				'default'		=> 3,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 50,
					'step'			=> 1,
				),
				'active_callback' => array(
					array(
						'setting'	=> 'service-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'service-related-column',
				'label'			=> sprintf( esc_html__( 'Related %1$s Column', 'emphires' ), $service_cpt_singular_title ),
				'default'		=> '3',
				'choices'     => $column_list,
				'active_callback' => array(
					array(
						'setting'	=> 'service-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'service-related-style',
				'label'			=> sprintf( esc_html__( 'Related %1$s View', 'emphires' ), $service_cpt_singular_title ),
				'default'		=> '2',
				'choices'     => cspt_element_template_list('service', false),
				'active_callback' => array(
					array(
						'setting'	=> 'service-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-service-cat-view',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . sprintf( esc_html__( 'Element View Style for %1$s', 'emphires' ), $service_cat_singular_title ) . '</h2> <span>' . sprintf( esc_attr__( 'Select view style for elements on %1$s', 'emphires' ) , $service_cat_singular_title ) . '</span></div>',
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'service-cat-style',
				'label'			=> sprintf( esc_html__( 'Element View on %1$s', 'emphires' ), $service_cat_singular_title ),
				'default'		=> '1',
				'choices'		=> cspt_element_template_list('service', false),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'service-cat-column',
				'label'			=> sprintf( esc_html__( '%1$s View Column', 'emphires' ), $service_cat_singular_title ),
				'default'		=> '3',
				'choices'		=> $column_list,
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'service-cat-count',
				'label'			=> sprintf( esc_attr__( 'How many %1$s you like to show on single %2$s page', 'emphires' ), $service_cpt_singular_title, $service_cat_singular_title ),
				'default'		=> 9,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 50,
					'step'			=> 1,
				),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-service-sidebar-settings',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Sidebar Options', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Sidebar options for %1$s Section', 'emphires' ) , $service_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'sidebar-service',
				'label'		=> sprintf( esc_html__( '%1$s Sidebar', 'emphires' ), $service_cpt_singular_title ),
				'default'	=> 'left',
				'choices'		=> array(
					'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
					'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
					'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
				),
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'sidebar-service-category',
				'label'		=> sprintf( esc_html__( '%1$s Sidebar', 'emphires' ), $service_cat_singular_title ),
				'default'	=> 'no',
				'choices'		=> array(
					'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
					'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
					'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
				),
			),
			// Advanced - Heading Options
			array(
				'type'			=> 'custom',
				'settings'		=> 'service-advanced-heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Advanced Options', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Advanced Options for %1$s Section', 'emphires' ) , $service_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'service-cpt-title',
				'label'			=> sprintf( esc_attr__( '%1$s Section Title', 'emphires' ) , $service_cpt_singular_title ) ,
				'description'	=> esc_attr__( 'CPT Title', 'emphires' ),
				'default'		=> esc_attr__( 'Service', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'service-cpt-singular-title',
				'label'			=> sprintf( esc_attr__( '%1$s Section Title (Singular)', 'emphires' ) , $service_cpt_singular_title ) ,
				'description'	=> esc_attr__( 'CPT Singular Title', 'emphires' ),
				'default'		=> esc_attr__( 'Service', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'service-cpt-slug',
				'label'			=> sprintf( esc_attr__( '%1$s Section URl Slug', 'emphires' ) , $service_cpt_singular_title ) ,
				'description'	=> esc_attr__( 'CPT URL slug.', 'emphires' ) . '<br />' . '<strong>' . esc_attr__( 'NOTE:', 'emphires' ) . '</strong> ' . sprintf( esc_attr__( 'After changing this, please go to %1$s section and save it once.', 'emphires' ), cspt_esc_kses('<a href="' . esc_url( get_admin_url().'options-permalink.php' ) . '" target="_blank"><strong>Settings > Permalinks</strong></a>') ) . '<br /><br />',
				'default'		=> esc_attr( 'service' ),
				'priority'		=> 10,
			),
			// Service Category
			array(
				'type'			=> 'text',
				'settings'		=> 'service-cat-title',
				'label'			=> sprintf( esc_attr__( '%1$s Title', 'emphires' ) , $service_cat_singular_title ) ,
				'description'	=> esc_attr__( 'Taxonomy Title', 'emphires' ),
				'default'		=> esc_attr__( 'Service Categories', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'service-cat-singular-title',
				'label'			=> sprintf( esc_attr__( '%1$s Title (Singular)', 'emphires' ) , $service_cat_singular_title ) ,
				'description'	=> esc_attr__( 'Taxonomy Singular Title', 'emphires' ),
				'default'		=> esc_attr__( 'Service Category', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'service-cat-slug',
				'label'			=> sprintf( esc_attr__( '%1$s URl Slug', 'emphires' ) , $service_cat_singular_title ) ,
				'description'	=> esc_attr__( 'Taxonomy URL slug.', 'emphires' ) . '<br />' . '<strong>' . esc_attr__( 'NOTE:', 'emphires' ) . '</strong> ' . sprintf( esc_attr__( 'After changing this, please go to %1$s section and save it once.', 'emphires' ), cspt_esc_kses('<a href="' . esc_url( get_admin_url().'options-permalink.php' ) . '" target="_blank"><strong>Settings > Permalinks</strong></a>') ) . '<br /><br />',
				'default'		=> esc_attr( 'service-category' ),
				'priority'		=> 10,
			),
		)
	),
	// Team Member Settings
	'team_options' => array(
		'section_settings' => array(
			'title'			=> sprintf( esc_attr__( '%1$s options', 'emphires' ) , $team_cpt_singular_title ) ,
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-single-team-settings',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . sprintf( esc_html__( 'Single %1$s Options', 'emphires' ), $team_cpt_singular_title ) . '</h2> <span>' . sprintf( esc_attr__( 'Sidebar options for %1$s Section', 'emphires' ), $team_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'team-single-style',
				'label'		=> sprintf( esc_html__( '%1$s Single View Style', 'emphires' ), $team_cpt_singular_title ),
				'default'	=> '1',
				'choices'		=> $team_single_style_array,
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-team-group-view',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . sprintf( esc_html__( 'Element View Style for %1$s', 'emphires' ), $team_group_singular_title ) . '</h2> <span>' . sprintf( esc_attr__( 'Select view style for elements on %1$s', 'emphires' ) , $team_group_singular_title ) . '</span></div>',
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'team-group-style',
				'label'			=> sprintf( esc_html__( 'Element View on %1$s', 'emphires' ), $team_group_singular_title ),
				'default'		=> '1',
				'choices'		=> cspt_element_template_list('team', false),
			),
			array(
				'type'			=> 'radio-image',
				'settings'		=> 'team-group-column',
				'label'			=> sprintf( esc_html__( '%1$s View Column', 'emphires' ), $team_group_singular_title ),
				'default'		=> '3',
				'choices'		=> $column_list,
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'team-group-count',
				'label'			=> sprintf( esc_attr__( 'How many %1$s you like to show on single %2$s page', 'emphires' ), $team_cpt_singular_title, $team_group_singular_title ),
				'default'		=> 9,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 50,
					'step'			=> 1,
				),
				'active_callback' => array(
					array(
						'setting'	=> 'portfolio-show-related',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'custom-team-member-sidebar-settings',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Sidebar Options', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Sidebar options for %1$s Section', 'emphires' ) , $team_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'sidebar-team-member',
				'label'		=> sprintf( esc_html__( '%1$s Sidebar', 'emphires' ), $team_cpt_singular_title ),
				'default'	=> 'no',
				'choices'		=> array(
					'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
					'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
					'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
				),
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'sidebar-team-group',
				'label'		=> sprintf( esc_html__( '%1$s Sidebar', 'emphires' ), $team_group_singular_title ),
				'default'	=> 'no',
				'choices'		=> array(
					'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
					'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
					'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
				),
			),
			// Heading Options
			array(
				'type'			=> 'custom',
				'settings'		=> 'team_advanced_heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Advanced Options', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Advanced Options for %1$s Section', 'emphires' ) , $team_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'team-cpt-title',
				'label'			=> sprintf( esc_attr__( '%1$s Section Title', 'emphires' ) , $team_cpt_singular_title ) ,
				'description'	=> esc_attr__( 'CPT Title', 'emphires' ),
				'default'		=> esc_attr__( 'Team Members', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'team-cpt-singular-title',
				'label'			=> sprintf( esc_attr__( '%1$s Section Title (Singular)', 'emphires' ) , $team_cpt_singular_title ) ,
				'description'	=> esc_attr__( 'CPT Singular Title', 'emphires' ),
				'default'		=> esc_attr__( 'Team Member', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'team-cpt-slug',
				'label'			=> sprintf( esc_attr__( '%1$s Section URl Slug', 'emphires' ) , $team_cpt_singular_title ) ,
				'description'	=> esc_attr__( 'CPT URL slug.', 'emphires' ) . '<br />' . '<strong>' . esc_attr__( 'NOTE:', 'emphires' ) . '</strong> ' . sprintf( esc_attr__( 'After changing this, please go to %1$s section and save it once.', 'emphires' ), cspt_esc_kses('<a href="' . esc_url( get_admin_url().'options-permalink.php' ) . '" target="_blank"><strong>Settings > Permalinks</strong></a>') ) . '<br /><br />',
				'default'		=> esc_attr( 'team' ),
				'priority'		=> 10,
			),
			// Team Member group
			array(
				'type'			=> 'text',
				'settings'		=> 'team-group-title',
				'label'			=> sprintf( esc_attr__( '%1$s Title', 'emphires' ) , $team_group_singular_title ) ,
				'description'	=> esc_attr__( 'Taxonomy Title', 'emphires' ),
				'default'		=> esc_attr__( 'Team Groups', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'team-group-singular-title',
				'label'			=> sprintf( esc_attr__( '%1$s Title (Singular)', 'emphires' ) , $team_group_singular_title ) ,
				'description'	=> esc_attr__( 'Taxonomy Singular Title', 'emphires' ),
				'default'		=> esc_attr__( 'Team Group', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'team-group-slug',
				'label'			=> sprintf( esc_attr__( '%1$s URl Slug', 'emphires' ) , $team_group_singular_title ) ,
				'description'	=> esc_attr__( 'Taxonomy URL slug.', 'emphires' ) . '<br />' . '<strong>' . esc_attr__( 'NOTE:', 'emphires' ) . '</strong> ' . sprintf( esc_attr__( 'After changing this, please go to %1$s section and save it once.', 'emphires' ), cspt_esc_kses('<a href="' . esc_url( get_admin_url().'options-permalink.php' ) . '" target="_blank"><strong>Settings > Permalinks</strong></a>') ) . '<br /><br />',
				'default'		=> esc_attr( 'team-group' ),
				'priority'		=> 10,
			),
		)
	),
	// Testimonial Settings
	'testimonial_options' => array(
		'section_settings' => array(
			'title'			=> sprintf( esc_attr__( '%1$s options', 'emphires' ) , $testimonial_cpt_singular_title ) ,
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			// Heading Options
			array(
				'type'			=> 'custom',
				'settings'		=> 'testimonial_advanced_heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Advanced Options', 'emphires' ) . '</h2> <span>' . sprintf( esc_attr__( 'Advanced Options for %1$s Section', 'emphires' ) , $testimonial_cpt_singular_title ) . '</span></div>',
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'testimonial-cpt-title',
				'label'			=> sprintf( esc_attr__( '%1$s Section Title', 'emphires' ) , $testimonial_cpt_singular_title ) ,
				'description'	=> esc_attr__( 'CPT Title', 'emphires' ),
				'default'		=> esc_attr__( 'Testimonials', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'testimonial-cpt-singular-title',
				'label'			=> sprintf( esc_attr__( '%1$s Section Title (Singular)', 'emphires' ) , $testimonial_cpt_singular_title ) ,
				'description'	=> esc_attr__( 'CPT Singular Title', 'emphires' ),
				'default'		=> esc_attr__( 'Testimonial', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'testimonial-group-title',
				'label'			=> sprintf( esc_attr__( '%1$s Title', 'emphires' ) , $testimonial_group_singular_title ) ,
				'description'	=> esc_attr__( 'Taxonomy Title', 'emphires' ),
				'default'		=> esc_attr__( 'Testimonial Groups', 'emphires' ),
				'priority'		=> 10,
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'testimonial-group-singular-title',
				'label'			=> sprintf( esc_attr__( '%1$s Title (Singular)', 'emphires' ) , $testimonial_group_singular_title ) ,
				'description'	=> esc_attr__( 'Taxonomy Singular Title', 'emphires' ),
				'default'		=> esc_attr__( 'Testimonial Group', 'emphires' ),
				'priority'		=> 10,
			),
		)
	),
	// Search Settings
	'search_results_options' => array(
		'section_settings' => array(
			'title'			=> esc_attr__( 'Search Results options', 'emphires' ),
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			// Heading Options
			array(
				'type'			=> 'custom',
				'settings'		=> 'search_results_heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Search Results Settings', 'emphires' ) . '</h2> <span>' . esc_attr__( 'Settings for Search Results page', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'number',
				'settings'		=> 'search-results-text-limit',
				'label'			=> esc_attr__( 'Search Results Content Text Limit', 'emphires' ),
				'description'	=> esc_attr__( 'Show limited text for content of the results page/post etc.', 'emphires' ),
				'default'		=> 25,
				'choices'		=> array(
					'min'			=> 1,
					'max'			=> 900,
					'step'			=> 1,
				),
				'active_callback' => array(
					array(
						'setting'	=> 'blog-classic-limit-switch',
						'operator'	=> '==',
						'value'		=> '1',
					),
				),
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'no-results-title',
				'label'			=> esc_attr__( 'Title for "No Search Results" page', 'emphires' ),
				'description'	=> esc_attr__( 'Title to show when there is no search results', 'emphires' ),
				'default'		=> esc_attr__( 'No Results Found', 'emphires' ),
			),
			array(
				'type'			=> 'textarea',
				'settings'		=> 'no-results-text',
				'label'			=> esc_attr__( 'Text for "No Search Results" page', 'emphires' ),
				'description'	=> esc_attr__( 'Text to show when there is no search results', 'emphires' ),
				'default'		=> esc_attr__('Sorry, but nothing matched your search terms. Please try again with some different keywords.','emphires'),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'search-sidebar-options',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Sidebar Settings', 'emphires' ) . '</h2> <span>' . esc_html__( 'Select sidebar position for search results page.', 'emphires' ) . '</span></div>',
			),
			array(
				'type'		=> 'radio-image',
				'settings'	=> 'sidebar-search',
				'label'		=> esc_html__( 'Search Results Sidebar', 'emphires' ),
				'default'	=> 'no',
				'choices'		=> array(
					'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
					'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
					'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
				),
			),
		)
	),
	// Error 404 Settings
	'error_404_options' => array(
		'section_settings' => array(
			'title'			=> esc_attr__( 'Error 404 options', 'emphires' ),
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			// Heading Options
			array(
				'type'			=> 'custom',
				'settings'		=> 'error_404_heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Error 404 Settings', 'emphires' ) . '</h2> <span>' . esc_attr__( 'Settings for error 404 page', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'text',
				'settings'		=> 'error-404-heading',
				'label'			=> esc_attr__( 'Error 404 Heading', 'emphires' ),
				'description'	=> esc_attr__( 'This is heading for 404 page', 'emphires' ),
				'default'		=> esc_attr__( '404', 'emphires' ),
			),
			array(
				'type'			=> 'textarea',
				'settings'		=> 'error-404-text',
				'label'			=> esc_attr__( 'Error 404 Text', 'emphires' ),
				'description'	=> esc_attr__( 'This is text for 404 page', 'emphires' ),
				'default'		=> esc_attr__( 'OOPS! THE PAGE YOU WERE LOOKING FOR, COULDN\'T BE FOUND.', 'emphires' ),
			),
			array(
				'type'			=> 'switch',
				'settings'		=> 'error-404-show-search',
				'label'			=> esc_attr__( 'Show search form on 404 page', 'emphires' ),
				'default'		=> '1',
				'priority'		=> 10,
				'choices'		=> array(
					'on'			=> esc_attr__( 'Yes', 'emphires' ),
					'off'			=> esc_attr__( 'No', 'emphires' ),
				),
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'error_404_text_custom',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Error 404 Text Color', 'emphires' ) . '</h2> <span>' . esc_attr__( 'Settings for text color for 404 error page', 'emphires' ) . '</span></div>',
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'e404-text-color',
				'label'				=> esc_attr__( 'Select 404 page text color', 'emphires' ),
				'default'			=> 'white',
				'choices'			=> $pre_text_color_2_list,
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'error_404_bg_custom',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Error 404 Background Option', 'emphires' ) . '</h2> <span>' . esc_attr__( 'Settings for background color/image for 404 error page', 'emphires' ) . '</span></div>',
			),
			array(
				'type'				=> 'radio-image',
				'settings'			=> 'e404-bgcolor',
				'label'				=> esc_html__( 'Select 404 page background color', 'emphires' ),
				'default'			=> 'custom',
				'choices'			=> $pre_color_list,
			),
			array(
				'type'			=> 'background',
				'settings'		=> 'e404-background',
				'label'			=> esc_attr__( 'Background', 'emphires' ),
				'description'	=> esc_attr__( 'Background Settings', 'emphires' ),
				'default'		=> array(
					'background-image'      => get_template_directory_uri() . '/images/404-bg.jpg'  ,
					'background-color'      => 'rgba(0,0,0,0.5)',
					'background-repeat'     => 'no-repeat',
					'background-position'   => 'center top',
					'background-size'       => 'cover',
					'background-attachment' => 'scroll',
				),
				'cspt-output'	=> '.error404 .site-content-wrap, .error404 .cspt-bg-color-custom > .site-content-wrap:before',
			),
		)
	),
	// Custom CSS/JS Options
	'custom_code_options' => array(
		'section_settings' => array(
			'title'			=> esc_attr__( 'CSS/JS Code', 'emphires' ),
			'panel'			=> 'emphires_base_options',
			'priority'		=> 160,
		),
		'section_fields' => array(
			// Heading Options
			array(
				'type'			=> 'custom',
				'settings'		=> 'tracking_js_heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Tracking Code', 'emphires' ) . '</h2> <span>' . esc_attr__( 'Code for Google Tracking or other ', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'textarea',
				'settings'		=> 'tracking-code',
				'label'			=> esc_attr__( 'Tracking Code', 'emphires' ),
				'description'	=> esc_attr__( 'This code will be added to HEAD element on your all pages.', 'emphires' ),
				'default'		=> '',
			),
			array(
				'type'			=> 'custom',
				'settings'		=> 'cust_css_heading',
				'default'		=> '<div class="creativesplanet-option-heading"><h2>' . esc_html__( 'Custom CSS Code', 'emphires' ) . '</h2> <span>' . esc_attr__( 'Custom CSS Code', 'emphires' ) . '</span></div>',
			),
			array(
				'type'			=> 'textarea',
				'settings'		=> 'css-code',
				'label'			=> esc_attr__( 'Custom CSS Code', 'emphires' ),
				'description'	=> esc_attr__( 'Add your custom CSS code here.', 'emphires' ),
				'default'		=> '',
			),
			array(
				'type'			=> 'textarea',
				'settings'		=> 'js-code',
				'label'			=> esc_attr__( 'Custom JS Code', 'emphires' ),
				'description'	=> esc_attr__( 'Add your custom JS code here.', 'emphires' ),
				'default'		=> '',
			),
		)
	),
);
// adding WooCommerce options
if( function_exists('is_woocommerce') ){
	$kirki_options_array2 = array();
	foreach( $kirki_options_array as $sections=>$settings ){
		$kirki_options_array2[$sections] = $settings;
		if( $sections == 'portfolio_options' ){
			$kirki_options_array2['woocommerce_options'] = array(
				'section_settings' => array(
					'title'			=> esc_attr__( 'WooCommerce Options', 'emphires' ),
					'panel'			=> 'emphires_base_options',
					'priority'		=> 160,
				),
				'section_fields' => array(
					// Heading Options
					array(
						'type'		=> 'radio-image',
						'settings'	=> 'sidebar-wc-shop',
						'label'		=> esc_html__( 'WooCommerce Shop Sidebar', 'emphires' ),
						'default'	=> 'right',
						'choices'		=> array(
							'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
							'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
							'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
						),
					),
					array(
						'type'		=> 'radio-image',
						'settings'	=> 'sidebar-wc-single',
						'label'		=> esc_html__( 'WooCommerce Single Product Sidebar', 'emphires' ),
						'default'	=> 'no',
						'choices'		=> array(
							'left'		=> get_template_directory_uri() . '/includes/images/sidebar-left.png',
							'right'		=> get_template_directory_uri() . '/includes/images/sidebar-right.png',
							'no'		=> get_template_directory_uri() . '/includes/images/sidebar-no.png',
						),
					),
					array(
						'type'		=> 'text',
						'settings'	=> 'wc-title',
						'label'		=> esc_attr__( 'WooCommerce Shop Page Title', 'emphires' ),
						'description'	=> esc_attr__( 'This will appear in Titlebar on Shop page.', 'emphires' ),
						'default'	=> esc_attr('Shop'),
					),
					array(
						'type'			=> 'select',
						'settings'		=> 'wc-related-count',
						'label'			=> esc_attr__( 'How many related products will be shown?', 'emphires' ),
						'description'	=> esc_attr__( 'How many related products will be shown on single product page?', 'emphires' ),
						'default'		=> '4',
						'choices'		=> array(
							'1'		=> esc_attr__( '1 product', 'emphires' ),
							'2'		=> esc_attr__( '2 products', 'emphires' ),
							'3'		=> esc_attr__( '3 products', 'emphires' ),
							'4'		=> esc_attr__( '4 products', 'emphires' ),
						),
					),
					array(
						'type'			=> 'switch',
						'settings'		=> 'wc-show-cart-icon',
						'label'			=> esc_attr__( 'Show Cart Icon in Header?', 'emphires' ),
						'description'	=> esc_attr__( 'Show or hide cart icon in header area. The icon will appear only if WooCommerce plugin is active.', 'emphires' ),
						'default'		=> '1',
						'choices'		=> array(
							'on'		=> esc_attr__( 'Yes', 'emphires' ),
							'off'		=> esc_attr__( 'No', 'emphires' ),
						),
					),
					array(
						'type'			=> 'switch',
						'settings'		=> 'wc-show-cart-amount',
						'label'			=> esc_attr__( 'Show Amount with Cart Icon in Header?', 'emphires' ),
						'description'	=> esc_attr__( 'Show or hide cart amount with cart icon in header area. The icon will appear only if WooCommerce plugin is active.', 'emphires' ),
						'default'		=> '1',
						'choices'		=> array(
							'on'		=> esc_attr__( 'Yes', 'emphires' ),
							'off'		=> esc_attr__( 'No', 'emphires' ),
						),
						'active_callback' => array( array(
							'setting'		=> 'wc-show-cart-icon',
							'operator'		=> '==',
							'value'			=> '1',
						) ),
					),
				)
			);
		}
	} // foreach
	$kirki_options_array = $kirki_options_array2;
}
