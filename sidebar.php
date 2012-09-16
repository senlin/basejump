			<div id="sidebar" class="sidebar widget-area">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
				<div class="widget widget_text">
					<div class="widget-wrap">
						<h4 class="widgettitle"><?php _e('Wide Sidebar Widget Area', 'basejump'); ?></h4>
						<div class="textwidget">
							<p><?php printf(__('This is the Wide Sidebar Widget Area of your website. You can add content to this area by visiting your <a href="%s">Widgets Panel</a> and adding new widgets to this area.', 'basejump'), admin_url('widgets.php')); ?></p>
						</div><!-- end .textwidget -->
					</div><!-- end .widget-wrap -->
				</div><!-- end .widget -->
				<?php endif; ?>
			</div><!-- end #sidebar -->
		</div><!-- end #content-sidebar-wrap -->
