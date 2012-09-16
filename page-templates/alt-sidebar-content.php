<?php
/** Template Name: Alt Sidebar Content */
get_header(); ?>
		<div id="content-sidebar-wrap" class="alt-sidebar-content">
			<div id="content" class="hfeed">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div><!-- end #content -->
			<?php get_sidebar();?>
			<?php get_sidebar('alt');?>
	</div><!-- end #inner -->
<?php get_footer();?>