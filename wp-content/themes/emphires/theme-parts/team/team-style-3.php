<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-<?php echo esc_attr($style); ?>">
	<div class="creativesplanet-post-item d-flex">
		<div class="creativesplanet-team-image-box">			
			<?php cspt_get_featured_data( array( 'size' => 'cspt-img-500x560' ) ); ?>				
		</div>
		<div class="creativesplanet-box-content">
			<div class="creativesplanet-box-content-inner">	
				<div class="creativesplanet-box-team-position">
					<?php cspt_team_designation(); ?>
				</div>			
				<h3 class="cspt-team-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>					
				<?php
				$short_info = get_post_meta( get_the_ID(), 'cspt-team-details_short-info', true );
				if( !empty($short_info) ){ ?>
					<div class="creativesplanet-box-team-description">
						<?php echo do_shortcode($short_info); ?>
					</div>	
				<?php } ?>
				<div class="creativesplanet-box-social-links"><?php echo cspt_team_social_links(); ?></div>
			</div>				
		</div>		
	</div>
</article>
 