<article <?php echo post_class('creativesplanet-ele creativesplanet-ele-blog cspt-blogbox-style-'.$style); ?>>
	<div class="post-item">
		<div class="cspt-featured-container">
			<?php cspt_get_featured_data( array( 'size' => 'cspt-img-770x500' ) ); ?>
			<div class="cspt-meta-category"><?php echo get_the_category_list( ', ' ); ?></div>	 			
		</div>
		<div class="creativesplanet-box-content">	
			<div class="cspt-meta-container">
				<div class="cspt-meta-date-wrapper cspt-meta-line">					
					<div class="cspt-meta-date"><i class="cspt-base-icon-clock-1"></i> <?php echo get_the_date( 'M d, Y' ); ?><span></span></div>	
				</div>	
				<?php
				$catlist = get_the_category_list( ', ' );
				if( !empty($catlist) ) : ?>				
				<?php endif; ?>
			</div>
			<div class="creativesplanet-box-desc">
				<h3 class="cspt-post-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
				<div class="cspt-post-footer d-flex align-items-center">
					<div class="cspt-meta-author-wrapper cspt-meta-line">					
						<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php printf( esc_attr__('Posted by %1$s','emphires'), get_the_author() ); ?>" rel="author"><i class="cspt-base-icon-user-1"></i> <?php printf( __( 'by %1$s', 'emphires' ), get_the_author() ); ?></a>
					</div>
					<div class="cspt-meta-date-wrapper cspt-meta-line ml-auto">	
						<i class="cspt-base-icon-comment-empty"></i> <span class="cspt-meta cspt-meta-comments"><?php echo esc_html( get_comments_number() ); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>