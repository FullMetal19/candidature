<div class="creativesplanet-post-item">
	<div class="creativesplanet-box-content">
		<div class="creativesplanet-box-desc">
			<blockquote class="creativesplanet-testimonial-text"><?php the_content(''); ?></blockquote>
		</div>
	</div>
	<?php cspt_testimonial_star_ratings(); ?>
	<div class="creativesplanet-box-author">
		<h3 class="creativesplanet-box-title"><?php echo get_the_title(); ?></h3>
		<?php echo cspt_esc_kses($company_name_html); ?>
	</div>
</div>