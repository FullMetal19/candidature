<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
/**
 * Shortcode attributes
 * @var $atts
 * @var $el_id
 * @var $el_class
 * @var $width
 * @var $css
 * @var $offset
 * @var $content - shortcode content
 * @var $css_animation
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Column
 */
$el_class = $el_id = $width = $parallax_speed_bg = $parallax_speed_video = $parallax = $parallax_image = $video_bg = $video_bg_url = $video_bg_parallax = $css = $offset = $css_animation = '';
$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );
wp_enqueue_script( 'wpb_composer_front_js' );
$width = wpb_translateColumnWidthToSpan( $width );
$width = vc_column_offset_class_merge( $offset, $width );
$css_classes = array(
	$this->getExtraClass( $el_class ) . $this->getCSSAnimation( $css_animation ),
	'wpb_column',
	'vc_column_container',
	$width,
);
/*** CreativesPlanet Change - Start ***/
$stretched_classes = array();
$css_classes[] = 'cspt-column';
if ( ! empty( $atts['cspt-text-color'] ) ) {
	$css_classes[] = esc_attr('cspt-text-color-yes');
	$css_classes[] = esc_attr('cspt-text-color-' . $atts['cspt-text-color']);
}
if ( ! empty( $atts['cspt-bg-color'] ) ) {
	$css_classes[] = esc_attr('cspt-bg-color-yes');
	$css_classes[] = esc_attr('cspt-bg-color-' . $atts['cspt-bg-color']);
	$stretched_classes[] = esc_attr('cspt-bg-color-yes');
	$stretched_classes[] = esc_attr('cspt-bg-color-' . $atts['cspt-bg-color']);
}
if ( ! empty( $atts['cspt-zindex'] ) ) {
	$css_classes[] = esc_attr('cspt-zindex-' . $atts['cspt-zindex']);
}
if ( ! empty( $atts['cspt-bg-image-position'] ) ) {
	$css_classes[] = esc_attr('cspt-bgimage-position-' . $atts['cspt-bg-image-position']);
}
/* Adding custom CSS for background color to separate :before element */
cspt_custom_css_for_bg_layer( $css, $atts );
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
	$responsive_css_code = cspt_responsive_padding_margin( $atts['cspt-responsive-css'], '.cspt-column', ' > .vc_column-inner' );
	cspt_inline_css( $responsive_css_code );  // set css in global variable
}
/* Check if bg image or bg video exists */
$has_video_bg = ( ! empty( $video_bg ) && ! empty( $video_bg_url ) && vc_extract_youtube_id( $video_bg_url ) );
if( !empty( $parallax_image ) || strpos($css, 'url(') !== false || $has_video_bg==true ){
	$css_classes[]  = 'cspt-bgimage-yes';
}
/*** CreativesPlanet Change - End ***/
/*** CreativesPlanet Change - Start ***/
if( !empty($atts['cspt-extended-column']) ){
	$css_classes[] = 'cspt-col-stretched-yes cspt-col-stretched-' . esc_attr($atts['cspt-extended-column']) . ' cspt-col-stretched-content-' . esc_attr($atts['cspt-strech-content']);
}
if( !empty($atts['cspt-bg-image-color-order']) && $atts['cspt-bg-image-color-order']=='image-over-color' ){
	$css_classes[] = 'cspt-bgimage-over-bgcolor';
}
/*** CreativesPlanet Change - End ***/
if ( vc_shortcode_custom_css_has_property( $css, array(
		'border',
		'background',
	) ) || $video_bg || $parallax
) {
	$css_classes[] = 'vc_col-has-fill';
}
$wrapper_attributes = array();
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
$css_class = preg_replace( '/\s+/', ' ', apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, implode( ' ', array_filter( $css_classes ) ), $this->settings['base'], $atts ) );
$wrapper_attributes[] = 'class="' . esc_attr( trim( $css_class ) ) . '"';
if ( ! empty( $el_id ) ) {
	$wrapper_attributes[] = 'id="' . esc_attr( $el_id ) . '"';
}
?>
<div <?php echo implode( ' ', $wrapper_attributes ); ?>>
	<div class="vc_column-inner <?php echo esc_attr( trim( vc_shortcode_custom_css_class( $css ) ) ); ?>">
	<?php if( !empty($atts['cspt-extended-column']) ) : ?>
		<div class="cspt-stretched-div cspt-stretched-<?php echo esc_attr($atts['cspt-extended-column']); ?> <?php echo implode( ' ', $stretched_classes ); ?>" <?php if( function_exists('cspt_bg_from_css') ) : ?> style="<?php echo cspt_bg_from_css( $css, 'inlinestyle' ); ?>"<?php endif; ?>></div><!-- .cspt-stretched-div -->
	<?php endif; ?>
		<div class="wpb_wrapper">
			<?php echo wpb_js_remove_wpautop( $content ); ?>
		</div>
	</div>
</div>
