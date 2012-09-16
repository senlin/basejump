<?php // Category pages
get_header(); ?>
		<div id="content-sidebar-wrap" class="content-sidebar">
			<div id="content" class="hfeed">
				<?php if ( have_posts() ) : ?>
					<div class="page-header">
						<h1 class="page-title">
							<?php printf( __( 'Articles categorized under: %s', 'basejump' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?>
						</h1>
						<?php
							$category_description = category_description();
							if ( ! empty( $category_description ) )
								echo apply_filters( 'category_archive_meta', '<div class="category-archive-meta">' . $category_description . '</div>' );
						?>
					</div><!-- end .page-header -->
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<div id="nav-above" class="navigation">
						<div class="alignleft"><?php previous_posts_link( __( '<span class="meta-nav">&larr;</span> Previous page', 'basejump' ) ); ?></div>
						<div class="alignright"><?php next_posts_link( __( 'Next page <span class="meta-nav">&rarr;</span>', 'basejump' ) ); ?></div>
					</div><!-- #nav-above -->
				<?php endif; ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'loop', 'category' ); ?>
					
				<?php endwhile; // end of the loop. ?>
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<div id="nav-below" class="navigation">
						<div class="alignleft"><?php previous_posts_link( __( '<span class="meta-nav">&larr;</span> Previous page', 'basejump' ) ); ?></div>
						<div class="alignright"><?php next_posts_link( __( 'Next page <span class="meta-nav">&rarr;</span>', 'basejump' ) ); ?></div>
					</div><!-- #nav-above -->
				<?php endif; ?>
				<?php else : ?>
					<div id="post-0" class="post no-results not-found">
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'basejump' ); ?></h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<p><?php _e( 'Apologies,there are no articles in this category at the moment. Perhaps searching will help to find what you were looking for.', 'basejump' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- end .entry-content -->
					</div><!-- end #post-0 -->
				<?php endif; ?>
			</div><!-- end #content -->
			<?php get_sidebar();?>
	</div><!-- end #inner -->
<?php get_footer();?>