<?php get_header();?>
		<div id="content-sidebar-wrap" class="content-sidebar">
			<div id="content" class="hfeed">
				<?php while ( have_posts() ) : the_post(); ?>
					
				<div id="nav-above" class="navigation">
					<div class="alignleft"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'basejump' ) . '</span> %title' ); ?></div>
					<div class="alignright"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'basejump' ) . '</span>' ); ?></div>
				</div><!-- end #nav-above -->
				
				<?php get_template_part( 'loop', 'single' ); ?>
				
				<div id="nav-below" class="navigation">
					<div class="alignleft"><?php previous_post_link( '%link', '<span class="meta-nav">' . _x( '&larr;', 'Previous post link', 'basejump' ) . '</span> %title' ); ?></div>
					<div class="alignright"><?php next_post_link( '%link', '%title <span class="meta-nav">' . _x( '&rarr;', 'Next post link', 'basejump' ) . '</span>' ); ?></div>
				</div><!-- end #nav-above -->
				
				<?php comments_template( '', true ); ?>
				
				<?php endwhile; // end of the loop. ?>
			</div><!-- end #content -->
			<?php get_sidebar();?>
	</div><!-- end #inner -->
<?php get_footer();?>