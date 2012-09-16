				<div <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="post-info">
						<?php basejump_posted_on(); ?> <span class="post-comments"><?php /* http://www.social-ink.net/blog/wordpress-tips-removing-comments-off */ comments_popup_link( '<span class="leave-reply"></span>', _x( '1 Comment', 'comments number', 'basejump' ), _x( '% Comments', 'comments number', 'basejump' ), '', '' ); ?></span> <?php edit_post_link( __( '(Edit)', 'basejump' ) ); ?>
					</div><!-- end .postinfo -->
					<div class="entry-content">
						<?php 
						 if ( has_post_thumbnail()) {
						   $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
						   echo '<div class="feat-img"><a href="' . $large_image_url[0] . '" title="' . the_title_attribute('echo=0') . '" >';
						   the_post_thumbnail('single');
						   echo '</a></div><!-- end .feat-img -->';
						 }
						 ?>
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'basejump' ), 'after' => '</div>' ) ); ?>
					</div><!-- end .entry-content -->
					<div class="post-meta">
						<?php if ( count( get_the_category() ) ) : ?>
							<span class="categories">
								<?php printf( __( '<span class="%1$s">Categorized under</span> %2$s ', 'basejump' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
							</span>
							<span class="tags">
								<?php
								$tag = get_the_tags();
								if (! $tag) { 
									echo __( 'and untagged', 'basejump' );
								} else {
									echo __( 'and tagged with ', 'basejump' );
									the_tags( '', ', ' );
								} ?>
							</span>
						<?php endif; ?>
						<?php get_template_part( 'icons', 'social' ); ?>
					</div><!-- end .post-meta -->
				</div><!-- end .post_class -->