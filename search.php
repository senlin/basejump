<?php // Search Result pages
get_header(); ?>
		<div id="content-sidebar-wrap" class="content-sidebar">
			<div id="content" class="hfeed">
				<?php if ( have_posts() ) : ?>
					<div class="page-header">
						<h1 class="page-title">
							<?php printf( __( 'Search Results for: %s', 'basejump' ), '<span>' . get_search_query() . '</span>' ); ?>
						</h1>
					</div><!-- end .page-header -->
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<div id="nav-above" class="navigation">
						<div class="alignleft"><?php previous_posts_link( __( '<span class="meta-nav">&larr;</span> Previous page', 'basejump' ) ); ?></div>
						<div class="alignright"><?php next_posts_link( __( 'Next page <span class="meta-nav">&rarr;</span>', 'basejump' ) ); ?></div>
					</div><!-- #nav-above -->
				<?php endif; ?>
				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'loop', 'general' ); ?>
					
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
							<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'basejump' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- end .entry-content -->
					</div><!-- end #post-0 -->
				<?php endif; ?>
			</div><!-- end #content -->
			<?php get_sidebar();?>
	</div><!-- end #inner -->
<?php get_footer();?>