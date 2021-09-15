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
<article class="creativesplanet-ele creativesplanet-ele-service cspt-service-style-3">
	<div class="creativesplanet-post-item">		  
		<?php cspt_get_featured_data( array( 'featured_img_only' => true, 'size' => 'cspt-img-770x500' ) ); ?>	
		<div class="creativesplanet-box-content">				    					
			<div class="creativesplanet-box-content-inner">
				<div class="cspt-service-cat"><?php echo get_the_term_list( get_the_ID(), 'cspt-service-category', '', ', ' ); ?></div>
				<h3 class="cspt-service-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3> 
				<div class="cspt-service-content"><?php the_excerpt(); ?></div>
				<div class="cspt-service-btn"> 
						<a class="btn-arrow" href="<?php the_permalink(); ?>"><i class="cspt-base-icon-right-arrow-1"></i></a>
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