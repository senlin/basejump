<?php // START Social Media Icons Template Part ?>
<div class="social-media-icons">
	<ul>
		<li class="item facebook">
			<iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink() ?>&amp;layout=button_count&amp;show_faces=true&amp;width=40&amp;action=like&amp;font=verdana&amp;colorscheme=light&amp;height=" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
		</li><!-- .facebook -->
		<li class="item twitter">
			<a href="https://twitter.com/share" class="twitter-share-button"
			      data-url="<?php the_permalink() ?>"
			      data-via="twitter-username"
			      data-text="<?php the_title(); ?>"
			      data-related="twitter-username"
			      data-count="horizontal">
					<?php // add a Twitter image to your themes images folder and call it with the line below ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tweet.png" alt="tweetbutton" /> 
				</a>
		</li><!-- .twitter -->
		<li class="item gplus">
			<g:plusone size="medium"></g:plusone>
		</li><!-- .gplus -->
		<li class="item linkedin">
			<script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
			<script type="IN/Share" data-counter="right"></script>
		</li><!-- .linkedin -->
	</ul>
</div><!-- .social-media-icons -->
<?php // END Social Media Icons Template Part ?>