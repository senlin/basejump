<?php get_header();?>
		<div id="content-wrap" class="full-width-content">
			<div id="content" class="hfeed">
					<div class="fourohfour page type-page">
						<h1 class="entry-title"><?php _e('Oops, something is missing here', 'basejump'); ?></h1>
						<div class="entry-content">
							<p><?php _e('Congratulations, you have just discovered the infamous &ldquo;404 Error - Page Not Found&rdquo;!', 'basejump'); ?></p>
							<h2><?php _e('How did I get here?', 'basejump'); ?></h2>
							<p><?php _e('As a matter of fact, we don&rsquo;t know, but of course we are not going to blame you for doing something wrong as it may well be our own fault!', 'basejump'); ?></p>
							<h2><?php _e('How to get out of here?', 'basejump'); ?></h2>
							<p><?php _e('You can either hit your browser&rsquo;s [BACK]-button or you can choose to click on any of the links you see on this page.', 'basejump'); ?></p>
							<p><?php _e('Alternatively you can use the search box below.', 'basejump'); ?></p>
							<?php get_search_form(); ?>
							<p><?php _e('Good luck getting out of here and apologies for the mess-up!', 'basejump'); ?></p>
						</div><!-- end .entry-content -->
				</div><!-- end .postclass -->
			</div><!-- end #content -->
		</div><!-- end #content-wrap -->
	</div><!-- end #inner -->
<?php get_footer();?>