<?php
if( !function_exists('cspt_icon_library_list') ){
function cspt_icon_library_list() {
	if( defined('EMPHIRES_ADDON_URL') ){
		// Define all icon libraries
		$icon_libraries = array(
			'fontawesome'	=> array(
				'name'			=> esc_attr__( 'Font Awesome', 'emphires' ),
				'default_icon'	=> 'fa fa-info-circle',
				'css_path'		=> esc_url( EMPHIRES_ADDON_URL . 'libraries/font-awesome/css/font-awesome.min.css' ),
				'common_class'	=> 'fa', 
				'class_prefix'	=> 'fa-',
			),
			'cspt_emphires_icon'		=> array(
				'name'			=> esc_attr__( 'Emphires Icon', 'emphires' ),
				'default_icon'	=> 'cspt-emphires-icon cspt-emphires-icon-light',
				'css_path'		=> esc_url( EMPHIRES_ADDON_URL . 'libraries/cspt-emphires-icon/flaticon.css' ),
				'common_class'	=> 'cspt-emphires-icon',
				'class_prefix'	=> 'cspt-emphires-icon-',
			),
			'sgicon'		=> array(
				'name'			=> esc_attr__( 'Stroke Gap Icon', 'emphires' ),
				'default_icon'	=> 'sgicon sgicon-WorldWide',
				'css_path'		=> esc_url( EMPHIRES_ADDON_URL . 'libraries/stroke-gap-icons/style.css' ),
				'common_class'	=> 'sgicon',
				'class_prefix'	=> 'sgicon-',
			),
			'entypo'	=> array(
				'name'			=> esc_attr__( 'Entypo', 'emphires' ),
				'default_icon'	=> '',
				'css_path'		=> esc_url( EMPHIRES_ADDON_URL . 'libraries/vc-entypo/vc_entypo.min.css' ),
				'common_class'	=> 'entypo-icon',
				'class_prefix'	=> 'entypo-icon-',
			),
			'linecons' => array(
				'name'			=> esc_attr__( 'Linecons', 'emphires' ),
				'default_icon'	=> 'vc_li vc_li-heart',
				'css_path'		=> esc_url( EMPHIRES_ADDON_URL . 'libraries/vc-linecons/vc_linecons_icons.min.css' ),
				'common_class'	=> 'vc_li',
				'class_prefix'	=> 'vc_li-',
			),
			'monosocial' => array(
				'name'			=> esc_attr__( 'Mono Social', 'emphires' ),
				'default_icon'	=> 'vc-mono vc-mono-fivehundredpx',
				'css_path'		=> esc_url( EMPHIRES_ADDON_URL . 'libraries/monosocialiconsfont/monosocialiconsfont.min.css' ),
				'common_class'	=> 'vc-mono',
				'class_prefix'	=> 'vc-mono-',
			),
		);
	} else {
		$icon_libraries =  array(
			'fontawesome'	=> array(
				'name'			=> esc_attr__( 'Font Awesome', 'emphires' ),
				'default_icon'	=> 'fa fa-info-circle',
				'css_path'		=> esc_url( get_template_directory_uri() . '/libraries/font-awesome/css/font-awesome.min.css' ),
				'common_class'	=> 'fa', 
				'class_prefix'	=> 'fa-',
			)
		);
	}
	return $icon_libraries;
}
}
if ( ! function_exists( 'cspt_edit_link' ) ) :
/**
 * Returns an accessibility-friendly link to edit a post or page.
 *
 * This also gives us a little context about what exactly we're editing
 * (post or page?) so that users understand a bit more where they are in terms
 * of the template hierarchy and their content. Helpful when/if the single-page
 * layout with multiple posts/pages shown gets confusing.
 */
function cspt_edit_link() {
	edit_post_link(
		esc_attr__( 'Edit', 'emphires' ),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;
if( !function_exists('cspt_get_base_option') ) {
function cspt_get_base_option( $option='' ){
	$return = '';
	if( class_exists('Kirki') ){
		$return = Kirki::get_option( $option );
	} else {
		if( empty($kirki_options_array) ){
			include get_template_directory() . '/includes/customizer-options.php';
		}
		foreach( $kirki_options_array as $kirki_options ){
			if( !empty($kirki_options['section_fields']) ){
				foreach( $kirki_options['section_fields'] as $field ){
					if( !empty($field['settings']) && $field['settings']==$option && isset($field['default']) ){
						$return = $field['default'];
					}
				}
			}
		}
	}
	return $return;
}
}
/**
 *  Global function - This will return array of different templates for CPT and other boxes
 */
if( !function_exists('cspt_element_template_list') ){
function cspt_element_template_list( $for='portfolio', $for_vc=true ){
	$return = array();
	if( !empty($for) ){
		// Default titles
		$portfolio_cpt_singular_title	= esc_attr__('Portfolio','emphires');
		$service_cpt_singular_title		= esc_attr__('Service','emphires');
		$team_cpt_singular_title		= esc_attr__('Team Member','emphires');
		if( class_exists('Kirki') ){
			// Portfolio - singular
			$portfolio_cpt_singular_title2	= Kirki::get_option( 'portfolio-cpt-singular-title' );
			$portfolio_cpt_singular_title	= ( !empty($portfolio_cpt_singular_title2) ) ? $portfolio_cpt_singular_title2 : $portfolio_cpt_singular_title ;
			// Service - singular
			$service_cpt_singular_title2	= Kirki::get_option( 'service-cpt-singular-title' );
			$service_cpt_singular_title	= ( !empty($service_cpt_singular_title2) ) ? $service_cpt_singular_title2 : $service_cpt_singular_title ;
			// Team - singular
			$team_cpt_singular_title2	= Kirki::get_option( 'team-cpt-singular-title' );
			$team_cpt_singular_title	= ( !empty($team_cpt_singular_title2) ) ? $team_cpt_singular_title2 : $team_cpt_singular_title ;
		}

		$elements_array = array(
			'icon-heading'			=> array( 'name' => esc_attr__('Icon Heading', 'emphires'),			'total_styles' => 19 ),
			'portfolio'				=> array( 'name' => $portfolio_cpt_singular_title,					'total_styles' => 4 ),
			'service'				=> array( 'name' => $service_cpt_singular_title,					'total_styles' => 6 ),
			'team'					=> array( 'name' => $team_cpt_singular_title,						'total_styles' => 4 ),
			'testimonial'			=> array( 'name' => esc_attr__('Testimonial', 'emphires'),			'total_styles' => 6 ),
			'client'				=> array( 'name' => esc_attr__('Client', 'emphires'),				'total_styles' => 2 ),
			'blog'					=> array( 'name' => esc_attr__('Blog', 'emphires'),					'total_styles' => 3 ),
			'pricing-table'			=> array( 'name' => esc_attr__('Pricing Table', 'emphires'),		'total_styles' => 2 ),
			'facts-in-digits'		=> array( 'name' => esc_attr__('Facts In Digits', 'emphires'),		'total_styles' => 6 ),
			'static-box'			=> array( 'name' => esc_attr__('Static Box', 'emphires'),			'total_styles' => 2 ),
			'opening-hours-list'	=> array( 'name' => esc_attr__('Opening Hours List', 'emphires'),	'total_styles' => 2 ),
		);

		if( !empty($elements_array[$for]) ){
			for ($x = 1; $x <= $elements_array[$for]['total_styles']; $x++) {
				$thumb = get_template_directory_uri() . '/includes/images/no-style-thumb.jpg';
				if( file_exists( get_stylesheet_directory() . '/includes/images/'.$for.'-style-'.$x.'.jpg' ) ){
					$thumb = get_stylesheet_directory_uri() . '/includes/images/'.$for.'-style-'.$x.'.jpg';
				} else if( file_exists( get_template_directory() . '/includes/images/'.$for.'-style-'.$x.'.jpg' ) ){
					$thumb = get_template_directory_uri() . '/includes/images/'.$for.'-style-'.$x.'.jpg';
				}
				$return[] = array(
					'label'	=> sprintf( esc_attr( '%1$s - Style %2$s', 'emphires'), $elements_array[$for]['name'], $x ),
					'value'	=> "$x",
					'thumb'	=> $thumb,
				);
			}
		}

		if( $for_vc!=true ){
			$vc_return = array();
			if( $for=='blog' ){
				$vc_return = array( 'classic' => get_template_directory_uri() . '/includes/images/blog-style-classic.jpg' );
			}
			foreach( $return as $vc_option ){
				$val = (string)$vc_option['value'];
				$vc_return[$val] = $vc_option['thumb'];
			}
			return $vc_return;
		}
	}
	return $return;
}
}

if( !function_exists('cspt_social_links_list') ){
function cspt_social_links_list( $settings = array( 'position' => 'start', 'column' => '3' ) ){
	return array(
		array(
			'id'	=> 'facebook',
			'label'	=> 'Facebook',
			'icon_class'	=> 'cspt-base-icon-facebook-squared',
		),
		array(
			'id'	=> 'twitter',
			'label'	=> 'Twitter',
			'icon_class'	=> 'cspt-base-icon-twitter',
		),
		array(
			'id'	=> 'linkedin',
			'label'	=> 'LinkedIn',
			'icon_class'	=> 'cspt-base-icon-linkedin-squared',
		),
		array(
			'id'	=> 'youtube',
			'label'	=> 'Youtube',
			'icon_class'	=> 'cspt-base-icon-youtube-play',
		),
		array(
			'id'	=> 'instagram',
			'label'	=> 'Instagram',
			'icon_class'	=> 'cspt-base-icon-instagram',
		),
		array(
			'id'	=> 'flickr',
			'label'	=> 'Flickr',
			'icon_class'	=> 'cspt-base-icon-flickr',
		),
		array(
			'id'	=> 'pinterest',
			'label'	=> 'Pinterest',
			'icon_class'	=> 'cspt-base-icon-pinterest',
		),
	);
}
}
if( !function_exists('cspt_social_share_list') ){
function cspt_social_share_list( $for='' ){
	$list = array(
		'facebook'	=> array(
			'title'			=> esc_attr('Facebook'),
			'link'			=> 'https://facebook.com/sharer/sharer.php?u=%1$s&title=%2$s',
			'icon_class'	=> 'cspt-base-icon-facebook-squared',
		),
		'twitter'	=> array(
			'title' 		=> esc_attr('Twitter'),
			'link'			=> 'https://twitter.com/intent/tweet/?text=%2$s&amp;url=%1$s',
			'icon_class'	=> 'cspt-base-icon-twitter',
		),
		'google-plus'	=> array(
			'title' 		=> esc_attr('Google Plus'),
			'link'			=> 'https://plus.google.com/share?url=%1$s',
			'icon_class'	=> 'cspt-base-icon-gplus',
		),
		'tumblr'		=> array(
			'title' 		=> esc_attr('Tumblr'),
			'link'			=> 'https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=%2$s&amp;caption=%2$s&amp;content=%1$s&amp;canonicalUrl= &amp;shareSource=tumblr_share_button',
			'icon_class'	=> 'cspt-base-icon-tumbler',
		),
		'pinterest'		=> array(
			'title'			=> esc_attr('Pinterest'),
			'link'			=> 'https://pinterest.com/pin/create/button/?url=%1$s&amp;media=%1$s&amp;description=%2$s',
			'icon_class'	=> 'cspt-base-icon-pinterest',
		),
		'linkedin'		=> array(
			'title'			=> esc_attr('LinkedIn'),
			'link'			=> 'https://www.linkedin.com/shareArticle?mini=true&amp;url=%1$s&amp;title=%2$s&amp;summary=%2$s&amp;source=%1$s',
			'icon_class'	=> 'cspt-base-icon-linkedin-squared',
		),
		'reddit'		=> array(
			'title'			=> esc_attr('Reddit'),
			'link'			=> 'https://reddit.com/submit/?url=%1$s&title=%2$s',
			'icon_class'	=> 'cspt-base-icon-reddit',
		),
	);
	if( $for=='customizer' ){
		$return_array = array();
		foreach( $list as $social=>$data ){
			$return_array[$social] = $data['title'];
		}
		return $return_array;
	}
	return $list;
}
}
if( !function_exists('cspt_blog_social_share') ){
function cspt_blog_social_share(){
	$return		 = '';
	$list        = cspt_social_share_list();
	$social_list = cspt_get_base_option('blog-social-share');
	if( !empty($social_list) && is_array($social_list) && count($social_list)>0 ){
		foreach( $social_list as $social ){
			if( !empty($list[$social]) ){
				$link = sprintf( $list[$social]['link'] , get_permalink() , get_the_title()  ) ;
				$return .= '<li class="tspt-social-li tspt-social-li-'.esc_attr($social).'"><a class="cspt-popup" href="'.esc_url($link).'" title="' . sprintf( esc_attr__('Share on %1$s','emphires'), $list[$social]['title'] ) . '"><i class="'.$list[$social]['icon_class'].'"></i></a></li>';
			}
		}
	}
	if( !empty($return) ){
		echo cspt_esc_kses('<div class="cspt-social-share"><ul>'.$return.'</ul></div>');
	}
}
}
if( !function_exists('cspt_team_social_links') ){
function cspt_team_social_links(){
	$return = '';
	$social_list = cspt_social_links_list();
	foreach( $social_list as $social ){
		$social_link = get_post_meta( get_the_ID(), 'cspt-social-links_' . $social['id'], true );
		if( !empty($social_link) ){
			$return .= '<li class="cspt-social-li cspt-social-'.$social['id'].'"><a href="' . esc_url($social_link) . '" title="' . esc_attr($social['label']) . '" target="_blank"><span><i class="' . esc_attr($social['icon_class']) . '"></i></span></a></li>';
		}
	}
	if( !empty($return) ){
		echo cspt_esc_kses('<ul class="cspt-social-links cspt-team-social-links">'.$return.'</ul>');
	}
}
}
if( !function_exists('cspt_team_designation') ){
function cspt_team_designation(){
	// Designation
	$designation = get_post_meta( get_the_ID(), 'cspt-team-details_designation', true );
	if( !empty($designation) ){
		?>
		<div class="creativesplanet-box-team-position"><?php echo esc_html($designation); ?></div>
		<?php
	}
}
}
if( !function_exists('cspt_team_email') ){
function cspt_team_email(){
	$email = get_post_meta( get_the_ID(), 'cspt-member-details_email', true );
	if( !empty($email) ){
		?>
		<div class="cspt-team-email"><?php echo esc_html($email); ?></div>
		<?php
	}
}
}
if( !function_exists('cspt_get_all_option_array') ) {
function cspt_get_all_option_array(){
	$return = array();
	include get_template_directory() . '/includes/customizer-options.php';
	foreach( $kirki_options_array as $kirki_options ){
		if( !empty($kirki_options['section_fields']) ){
			foreach( $kirki_options['section_fields'] as $field ){
				$settings            = str_replace( '-', '_', $field['settings'] );
				$settings            = str_replace( '-', '_', $settings );
				$settings            = str_replace( '-', '_', $settings );
				$settings            = str_replace( '-', '_', $settings );
				$settings            = str_replace( '-', '_', $settings );
				$return[ $settings ] = cspt_get_base_option( $field['settings'] );
			}
		}
	}
	return $return;
}
}
if( !function_exists('cspt_inline_css') ) {
function cspt_inline_css( $css='' ){
	if( !empty($css) ){
		global $cspt_inline_css;
		if( empty($cspt_inline_css) ){
			$cspt_inline_css = '';
		}
		$cspt_inline_css .= $css;
	}
}
}
if( !function_exists('cspt_custom_css_for_bg_layer') ) {
function cspt_custom_css_for_bg_layer( $css='', $atts=array() ){
	if( !empty($css) ){
		$return    = array();
		$css_array = explode( '{',$css );
		$css_class = $css_array[0];
		$css_array = explode( ';', $css_array[1] );
		$bgimage = '';  // bg image
		if( !empty($atts['cspt-bg-image-color-order']) && $atts['cspt-bg-image-color-order']=='image-over-color' ){
			// Fetch bg image src only
			preg_match_all('~\bbackground(-image)?\s*:(.*?)\(\s*(\'|")?(?<image>.*?)\3?\s*\)~i',$css,$matches);
			$images = $matches['image'];
			if( !empty($images[0]) ){
				$bgimage = $images[0];
			}
		}
		foreach( $css_array as $css_code ){
			if( substr( $css_code,0, 11 )=='background:' ){
				$return[] = $css_code;
			}
		}
		if( !empty($atts['cspt-bg-image-color-order']) && $atts['cspt-bg-image-color-order']=='image-over-color' ){
			// do nothing
		} else {
			$return[] = 'background-image:none !important';
		}
		$return = implode( ';',$return );
		$return = $css_class.':before{'.$return.'}';
		cspt_inline_css( $return );
	}
}
}
if( !function_exists('cspt_footer_big_text_area') ){
function cspt_footer_big_text_area() {
	$return = '';
	$switch = cspt_get_base_option('footer-big-text-area');
	$title = cspt_get_base_option('footer-big-text');
	$form  = cspt_get_base_option('footer-form-area');
	$bg_color = cspt_get_base_option('footer-big-text-area-bgcolor');
	if( $switch=='1' ){
		if( !empty($title) ){ $return .= '<div class="cspt-footer-big-left"><h3 class="cspt-footer-big-title">'.$title.'</h3></div>'; }
		if( !empty($form) ){ $return .= '<div class="cspt-footer-big-right">'.do_shortcode($form).'</div>'; }
		if( !empty($return) ){
			?>
			<div class="cspt-footer-big-area-wrapper <?php echo ( (!empty($bg_color)) ? esc_attr('cspt-bg-color-'.$bg_color) : '' ); ?>">
				<div class="footer-wrap cspt-footer-big-area">
					<div class="container">
						<div class="row">
							<?php echo do_shortcode($return); ?>
						</div>
					</div>
				</div>
			</div>
			<?php
		}
	}
}
}
/*
 *  Inline code generator
 */
if( !function_exists('cspt_inline_css_code_generator') ){
function cspt_inline_css_code_generator(){
	$return		= '';
	$color_css	= '';
	if( is_page() || is_singular() ){
		$titlebar_img = '';
		// Check if Titlebar bg imge is set in page or post
		$titlebar_bg_img	= get_post_meta( get_the_ID(), 'cspt-titlebar-bg-img', true );
		if( !empty($titlebar_bg_img) ){
			$img_src			= wp_get_attachment_image_src($titlebar_bg_img, 'full');
			if( !empty($img_src[0]) ){ $titlebar_img = $img_src[0]; }
			$titlebar_bg_color	= get_post_meta( get_the_ID(), 'cspt-titlebar-bg-color', true );
			$titlebar_bg_color_opacity	= get_post_meta( get_the_ID(), 'cspt-titlebar-bg-color-opacity', true );
			if( !empty($titlebar_bg_color) ){
				$color_css .= 'background-color:' . $titlebar_bg_color . ' !important;';
			}
			if( !empty($titlebar_bg_color_opacity) ){
				$color_css .= 'opacity:' . $titlebar_bg_color_opacity . ' !important;';
			}
		} else {
			// If not than check now if fetaured img as titlebar bg option is enabled or not
			$titlebar_bg_featured = cspt_get_base_option('titlebar-bg-featured');
			if( !empty($titlebar_bg_featured) && is_array($titlebar_bg_featured) ){
				if( ( is_page()							&& in_array( 'page', $titlebar_bg_featured ) ) ||
					( is_singular('post')				&& in_array( 'post', $titlebar_bg_featured ) ) ||
					( is_singular('cspt-portfolio')		&& in_array( 'cspt-portfolio',   $titlebar_bg_featured ) ) ||
					( is_singular('cspt-team-member')	&& in_array( 'cspt-team-member', $titlebar_bg_featured ) ) ||
					( is_singular('cspt-testimonial')	&& in_array( 'cspt-testimonial', $titlebar_bg_featured ) ) ||
					( is_singular('cspt-service')		&& in_array( 'cspt-service',     $titlebar_bg_featured ) )
				){
					if( has_post_thumbnail() ){
						$titlebar_img = get_the_post_thumbnail_url( get_the_ID() , 'full' );
					}
				}
			}
		}
		// Titlebar bg
		if( !empty($titlebar_img) ){
			$return .= '.cspt-title-bar-wrapper{background-image:url(\'' . $titlebar_img . '\') !important;}';
			if( !empty($color_css) ){
				$return .= '.cspt-title-bar-wrapper:before{' . $color_css . '}';
			}
		}
		// Titlebar BG Color
		$titlebar_bg_color	= get_post_meta( get_the_ID(), 'cspt-titlebar-bg-color', true );
		if( !empty($titlebar_bg_color) ){
			$opacity = get_post_meta( get_the_ID(), 'cspt-titlebar-bg-color-opacity', true );
			if( empty($opacity) ){ $opacity = '0.5'; }
			$return .= '.cspt-title-bar-wrapper:after{background-color:' . cspt_hex2rgb($titlebar_bg_color, $opacity ) . ' !important;}';
		}
	}
	if( !empty($return) ){
		cspt_inline_css( $return );
	}
}
}
add_action( 'wp', 'cspt_inline_css_code_generator' );
// Row/Column Extended
if( !function_exists('cspt_streched_html_code') ) {
function cspt_streched_html_code( $atts=array(), $content='', $return_col='first' ){
	$cspt_extended_column			= ( !empty($atts['cspt-extended-column']) ) ? $atts['cspt-extended-column'] : '' ;
	$first_col_boximage				= ( !empty($atts['cspt-first-col-bg-image']) ) ? $atts['cspt-first-col-bg-image'] : '' ;
	$last_col_boximage				= ( !empty($atts['cspt-last-col-bg-image']) ) ? $atts['cspt-last-col-bg-image'] : '' ;
	$cspt_extended_bgimage_position	= ( !empty($atts['cspt-extended-bg-image-position']) ) ? $atts['cspt-extended-bg-image-position'] : '' ;
	$cspt_extended_bgimage_repeat	= ( !empty($atts['cspt-extended-bg-image-repeat']) ) ? $atts['cspt-extended-bg-image-repeat'] : '' ;
	$total_columns         = '1';
	$first_col_bg_img_html = '';
	$last_col_bg_img_html  = '';
	if( !empty($content) ){
		// Count total columns
		$total_columns = substr_count($content, '[vc_column ') + substr_count($content, '[vc_column]');
		$css_classes[] = 'cspt-total-col-' . $total_columns;
		$first_bg = cspt_get_column_bg($content, 'first');
		$last_bg  = cspt_get_column_bg($content, 'last' );
		// Common class for both first and last extended div
		$first_stretced_css_classes = '';
		$last_stretced_css_classes  = '';
		if( !empty($first_bg['class']) ){
			$first_stretced_css_classes .= $first_bg['class'];
		}
		if( !empty($last_bg['class']) ){
			$last_stretced_css_classes .= $last_bg['class'];
		}
		if( !empty($first_bg['bg_img']) ){
			$first_stretced_css_classes .= ' cspt-bgimage-yes';
		}
		if( !empty($last_bg['bg_img']) ){
			$last_stretced_css_classes .= ' cspt-bgimage-yes';
		}
		$first_inline_css = '';
		if( !empty( $first_bg['inline_css']) ){
			$first_inline_css = ' style="' . $first_bg['inline_css'] . '" ';
		}
		$last_inline_css = '';
		if( !empty( $last_bg['inline_css']) ){
			$last_inline_css = ' style="' . $last_bg['inline_css'] . '" ';
		}
		if( ( !empty($first_bg['bg_img']) || !empty($first_bg['class']) ) && ($cspt_extended_column=='first' || $cspt_extended_column=='both') ){
			$first_col_bg_img_html = '<div class="cspt-extended-bg cspt-extended-bg-first-col">';
			switch( $total_columns ){
				case '2':
					if( class_exists('FlorianBrinkmann\LazyLoadResponsiveImages\Settings') && get_option('lazy_load_responsive_images_unveilhooks_plugin')=='1' ){
						$first_col_bg_img_html .= '<div class="col-md-6 cspt-extended-bg-col '.esc_html($first_stretced_css_classes).' lazyload" '.( (!empty($first_bg['bg_img'])) ? 'data-bg="'.$first_bg['bg_img'].'"' : '' ).'></div>
						<div class="col-md-6"></div>';
					} else {
						$first_col_bg_img_html .= '<div class="col-md-6 cspt-extended-bg-col '.esc_html($first_stretced_css_classes).'" ' . $first_inline_css . ' ></div>
						<div class="col-md-6"></div>';
					}
					break;
			}
			$first_col_bg_img_html .= '</div>';
		}
		if( (!empty($last_col_boximage) || !empty($atts['cspt-last-col-bg-color'])) && ($cspt_extended_column=='last' || $cspt_extended_column=='both') ){
			$last_col_bg_img_html = '<div class="cspt-extended-bg cspt-extended-bg-last-col">';
			switch( $total_columns ){
				case '2':
					if( class_exists('FlorianBrinkmann\LazyLoadResponsiveImages\Settings') && get_option('lazy_load_responsive_images_unveilhooks_plugin')=='1' ){
						$last_col_bg_img_html .= '<div class="col-md-6"></div>
						<div class="col-md-6 cspt-extended-bg-col '.esc_html($last_stretced_css_classes).' lazyload" '.( (!empty($last_bg['bg_img'])) ? 'data-bg="'.$last_bg['bg_img'].'"' : '' ).'></div>';
					} else {
						$last_col_bg_img_html .= '<div class="col-md-6"></div>
						<div class="col-md-6 cspt-extended-bg-col '.esc_html($last_stretced_css_classes).'" ' . $last_inline_css . '></div>';
					}
					break;
			}
			$last_col_bg_img_html .= '</div>';
		}
	}
	if( $return_col=='first' ){
		return $first_col_bg_img_html;
	} else {
		return $last_col_bg_img_html;
	}
}
}
/**
 * Lightens/darkens a given colour (hex format), returning the altered colour in hex format.7
 * @param str $hex Colour as hexadecimal (with or without hash);
 * @percent float $percent Decimal ( 0.2 = lighten by 20%(), -0.4 = darken by 40%() )
 * @return str Lightened/Darkend colour as hexadecimal (with hash);
 */
if( !function_exists('cspt_color_luminance') ) {
function cspt_color_luminance( $hex='#ff0000', $percent='0.1' ) {
	$hex = preg_replace( '/[^0-9a-f]/i', '', $hex );
	$new_hex = '#';
	if ( strlen( $hex ) < 6 ) {
		$hex = $hex[0] + $hex[0] + $hex[1] + $hex[1] + $hex[2] + $hex[2];
	}
	// convert to decimal and change luminosity
	for ($i = 0; $i < 3; $i++) {
		$dec = hexdec( substr( $hex, $i*2, 2 ) );
		$dec = min( max( 0, $dec + $dec * $percent ), 255 );
		$new_hex .= str_pad( dechex( $dec ) , 2, 0, STR_PAD_LEFT );
	}
	return $new_hex;
}
}
/*
 *  Main logo
 */
if( !function_exists('cspt_logo') ) {
function cspt_logo( $inneronly='' ) {
	$return				= '';
	$logo_img			= '';
	$main_logo			= cspt_get_base_option('logo');
	$sticky_logo		= cspt_get_base_option('sticky-logo');
	$responsive_logo	= cspt_get_base_option('responsive-logo');
	if( !empty($main_logo) ){
		$logo_img .= '<img class="cspt-main-logo" src="'.esc_url($main_logo).'" alt="' . get_bloginfo( 'name' ) . '" title="' . get_bloginfo( 'name' ) . '" />';
	}
	if( !empty($sticky_logo) ){
		$logo_img .= '<img class="cspt-sticky-logo" src="'.esc_url($sticky_logo).'" alt="' . get_bloginfo( 'name' ) . '" title="' . get_bloginfo( 'name' ) . '" />';
	}
	if( !empty($responsive_logo) ){
		$logo_img .= '<img class="cspt-responsive-logo" src="'.esc_url($responsive_logo).'" alt="' . get_bloginfo( 'name' ) . '" title="' . get_bloginfo( 'name' ) . '" />';
	}
	if( !empty($logo_img) ){
		if( $inneronly=='yes' ){
			$return .= '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">' . cspt_esc_kses($logo_img) . '</a>';
		} else {
			$return .= ( is_front_page() ) ? '<h1 class="site-title">' : '<div class="site-title">' ;
			$return .= '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
			$return .= ( is_front_page() ) ? '<span class="site-title-text">' . get_bloginfo( 'name' ) . ' - ' . get_bloginfo( 'description' ) . '</span>' : '' ;
			$return .= cspt_esc_kses($logo_img);
			$return .= '</a>';
			$return .= ( is_front_page() ) ? '</h1>' : '</div>' ;
		}
	}
	return cspt_esc_kses($return);
}
}
/*
 *  HTML Filter
 */
if( !function_exists('cspt_esc_kses') ) {
function cspt_esc_kses( $html = '' ) {
	$return = '';
	$allowed_html = array(
		'p'	=> array(
			'class'		=> array(),
			'id'		=> array(),
			'style'		=> array(),
		),
		'noscript'	=> array(),
		'a'			=> array(
			'class'			=> array(),
			'href'			=> array(),
			'title'			=> array(),
			'target'		=> array(),
			'rel'			=> array(),
			'data-sortby'	=> array(),
		),
		'button'	=> array(
			'class'		=> array(),
			'href'		=> array(),
			'title'		=> array(),
		),
		'ul'		=> array(
			'class'		=> array(),
		),
		'ol'		=> array(
			'class'		=> array(),
		),
		'li'		=> array(
			'class'			=> array(),
			'data-content'	=> array(),
		),
		'br'		=> array(),
		'em'		=> array(),
		'strong'	=> array(),
		'i'			=> array(
			'class'		=> array(),
			'style'		=> array(),
		),
		'small'	=> array(
			'name'			=> array(),
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
		),
		'div'		=> array(
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
			'role'			=> array(),
			'data-bg'		=> array(),
			'data-iconset'	=> array(),
			'data-icon'		=> array(),
			'data-show'		=> array(),
			'data-columns'	=> array(),
			'data-appear-animation'	=> array(),
			'data-from'			=> array(),
			'data-to'			=> array(),
			'data-interval'		=> array(),
			'data-before'		=> array(),
			'data-before-style'	=> array(),
			'data-after'		=> array(),
			'data-after-style'	=> array(),
			'data-digit'		=> array(),
			'data-fill'			=> array(),
			'data-emptyfill'	=> array(),
			'data-thickness'	=> array(),
			'data-filltype'		=> array(),
			'data-gradient1'	=> array(),
			'data-gradient2'	=> array(),
			'data-loop'			=> array(),
			'data-autoplay'		=> array(),
			'data-center'		=> array(),
			'data-nav'			=> array(),
			'data-dots'			=> array(),
			'data-autoplayspeed'=> array(),
			'data-margin'		=> array(),
			'data-tag'			=> array(),
			'data-id'			=> array(),
			'data-model-id'		=> array(),
			'data-shortcode-controls'		=> array(),
			'data-vc-full-width'			=> array(),
			'data-vc-full-width-init'		=> array(),
		),
		'span'		=> array(
			'class'				=> array(),
			'id'				=> array(),
			'style'				=> array(),
			'data-appear-animation'	=> array(),
			'data-from'			=> array(),
			'data-to'			=> array(),
			'data-interval'		=> array(),
			'data-before'		=> array(),
			'data-before-style'	=> array(),
			'data-after'		=> array(),
			'data-after-style'	=> array(),
			'data-digit'		=> array(),
			'data-fill'			=> array(),
			'data-emptyfill'	=> array(),
			'data-thickness'	=> array(),
			'data-filltype'		=> array(),
			'data-gradient1'	=> array(),
			'data-gradient2'	=> array(),
			'data-percentage-value'	=> array(),
			'data-value'		=> array(),
		),
		'h1'			=> array(
			'class'		=> array(),
			'id'		=> array(),
			'style'		=> array(),
		),
		'h2'			=> array(
			'class'		=> array(),
			'id'		=> array(),
			'style'		=> array(),
		),
		'h3'			=> array(
			'class'		=> array(),
			'id'		=> array(),
			'style'		=> array(),
		),
		'h4'			=> array(
			'class'		=> array(),
			'id'		=> array(),
			'style'		=> array(),
		),
		'h5'			=> array(
			'class'		=> array(),
			'id'		=> array(),
			'style'		=> array(),
		),
		'h6'			=> array(
			'class'		=> array(),
			'id'		=> array(),
			'style'		=> array(),
		),
		'header'	=> array(
			'class'		=> array(),
			'id'		=> array(),
			'style'		=> array(),
		),
		'img'		=> array(
			'class'		=> array(),
			'src'		=> array(),
			'alt'		=> array(),
			'title'		=> array(),
			'width'		=> array(),
			'height'	=> array(),
			'srcset'	=> array(),
			'sizes'		=> array(),
			'data-id'	=> array(),
			'data-srcset' => array(),
			'data-src'	=> array(),
		),
		'time'	=> array(
			'class'		=> array(),
			'id'		=> array(),
			'style'		=> array(),
		),
		'iframe'	=> array(
			'class'		=> array(),
			'id'		=> array(),
			'style'		=> array(),
			'width'		=> array(),
			'height'	=> array(),
			'src'		=> array(),
			'frameborder'	=> array(),
			'allow'		=> array(),
			'allowfullscreen'	=> array(),
		),
		'blockquote'	=> array(
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
		),
		'article'	=> array(
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
		),
		'input'	=> array(
			'type'			=> array(),
			'name'			=> array(),
			'value'			=> array(),
			'placeholder'	=> array(),
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
			'checked'		=> array(),
		),
		'textarea'	=> array(
			'name'			=> array(),
			'value'			=> array(),
			'placeholder'	=> array(),
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
		),
		'form'	=> array(
			'name'			=> array(),
			'method'		=> array(),
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
			'data-id'		=> array(),
			'data-name'		=> array(),
		),
		'label'	=> array(
			'for'			=> array(),
			'name'			=> array(),
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
		),
		'aside'	=> array(
			'name'			=> array(),
			'class'			=> array(),
			'id'			=> array(),
			'style'			=> array(),
		),
		'sup'	=> array(
			'class'			=> array(),
		),
		'sub'	=> array(
			'class'			=> array(),
		),
		'figure'	=> array(
			'class'			=> array(),
			'style'			=> array(),
		),
		'figcaption'	=> array(
			'class'			=> array(),
		),
		'style'	=> array(
			'class'			=> array(),
		),
		'pre'	=> array(),
	);
	if( !empty($html) ){
		$return = wp_kses($html, $allowed_html);
	}
	return $return;
}
}
if ( !function_exists( 'cspt_header_slider' ) ){
function cspt_header_slider(){
	if( is_page() || is_singular() ){
		$slider_type = get_post_meta( get_the_ID(), 'cspt-slider-type', true );
		if( !empty($slider_type) ){
			// Check if Slider Revolution
			if( $slider_type=='revolution-slider' ){
				$slider_slug = get_post_meta( get_the_ID(), 'cspt-revolution-slider', true );
				if( !empty($slider_slug) && function_exists('add_revslider') ){
					echo cspt_esc_kses('<div class="cspt-slider-area">');
					echo do_shortcode('[rev_slider alias="'.esc_attr($slider_slug).'"]');
					echo cspt_esc_kses('</div>');
				}
			} else if( $slider_type=='custom-code' ){
				$custom_slider_code = get_post_meta( get_the_ID(), 'cspt-custom-slider-code', true );
				if( !empty($custom_slider_code) ){
					echo cspt_esc_kses('<div class="cspt-slider-area">');
					echo do_shortcode( cspt_esc_kses($custom_slider_code) );
					echo cspt_esc_kses('</div>');
				}
			}
		}
	}
}
}
if ( !function_exists( 'cspt_header_social_links' ) ){
function cspt_header_social_links(){
	if( shortcode_exists('cspt-social-links') ) {
		echo cspt_esc_kses('<div class="cspt-header-social">' . do_shortcode('[cspt-social-links]') . '</div>');
	}
}
}
if ( !function_exists( 'cspt_get_featured_data' ) ){
function cspt_get_featured_data( $settings = array() ){
	$return				= '';
	$post_id			= ( !empty($settings['post_id']) ) ? $settings['post_id'] : get_the_ID() ;
	$post_type			= get_post_type();
	$get_post_format	= get_post_format( $post_id );
	$post_format		= ( !empty( $get_post_format ) ) ? $get_post_format : 'standard' ;
	$featured_img_only	= ( isset($settings['featured_img_only']) && $settings['featured_img_only']==true ) ? true : false ;
	$image_size			= ( !empty($settings['size']) ) ? $settings['size'] : 'full' ;
	// for portfolio
	if( is_singular('cspt-portfolio') ){
		$post_format = get_post_meta( $post_id, 'cspt-featured-type', true );
		$post_format = ($post_format=='slider') ? 'gallery' : $post_format ;
	}
	if( $featured_img_only==true || !in_array($post_format, array('audio', 'video', 'gallery', 'quote', 'link')) ){
		if ( has_post_thumbnail( $post_id ) ) {
			if( !is_singular() ) { $return .= '<a href="' . get_permalink( $post_id ) . '">'; }
			$return .= get_the_post_thumbnail( $post_id, $image_size );
			if( !is_singular() ) { $return .= '</a>'; }
		};
	} else {
		switch( $post_format ){
			case 'audio' :
				$audio_url = get_post_meta( $post_id, '_format_audio_embed', true );
				if( is_singular('cspt-portfolio') ){
					$audio_url = get_post_meta( $post_id, 'cspt-audio-url', true );
				}
				$attr = array(
					'width'		=> 725,
					'height'	=> 400
				);
				$return .= wp_oembed_get( $audio_url, $attr );
				break;
			case 'video' :
				$video_url = get_post_meta( $post_id, '_format_video_embed', true );
				if( is_singular('cspt-portfolio') ){
					$video_url = get_post_meta( $post_id, 'cspt-video-url', true );
				}
				$attr = array(
					'width'		=> 725,
					'height'	=> 400
				);
				$return .= wp_oembed_get( $video_url, $attr );
				break;
			case 'gallery' :
				// Enqueue scripts and styles
				wp_enqueue_script( 'lightslider' );
				wp_enqueue_style( 'lightslider' );
				$images = get_post_meta( $post_id, 'cspt-photo-gallery', true );
				if( !empty($images) ){
					$images_array = explode(',',$images);
					foreach( $images_array as $image_id ){
						$return .= '<div class="cspt-gallery-image">'.wp_get_attachment_image($image_id, $image_size).'</div>';
					}
				}
				if( !empty($return) ){
					$return = '<div class="cspt-gallery">'.$return.'</div>';
				}
				break;
			case 'quote' :
				$name		= get_post_meta( $post_id, '_format_quote_source_name', true );
				$url		= get_post_meta( $post_id, '_format_quote_source_url', true );
				$content	= get_the_content();
				if( !empty($url) && !empty($name) ){
					$name = '<a href="'.$url.'">'.$name.'</a>';
				}
				if( !empty($name) ){
					$name = '<div class="cspt-block-quote-citation">'.$name.'</div>';
				}
				if( !empty($content) ){
					$return .= '<div class="cspt-block-quote-content">'.nl2br($content) . $name .'</div>';
				}
				if( !empty($return) ){
					if( has_post_thumbnail($post_id) ){
						$bg_src = get_the_post_thumbnail_url($post_id);
						if( !empty($bg_src) ){
							cspt_inline_css( '.cspt-block-quote-wrapper-' . esc_attr($post_id) . '{background-image:url(\'' . esc_url($bg_src) . '\');}' );
						}
					}
					if( strpos($return, '<blockquote') === false ){
						$return = '<blockquote class="cspt-block-quote">'.$return.'</blockquote>';
					}
					$return = '<div class="cspt-block-quote-wrapper cspt-block-quote-wrapper-'.$post_id.'">'.$return.'</div>';
				}
				break;
			case 'link' :
				$link		= get_post_meta( $post_id, '_format_link_url', true );
				if( !empty($link) ){
					$return = '<a href="'.$link.'">'.$link.'</a>';
				}
				if( !empty($return) ){
					if( has_post_thumbnail($post_id) ){
						$bg_src = get_the_post_thumbnail_url($post_id);
						if( !empty($bg_src) ){
							cspt_inline_css( '.cspt-link-wrapper-' . esc_attr($post_id) . '{background-image:url(\'' . esc_url($bg_src) . '\');}' );
						}
					}
					$return = '<div class="cspt-link-wrapper cspt-link-wrapper-'.$post_id.'"><div class="cspt-link-inner">'.$return.'</div></div>';
				}
				break;
		}
	}
	if( !empty($return) ){
		$return = '<div class="cspt-featured-wrapper">'.$return.'</div>';
		echo cspt_esc_kses($return);
	}
}
}
if ( !function_exists( 'cspt_get_post_format_icon' ) ){
function cspt_get_post_format_icon(){
	$class = 'cspt-base-icon-aside';
	$post_format = get_post_format();
	switch( $post_format ){
		case 'video':
			$class = 'cspt-base-icon-videocam';
			break;
		case 'audio':
			$class = 'cspt-base-icon-music';
			break;
		case 'quote':
			$class = 'cspt-base-icon-left-quote';
			break;
		case 'chat':
			$class = 'cspt-base-icon-chat';
			break;
		case 'gallery':
			$class = 'cspt-base-icon-gallery';
			break;
	}
	echo cspt_esc_kses( '<div class="cspt-post-format-icon"><i class="'.esc_attr($class).'"></i></div>' );
}
}
/**
 * Getting featured media like image, gallery, video, audio etc
 */
if ( !function_exists( 'cspt_get_featured_data2' ) ){
function cspt_get_featured_data2( $post_id='', $size='full', $imgonly=false ){
	$return        = '';
	$class         = 'cspt-' . sanitize_html_class( get_post_type() ) . '-featured-container';
	$featured_type = 'image';
	$video_code    = '';
	$audio_code    = '';
	$slide_images  = '';
	if( empty($post_id) ){
		$post_id = get_the_ID();
	}
	if( !empty($post_id) ){
		// Getting post type
		$post_type = get_post_type($post_id);
		// If blog post
		if( $post_type=='post' ){
			$featured_type = get_post_format( $post_id );
			$video_code    = trim( get_post_meta( $post_id, '_format_video_embed', true) );
			$audio_code    = trim( get_post_meta( $post_id, '_format_audio_embed', true) );
			$slide_images  =  get_post_meta( $post_id, '_creativesplanet_metabox_gallery', true) ;
			$slide_images  = ( !empty($slide_images['gallery_images']) ) ? $slide_images['gallery_images'] : '' ;
			$class        .= ' cspt-post-format-' . get_post_format();
		}
		// If portfolio
		if( $post_type=='cspt-portfolio' ){
			// get post meta
			$post_meta  = get_post_meta( $post_id, 'creativesplanet_portfolio_featured', true );
			$video_code   = ( !empty($post_meta['video_code']) ) ? trim($post_meta['video_code']) : '' ;
			$audio_code   = ( !empty($post_meta['audio_code']) ) ? trim($post_meta['audio_code']) : '' ;
			$slide_images = ( !empty($post_meta['slide_images']) ) ? trim($post_meta['slide_images']) : '' ;
			// getting featured type
			if( !empty($post_meta['featuredtype']) ){
				$featured_type = $post_meta['featuredtype'];
			}
		}
		// If imageonly than return only featured image
		if( $imgonly==true ){
			$featured_type = 'image';
		}
		// The related posts (1st post) was giving notice level error like this:
		// Trying to get property of non-object in post-thumbnail-template.php on line 83
		// So we are calling this
		ob_start();
		get_the_post_thumbnail( $post_id, $size );
		ob_end_clean();
		// Now preparing the output
		switch( $featured_type ){
			case 'image':
			default:
				if ( has_post_thumbnail() ) {
					$return1  = get_the_post_thumbnail( $post_id, $size );
					$postlink = get_the_permalink();
					global $cspt_blog_imglink;
					if($cspt_blog_imglink == 'yes') {
						$return .= '<a href="'.esc_url($postlink).'">'.$return1.'</a>';
					} else {
						$return .=$return1;
					}
				}
				break;
			case 'video':
				if( $video_code!='' ){
					$return .= creativesplanet_oembed_get($video_code);
				}
				break;
			case 'audio':
			case 'audioembed':
				if( $audio_code!='' ){
					$return .= creativesplanet_oembed_get($audio_code);
					if( strtolower(substr($audio_code, -4)) == ".mp3" ){
						$class .= ' cspt-post-format-audio-mp3';
					}
				}
				break;
			case 'gallery':
			case 'slider':
				$return .= creativesplanet_create_slider($slide_images, $size);
				break;
			case 'quote':
				$return .= creativesplanet_featured_quote();
				break;
			case 'link':
				$return .= creativesplanet_featured_link();
				break;
		}
	}
	// Adding wrapper
	if( !empty($return) ){
		$return = '<div class="cspt-featured-wrapper ' . $class . '">' . $return . '</div>';
	}
	return cspt_esc_kses($return);
}
}
if ( !function_exists( 'cspt_hex2rgb' ) ){
function cspt_hex2rgb($color, $opacity='1'){
    $default = 'rgb(0,0,0)';
    if (empty($color))
        return $default;
    if ($color[0] == '#')
        $color = substr($color, 1);
    if (strlen($color) == 6)
        $hex = array($color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5]);
    elseif (strlen($color) == 3)
        $hex = array($color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2]);
    else
        return $default;
    $rgb = array_map('hexdec', $hex);
    if ($opacity) {
        if (abs($opacity) > 1)
            $opacity = 1.0;
        $output = 'rgba(' . implode(",", $rgb) . ',' . $opacity . ')';
    } else {
        $output = 'rgb(' . implode(",", $rgb) . ')';
    }
    return $output;
}
}
/**
 *
 */
if( !function_exists('cspt_responsive_padding_margin_class') ){
function cspt_responsive_padding_margin_class( $data='' ){
	$return = '';
	if( !empty($data) ){
		$data_array = explode('|',$data);
		$return = ( !empty($data_array[0]) ) ? 'cspt-responsive-custom-'.$data_array[0] : '' ;
	}
	return esc_attr($return);
}
}
if( !function_exists('cspt_element_block_container') ){
function cspt_element_block_container( $settings = array( 'position' => 'start', 'column' => '3', 'cpt' => 'blog', 'taxonomy' => 'category' ) ){
	$return = '';
	$cpt = ( !empty($settings['cpt']) ) ? $settings['cpt'] : 'blog' ;
	$terms = '';
	if( !empty($settings['taxonomy']) ){
		$terms = get_the_terms( get_the_ID(), $settings['taxonomy'] );
	}
	$term_slug = '';
	if( is_array($terms) && count($terms)>0 ){
		foreach( $terms as $term ){
			$term_slug .= $term->slug.' ';
		}
		$term_slug = trim($term_slug);
	}
	if( $settings['position']=='start' ){
		switch( $settings['column'] ){
			case '1':
				$return = '<div class="cspt-ele cspt-'.$cpt.'-ele col-md-12 ' . esc_attr($term_slug) . '">';
				break;
			case '2':
				$return = '<div class="cspt-ele cspt-'.$cpt.'-ele col-md-6 ' . esc_attr($term_slug) . '">';
				break;
			case '3':
				$return = '<div class="cspt-ele cspt-'.$cpt.'-ele col-md-4 ' . esc_attr($term_slug) . '">';
				break;
			case '4':
				$return = '<div class="cspt-ele cspt-'.$cpt.'-ele col-md-6 col-lg-3 ' . esc_attr($term_slug) . '">';
				break;
			case '5':
				$return = '<div class="cspt-ele cspt-'.$cpt.'-ele col-md-20percent ' . esc_attr($term_slug) . '">';
				break;
			case '6':
				$return = '<div class="cspt-ele cspt-'.$cpt.'-ele col-md-2 ' . esc_attr($term_slug) . '">';
				break;
		}
	} else {
		$return = '</div>';
	}
	return cspt_esc_kses($return);
}
}
/**
 *
 */
if( !function_exists('cspt_responsive_padding_margin') ){
function cspt_responsive_padding_margin( $data='' , $parent_class='', $child_class='' ){
	$return = '';
	if( !empty($data) ){
		$data_array = explode('|',$data);
		$css_1200   = '';
		$css_991    = '';
		$css_767    = '';
		$css_custom = '';
		// add "px" if we dont find any "px" "%" or "em" in each value
		foreach( $data_array as $key=>$val ){
			if($key!=0 && $key!=1 && $key!=10 && $key!=19 && $key!=29 ){
				if( !empty($val) && substr($val, -2)!='px' && substr($val, -2)!='em' && substr($val, -1)!='%' ){
					$data_array[$key] = trim($val).'px';
				}
			}
		}
		$class		= ( !empty($data_array[0]) ) ? $data_array[0] : '' ;
		$css_1200	.= ( isset($data_array[2]) && ($data_array[2])!='' ) ? 'margin-top:'.$data_array[2].' !important;'			: '' ;
		$css_1200	.= ( isset($data_array[3]) && ($data_array[3])!='' ) ? 'margin-right:'.$data_array[3].' !important;'		: '' ;
		$css_1200	.= ( isset($data_array[4]) && ($data_array[4])!='' ) ? 'margin-bottom:'.$data_array[4].' !important;'		: '' ;
		$css_1200	.= ( isset($data_array[5]) && ($data_array[5])!='' ) ? 'margin-left:'.$data_array[5].' !important;'		: '' ;
		$css_1200	.= ( isset($data_array[6]) && ($data_array[6])!='' ) ? 'padding-top:'.$data_array[6].' !important;'		: '' ;
		$css_1200	.= ( isset($data_array[7]) && ($data_array[7])!='' ) ? 'padding-right:'.$data_array[7].' !important;'		: '' ;
		$css_1200	.= ( isset($data_array[8]) && ($data_array[8])!='' ) ? 'padding-bottom:'.$data_array[8].' !important;'		: '' ;
		$css_1200	.= ( isset($data_array[9]) && ($data_array[9])!='' ) ? 'padding-left:'.$data_array[9].' !important;'		: '' ;
		$css_991	.= ( isset($data_array[11]) && ($data_array[11])!='' )  ? 'margin-top:'.$data_array[11].' !important;'		: '' ;
		$css_991	.= ( isset($data_array[12]) && ($data_array[12])!='' ) ? 'margin-right:'.$data_array[12].' !important;'		: '' ;
		$css_991	.= ( isset($data_array[13]) && ($data_array[13])!='' ) ? 'margin-bottom:'.$data_array[13].' !important;'	: '' ;
		$css_991	.= ( isset($data_array[14]) && ($data_array[14])!='' ) ? 'margin-left:'.$data_array[14].' !important;'		: '' ;
		$css_991	.= ( isset($data_array[15]) && ($data_array[15])!='' ) ? 'padding-top:'.$data_array[15].' !important;'		: '' ;
		$css_991	.= ( isset($data_array[16]) && ($data_array[16])!='' ) ? 'padding-right:'.$data_array[16].' !important;'	: '' ;
		$css_991	.= ( isset($data_array[17]) && ($data_array[17])!='' ) ? 'padding-bottom:'.$data_array[17].' !important;'	: '' ;
		$css_991	.= ( isset($data_array[18]) && ($data_array[18])!='' ) ? 'padding-left:'.$data_array[18].' !important;'		: '' ;
		$css_767	.= ( isset($data_array[20]) && ($data_array[20])!='' ) ? 'margin-top:'.$data_array[20].' !important;'		: '' ;
		$css_767	.= ( isset($data_array[21]) && ($data_array[21])!='' ) ? 'margin-right:'.$data_array[21].' !important;'		: '' ;
		$css_767	.= ( isset($data_array[22]) && ($data_array[22])!='' ) ? 'margin-bottom:'.$data_array[22].' !important;'	: '' ;
		$css_767	.= ( isset($data_array[23]) && ($data_array[23])!='' ) ? 'margin-left:'.$data_array[23].' !important;'		: '' ;
		$css_767	.= ( isset($data_array[24]) && ($data_array[24])!='' ) ? 'padding-top:'.$data_array[24].' !important;'		: '' ;
		$css_767	.= ( isset($data_array[25]) && ($data_array[25])!='' ) ? 'padding-right:'.$data_array[25].' !important;'	: '' ;
		$css_767	.= ( isset($data_array[26]) && ($data_array[26])!='' ) ? 'padding-bottom:'.$data_array[26].' !important;'	: '' ;
		$css_767	.= ( isset($data_array[27]) && ($data_array[27])!='' ) ? 'padding-left:'.$data_array[27].' !important;'		: '' ;
		$custom_width = ( !empty($data_array[28]) ) ? $data_array[28] : '' ;
		$css_custom	.= ( isset($data_array[30]) && ($data_array[30])!='' ) ? 'margin-top:'.$data_array[30].' !important;'		: '' ;
		$css_custom	.= ( isset($data_array[31]) && ($data_array[31])!='' ) ? 'margin-right:'.$data_array[31].' !important;'		: '' ;
		$css_custom	.= ( isset($data_array[32]) && ($data_array[32])!='' ) ? 'margin-bottom:'.$data_array[32].' !important;'	: '' ;
		$css_custom	.= ( isset($data_array[33]) && ($data_array[33])!='' ) ? 'margin-left:'.$data_array[33].' !important;'		: '' ;
		$css_custom	.= ( isset($data_array[34]) && ($data_array[34])!='' ) ? 'padding-top:'.$data_array[34].' !important;'		: '' ;
		$css_custom	.= ( isset($data_array[35]) && ($data_array[35])!='' ) ? 'padding-right:'.$data_array[35].' !important;'	: '' ;
		$css_custom	.= ( isset($data_array[36]) && ($data_array[36])!='' ) ? 'padding-bottom:'.$data_array[36].' !important;'	: '' ;
		$css_custom	.= ( isset($data_array[37]) && ($data_array[37])!='' ) ? 'padding-left:'.$data_array[37].' !important;'		: '' ;
		if( !empty($css_1200)   ){ $return .= '@media (max-width: 1200px){ '.$parent_class.'.cspt-responsive-custom-'.$class.$child_class.'{'.$css_1200.'} }'; }
		if( !empty($css_991)    ){ $return .= '@media (max-width: 991px ){ '.$parent_class.'.cspt-responsive-custom-'.$class.$child_class.'{'.$css_991.'} }'; }
		if( !empty($css_767)    ){ $return .= '@media (max-width: 767px ){ '.$parent_class.'.cspt-responsive-custom-'.$class.$child_class.'{'.$css_767.'} }'; }
		if( !empty($css_custom) ){ $return .= '@media (max-width: '.$custom_width.' ){ '.$parent_class.'.cspt-responsive-custom-'.$class.$child_class.'{'.$css_custom.'} }'; }
		// custom breakpoint
		if( !empty($data_array[29]) && $data_array[29]=='colbreak_yes' ){
			$return .= '@media (max-width: '.$custom_width.' ){
				.cspt-responsive-custom-'.$class.'.cspt-row .vc_row-flex .vc_column_container,
				.cspt-responsive-custom-'.$class.'.vc_row:not(.vc_inner) .vc_column_container {
					clear: both;
					width: 100%;
				}
			}';
		}
	}
	return $return;
}
}
/**
 *
 */
if( !function_exists('cspt_client_hover_img') ){
function cspt_client_hover_img(){
	$return = '';
	$hover_logo = get_post_meta( get_the_ID(), 'cspt-logo-image-for-hover', true );
	if( !empty($hover_logo) ){
		$hover_image = wp_get_attachment_image_src($hover_logo, 'full');
		if( !empty($hover_image[0]) ){
			$return = '<div class="cspt-client-hover-img"><img src="'.esc_url($hover_image[0]).'" /></div>';
		}
	}
	return cspt_esc_kses($return);
}
}
if( !function_exists('cspt_client_logo_link') ){
function cspt_client_logo_link( $type='start' ){
	$return = '';
	$link = get_post_meta( get_the_ID(), 'cspt-logo-link', true );
	if( !empty($link['url']) ){
		if( $type=='start' ){
			$target_code = '';
			if( !empty($link['target']) && $link['target']=='_blank' ){ $target_code = ' target="_blank"'; }
			$return = '<a href="' . esc_url($link['url']) . '" title="' . esc_attr($link['title']) . '"' . $target_code . '>';
		} else {
			$return = '</a>';
		}
	}
	echo cspt_esc_kses($return);
}
}
/**
 *  Convert VC options to list of array with default values
 */
if( !function_exists('cspt_create_options_list') ){
function cspt_create_options_list( $optionslist=array() ){
	$options_list = array();
	if( is_array($optionslist) && count($optionslist)>0 ){
		foreach( $optionslist as $options ){
			if( $options['param_name']!='content' ){
				$std = ( !empty($options['std']) ) ? trim($options['std']) : '' ;
				$std = ( empty($std) && !empty($options['value']) && !is_array($options['value']) ) ? trim($options['value']) : $std ;
				// if type == dropdown   than fetch first option as std value
				if( !empty($options['type']) && $options['type']=='dropdown' && empty($options['std']) ){
					$std = $options['value'][key($options['value'])];
				}
				// if type == iconpicker   than fetch value as default std value
				if( !empty($options['type']) && $options['type']=='creativesplanet_iconpicker' ){
					$std = $options['value'];
				}
				$options_list[$options['param_name']] = $std;
			}
		}
	}
	return $options_list;
}
}
/*
 *  Titlebar Breadcrumb
 */
if( !function_exists('cspt_titlebar_breadcrumb') ){
function cspt_titlebar_breadcrumb(){
	$return = '';
	$hide_breadcrumb = cspt_get_base_option('titlebar-hide-breadcrumb');
	if(function_exists('bcn_display') && $hide_breadcrumb!=true ){
		$return = '<div class="cspt-breadcrumb"><div class="cspt-breadcrumb-inner">' . bcn_display(true) . '</div></div>';
	}
	return cspt_esc_kses($return);
}
}
if( !function_exists('cspt_titlebar_headings') ){
function cspt_titlebar_headings(){
	$title		= get_the_title();
	$subtitle	= '';
	if( is_singular() || is_home() ){
		if( is_home() || is_singular('post') ){
			$page_id	= get_option( 'page_for_posts' );
			$title		= esc_attr__( 'Blog', 'emphires' );  // Setting for Titlebar title
			if( is_singular('post') ){
				$title		= get_the_title();  // Setting for Titlebar title
			}
		} else if( is_singular('cspt-team-member') ){
			$page_id	= get_the_ID();
			$cpt_title	= cspt_get_base_option('team-cpt-singular-title');
			$title		= sprintf( esc_attr__( '%1$s ', 'emphires' ), $cpt_title );  // Setting for Titlebar title
		} else {
			$page_id	= get_the_ID();
		}
		$single_title		= get_post_meta( $page_id, 'cspt-titlebar-title', true );
		$single_subtitle	= get_post_meta( $page_id, 'cspt-titlebar-subtitle', true );
		$title				= ( !empty($single_title) )		? trim($single_title)		: $title ;
		$subtitle			= ( !empty($single_subtitle) )	? trim($single_subtitle)	: $subtitle ;
		// Single post custom title and subtitle
		if( is_home() || is_singular('post') ){
			$current_single_title		= get_post_meta( get_the_ID(), 'cspt-titlebar-title', true );
			$current_single_subtitle	= get_post_meta( get_the_ID(), 'cspt-titlebar-subtitle', true );
			$title				= ( !empty($current_single_title) )		? trim($current_single_title)		: $title ;
			$subtitle			= ( !empty($current_single_subtitle) )	? trim($current_single_subtitle)	: $subtitle ;
		}
		if( function_exists('is_woocommerce') && is_woocommerce() ){ // WooCommerce
			$title	= cspt_get_base_option('wc-title');
			$subtitle = '';
		}
	} else if( function_exists('is_woocommerce') && is_woocommerce() && !is_product() ){ // WooCommerce
		$title	= cspt_get_base_option('wc-title');
		$subtitle = '';
	} else if( is_category() ){ // Category
		$title = sprintf(
			esc_attr__('Category: %s', 'emphires'),
			esc_attr( single_cat_title( '', false) )
		);
	} else if( is_author() ){ // Author
		global $post;
		$author_id = $post->post_author;
		$title	   = sprintf(
			esc_attr__('Author: %s', 'emphires'),
			get_the_author_meta( 'display_name', $author_id )
		);
	} else if( is_tax() ){ // Taxonomy
		global $wp_query;
		$tax = $wp_query->get_queried_object();
		$title = esc_attr($tax->name);
	} else if( is_tag() ){ // Tag
		$title = sprintf(
			esc_attr__('Tag: %s','emphires'),
			esc_attr( single_tag_title( '', false) )
		);
	} else if( is_404() ){ // 404
		$title = esc_attr__( 'PAGE NOT FOUND', 'emphires' );
	} else if( is_search()  ){ // Search Results
		$title = sprintf( esc_attr__( 'Search Results for %s', 'emphires' ), ' <span class="cspt-tbar-search-word">' . get_search_query() . '</span>' );
	} else if( is_archive() ){
		$title = esc_attr__( 'Archives', 'emphires' );
	} else {
		$title = get_the_title();
	}
	// return data
	$return  = '';
	$return .= ( !empty($title) ) ? '<h1 class="cspt-tbar-title"> '. do_shortcode($title) . '</h1>' : '' ;
	$return .= ( !empty($subtitle) ) ? '<h3 class="cspt-tbar-subtitle"> '. do_shortcode($subtitle) .'</h3>' : '' ;
	if( $return!='' ){
		$return = '<div class="cspt-tbar"><div class="cspt-tbar-inner container">'.$return.'</div></div>';
	}
	// Return data
	return cspt_esc_kses($return);
}
}
if( !function_exists('cspt_sticky_class') ){
function cspt_sticky_class(){
	$return = '';
	$class = array();
	if( cspt_get_base_option('sticky-header')=='1' ) {
		$class[] = 'cspt-header-sticky-yes';
		$class[] = 'cspt-sticky-type-'. cspt_get_base_option('sticky-type');
	}
	// Sticky
	if( cspt_get_base_option('sticky-header')=='1' ){
		$class[] = 'cspt-sticky-bg-color-'. cspt_get_base_option('sticky-header-bgcolor');
	}
	if( !empty($class) ){
		$return = implode( ' ', $class );
	}
	echo esc_attr($return);
}
}
if( !function_exists('cspt_header_class') ){
function cspt_header_class(){
	$return = '';
	$class = array();
	// Check if sticky logo exists
	$sticky_logo				= cspt_get_base_option('sticky-logo');
	$responsive_logo			= cspt_get_base_option('responsive-logo');
	$responsive_header_bgcolor	= cspt_get_base_option('responsive-header-bgcolor');
	if( !empty($sticky_logo) ){
		$class[] = 'cspt-sticky-logo-yes';
	} else {
		$class[] = 'cspt-sticky-logo-no';
	}
	if( !empty($responsive_logo) ){
		$class[] = 'cspt-responsive-logo-yes';
	} else {
		$class[] = 'cspt-responsive-logo-no';
	}
	if( !empty($responsive_header_bgcolor) ){
		$class[] = 'cspt-responsive-header-bgcolor-'.$responsive_header_bgcolor;
	}
	if( !empty($class) ){
		$return = implode( ' ', $class );
	}
	echo esc_attr($return);
}
}
if( !function_exists('cspt_header_bg_class') ){
function cspt_header_bg_class(){
	$return  = 'cspt-header-wrapper';
	$bgcolor = cspt_get_base_option('header-bgcolor');
	if( !empty($bgcolor) ){
		$return .= ' cspt-bg-color-'. cspt_get_base_option('header-bgcolor');
	}
	echo esc_attr($return);
}
}
if( !function_exists('cspt_header_box_contents') ){
function cspt_header_box_contents( $settings = array() ){
	for( $i=1 ; $i<=3 ; $i++ ){
		$title		= cspt_get_base_option( 'header-box'.$i.'-title' );
		$content	= cspt_get_base_option( 'header-box'.$i.'-content' );
		$link		= cspt_get_base_option( 'header-box'.$i.'-link' );
		$icon		= cspt_get_base_option( 'header-box'.$i.'-icon' );
		if( !empty($icon) ){
			$icon = explode(';',$icon);
			$icon = $icon[0];
			// load icon library
			$icon_array = explode(' ',$icon);
			$icon_prefix = $icon_array[0];
			$lib_list_array = cspt_icon_library_list();
			foreach($lib_list_array as $lib_id=>$lib_data){
				if( $lib_data['common_class']==$icon_prefix ){
					wp_enqueue_style( $lib_id );
				}
			}
		}
		if( !empty($title) || !empty($content) ){
			?>
			<div class="cspt-header-box cspt-header-box-<?php echo esc_attr($i); ?>">
				<?php if( !empty($link) ) : ?><a href="<?php echo esc_url($link); ?>"><?php endif; ?>
					<?php if( !empty($icon) ) : ?><span class="cspt-header-box-icon"><i class="<?php echo esc_attr($icon); ?>"></i></span><?php endif; ?>
					<span class="cspt-header-box-title"><?php echo esc_html($title); ?></span>
					<span class="cspt-header-box-content"><?php echo esc_html($content); ?></span>
				<?php if( !empty($link) ) : ?></a><?php endif; ?>
			</div>
			<?php
		}
	} // for loop
}
}
if( !function_exists('cspt_header_box') ){
function cspt_header_box( $i='', $class='' ){
	if( !empty($i) && in_array( $i, array('1','2','3')) ){
		$title		= cspt_get_base_option( 'header-box'.$i.'-title' );
		$content	= cspt_get_base_option( 'header-box'.$i.'-content' );
		$link		= cspt_get_base_option( 'header-box'.$i.'-link' );
		$icon		= cspt_get_base_option( 'header-box'.$i.'-icon' );
		if( !empty($icon) ){
			$icon = explode(';',$icon);
			$icon = $icon[0];
			// load icon library
			$icon_array = explode(' ',$icon);
			$icon_prefix = $icon_array[0];
			$lib_list_array = cspt_icon_library_list();
			foreach($lib_list_array as $lib_id=>$lib_data){
				if( $lib_data['common_class']==$icon_prefix ){
					wp_enqueue_style( $lib_id );
				}
			}
		}
		if( !empty($title) || !empty($content) ){
			?>
			<div class="cspt-header-box cspt-header-box-<?php echo esc_attr($i); ?> <?php echo esc_attr($class); ?>">
				<?php if( !empty($link) ) : ?><a href="<?php echo esc_url($link); ?>"><?php endif; ?>
					<?php if( !empty($icon) ) : ?><span class="cspt-header-box-icon"><i class="<?php echo esc_attr($icon); ?>"></i></span><?php endif; ?>
					<span class="cspt-header-box-title"><?php echo esc_html($title); ?></span>
					<span class="cspt-header-box-content"><?php echo esc_html($content); ?></span>
				<?php if( !empty($link) ) : ?></a><?php endif; ?>
			</div>
			<?php
		}
	} // if
}
}
if( !function_exists('cspt_header_button') ){
function cspt_header_button( $settings = array() ){
	$btn_text  = cspt_get_base_option('header-btn-text');
	$btn_text2 = cspt_get_base_option('header-btn-text2');
	$btn_url   = cspt_get_base_option('header-btn-url');
	if( (!empty($btn_text) || !empty($btn_text2)) && !empty($btn_url) ){
		?>
		<?php if( isset($settings['inneronly']) && $settings['inneronly']=='yes' ){ ?>
			<?php // No wrapper needed ?>
		<?php } else { ?>
			<div class="cspt-header-button">
		<?php } ?>
		<a href="<?php echo esc_url($btn_url); ?>">
			<?php if(!empty($btn_text)) : ?><span class="cspt-header-button-text-1"><?php echo esc_html($btn_text); ?></span><?php endif; ?>
			<?php if(!empty($btn_text2)) : ?><span class="cspt-header-button-text-2"><?php echo esc_html($btn_text2); ?></span><?php endif; ?>
		</a>
		<?php if( isset($settings['inneronly']) && $settings['inneronly']=='yes' ){ ?>
			<?php // No wrapper needed ?>
		<?php } else { ?>
			</div>
		<?php } ?>
		<?php
	}
}
}
if( !function_exists('cspt_header_left_content') ){
function cspt_header_left_content( $settings = array() ){
	$left = cspt_get_base_option('header-left-content');
	if( !empty($left) ){
		?>
		<div class="cspt-header-left-content"><?php echo do_shortcode($left); ?></div>
		<?php
	}
}
}
if( !function_exists('cspt_header_right_content') ){
function cspt_header_right_content( $settings = array() ){
	$right = cspt_get_base_option('header-right-content');
	if( !empty($right) ){
		?>
		<div class="cspt-header-right-content"><?php echo do_shortcode($right); ?></div>
		<?php
	}
}
}
if( !function_exists('cspt_header_search') ){
function cspt_header_search(){
	$header_search = cspt_get_base_option('header-search');
	if( !empty($header_search) && $header_search=='1' ){
		?>
		<div class="cspt-header-search-btn"><a href="#"><i class="cspt-base-icon-search"></i></a></div>
		<?php
	}
}
}
if( !function_exists('cspt_nav_class') ){
function cspt_nav_class(){
	$return = '';
	$main_active_link_color = cspt_get_base_option('main-menu-active-color');
	$drop_active_link_color = cspt_get_base_option('drop-down-menu-active-color');
	if( !empty($main_active_link_color) ){
		$return .= ' cspt-main-active-color-'.$main_active_link_color;
	}
	if( !empty($drop_active_link_color) ){
		$return .= ' cspt-dropdown-active-color-'.$drop_active_link_color;
	}
	echo esc_attr($return);
}
}
if( !function_exists('cspt_preheader_class') ){
function cspt_preheader_class(){
	$return = '';
	$bgcolor = cspt_get_base_option('preheader-bgcolor');
	$textcolor = cspt_get_base_option('preheader-text-color');
	if( !empty($bgcolor) ){
		$return .= ' cspt-bg-color-'.$bgcolor;
	}
	if( !empty($textcolor) ){
		$return .= ' cspt-color-'.$textcolor;
	}
	echo esc_attr($return);
}
}
if( !function_exists('cspt_footer_classes') ){
function cspt_footer_classes(){
	$return = '';
	$textcolor = cspt_get_base_option('footer-text-color');
	if( !empty($textcolor) ){
		$return .= ' cspt-color-'.$textcolor;
	}
	$bgcolor = cspt_get_base_option('footer-bgcolor');
	if( !empty($bgcolor) ){
		$return .= ' cspt-bg-color-'.$bgcolor;
	}
	$background = cspt_get_base_option('footer-background');
	if( !empty($background['background-image']) ){
		$return .= ' cspt-bg-image-yes';
	}
	if ( has_nav_menu( 'creativesplanet-footer' ) ){
		$return .= ' cspt-footer-menu-yes';
	} else {
		$return .= ' cspt-footer-menu-no';
	}
	$footer_widget_columns	= cspt_footer_widget_columns(); // array
	if( $footer_widget_columns[0]==false ){
		$return .= ' cspt-footer-widget-no';
	} else {
		$return .= ' cspt-footer-widget-yes';
	}
	$overlay = cspt_get_base_option('footer-big-text-area-overlay');
	if ( $overlay==true ){
		$return .= ' cspt-footer-big-text-area-overlay';
	}
	echo esc_attr($return);
}
}
if( !function_exists('cspt_footer_widget_classes') ){
function cspt_footer_widget_classes(){
	$return = '';
	$textcolor = cspt_get_base_option('footer-widget-text-color');
	$switch    = cspt_get_base_option('footer-widget-color-switch');
	if( !empty($textcolor) && $switch=='1' ){
		$return .= ' cspt-color-'.$textcolor;
	}
	$bgcolor = cspt_get_base_option('footer-widget-bgcolor');
	if( !empty($bgcolor) ){
		$return .= ' cspt-bg-color-'.$bgcolor;
	}
	$background = cspt_get_base_option('footer-widget-background');
	if( !empty($background['background-image']) ){
		$return .= ' cspt-bg-image-yes';
	}
	echo esc_attr($return);
}
}
if( !function_exists('cspt_footer_widget_columns') ){
function cspt_footer_widget_columns(){
	$return			= array(false, false, false);
	$widget_exists	= false;
	$footer_column	= cspt_get_base_option('footer-column');
	$footer_column	= ( empty($footer_column) ) ? '3-3-3-3' : $footer_column ;
	if( $footer_column=='custom' ){
		$footer_column_1	= cspt_get_base_option('footer-1-col-width');
		$footer_column_2	= cspt_get_base_option('footer-2-col-width');
		$footer_column_3	= cspt_get_base_option('footer-3-col-width');
		$footer_column_4	= cspt_get_base_option('footer-4-col-width');
		$footer_column_array = array();
		if( !empty($footer_column_1) && $footer_column_1!='hide' ){ $footer_column_array[] = 'yes'; }
		if( !empty($footer_column_2) && $footer_column_2!='hide' ){ $footer_column_array[] = 'yes'; }
		if( !empty($footer_column_3) && $footer_column_3!='hide' ){ $footer_column_array[] = 'yes'; }
		if( !empty($footer_column_4) && $footer_column_4!='hide' ){ $footer_column_array[] = 'yes'; }
		if( count($footer_column_array)=='1' ){
			$footer_column = '12';
		} else if( count($footer_column_array)=='2' ){
			$footer_column = '6-6';
		} else if( count($footer_column_array)=='3' ){
			$footer_column = '4-4-4';
		} else if( count($footer_column_array)=='4' ){
			$footer_column = '3-3-3-3';
		}
	}
	if( !empty($footer_column) ){
		$footer_columns	= explode('-', $footer_column );
		// Checking if widget exists
		if( is_array($footer_columns) && count($footer_columns)>0 ){
			$col = 1;
			foreach( $footer_columns as $column ){
				if ( is_active_sidebar( 'cspt-footer-'.$col ) ){
					$widget_exists = true;
				}
				$col++;
			} // end foreach
		}
		$return = array( $widget_exists, $footer_columns, $footer_column );
	}
	return $return;
}
}
if( !function_exists('cspt_footer_copyright_classes') ){
function cspt_footer_copyright_classes(){
	$return = '';
	$textcolor = cspt_get_base_option('footer-copyright-text-color');
	$switch    = cspt_get_base_option('footer-copyright-color-switch');
	if( !empty($textcolor) && $switch=='1' ){
		$return .= ' cspt-color-'.$textcolor;
	}
	$bgcolor = cspt_get_base_option('footer-copyright-bgcolor');
	if( !empty($bgcolor) ){
		$return .= ' cspt-bg-color-'.$bgcolor;
	}
	$background = cspt_get_base_option('footer-copyright-background');
	if( !empty($background['background-image']) ){
		$return .= ' cspt-bg-image-yes';
	}
	echo esc_attr($return);
}
}
if( !function_exists('cspt_all_options_values') ){
function cspt_all_options_values( $for='typography', $admin=false ) {
	$return			= '';
	$css_code		= '';
	include( get_template_directory() . '/includes/customizer-options.php' );
	foreach( $kirki_options_array as $options_key=>$options_val ){
		if( !empty( $options_val['section_fields'] ) ){
			foreach( $options_val['section_fields'] as $key=>$option ){
				if( !empty($option['type']) && $option['type']==$for && !empty($option['default']) && !empty($option['cspt-output']) ){
					$class		= $option['cspt-output'];
					$css_code	= '';
					$values = cspt_get_base_option( $option['settings'] );
					foreach( $values as $key=>$val ){
						if( !empty($val) && $key!='variant' ){
							if( $key == 'background-image' ){
								$val = 'url("'.$val.'")';
							} else if( $key == 'font-family' ){
								$val = trim($val);
								if( substr($val, -1)!=',' ){ $val = $val.','; }
								$val = $val.'sans-serif';
							}
							$css_code .= $key.':'.$val.';';
						}
					}
					if($admin==true){
						if( $class=='body' ){
							$class = $class.esc_attr('#tinymce.wp-editor');
						} else {
							$class = esc_attr('body#tinymce.wp-editor ').$class;
						}
					}
					$return .= $class.'{'.$css_code.'}';
				}
			}
		}
	}
	return $return;
}
}
if( !function_exists('cspt_titlebar_class') ){
function cspt_titlebar_class(){
	$return = '';
	$bgcolor = cspt_get_base_option('titlebar-bgcolor');
	if( !empty($bgcolor) ){
		$return .= ' cspt-bg-color-'.$bgcolor;
	}
	$background = cspt_get_base_option('titlebar-background');
	if( !empty($background['background-image']) ){
		$return .= ' cspt-bg-image-yes';
	}
	$style = cspt_get_base_option('titlebar-style');
	if( !empty($style) ){
		$return .= ' cspt-titlebar-style-'.$style;
	}
	echo esc_attr($return);
}
}
if( !function_exists('cspt_pagination') ){
function cspt_pagination(){
	$pagination = get_the_posts_pagination( array(
		'mid_size'	=> 5,
		'prev_text'	=> cspt_esc_kses('<i class="cspt-base-icon-left-open"></i>'),
		'next_text'	=> cspt_esc_kses('<i class="cspt-base-icon-right-open"></i>'),
	) );
	$return = '<div class="cspt-pagination">'.$pagination.'</div>';
	echo cspt_esc_kses($return);
}
}
if( !function_exists('cspt_meta_author') ){
function cspt_meta_author(){
	return '<span class="cspt-meta cspt-meta-author"><a class="cspt-author-link" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a></span>';
}
}
if( !function_exists('cspt_meta_date') ){
function cspt_meta_date( $date_format='', $optional=false ){
	$return = '';
	if( $optional==false || ( $optional==true && !defined('EMPHIRES_ADDON_VERSION') ) ){
		if( empty($date_format) ){
			$date_format = get_option('date_format');
		}
		if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
			$time_string = sprintf( '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated cspt-hide" datetime="%3$s">%4$s</time>',
				esc_attr( get_the_date( 'c' ) ),
				get_the_date( $date_format ),
				esc_attr( get_the_modified_date( 'c' ) ),
				get_the_modified_date( $date_format )
			);
		} else {
			$time_string = sprintf( '<time class="entry-date published updated" datetime="%1$s">%2$s</time>',
				esc_attr( get_the_date( 'c' ) ),
				get_the_date( $date_format ) // ,
			);
		}
		$return = '<span class="cspt-meta cspt-meta-date"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . cspt_esc_kses($time_string) . '</a></span>';
	}
	return $return;
}
}
if( !function_exists('cspt_meta_category') ){
function cspt_meta_category( $separator = ', ' ){
	$return = '';
	$categories_list = get_the_category_list( $separator );
	if ( !empty($categories_list) ){
		$return = '<span class="cspt-meta cspt-meta-cat">' . cspt_esc_kses($categories_list) . '</span>';
	}
	return $return;
}
}
if( !function_exists('cspt_meta_tag') ){
function cspt_meta_tag( $separator = ', ', $title='' ){
	$return		= '';
	$tags_list	= get_the_tag_list( $title.' ' , $separator );
	if ( !empty($tags_list) ) {
		$return = '<span class="cspt-meta cspt-meta-tags"> ' . cspt_esc_kses($tags_list) . '</span>';
	}
	return $return;
}
}
if( !function_exists('cspt_meta_comment') ){
function cspt_meta_comment( $hide_zero=false ){
	$return = '';
	$comments_number = get_comments_number();
	if ( !post_password_required() && comments_open() ) {
		if( $hide_zero==true ){
			if( !empty($comments_number) && $comments_number>0 ){
				$return = '<span class="cspt-meta cspt-meta-comments cspt-comment-bigger-than-zero"> ' . get_comments_number() . '</span>';
			}
		} else {
			$return = '<span class="cspt-meta cspt-meta-comments xyz"> ' . get_comments_number() . '</span>';
		}
	}
	return $return;
}
}
if( !function_exists('cspt_meta_long_comment') ){
function cspt_meta_long_comment(){
	$return = '';
	if ( !post_password_required() && comments_open() ) {
		ob_start();
		echo cspt_esc_kses('<span class="cspt-meta cspt-meta-comments">');
		comments_number( esc_attr__('No Comments','emphires'), esc_attr__('One Comment','emphires'), esc_attr__('% Comments','emphires') );
		echo cspt_esc_kses('</span>');
		$return .= ob_get_contents();
		ob_end_clean();
	}
	return $return;
}
}
if( !function_exists('cspt_service_category') ){
function cspt_service_category( $separator = ', ' ){
	$categories_list = get_the_term_list( get_the_ID(), 'cspt-service-category', '', $separator , '' );
	if ( !empty($categories_list) ){
		?>
		<span class="cspt-service-cat"><?php echo cspt_esc_kses($categories_list); ?></span>
		<?php
	}
}
}
if( !function_exists('cspt_author_social_links') ){
function cspt_author_social_links(){
	$return = '';
	$social_list = array(
		'twitter'	=>	array(
			'name'			=> esc_attr('Twitter'),
			'link'			=> get_the_author_meta( 'twitter' ),
		),
		'facebook'	=>	array(
			'name'			=> esc_attr('Facebook'),
			'link'			=> get_the_author_meta( 'facebook' ),
		),
		'linkedin'	=>	array(
			'name'			=> esc_attr('LinkedIn'),
			'link'			=> get_the_author_meta( 'linkedin' ),
		),
		'google_plus'	=>	array(
			'name'			=> esc_attr('Google +'),
			'link'			=> get_the_author_meta( 'gplus' ),
		),
	);
	foreach( $social_list as $social_id => $social_data ){
		if( !empty($social_data['link']) ){
			$return .= '<li class="cspt-author-social-li cspt-author-social-'.esc_attr($social_id).'"><a href="'. esc_url($social_data['link']) .'" target="_blank"><i class="creativesplanet-base-icon-twitter"></i><span class="creativesplanet-hide">'. esc_attr($social_data['name']) .'</span></a></li>';
		}
	}
	if( !empty($return) ){
		$return = '<div class="cspt-author-social-icons"><ul class="cspt-author-social-ul">' . $return . '</ul> <!-- .cspt-author-social-ul -->  </div> <!-- .cspt-author-social-icons -->';
	}
	// Return data
	return cspt_esc_kses($return);
}
}
if( !function_exists('cspt_comments_list_template') ){
function cspt_comments_list_template($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag		= 'div';
        $add_below	= 'comment';
    } else {
        $tag		= 'li';
        $add_below	= 'div-comment';
    }?>
    <<?php echo esc_attr($tag); ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="cspt-comment"><?php
    } ?>
		<div class="cspt-comment-avatar"><?php
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] );
            } ?>
        </div>
		<div class="cspt-comment-content">
			<div class="cspt-comment-meta">
				<span class="cspt-comment-author"><?php echo get_comment_author_link(); ?></span>
				<span class="cspt-comment-date">
					<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
						<?php printf( esc_attr_x( '%1$s ago', '%1$s = human-readable time difference', 'emphires' ), human_time_diff( get_comment_time( 'U' ), current_time( 'timestamp' ) ) ); ?>
					</a>
					<?php edit_comment_link( esc_attr__( '(Edit)', 'emphires' ), '  ', '' ); ?>
				</span>
			</div>
			<?php
			if ( $comment->comment_approved == '0' ) { ?>
				<em class="cspt-comment-awaiting-moderation"><?php esc_html_e( 'Your comment is awaiting moderation.', 'emphires' ); ?></em><br/><?php
			} ?>
			<?php comment_text(); ?>
			<div class="reply"><?php
					comment_reply_link(
						array_merge(
							$args,
							array(
								'add_below' => $add_below,
								'depth'     => $depth,
								'max_depth' => $args['max_depth']
							)
						)
					); ?>
			</div>
		</div>
	<?php
    if ( 'div' != $args['style'] ) : ?>
        </div><?php
    endif;
	?>
	<?php
}
}
if( !function_exists('cspt_portfolio_details_list') ){
function cspt_portfolio_details_list() {
	$return = '';
	$lines = cspt_get_base_option('portfolio-details');
	$title = cspt_get_base_option('portfolio-details-title');
	if( !empty($lines) ){
		foreach( $lines as $line ){
			$line_id = trim($line['line_title']);
			$line_id = str_replace( ' ', '_', $line_id );
			$line_id = sanitize_html_class( strtolower( $line_id ) ) ;
			// Data
			if( $line['line_type']=='category-link' ){
				$line_data = get_the_term_list( get_the_ID(), 'cspt-portfolio-category', '', ', ' );
			} else if( $line['line_type']=='category' ){
				$line_data = strip_tags( get_the_term_list( get_the_ID(), 'cspt-portfolio-category', '', ', ' ) );
			} else {
				$line_data = get_post_meta( get_the_ID(), 'cspt-portfolio-details_'.$line_id, true );
			}
			if( !empty($line_data) ){
				$return .= '<li class="cspt-portfolio-line-li"> <span class="cspt-portfolio-line-title">' . esc_attr($line['line_title']) . ': </span> <span class="cspt-portfolio-line-value">' . cspt_esc_kses($line_data) . '</span></li>';
			}
		}
	}
	if( !empty($return) ){
		$return = '<div class="cspt-portfolio-lines-wrapper"><ul class="cspt-portfolio-lines-ul">' . $return . '</ul></div>';
	}
	if( !empty($title) ){
		$return = '<h3>' . esc_html($title) . '</h3> ' . $return;
	}
	echo cspt_esc_kses($return);
}
}
if( !function_exists('cspt_related_portfolio') ){
function cspt_related_portfolio() {
	$return			= '';
	$related_title	= cspt_get_base_option('portfolio-show-related');
	if($related_title==true){
		$related_title	= cspt_get_base_option('portfolio-related-title');
		$show			= cspt_get_base_option('portfolio-related-count');
		$column			= cspt_get_base_option('portfolio-related-column');
		$style			= cspt_get_base_option('portfolio-related-style');
		// Title
		if( !empty($related_title) ){
			$related_title = '<h3 class="cspt-related-title">'.$related_title.'</h3>';
		}
		$terms = wp_get_post_terms( get_the_ID(), 'cspt-portfolio-category' );
		$term_list = array();
		if( !empty($terms) ){
			foreach( $terms as $term ){
				$term_list[] = $term->slug;
			}
		}
		// Preparing $args
		$args = array(
			'post_type'				=> 'cspt-portfolio',
			'orderby'				=> 'rand',
			'posts_per_page'		=> $show,
			'ignore_sticky_posts'	=> true,
			'post__not_in'			=> array( get_the_ID() ),
			'tax_query'				=> array(
				array(
					'taxonomy' => 'cspt-portfolio-category',
					'field'    => 'slug',
					'terms'    => $term_list,
				),
			),
		);
		// Wp query to fetch posts
		$posts = new WP_Query( $args );
		$i = 1;
		if ( $posts->have_posts() ) {
			$return .= '<div class="cspt-element-posts-wrapper row multi-columns-row">';
			while ( $posts->have_posts() ) {
				$posts->the_post();
				$class = $i%2 ? 'cspt-odd':'cspt-even';
				// Template
				if( file_exists( locate_template( '/theme-parts/portfolio/portfolio-style-'.$style.'.php', false, false ) ) ){
					$return .= cspt_element_block_container( array(
						'position'	=> 'start',
						'column'	=> $column,
						'cpt'		=> 'portfolio',
					) );
					ob_start();
					include( locate_template( '/theme-parts/portfolio/portfolio-style-'.$style.'.php', false, false ) );
					$return .= ob_get_contents();
					ob_end_clean();
					$return .= cspt_element_block_container( array(
						'position'	=> 'end',
					) );
				}
				$i++;
			}
			$return .= '</div>';
		}
		/* Restore original Post Data */
		wp_reset_postdata();
	}
	// Output
	if( !empty($return) ){
		echo '<div class="cspt-portfolio-related">';
			echo cspt_esc_kses($related_title);
			echo cspt_esc_kses($return);
		echo '</div>';
	}
}
}
if( !function_exists('cspt_related_service') ){
function cspt_related_service() {
	$return			= '';
	$related_title	= cspt_get_base_option('service-show-related');

	if($related_title==true){

		$related_title	= cspt_get_base_option('service-related-title');
		$show			= cspt_get_base_option('service-related-count');
		$column			= cspt_get_base_option('service-related-column');
		$style			= cspt_get_base_option('service-related-style');
		// Title
		if( !empty($related_title) ){
			$related_title = '<h3 class="cspt-related-title">'.$related_title.'</h3>';
		}

		$terms = wp_get_post_terms( get_the_ID(), 'cspt-service-category' );
		$term_list = array();
		if( !empty($terms) ){
			foreach( $terms as $term ){
				$term_list[] = $term->slug;
			}
		}

		// Preparing $args
		$args = array(
			'post_type'				=> 'cspt-service',
			'orderby'				=> 'rand',
			'posts_per_page'		=> $show,
			'ignore_sticky_posts'	=> true,
			'post__not_in'			=> array( get_the_ID() ),
			'tax_query'				=> array(
				array(
					'taxonomy' => 'cspt-service-category',
					'field'    => 'slug',
					'terms'    => $term_list,
				),
			),
		);

		// Wp query to fetch posts
		$posts = new WP_Query( $args );
		$i = 1;
		if ( $posts->have_posts() ) {

			$return .= '<div class="cspt-element-posts-wrapper row multi-columns-row">';

			while ( $posts->have_posts() ) {
				$posts->the_post();
				$class = $i%2 ? 'cspt-odd':'cspt-even';

				// Template
				if( file_exists( locate_template( '/theme-parts/service/service-style-'.$style.'.php', false, false ) ) ){

					$return .= cspt_element_block_container( array(
						'position'	=> 'start',
						'column'	=> $column,
						'cpt'		=> 'service',
					) );

					ob_start();
					include( locate_template( '/theme-parts/service/service-style-'.$style.'.php', false, false ) );
					$return .= ob_get_contents();
					ob_end_clean();

					$return .= cspt_element_block_container( array(
						'position'	=> 'end',
					) );

				}
				$i++;
			}

			$return .= '</div>';
		}

		/* Restore original Post Data */
		wp_reset_postdata();

	}

	// Output
	if( !empty($return) ){
		echo '<div class="cspt-service-related">';
			echo cspt_esc_kses($related_title);
			echo cspt_esc_kses($return);
		echo '</div>';
	}
}
}

if( !function_exists('cspt_related_post') ){
function cspt_related_post() {
	$return			= '';
	$related_title	= cspt_get_base_option('blog-show-related');

	if($related_title==true){

		$related_title	= cspt_get_base_option('blog-related-title');
		$show			= cspt_get_base_option('blog-related-count');
		$column			= cspt_get_base_option('blog-related-column');
		$style			= cspt_get_base_option('blog-related-style');

		// Title
		if( !empty($related_title) ){
			$related_title = '<h3 class="cspt-related-title">'.$related_title.'</h3>';
		}

		$terms = wp_get_post_terms( get_the_ID(), 'category' );
		$term_list = array();
		if( !empty($terms) ){
			foreach( $terms as $term ){
				$term_list[] = $term->slug;
			}
		}

		// Preparing $args
		$args = array(
			'post_type'				=> 'post',
			'orderby'				=> 'rand',
			'posts_per_page'		=> $show,
			'ignore_sticky_posts'	=> true,
			'post__not_in'			=> array( get_the_ID() ),
			'tax_query'				=> array(
				array(
					'taxonomy' => 'category',
					'field'    => 'slug',
					'terms'    => $term_list,
				),
			),
		);

		// Wp query to fetch posts
		$posts = new WP_Query( $args );
		$i = 1;
		if ( $posts->have_posts() ) {

			$return .= '<div class="cspt-element-posts-wrapper row multi-columns-row">';

			while ( $posts->have_posts() ) {
				$posts->the_post();
				$class = $i%2 ? 'cspt-odd':'cspt-even';

				// Template
				if( file_exists( locate_template( '/theme-parts/blog/blog-style-'.$style.'.php', false, false ) ) ){

					$return .= cspt_element_block_container( array(
						'position'	=> 'start',
						'column'	=> $column,
						'cpt'		=> 'post',
					) );

					ob_start();
					include( locate_template( '/theme-parts/blog/blog-style-'.$style.'.php', false, false ) );
					$return .= ob_get_contents();
					ob_end_clean();

					$return .= cspt_element_block_container( array(
						'position'	=> 'end',
					) );

				}
				$i++;
			}

			$return .= '</div>';
		}

		/* Restore original Post Data */
		wp_reset_postdata();

	}

	// Output
	if( !empty($return) ){
		echo '<div class="cspt-post-related">';
			echo cspt_esc_kses($related_title);
			echo cspt_esc_kses($return);
		echo '</div>';
	}
}
}

if( !function_exists('cspt_testimonial_star_ratings') ){
function cspt_testimonial_star_ratings() {
	$return = '';
	$ratings = get_post_meta( get_the_ID(), 'cspt-star-ratings', true );
	if( !empty($ratings) && $ratings!='no' && $ratings>0 ){
		for($x = 1; $x <= 5; $x++) {
			$active_class = ( $x<=$ratings ) ? ' cspt-active' : '' ;
			$return .= '<i class="cspt-base-icon-star'.esc_attr($active_class).'"></i>';
		}
	}
	if( !empty($return) ){
		$return = '<div class="creativesplanet-box-star-ratings">'.$return.'</div>';
	}
	echo cspt_esc_kses($return);
}
}
if( !function_exists('cspt_check_widget_exists') ){
function cspt_check_widget_exists( $sidebar_position='' ) {
	$return = '';
	$sidebar	= 'cspt-sidebar-post';
	if( is_page() ){
		// page sidebar
		$sidebar	= 'cspt-sidebar-page';
		if( function_exists('is_woocommerce') && is_woocommerce() ){
			$sidebar = 'cspt-sidebar-wc-shop';
		}
	} else if( function_exists('is_woocommerce') && is_woocommerce() && !is_product() ){
		$sidebar = 'cspt-sidebar-wc-shop';
	} else if( function_exists('is_product') && is_product() ){
		$sidebar = 'cspt-sidebar-wc-single';
	} else if( is_search() ){
		$sidebar	= 'cspt-sidebar-search';
	} else if( is_singular('cspt-portfolio') ){
		$sidebar		= 'cspt-sidebar-portfolio';
	} else if( is_tax('cspt-portfolio-category') ){
		$sidebar		= 'cspt-sidebar-portfolio-cat';
	} else if( is_singular('cspt-service') ){
		$sidebar		= 'cspt-sidebar-service';
	} else if( is_tax('cspt-service-category') ){
		$sidebar		= 'cspt-sidebar-service-cat';
	} else if( is_singular('cspt-team-member') ){
		$sidebar		= 'cspt-sidebar-team';
	} else if( is_tax('cspt-team-group') ){
		$sidebar		= 'cspt-sidebar-team-group';
	} else if( is_search() ){
		$sidebar		= 'cspt-sidebar-search';
	}
	if ( !is_active_sidebar( $sidebar ) ){
		$return = 'cspt-empty-sidebar';
	}
	return esc_attr($return);
}
}
/*
 *  Body Class
 */
if( !function_exists('cspt_check_sidebar') ){
function cspt_check_sidebar() {
	$return = false;
	// sidebar class
	$sidebar = cspt_get_base_option('sidebar-post');
	if( is_page() ){
		$sidebar = cspt_get_base_option('sidebar-page');
		$page_meta = get_post_meta( get_the_ID(), 'cspt-sidebar', true );
		if( !empty($page_meta) && $page_meta!='global' ){
			$sidebar = $page_meta;
		}
		if( function_exists('is_woocommerce') && is_woocommerce() ){
			$sidebar = cspt_get_base_option('sidebar-wc-shop');
		}
	} else if( function_exists('is_woocommerce') && is_woocommerce() && !is_product() ){
		$sidebar = cspt_get_base_option('sidebar-wc-shop');
	} else if( function_exists('is_product') && is_product() ){
		$sidebar = cspt_get_base_option('sidebar-wc-single');
	} else if( is_singular('cspt-portfolio') ){
		$sidebar = cspt_get_base_option('sidebar-portfolio');
		$page_meta = get_post_meta( get_the_ID(), 'cspt-sidebar', true );
		if( !empty($page_meta) && $page_meta!='global' ){
			$sidebar = $page_meta;
		}
	} else if( is_singular('cspt-service') ){
		$sidebar = cspt_get_base_option('sidebar-service');
		$page_meta = get_post_meta( get_the_ID(), 'cspt-sidebar', true );
		if( !empty($page_meta) && $page_meta!='global' ){
			$sidebar = $page_meta;
		}
	} else if( is_singular('cspt-team-member') ){
		$sidebar = cspt_get_base_option('sidebar-team-member');
		$page_meta = get_post_meta( get_the_ID(), 'cspt-sidebar', true );
		if( !empty($page_meta) && $page_meta!='global' ){
			$sidebar = $page_meta;
		}
	} else if( is_tax('cspt-team-group') ){
		$sidebar = cspt_get_base_option('sidebar-team-group');
	} else if( is_tax('cspt-portfolio-category') ){
		$sidebar = cspt_get_base_option('sidebar-portfolio-category');
	} else if( is_tax('cspt-service-category') ){
		$sidebar = cspt_get_base_option('sidebar-service-category');
	} else if( is_search() ){
		$sidebar = cspt_get_base_option('sidebar-search');
	}
	if( $sidebar!='' && $sidebar!='no' ){
		$return = true;
	}
	if( !empty( cspt_check_widget_exists() ) ){
		$return = false;
	}
	return $return;
}
}
if( !function_exists('cspt_get_css_bgimage') ){
function cspt_get_css_bgimage( $css ){
	$imgurl = '';
	if( !empty($css) ){
		$css = trim($css);
		$css_array = explode( '{', $css );
		if( !empty($css_array[1]) ){
			$css_array = $css_array[1];
			$css_array = explode( ';', $css_array );
			foreach( $css_array as $css_style ){
				if( substr($css_style, 0, 16)=='background-image' ){
					$imgurl = str_replace( 'background-image', '', $css_style );
					$imgurl = str_replace( ':', '', $imgurl );
					$imgurl = str_replace( 'url(', '', $imgurl );
					$imgurl = str_replace( ')', '', $imgurl );
					$imgurl = str_replace( '!important', '', $imgurl );
					$imgurl = trim($imgurl);
					if( strpos($imgurl, '?') !== false ) {
						$imgurl = explode('?',$imgurl);
						$imgurl = $imgurl[0];
						if( substr( $imgurl, 0, 6 )=='http//' ){ $imgurl = str_replace( 'http//', 'http://', $imgurl ); }
					}
				} else if( substr($css_style, 0, 11)=='background:' || substr($css_style, 0, 12)=='background :' ){
					$imgurl = str_replace( 'background', '', $css_style );
					$imgurl = str_replace( ':', '', $imgurl );
					$imgurl = trim($imgurl);
					$imgurl_array = explode( ' ', $imgurl );
					foreach( $imgurl_array as $values ){
						if( substr($values, 0, 4)=='url(' ){
							$imgurl = str_replace( 'url(', '', $values );
							$imgurl = str_replace( ')', '', $imgurl );
							$imgurl = str_replace( '!important', '', $imgurl );
							$imgurl = trim($imgurl);
							if( strpos($imgurl, '?') !== false ) {
								$imgurl = explode('?',$imgurl);
								$imgurl = $imgurl[0];
								if( substr( $imgurl, 0, 6 )=='http//' ){ $imgurl = str_replace( 'http//', 'http://', $imgurl ); }
							}
						}
					}
				}
			}
		}
	}
	return $imgurl;
}
}
if( !function_exists('cspt_sortable_category') ){
function cspt_sortable_category( $atts=array(), $taxonomy='' ){
	$return = '';
	$list = '';
	if( !empty($atts['sortable']) && $atts['sortable']=='yes' ){
		$list .= '<li><a href="#" class="cspt-sortable-link cspt-selected" data-sortby="*">' . esc_html__('All','emphires') . '</a></li>';
		if( !empty($atts['from_category']) ){
			// selected category
			$from_category = explode(',',$atts['from_category']);
			foreach( $from_category as $catslug ){
				$term = get_term_by( 'slug', $catslug, $taxonomy );
				$list .= '<li><a href="#" class="cspt-sortable-link" data-sortby="' . esc_attr($catslug) . '">' . esc_html($term->name) . '</a></li>';
			}
		} else {
			// all category
			$all_terms = get_terms( array(
				'taxonomy'   => $taxonomy,
				'hide_empty' => true,
			) );
			foreach( $all_terms as $term ){
				$list .= '<li><a href="#" class="cspt-sortable-link" data-sortby="' . esc_attr($term->slug) . '">' . esc_html($term->name) . '</a></li>';
			}
		}
		$return = '<div class="cspt-sortable-list"><ul class="cspt-sortable-list-ul">
			'.$list.'
		</ul></div>';
		return cspt_esc_kses($return);
	}
}
}
if( !function_exists('cspt_cart_icon') ){
function cspt_cart_icon( $style='1' ){
	$show_cart = cspt_get_base_option('wc-show-cart-icon');
	if( function_exists('is_woocommerce') && $show_cart==true ){
		$show_cart_amount = cspt_get_base_option('wc-show-cart-amount');
		global $woocommerce;
		$cart_icon		= ( $style=='2' ) ? 'cspt-base-icon-supermarket-2' : 'cspt-base-icon-shopping-bag-1' ;
		$cart_number	= (string) $woocommerce->cart->cart_contents_count;
		$cart_number	= ( $cart_number>0 ) ? $cart_number : '0' ;
		?>
		<div class="cspt-cart-wrapper cspt-cart-style-<?php echo esc_attr($style); ?>">
			<a href="<?php echo wc_get_cart_url(); ?>" class="cspt-cart-link">
				<span class="cspt-cart-details">
					<span class="cspt-cart-icon"><i class="<?php echo esc_attr($cart_icon); ?>"></i></span>
					<span class="cspt-cart-count">
						<?php echo esc_html($cart_number);?> 
					</span>
				</span>
				<?php if( $show_cart_amount==true ) : ?>
				<?php echo cspt_esc_kses( $woocommerce->cart->get_cart_total() ); ?>
				<?php endif; ?>
			</a>
		</div>
		<?php
	}
}
}
if( !function_exists('cspt_site_content_class') ){
function cspt_site_content_class(){
	$return = '';
	if( is_404() ){
		$bgcolor = cspt_get_base_option('e404-bgcolor');
		if( !empty($bgcolor) ){
			$return .= ' cspt-bg-color-'.$bgcolor;
		}
		$background = cspt_get_base_option('e404-background');
		if( !empty($background['background-image']) ){
			$return .= ' cspt-bg-image-yes';
		}
		$text_color = cspt_get_base_option('e404-text-color');
		if( !empty($text_color) ){
			$return .= ' cspt-text-color-'.$text_color;
		}
	}
	if( !empty($return) ){
		echo esc_attr($return);
	}
}
}

if( !function_exists('cspt_preloader') ){
function cspt_preloader(){
	$preloader = cspt_get_base_option('preloader');
	if( $preloader == true ){
		$preloader_img	= cspt_get_base_option('preloader-image');
		if( !empty($preloader_img) ){
			echo cspt_esc_kses('<div class="cspt-preloader" style="background-image:url('.esc_url( get_template_directory_uri() . '/images/loader'.esc_attr($preloader_img).'.svg'  ).')"></div>');
		}
	}
}
}	