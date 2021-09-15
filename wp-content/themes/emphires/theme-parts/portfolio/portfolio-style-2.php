<article class="creativesplanet-ele creativesplanet-ele-portfolio cspt-portfolio-style-2 <?php echo esc_attr($class); ?>">
	<div class="creativesplanet-post-item">	
		<div class="cspt-image-wrapper">
			<?php cspt_get_featured_data( array( 'featured_img_only' => true, 'size' => 'cspt-img-770x635' ) ); ?>
		</div>			
		<div class="cspt-content-wrapper">
			<div class="cspt-port-cat"><?php echo get_the_term_list( get_the_ID(), 'cspt-portfolio-category', '', ', ' ); ?></div>
			<h3 class="cspt-portfolio-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>	
			<div class="cspt-link-icon">
                <a href="<?php the_permalink(); ?>"><i class="cspt-base-icon-plus"></i></a>
            </div>
		</div>
	</div>
</article>