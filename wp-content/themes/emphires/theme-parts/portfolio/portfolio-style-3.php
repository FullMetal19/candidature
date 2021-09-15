<article class="creativesplanet-ele creativesplanet-ele-portfolio cspt-portfolio-style-3 <?php echo esc_attr($class); ?>">
	<div class="creativesplanet-post-item">						
		<div class="cspt-image-wrapper">
			<?php cspt_get_featured_data( array( 'featured_img_only' => true, 'size' => 'cspt-img-770x635' ) ); ?>
			<div class="creativesplanet-icon-box creativesplanet-media-link">			  	
				<?php if( has_post_thumbnail() ): ?>
				<a class="cspt-lightbox" title="<?php the_title_attribute(); ?>" href="<?php echo get_the_post_thumbnail_url(); ?>"><i class="cspt-base-icon-plus"></i></a>
				<?php endif; ?>
			</div>
		</div>
		<div class="cspt-content-wrapper">
			<div class="cspt-box-content-inner d-flex align-items-center" >
				<div class="cspt-portfolio-wrap" >				
					<div class="cspt-port-cat"><?php echo get_the_term_list( get_the_ID(), 'cspt-portfolio-category', '', ', ' ); ?></div>
					<h3 class="cspt-portfolio-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
				</div>	
				<div class="cspt-portfolio-icon-wrapper ml-auto">
					<a href="<?php the_permalink(); ?>"><i class="cspt-emphires-icon cspt-base-icon-angle-right"></i></a>
			   </div>
		   </div>
		</div>
	</div>
</article>