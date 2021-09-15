<?php
// Icon
if( !isset($icon_html) ){
	$ts_temp = true;
	$icon_html = '';
	$icon_lib = get_post_meta( get_the_ID(), 'cspt-service-icon-library', true );
	wp_enqueue_style($icon_lib);
	$icon_class = get_post_meta( get_the_ID(), 'cspt-service-icon-'.$icon_lib, true );
	if( !empty($icon_class) ){
		$icon_html = '<i class="'.esc_attr($icon_class).'"></i>';
	}
}

// Read More text
if( !isset($more_text) ){
	$more_text = esc_attr__('More','emphires');
}
?>
<article class="creativesplanet-ele creativesplanet-ele-service cspt-service-style-1">
	<div class="creativesplanet-post-item">			  
		<?php cspt_get_featured_data( array( 'featured_img_only' => true, 'size' => 'cspt-img-770x500' ) ); ?>	
		<div class="creativesplanet-box-content">	
			<div class="cspt-service-icon">
				<div class="cspt-service-icon-wrapper">
					<?php echo cspt_esc_kses($icon_html); ?>
				</div>
			</div>					
			<div class="creativesplanet-box-content-inner">
				<h3 class="cspt-service-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3> 
				<?php if( has_excerpt() ) : ?>
				<div class="cspt-service-content"><?php the_excerpt(); ?></div>
				<?php endif; ?>
				<div class="cspt-service-btn"> 
						<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-outline vc_btn3-block vc_btn3-icon-right vc_btn3-color-default" href="<?php the_permalink(); ?>"><?php echo esc_html($more_text); ?> <i class="cspt-base-icon-right-arrow"></i></a>
				</div>
			</div>
		</div>
	</div>
</article>
<?php
if( isset($ts_temp) ){
	unset($icon_html);
}
?>