<div class="cspt-fld-contents">
	<div class="cspt-circle-outer"
		data-digit			= "<?php echo esc_html($digit); ?>"
		data-fill			= "<?php echo esc_html($global_color); ?>"		
		data-emptyfill		= "<?php echo cspt_hex2rgb($global_color, '0.3') ?>"
		data-before			= "<?php echo esc_html($before_text); ?>"
		data-before-type	= "<?php echo esc_html($beforetextstyle); ?>"
		data-after			= "<?php echo esc_html($after_text); ?>"
		data-after-type		= "<?php echo esc_html($aftertextstyle); ?>"
		data-thickness		= "6" 
		data-width			= "65"
		>
		    <div class="d-flex align-items-center">
				<div class="cspt-circle">				
				</div>			
				<div class="cspt-circle-inner">
					<div class="cspt-circle-number"></div>
					<span class="cspt-fid-title"><?php echo cspt_esc_kses($title); ?></span>
				</div>
			</div>
	</div>
</div><!-- .cspt-fld-contents -->