<article class="creativesplanet-ele creativesplanet-ele-portfolio cspt-portfolio-style-4 creativesplanet-overlay-box">
	<div class="creativesplanet-post-item">
		<?php cspt_get_featured_data( array( 'featured_img_only' => true, 'size' => 'cspt-img-770x770' ) ); ?>
		<div class="creativesplanet-box-content creativesplanet-overlay">
            <div class="creativesplanet-box-content-inner">	
				<div class="creativesplanet-titlebox">
					<div class="cspt-port-cat"><?php echo get_the_term_list( get_the_ID(), 'cspt-portfolio-category', '', ', ' ); ?></div>
					<h3 class="cspt-portfolio-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
				</div>
				<div class="cspt-portfolio-corners cspt-portfolio-corners_top"></div>
				<div class="cspt-portfolio-corners cspt-portfolio-corners_bottom"></div>
            </div>			
		</div>
	</div>
</article>