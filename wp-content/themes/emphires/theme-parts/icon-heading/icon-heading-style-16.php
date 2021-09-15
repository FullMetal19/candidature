<div <?php if( !empty($el_id) ) : ?>id="<?php echo esc_attr($el_id); ?>"<?php endif; ?> class="cspt-ihbox cspt-ihbox-style-<?php echo esc_attr($boxstyle); ?> <?php echo esc_attr($mainclass); ?>" >
	<div class="cspt-ihbox-box">			
		<div class="cspt-ihbox-contents">
			<?php echo cspt_esc_kses( $icon_html ); ?>
			<?php echo cspt_esc_kses( $heading_html ); ?>
			<?php echo cspt_esc_kses( $subheading_html ); ?>
			<?php echo cspt_esc_kses($content_html); ?>
			<?php echo cspt_esc_kses($button_html); ?>
		</div><!-- .cspt-ihbox-contents -->
	</div>
</div>
