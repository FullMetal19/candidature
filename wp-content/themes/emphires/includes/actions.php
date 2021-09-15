<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
if( !function_exists('cspt_widgets_init_20') ){
function cspt_widgets_init_20() {
	register_sidebar( array(
		'name'          => esc_attr__( 'Blog Sidebar', 'emphires' ),
		'id'            => 'cspt-sidebar-post',
		'description'   => esc_attr__( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'emphires' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_attr__( 'Page Sidebar', 'emphires' ),
		'id'            => 'cspt-sidebar-page',
		'description'   => esc_attr__( 'Add widgets here to appear in your sidebar on pages.', 'emphires' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
}
add_action( 'widgets_init', 'cspt_widgets_init_20', 20 );
if( !function_exists('cspt_widgets_init_22') ){
function cspt_widgets_init_22() {
	register_sidebar( array(
		'name'          => esc_attr__( 'Search Results Sidebar', 'emphires' ),
		'id'            => 'cspt-sidebar-search',
		'description'   => esc_attr__( 'Add widgets here to appear on search result pages.', 'emphires' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_attr__( 'Footer Row - 1st Column', 'emphires' ),
		'id'            => 'cspt-footer-1',
		'description'   => esc_attr__( 'Add widgets here to appear in your footer.', 'emphires' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_attr__( 'Footer Row - 2nd Column', 'emphires' ),
		'id'            => 'cspt-footer-2',
		'description'   => esc_attr__( 'Add widgets here to appear in your footer.', 'emphires' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_attr__( 'Footer Row - 3rd Column', 'emphires' ),
		'id'            => 'cspt-footer-3',
		'description'   => esc_attr__( 'Add widgets here to appear in your footer.', 'emphires' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_attr__( 'Footer Row - 4th Column', 'emphires' ),
		'id'            => 'cspt-footer-4',
		'description'   => esc_attr__( 'Add widgets here to appear in your footer.', 'emphires' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
}
add_action( 'widgets_init', 'cspt_widgets_init_22', 22 );
/**
 *  Customizer options
 */

if( class_exists('Kirki') ){
	include( get_template_directory() . '/includes/kirki-config.php' );
}


/**
 *  Categories Widget - Wrap Post count in a span
 */
add_filter('wp_list_categories', 'cspt_cat_count_span');
if( !function_exists('cspt_cat_count_span') ){
function cspt_cat_count_span($links) {

	if(strpos($links, '<span class="count">') !== false){
		// WooComerce call
		$links = str_replace('<span class="count">(', '<span class="count">', $links);
		$links = str_replace(')</span>', '</span>', $links);
	} else {
		$links = str_replace('</a> (', '</a> <span>', $links);
		$links = str_replace(')', '</span>', $links);

	}
	return $links;
}
}
/**
 *  Default Enqueue scripts and styles.
 */
if( !function_exists('cspt_theme_gfonts') ){
function cspt_theme_gfonts() {
	$font_families = array();
	$gfont_family  = '';
	include( get_template_directory() . '/includes/customizer-options.php' );
	include( get_template_directory() . '/includes/gfonts-array.php' );
	foreach( $kirki_options_array as $options_key=>$options_val ){
		if( !empty( $options_val['section_fields'] ) ){
			foreach( $options_val['section_fields'] as $key=>$option ){
				if( !empty($option['type']) && $option['type']=='typography' ){
					$font_family = '';
					$value = cspt_get_base_option( $option['settings'] );
					$family = trim($value['font-family']);
					if( substr($family, -1) == ',' ){
						$family = substr($family, 0, -1);
					}
					// Repalce space with + character
					$spaces = substr_count($family, ' ');
					if( $spaces>0 ){
						for ($x = 1; $x <= $spaces; $x++) {
							$family = str_replace( ' ', '+', $family );
						} 
					}
					$variants = $value['variant'];
					if( isset($option['cspt-all-variants']) && $option['cspt-all-variants']==true ){
						$font_family = trim($value['font-family']);
						if( substr($font_family, -1) == ',' ){
							$font_family = substr($font_family, 0, -1);
						}
						if( !empty($gfonts_array[ $font_family ]['variants']) ){
							$variants = implode( ',', $gfonts_array[ $font_family ]['variants'] );
						}
					}
					$font_families[$family][] = $variants;
				}
			}
		}
	}
	if( !empty($font_families) && is_array($font_families) ){
		$x = 1;
		foreach( $font_families as $name=>$var){
			if( !empty($name) ){
				if( $x != 1 ){ $gfont_family .= '|'; }
				$var = array_unique($var);
				$gfont_family .= $name . ':'. implode(',',$var);
			}
			$x++;
		}
		if( !empty($gfont_family) ){
			$query_args = array(
				'family' => $gfont_family,
			);
			$fonts_url = add_query_arg( $query_args, esc_url('https://fonts.googleapis.com/css'), $query_args );
			wp_enqueue_style( 'cspt-all-gfonts', $fonts_url );
		}
	}
}
}
add_action( 'wp_enqueue_scripts', 'cspt_theme_gfonts' );
add_action( 'admin_enqueue_scripts', 'cspt_theme_gfonts' );
/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
if( !function_exists('cspt_pingback_header') ){
function cspt_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
}
add_action( 'wp_head', 'cspt_pingback_header' );
/**
 * Enqueue scripts and styles.
 */
if( !function_exists('cspt_scripts') ){
function cspt_scripts() {
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	$min = '';
	if( cspt_get_base_option('min')=='1' ){
		$min = '.min';
	}
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/libraries/bootstrap/css/bootstrap.min.css' );
	if( cspt_get_base_option('load-merged-css')!=true ){
		wp_enqueue_style( 'cspt-core-style', get_template_directory_uri() . '/css/core'.$min.'.css' );
		wp_enqueue_style( 'cspt-theme-style', get_template_directory_uri() . '/css/theme'.$min.'.css' );
	}
	// Magnific Popup Lightbox
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/libraries/magnific-popup/jquery.magnific-popup.min.js', array('jquery') );
	wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/libraries/magnific-popup/magnific-popup.css' );
	// Base icon library
	wp_enqueue_style( 'cspt-base-icons', get_template_directory_uri() . '/libraries/creativesplanet-base-icons/css/creativesplanet-base-icons.css' );
	// Sticky
	if( cspt_get_base_option('sticky-header')==true ){
		wp_enqueue_script( 'jquery-sticky', get_template_directory_uri() . '/libraries/sticky-toolkit/jquery.sticky-kit.min.js' , array('jquery') );
	}
	// Theme base scripts
	wp_enqueue_script( 'cspt-core-script', get_template_directory_uri() . '/js/core'.$min.'.js' , array('jquery') );
	// Responsive variable
	$js_array = array(
		'responsive' => cspt_get_base_option('responsive-breakpoint'),
	);
	wp_localize_script( 'cspt-core-script', 'cspt_js_variables', $js_array );
	// ballon tooltip
	wp_enqueue_style( 'balloon', get_template_directory_uri() . '/libraries/balloon/balloon.min.css' );
	// Light Slider
	wp_register_script( 'lightslider', get_template_directory_uri() . '/libraries/lightslider/js/lightslider.min.js' , array('jquery') );
	wp_register_style( 'lightslider', get_template_directory_uri() . '/libraries/lightslider/css/lightslider.min.css' );
	// Isotope
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/libraries/isotope/isotope.pkgd.min.js' , array('jquery') );
}
}
add_action( 'wp_enqueue_scripts', 'cspt_scripts', 21 );
/**
 * Add all.css file
 */
if( !function_exists('cspt_all_css_file') ){
function cspt_all_css_file() {
	$min = '';
	if( cspt_get_base_option('min')=='1' ){
		$min = '.min';
	}
	if( cspt_get_base_option('load-merged-css')==true ){
		wp_enqueue_style( 'cspt-all-style', get_template_directory_uri() . '/css/all'.$min.'.css' );
	}
}
}
add_action( 'wp_enqueue_scripts', 'cspt_all_css_file', 22 );
/**
 * Load Dynamic Style
 */
if( !function_exists('cspt_load_dynamic_style') ){
function cspt_load_dynamic_style(){
	if( function_exists('cspt_auto_css') ){
		// Addons plugin exists
		if( function_exists('is_customize_preview') && !is_customize_preview() ){
			wp_enqueue_style('cspt-dynamic-style', admin_url('admin-ajax.php').'?action=cspt_auto_css');
		} else {
			ob_start();
			include get_template_directory().'/css/theme-style.php'; // Fetching theme-style.php output and store in a variable
			$css    = ob_get_clean();
			if( cspt_get_base_option('load-merged-css')==true ){
				wp_add_inline_style( 'cspt-all-style', $css );
			} else {
				wp_add_inline_style( 'cspt-theme-style', $css );
			}
		}
	} else {
		// Addons plugin not exists
		wp_enqueue_style( 'cspt-dynamic-default-style', get_template_directory_uri() . '/css/dynamic-default-style.css' );
	}
	$min = '';
	if( cspt_get_base_option('min')=='1' ){
		$min = '.min';
	}
	
	wp_enqueue_style( 'cspt-responsive-style', get_template_directory_uri() . '/css/responsive'.$min.'.css' );
	
}
}
add_action( 'wp_enqueue_scripts', 'cspt_load_dynamic_style', 25 );
/*
 *  Inline code generator
 */
if( !function_exists('cspt_add_inline_styles') ){
function cspt_add_inline_styles() {
	if( is_singular() ){
		global $cspt_inline_css;
		global $post;
		$content = $post->post_content;
		// Exclude shortcodes that are not supposed to be executed here
		global $shortcode_tags;
		$exclude_shortcodes = array();
		$global_shortcodes = array_keys($shortcode_tags);
		foreach( $global_shortcodes as $shortcode ){
			if( substr($shortcode,0,3) != 'vc_' && substr($shortcode,0,5) != 'cspt-' ){
				$content = preg_replace ( "/\[$shortcode(.*?)\]/s" , '' , $content );
				$content = str_replace ( '[/'.$shortcode.']' , '' , $content );
			}
		}
		do_shortcode($content);
		if( !empty($cspt_inline_css) ){
			if( function_exists('cspt_minify_css') ){
				$cspt_inline_css = cspt_minify_css( $cspt_inline_css );
			}
			wp_add_inline_style( 'cspt-dynamic-style', trim( $cspt_inline_css ) );
		}
	}
}
}
add_action( 'wp_enqueue_scripts', 'cspt_add_inline_styles', 30 );
if( !function_exists('cspt_wp_admin_scripts_styles') ){
function cspt_wp_admin_scripts_styles() {
	wp_register_script( 'cspt-admin-script', get_template_directory_uri() . '/includes/admin-script.js', array('jquery') );
	// Admin variable
	$admin_js_array = array(
		'theme_path' => get_template_directory_uri(),
	);
	wp_localize_script( 'cspt-admin-script', 'cspt_admin_js_variables', $admin_js_array );
	wp_enqueue_style( 'cspt-admin-style', get_template_directory_uri() . '/includes/admin-style.css' );
	wp_enqueue_script( 'cspt-admin-script' );
}
}
add_action( 'admin_enqueue_scripts', 'cspt_wp_admin_scripts_styles' );

/**
 * Elementor correction for customize bug
 */
if( !function_exists('cspt_ele_correction') ){
function cspt_ele_correction() {
	if( function_exists('is_customize_preview') && is_customize_preview() ){
		if( wp_style_is( 'elementor-common', 'enqueued' ) ){
			wp_dequeue_style('elementor-common');
		}
		if( wp_style_is( 'elementor-admin', 'enqueued' ) ){
			wp_dequeue_style('elementor-admin');
		}
	}
}
}
add_action( 'admin_enqueue_scripts', 'cspt_ele_correction', 99 );

/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Emphires 1.4
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
if( !function_exists('cspt_widget_tag_cloud_args') ){
function cspt_widget_tag_cloud_args( $args ) {
	$args['largest']  = 1;
	$args['smallest'] = 1;
	$args['unit']     = 'em';
	$args['format']   = 'list';
	return $args;
}
}
add_filter( 'widget_tag_cloud_args', 'cspt_widget_tag_cloud_args' );
/*
 *  Body Class
 */
if( !function_exists('cspt_add_body_classes') ){
function cspt_add_body_classes($classes) {
	// Widget class
	$widget_class = '';
	// sidebar class
	$sidebar_class = cspt_get_base_option('sidebar-post');
	if( in_array( $sidebar_class, array('left','right') ) ){
		$widget_class = cspt_check_widget_exists('cspt-sidebar-page');
	}
	if( is_page() ){
		$widget_class = '';
		$sidebar_class = cspt_get_base_option('sidebar-page');
		$page_meta = get_post_meta( get_the_ID(), 'cspt-sidebar', true );
		if( !empty($page_meta) && $page_meta!='global' ){
			$sidebar_class = $page_meta;
		}
		if( in_array( $sidebar_class, array('left','right') ) ){
			$widget_class = cspt_check_widget_exists('cspt-sidebar-page');
		}
		if( function_exists('is_woocommerce') && is_woocommerce() ){
			$widget_class = '';
			$sidebar_class = cspt_get_base_option('sidebar-wc-shop');
		}
		// Curved style at slider bottom
		$slider_type	= get_post_meta( get_the_ID(), 'cspt-slider-type', true );
		$curved_style	= get_post_meta( get_the_ID(), 'cspt-slider-curved-style', true );
		if( !empty($slider_type) && $curved_style == true ){
			$classes[] = 'cspt-slider-curved-style';
		}
	} else if( function_exists('is_woocommerce') && is_woocommerce() && !is_product() ){
		$widget_class = '';
		$sidebar_class = cspt_get_base_option('sidebar-wc-shop');
		if( in_array( $sidebar_class, array('left','right') ) ){
			$widget_class = cspt_check_widget_exists('cspt-sidebar-wc-shop');
		}
	} else if( function_exists('is_product') && is_product() ){
		$widget_class = '';
		$sidebar_class = cspt_get_base_option('sidebar-wc-single');
		if( in_array( $sidebar_class, array('left','right') ) ){
			$widget_class = cspt_check_widget_exists('cspt-sidebar-wc-single');
		}
	} else if( is_singular() ){
		if( get_post_type()=='cspt-portfolio' ){
			$widget_class = '';
			$sidebar_class = cspt_get_base_option('sidebar-portfolio');
			$post_meta = get_post_meta( get_the_ID(), 'cspt-sidebar', true );
			if( !empty($post_meta) && $post_meta!='global' ){
				$sidebar_class = $post_meta;
			}
			if( in_array( $sidebar_class, array('left','right') ) ){
				$widget_class = cspt_check_widget_exists('cspt-sidebar-portfolio');
			}
		} else if( get_post_type()=='cspt-service' ){
			$widget_class = '';
			$sidebar_class = cspt_get_base_option('sidebar-service');
			$post_meta = get_post_meta( get_the_ID(), 'cspt-sidebar', true );
			if( !empty($post_meta) && $post_meta!='global' ){
				$sidebar_class = $post_meta;
			}
			if( in_array( $sidebar_class, array('left','right') ) ){
				$widget_class = cspt_check_widget_exists('cspt-sidebar-service');
			}
		} else if( get_post_type()=='cspt-team-member' ){
			$widget_class = '';
			$sidebar_class = cspt_get_base_option('sidebar-team-member');
			$post_meta = get_post_meta( get_the_ID(), 'cspt-sidebar', true );
			if( !empty($post_meta) && $post_meta!='global' ){
				$sidebar_class = $post_meta;
			}
			if( in_array( $sidebar_class, array('left','right') ) ){
				$widget_class = cspt_check_widget_exists('cspt-sidebar-team');
			}
		}
	} else if( is_tax('cspt-portfolio-category') ){
		$widget_class = '';
		$sidebar_class = cspt_get_base_option('sidebar-portfolio-category');
		if( in_array( $sidebar_class, array('left','right') ) ){
			$widget_class = cspt_check_widget_exists('cspt-sidebar-portfolio-cat');
		}
	} else if( is_tax('cspt-service-category') ){
		$widget_class = '';
		$sidebar_class = cspt_get_base_option('sidebar-service-category');
		if( in_array( $sidebar_class, array('left','right') ) ){
			$widget_class = cspt_check_widget_exists('cspt-sidebar-service-cat');
		}
	} else if( is_tax('cspt-team-group') ){
		$widget_class = '';
		$sidebar_class = cspt_get_base_option('sidebar-team-group');
		if( in_array( $sidebar_class, array('left','right') ) ){
			$widget_class = cspt_check_widget_exists('cspt-sidebar-team-group');
		}
	} else if( is_search() ){
		$widget_class = '';
		$sidebar_class = cspt_get_base_option('sidebar-search');
		if( in_array( $sidebar_class, array('left','right') ) ){
			$widget_class = cspt_check_widget_exists('cspt-sidebar-search');
		}
	}
	$overlay = cspt_get_base_option('footer-big-text-area-overlay');
	if ( $overlay==true ){
		$classes[] = 'cspt-body-footer-big-text-area-overlay';
	}
	// widget exists class
	if( !empty($widget_class) ){
		$classes[] = 'cspt-sidebar-no';
	} else {
		if( in_array( $sidebar_class, array('left','right') ) ){
			$classes[] = 'cspt-sidebar-exists';
		}
		$classes[] = 'cspt-sidebar-' . $sidebar_class;
	}
	return $classes;
}
}
add_filter('body_class', 'cspt_add_body_classes');
function cspt_move_comment_field_to_bottom( $fields ) {
	$comment_field = $fields['comment'];
	unset( $fields['comment'] );
	$fields['comment'] = $comment_field;
	return $fields;
}
add_filter( 'comment_form_fields', 'cspt_move_comment_field_to_bottom' );
function cspt_update_comment_fields( $fields ) {
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$aria_req  = $req ? "aria-required='true'" : '';
	$fields['author'] =
		'<div class="cspt-comment-form-input-wrapper"><p class="cspt-comment-form-input comment-form-author">
			<input id="author" name="author" type="text" placeholder="' . esc_attr__( 'Name', 'emphires' ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';
	$fields['email'] =
		'<p class="cspt-comment-form-input comment-form-email">
			<input id="email" name="email" type="email" placeholder="' . esc_attr__( 'Email', 'emphires' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';
	$fields['url'] =
		'<p class="cspt-comment-form-input comment-form-url">
			<input id="url" name="url" type="url"  placeholder="' . esc_attr__( 'Website', 'emphires' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" />
			</p></div>';
	return $fields;
}
add_filter( 'comment_form_default_fields', 'cspt_update_comment_fields' );
function cspt_update_comment_textarea_field( $comment_field ) {
	$comment_field =
		'<p class="comment-form-comment">
		<textarea required id="comment" name="comment" placeholder="' . esc_attr__( "Enter your comment here...", 'emphires' ) . '" cols="45" rows="8"></textarea>
		</p>';
	return $comment_field;
}
add_filter( 'comment_form_field_comment', 'cspt_update_comment_textarea_field' );
// Limit Posts Per Category/Archive Page
add_filter('pre_get_posts', 'cspt_limit_category_posts');
function cspt_limit_category_posts($query){
    if( is_tax( 'cspt-portfolio-category' ) && !empty($query->query['cspt-portfolio-category']) ){
		$count		= cspt_get_base_option('portfolio-cat-count');
        $query->set('posts_per_page', $count);
    } else if( is_tax( 'cspt-team-group' ) && !empty($query->query['cspt-team-group']) ){
		$count		= cspt_get_base_option('team-group-count');
        $query->set('posts_per_page', $count);
	} else if( is_tax( 'cspt-service-category' ) && !empty($query->query['cspt-service-category']) ){
		$count		= cspt_get_base_option('service-cat-count');
        $query->set('posts_per_page', $count);
    }
    return $query;
}
/**
 * Show cart contents / total Ajax
 */
add_filter( 'woocommerce_add_to_cart_fragments', 'cspt_woocommerce_header_add_to_cart_fragment' );
if( !function_exists('cspt_woocommerce_header_add_to_cart_fragment') ){
function cspt_woocommerce_header_add_to_cart_fragment( $fragments ) {
	global $woocommerce;
	$return = '<a href="'.esc_url(wc_get_cart_url()).'" class="cspt-cart-link">
		<span class="cspt-cart-details">
			<span class="cspt-cart-icon"><i class="cspt-base-icon-supermarket-2"></i></span>
			<span class="cspt-cart-count">'.esc_html($woocommerce->cart->cart_contents_count).'</span>
		</span>
	</a>';
	$fragments['a.cspt-cart-link'] = cspt_esc_kses($return);
	return $fragments;
}
}

/**
 * Register a custom menu page.
 */
if( !function_exists('cspt_register_my_custom_menu_page') ){
function cspt_register_my_custom_menu_page() {
	add_menu_page(
		esc_attr__( 'Emphires Options', 'emphires' ),
		esc_attr__( 'Emphires Options', 'emphires' ),
		'manage_options',
		esc_url( site_url() . '/wp-admin/customize.php' ),
		'',
		esc_url( get_template_directory_uri() . '/images/customize-icon.png' ),
		6
	);
}
}
add_action( 'admin_menu', 'cspt_register_my_custom_menu_page' );