<article class="creativesplanet-ele creativesplanet-ele-team cspt-team-style-<?php echo esc_attr($style); ?>">
	<div class="creativesplanet-post-item">
		<div class="creativesplanet-team-image-box">
			<?php cspt_get_featured_data( array( 'size' => 'cspt-img-500x580' ) ); ?>
		</div>
		<div class="creativesplanet-box-content">
			<div class="creativesplanet-box-content-inner">				
				<div class="creativesplanet-box-team-position">
					<?php cspt_team_designation(); ?>
				</div>
				<h3 class="cspt-team-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
			</div>
			<div class="creativesplanet-box-social-links"><?php echo cspt_team_social_links(); ?></div>
		</div>
	</div>
</article>