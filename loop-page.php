				<div <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'basejump' ), 'after' => '</div>' ) ); ?>
					</div><!-- end .entry-content -->
					<?php edit_post_link( __( '(Edit)', 'basejump' ) ); ?>
				</div><!-- end .postclass -->
				<?php /* uncomment if you want to enable comments on Pages */
				//comments_template( '', true ); ?>