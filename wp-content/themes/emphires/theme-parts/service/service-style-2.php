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
<article class="creativesplanet-ele creativesplanet-ele-service cspt-service-style-2">
	<div class="creativesplanet-post-item">			  
		<div class="creativesplanet-box-content">	
			<div class="cspt-service-icon">
				<div class="cspt-service-icon-wrapper">
					<div class="cspt-services-circle-wrapper"><div class="cspt-services-circle"></div></div>
					<div class="cspt-services-circle-wrapper"><div class="cspt-services-circle"></div></div>
					<?php echo cspt_esc_kses($icon_html); ?>
				</div>
			</div>					
			<div class="creativesplanet-box-content-inner">
				<div class="cspt-service-cat"><?php echo get_the_term_list( get_the_ID(), 'cspt-service-category', '', ', ' ); ?></div>
				<h3 class="cspt-service-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3> 
				<?php if( has_excerpt() ) : ?>
				<div class="cspt-service-content"><?php the_excerpt(); ?></div>
				<?php endif; ?>
				<div class="cspt-service-btn"> 
						<a class="round-btn" href="<?php the_permalink(); ?>"><i class="cspt-base-icon-right-arrow-1"></i></a>
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