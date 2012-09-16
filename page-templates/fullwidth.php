<?php
/** Template Name: Full Width */
get_header(); ?>
		<div id="content-wrap" class="full-width-content">
			<div id="content" class="hfeed">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'loop', 'page' ); ?>
				<?php endwhile; // end of the loop. ?>
			</div><!-- end #content -->
		</div><!-- end #content-wrap -->
	</div><!-- end #inner -->
<?php get_footer();?>