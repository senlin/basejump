	<?php get_template_part( 'footer', 'widgets' ); ?>
	<div id="footer" class="footer">
		<div class="wrap">
			<div class="gototop">
				<p><a rel="nofollow" href="#wrap"><?php _e('Go to top ', 'basejump'); ?>&uarr;</a></p>
			</div><!-- end .gototop -->
			<div class="creds">
				<p><?php _e('&copy; Copyright ', 'basejump'); ?><?php echo date('Y'); ?> &middot; <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a> &middot; <a href="http://wpbaseju.mp/" title="<?php _e('Basejump WordPress Theme ', 'basejump'); ?>"><?php _e('Basejump WordPress Theme ', 'basejump'); ?></a><?php _e('developed by ', 'basejump'); ?><a href="http://senlinonline.com" title="<?php _e('Basejump WordPress Theme developed by Senlin Online', 'basejump'); ?>">Senlin Online</a> &middot; <?php _e('Powered by ', 'basejump'); ?><a href="http://wordpress.org" target="_blank" title="<?php _e('Powered by WordPress', 'basejump'); ?>"><?php _e('WordPress', 'basejump'); ?></a></p>	
			</div><!-- end .creds -->
		</div><!-- end .wrap -->
	</div><!-- end #footer -->
</div><!-- end #wrap -->
<?php wp_footer(); ?>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script type="text/javascript">
  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</body>
</html>