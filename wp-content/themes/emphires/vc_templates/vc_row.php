<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $full_width
 * @var $full_height
 * @var $equal_height
 * @var $columns_placement
 * @var $content_placement
 * @var $parallax
 * @var $parallax_image
 * @var $css
 * @var $el_id
 * @var $video_bg
 * @var $video_bg_url
 * @var $video_bg_parallax
 * @var $parallax_speed_bg
 * @var $parallax_speed_video
 * @var $content - shortcode content
 * @var $css_animation
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Row
 */
$el_class = $full_height = $parallax_speed_bg = $parallax_speed_video = $full_width = $equal_height = $flex_row = $columns_placement = $content_placement = $parallax = $parallax_image = $css = $el_id = $video_bg = $video_bg_url = $video_bg_parallax = $css_animation = '';
$disable_element = '';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
wp_enqueue_script( 'wpb_composer_front_js' );
$el_class = $this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation );
$css_classes = array(
	'vc_row',
	'wpb_row',
	//deprecated
	'vc_row-fluid',
	$el_class,
	vc_shortcode_custom_css_class( $css ),
);
/**** CreativesPlanet Change - Start ****/
$css_classes[] = 'cspt-row';
if ( ! empty( $atts['cspt-text-color'] ) ) {
	$css_classes[] = esc_attr('cspt-text-color-yes');
	$css_classes[] = esc_attr('cspt-text-color-' . $atts['cspt-text-color']);
}
if ( ! empty( $atts['cspt-bg-color'] ) ) {
	$css_classes[] = esc_attr('cspt-bg-color-yes');
	$css_classes[] = esc_attr('cspt-bg-color-' . $atts['cspt-bg-color']);
}
if ( ! empty( $atts['cspt-zindex'] ) ) {
	$css_classes[] = esc_attr('cspt-zindex-' . $atts['cspt-zindex']);
}
if ( ! empty( $atts['cspt-bg-image-position'] ) ) {
	$css_classes[] = esc_attr('cspt-bgimage-position-' . $atts['cspt-bg-image-position']);
}
/* Responsive padding/margin */
if( !empty($atts['cspt-responsive-css']) ){
	$responsive_css = cspt_responsive_padding_margin_class( $atts['cspt-responsive-css'] );
	if( !empty( $responsive_css ) ){
		$css_classes[] = esc_attr( $responsive_css );
	}
	if( !empty($atts['cspt-responsive-css']) ){
		$cspt_responsive_css_array = explode('|',$atts['cspt-responsive-css']);
		if( !empty($cspt_responsive_css_array[1]) && $cspt_responsive_css_array[1]=='colbreak_yes' ){ // 1200
			$css_classes[] = 'cspt-break-col-1200';
		}
		if( !empty($cspt_responsive_css_array[10]) && $cspt_responsive_css_array[10]=='colbreak_yes' ){  // 991
			$css_classes[] = 'cspt-break-col-991';
		}
		if( !empty($cspt_responsive_css_array[19]) && $cspt_responsive_css_array[19]=='colbreak_yes' ){  // 767
			$css_classes[] = 'cspt-break-col-767';
		}
		if( !empty($cspt_responsive_css_array[29]) && $cspt_responsive_css_array[29]=='colbreak_yes' ){  // custom
			$css_classes[] = 'cspt-break-col-custom';
		}
	}
	$responsive_css_code = cspt_responsive_padding_margin( $atts['cspt-responsive-css'], '.cspt-row' );
	cspt_inline_css( $responsive_css_code );  // set css in global variable
}
/* Adding custom CSS for background color to separate :before element */
cspt_custom_css_for_bg_layer($css, $atts );
/* Extended Column */
$extended_col_first = '';
$extended_col_last  = '';
if( !empty($atts['cspt-extended-column']) ){
	$css_classes[] = 'cspt-extended-col cspt-extended-col-' . $atts['cspt-extended-column'];
	$extended_col_first = cspt_streched_html_code( $atts, $content, 'first' );
	$extended_col_last  = cspt_streched_html_code( $atts, $content, 'last'  );
}
/* Check if bg image or bg video exists */
$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );
if( !empty( $parallax_image ) || strpos($css, 'url(') !== false || $has_video_bg==true ){
	$css_classes[]  = 'cspt-bgimage-yes';
}
/* Lazy Loader class */
/*** CreativesPlanet Change - End ***/
/*** CreativesPlanet Change - Start ***/
if( !empty($atts['cspt-bg-image-color-order']) && $atts['cspt-bg-image-color-order']=='image-over-color' ){
	$css_classes[] = 'cspt-bgimage-over-bgcolor';
}
/*** CreativesPlanet Change - End ***/
if ( 'yes' === $disable_element ) {
	if ( vc_is_page_editable() ) {
		$css_classes[] = 'vc_hidden-lg vc_hidden-xs vc_hidden-sm vc_hidden-md';
	} else {
		return '';
	}
}
if ( vc_shortcode_custom_css_has_property( $css, array(
		'border',
		'background',
	) ) || $video_bg || $parallax
) {
	$css_classes[] = 'vc_row-has-fill';
}
if ( ! empty( $atts['gap'] ) ) {
	$css_classes[] = 'vc_column-gap-' . $atts['gap'];
}
if ( ! empty( $atts['rtl_reverse'] ) ) {
	$css_classes[] = 'vc_rtl-columns-reverse';
}
$wrapper_attributes = array();
// build attributes for wrapper
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}
if ( ! empty( $full_width ) ) {
	$wrapper_attributes[] = 'data-vc-full-width="true"';
	$wrapper_attributes[] = 'data-vc-full-width-init="false"';
	if ( 'stretch_row_content' === $full_width ) {
		$wrapper_attributes[] = 'data-vc-stretch-content="true"';
	} elseif ( 'stretch_row_content_no_spaces' === $full_width ) {
		$wrapper_attributes[] = 'data-vc-stretch-content="true"';
		$css_classes[] = 'vc_row-no-padding';
	}
	$after_output .= '<div class="vc_row-full-width vc_clearfix"></div>';
}
/*** CreativesPlanet Change - Start ***/
/* Lazy Loader class */
if( class_exists('FlorianBrinkmann\LazyLoadResponsiveImages\Settings') ){
	$bg_lazyload_val = get_option('lazy_load_responsive_images_unveilhooks_plugin');
	if( $bg_lazyload_val=='1' ){
		$bg_image = cspt_get_css_bgimage( $css );
		if( !empty($bg_image) ){
			$css_classes[]  = 'lazyload';
			$wrapper_attributes[] = 'data-bg="'.esc_url($bg_image).'"';
		}
	}
}
/*** CreativesPlanet Change - End ***/
if ( ! empty( $full_height ) ) {
	$css_classes[] = 'vc_row-o-full-height';
	if ( ! empty( $columns_placement ) ) {
		$flex_row = true;
		$css_classes[] = 'vc_row-o-columns-' . $columns_placement;
		if ( 'extend' === $columns_placement ) {
			$css_classes[] = 'vc_row-o-equal-height';
		}
	}
}
if ( ! empty( $equal_height ) ) {
	$flex_row = true;
	$css_classes[] = 'vc_row-o-equal-height';
}
if ( ! empty( $content_placement ) ) {
	$flex_row = true;
	$css_classes[] = 'vc_row-o-content-' . $content_placement;
}
if ( ! empty( $flex_row ) ) {
	$css_classes[] = 'vc_row-flex';
}
$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );
$parallax_speed = $parallax_speed_bg;
if ( $has_video_bg ) {
	$parallax = $video_bg_parallax;
	$parallax_speed = $parallax_speed_video;
	$parallax_image = $video_bg_url;
	$css_classes[] = 'vc_video-bg-container';
	wp_enqueue_script( 'vc_youtube_iframe_api_js' );
}
if ( ! empty( $parallax ) ) {
	wp_enqueue_script( 'vc_jquery_skrollr_js' );
	$wrapper_attributes[] = 'data-vc-parallax="' . esc_attr( $parallax_speed ) . '"'; // parallax speed
	$css_classes[] = 'vc_general vc_parallax vc_parallax-' . $parallax;
	if ( false !== strpos( $parallax, 'fade' ) ) {
		$css_classes[] = 'js-vc_parallax-o-fade';
		$wrapper_attributes[] = 'data-vc-parallax-o-fade="on"';
	} elseif ( false !== strpos( $parallax, 'fixed' ) ) {
		$css_classes[] = 'js-vc_parallax-o-fixed';
	}
}
if ( ! empty( $parallax_image ) ) {
	if ( $has_video_bg ) {
		$parallax_image_src = $parallax_image;
	} else {
		$parallax_image_id = preg_replace( '/[^\d]/', '', $parallax_image );
		$parallax_image_src = wp_get_attachment_image_src( $parallax_image_id, 'full' );
		if ( ! empty( $parallax_image_src[0] ) ) {
			$parallax_image_src = $parallax_image_src[0];
		}
	}
	$wrapper_attributes[] = 'data-vc-parallax-image="' . esc_attr( $parallax_image_src ) . '"';
}
if ( ! $parallax && $has_video_bg ) {
	$wrapper_attributes[] = 'data-vc-video-bg="' . esc_attr( $video_bg_url ) . '"';
}
$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( array_unique( $css_classes ) ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';
?>
<div <?php echo implode( ' ', $wrapper_attributes ); ?>>
	<?php echo trim($extended_col_first); // CreativesPlanet - added  ?>
	<?php echo trim($extended_col_last); // CreativesPlanet - added ?>
	<?php echo wpb_js_remove_wpautop( $content ); ?>
</div>
<?php echo trim($after_output); ?>
