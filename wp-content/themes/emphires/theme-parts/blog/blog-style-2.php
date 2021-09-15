<article <?php echo post_class('creativesplanet-ele creativesplanet-ele-blog cspt-blogbox-style-'.$style); ?>>
	<div class="post-item">
		<div class="creativesplanet-box-content">	
			<div class="cspt-meta-date"><span><?php echo get_the_date( 'M d, y' ); ?></span></div>			
			<h3 class="cspt-post-title"><a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a></h3>
			<div class="creativesplanet-box-desc">
				<div class="creativesplanet-box-desc-text">
					<?php
					$limit			= cspt_get_base_option('blog-element-limit');
					$limit_switch	= cspt_get_base_option('blog-element-limit-switch');
					if ( has_excerpt() ){
						the_excerpt();
					} else if( $limit>0 && $limit_switch=='1' ){
						$content = get_the_content('',FALSE,'');
						$content = wp_strip_all_tags($content);
						$content = strip_shortcodes($content);
						echo cspt_esc_kses( wp_trim_words($content, $limit) );
					} else { 
						the_content( '' );
					}
					?>					
				</div>		
				<div class="cspt-read-more-link"><a href="<?php echo esc_url( get_permalink() ) ?>"><span><?php esc_html_e('Read More', 'emphires'); ?></span></a></div>	
			</div>
			<div class="cspt-meta-container">
				<div class="cspt-meta-author-wrapper cspt-meta-line">					
					<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" title="<?php printf( esc_attr__('Posted by %1$s','emphires'), get_the_author() ); ?>" rel="author"><i class="cspt-base-icon-user"></i> <?php printf( __( 'by %1$s', 'emphires' ), get_the_author() ); ?></a>
				</div>
				<div class="cspt-meta-date-wrapper cspt-meta-line">					
					<div class="cspt-meta-category"><i class="cspt-base-icon-folder-open-empty"></i> <?php echo get_the_category_list( ', ' ); ?></div>	
				</div>				
				<div class="cspt-meta-date-wrapper cspt-meta-line">	
					<i class="cspt-base-icon-comment-empty"></i> <span class="cspt-meta cspt-meta-comments"><?php echo esc_html( get_comments_number() ); ?></span>
				</div>
				<?php
				$catlist = get_the_category_list( ', ' );
				if( !empty($catlist) ) : ?>				
				<?php endif; ?>
			</div>
		</div>
	</div>
</article>