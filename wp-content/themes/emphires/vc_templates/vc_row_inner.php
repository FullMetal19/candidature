<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/**
 * Shortcode attributes
 * @var $atts
 * @var $el_class
 * @var $css
 * @var $el_id
 * @var $equal_height
 * @var $content_placement
 * @var $content - shortcode content
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Row_Inner
 */
$el_class = $equal_height = $content_placement = $css = $el_id = '';
$disable_element = '';
$output = $after_output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
$el_class = $this->getExtraClass( $el_class );
$css_classes = array(
	'vc_row',
	'wpb_row',
	//deprecated
	'vc_inner',
	'vc_row-fluid',
	$el_class,
	vc_shortcode_custom_css_class( $css ),
);
/*** CreativesPlanet Change - Start ***/
$css_classes[] = 'cspt-row-inner';
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
/* Adding custom CSS for background color to separate :before element */
cspt_custom_css_for_bg_layer($css);
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
	$responsive_css_code = cspt_responsive_padding_margin( $atts['cspt-responsive-css'], '.cspt-row-inner' );
	cspt_inline_css( $responsive_css_code );  // set css in global variable
}
/* Check if bg image or bg video exists */
$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );
if( !empty( $parallax_image ) || strpos($css, 'url(') !== false || $has_video_bg==true ){
	$css_classes[]  = 'cspt-bgimage-yes';
}
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
) ) ) {
	$css_classes[] = 'vc_row-has-fill';
}
if ( ! empty( $atts['gap'] ) ) {
	$css_classes[] = 'vc_column-gap-' . $atts['gap'];
}
if ( ! empty( $equal_height ) ) {
	$flex_row = true;
	$css_classes[] = 'vc_row-o-equal-height';
}
if ( ! empty( $atts['rtl_reverse'] ) ) {
	$css_classes[] = 'vc_rtl-columns-reverse';
}
if ( ! empty( $content_placement ) ) {
	$flex_row = true;
	$css_classes[] = 'vc_row-o-content-' . $content_placement;
}
if ( ! empty( $flex_row ) ) {
	$css_classes[] = 'vc_row-flex';
}
$wrapper_attributes = array();
// build attributes for wrapper
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
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
$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( array_unique( $css_classes ) ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';
?>
<div <?php echo implode( ' ', $wrapper_attributes ); ?>>
	<?php echo wpb_js_remove_wpautop( $content ); ?>
</div>
<?php echo trim($after_output); ?>
