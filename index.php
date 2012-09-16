<?php get_header();?>
		<div id="content-sidebar-wrap" class="content-sidebar">
			<div id="content" class="hfeed">
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<div id="nav-above" class="navigation">
						<div class="alignleft"><?php previous_posts_link( __( '<span class="meta-nav">&larr;</span> Previous page', 'basejump' ) ); ?></div>
						<div class="alignright"><?php next_posts_link( __( 'Next page <span class="meta-nav">&rarr;</span>', 'basejump' ) ); ?></div>
					</div><!-- #nav-above -->
				<?php endif; ?>
				<?php if ( ! have_posts() ) : ?>
					<div id="post-0" class="post error404 not-found">
						<h1 class="page-title"><?php _e( 'Not Found', 'basejump' ); ?></h1>
						<div class="entry-content">
							<p><?php _e( 'Apologies, there are no articles here at the moment. Perhaps searching will help find a related post.', 'basejump' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- end .entry-content -->
					</div><!-- end #post-0 -->
				<?php endif; ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				
					<?php get_template_part( 'loop', 'general' ); ?>
				
				<?php endwhile; // end of the loop. ?>
				<?php if ( $wp_query->max_num_pages > 1 ) : ?>
					<div id="nav-below" class="navigation">
						<div class="alignleft"><?php previous_posts_link( __( '<span class="meta-nav">&larr;</span> Previous page', 'basejump' ) ); ?></div>
						<div class="alignright"><?php next_posts_link( __( 'Next page <span class="meta-nav">&rarr;</span>', 'basejump' ) ); ?></div>
					</div><!-- #nav-above -->
				<?php endif; ?>
			</div><!-- end #content -->
			<?php get_sidebar();?>
	</div><!-- end #inner -->
<?php get_footer();?>