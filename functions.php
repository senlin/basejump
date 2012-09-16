<?php
/* Basejump Functions File */

// Include Functionality & Dashboard Functions Files
//require_once 'lib/dashboard-functions.php';

// Set the content width based on the theme's design and stylesheet; copied from Twentyeleven
if ( ! isset( $content_width ) )
	$content_width = 640;


/* Do theme setup on the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'basejump_theme_setup' );
function basejump_theme_setup() {
	
	// Add theme support for various things
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'menus' );
	// Add functionality to change Custom Background from WP 3.4 onwards this has been changed to add_theme_support( 'custom-background', $args )
	// sources: http://kovshenin.com/2012/default-custom-background-for-wordpress-3-4/ & http://make.wordpress.org/themes/2012/04/06/updating-custom-backgrounds-and-custom-headers-for-wordpress-3-4/
	add_theme_support( 'custom-background', array(
		'default-image' => get_stylesheet_directory_uri() . '/images/first_aid_kit.png' 
	) );
	// uncomment the line below to allow post-formats
	//add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat' ) );
	
	// Additional Image Sizes
	add_image_size ('single', 640, 9999);

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'basejump', get_template_directory() . '/languages' );

	$locale = get_locale();
	$locale_file = get_template_directory() . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'basejump' ),
	) );
	
	// SIDEBARS
	function basejump_widgets_init() {
		register_sidebar(array(
			'name' => __('Header Widget', 'basejump'),
			'id' => 'header-promo',
			'description' => __('Optional Widget in Header', 'basejump'),
			'before_widget' => '<div class="widget-area"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div><!-- end .widget-area -->',
			'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
		));
	    register_sidebar(array(
			'name' => __('Narrow Sidebar', 'basejump'),
			'description' => __('Narrow Sidebar', 'basejump'),
			'id' => 'sidebar-alt',
			'before_widget' => '<div class="widget-area"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div><!-- end .widget-area -->',
			'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
		));
		register_sidebar(array(
			'name' => __('Wide Sidebar', 'basejump'),
			'description' => __('Wide Sidebar', 'basejump'),
			'id' => 'sidebar',
			'before_widget' => '<div class="widget-area"><div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div></div><!-- end .widget-area -->',
			'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
		));
		register_sidebar(array(
			'name'=> __('Footer #1', 'basejump'),
			'id' => 'footer-1',
			'description' => __('This is the first column of the footer section.', 'basejump'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div><!-- end .widget -->',
			'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
		));
		register_sidebar(array(
			'name'=> __('Footer #2', 'basejump'),
			'id' => 'footer-2',
			'description' => __('This is the second column of the footer section.', 'basejump'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div><!-- end .widget -->',
			'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
		));
		register_sidebar(array(
			'name'=> __('Footer #3', 'basejump'),
			'id' => 'footer-3',
			'description' => __('This is the third column of the footer section.', 'basejump'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div><!-- end .widget -->',
			'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
		));
		register_sidebar(array(
			'name'=> __('Footer #4', 'basejump'),
			'id' => 'footer-4',
			'description' => __('This is the fourth column of the footer section.', 'basejump'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div><!-- end .widget -->',
			'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
		));

	}
	/** Register sidebars by running basejump_widgets_init() on the widgets_init hook. */
	add_action( 'widgets_init', 'basejump_widgets_init' );

}

// enqueue Javascripts
function basejump_scripts_function() {
	// general
	wp_enqueue_script( 'jquery' );
	// Superfish
	wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.js?ver=1.4.8', 'jquery', true );
	wp_enqueue_script( 'superfish-args', get_template_directory_uri() . '/js/superfish.args.js?ver=1.8.0', 'jquery', true );
}
add_action('wp_enqueue_scripts','basejump_scripts_function');

// Add breadcrumb
function basejump_write_breadcrumb() {
    $pid = $post->ID;
	$trail = '<a href="' .home_url( '/' ). '">' . __('Home', 'basejump'). '</a>';
 
    if ( is_front_page() ) {
        // do nothing
	}
		elseif (is_page()) {
			$bcarray = array();
			$pdata = get_post($pid);
			$bcarray[] = ' &raquo; '.$pdata->post_title."\n";
			while ($pdata->post_parent) {
				$pdata = get_post($pdata->post_parent);
				$bcarray[] = ' &raquo; <a href="'.get_permalink($pdata->ID).'">'.$pdata->post_title.'</a>';
			}
		   $bcarray = array_reverse($bcarray);
			 foreach ($bcarray AS $listitem) {
				 $trail .= $listitem;
			 }
		}
		elseif (is_single()) {
			$pdata = get_the_category($pid);
			$adata = get_post($pid);
			if(!empty($pdata)){
				$data = get_category_parents($pdata[0]->cat_ID, TRUE, ' &raquo; ');
				$trail .= " &raquo; ".substr($data,0,-8);
			}
			$trail.= ' &raquo; '.$adata->post_title."\n";
		}
	   	elseif (is_category()) {
			$pdata = get_the_category($pid);
			$data = get_category_parents($pdata[0]->cat_ID, TRUE, ' &raquo; ');
			if(!empty($pdata)){
				$trail .= " &raquo; ".substr($data,0,-8);
			}
	   	}
 $trail.="";
 return $trail;
}

function basejump_posted_on() {
	printf( __( '<span class="%1$s">Posted on</span> %2$s', 'basejump' ),
		'meta-prep meta-prep-author',
		sprintf( '<span class="entry-date">%1$s</span>',
			get_the_date()
		)
	);
}

/* Make date format (for use in nav bar) properly translatable 
source: http://wpml.org/forums/topic/date-format-isnt-translated-is-that-possible-done-by-wpml/#post-30197
*/
function basejump_update_date_format($newvalue, $oldvalue) {
	if(function_exists('icl_register_string')) {
		icl_register_string('WP', 'date_format', $newvalue);
	}
	return $newvalue;
}
add_filter( 'pre_update_option_date_format', 'basejump_update_date_format', 10, 2);

function basejump_date_format($value) {
	if(function_exists('icl_t')) {
		return icl_t('WP', 'date_format', $value);
	}
	return $value;
}
add_filter( 'option_date_format', 'basejump_date_format');

/* Custom Language Switch automatically added to navbar
Source: http://wpml.org/2009/10/building-a-flexible-multilingual-content-site-with-wordpress/ Scroll down to Language Switching
*/
function wpml_language_switch() {
	$lang = icl_get_languages('skip_missing=N');
	$ret = '';
	if(count($lang) > 0) {
	foreach($lang as $value) {
		$ret .= ($value['active'] == 0) ? '<li class="language dropdown menu-item"><a href="' . $value['url'] . '">' .
			$value['native_name']  . '</a></li>' : '';
	}
	}
	return $ret;
}

// Comments template
if ( ! function_exists( 'basejump_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own basejump_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * Copied from Twenty Eleven
 */
function basejump_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'basejump' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'basejump' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment id-<?php comment_ID(); ?>" class="comment">
			<div class="comment-author vcard">
				<?php
					$avatar_size = 48;
					if ( '0' != $comment->comment_parent )
						$avatar_size = 48;

					echo get_avatar( $comment, $avatar_size );

					/* translators: 1: comment author, 2: date and time */
					printf( __( '%1$s on %2$s <span class="says">said:</span>', 'basejump' ),
						sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ),
						sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
							esc_url( get_comment_link( $comment->comment_ID ) ),
							get_comment_time( 'c' ),
							/* translators: 1: date, 2: time */
							sprintf( __( '%1$s at %2$s', 'basejump' ), get_comment_date(), get_comment_time() )
						)
					);
				?>

				<?php edit_comment_link( __( 'Edit', 'basejump' ), '<span class="edit-link">', '</span>' ); ?>
			</div><!-- .comment-author .vcard -->
			<div class="comment-meta">
				

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'basejump' ); ?></em>
					<br />
				<?php endif; ?>

			</div>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply <span>&darr;</span>', 'basejump' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</div><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for basejump_comment()

/**
 * Adds two classes to the array of body classes.
 * The first is if the site has only had one author with published posts.
 * The second is if a singular post being displayed
 *
 * Copied from Twenty Eleven
 */
function basejump_body_classes( $classes ) {

	if ( function_exists( 'is_multi_author' ) && ! is_multi_author() )
		$classes[] = 'single-author';

	if ( is_singular() && ! is_home() && ! is_page_template( 'showcase.php' ) && ! is_page_template( 'sidebar-page.php' ) )
		$classes[] = 'singular';

	return $classes;
}
add_filter( 'body_class', 'basejump_body_classes' );

// Define the comment_form() function here
add_action( 'comment_form', 'basejump_comment_form' );
/**
 * Defines the comment form, hooked to <code>comment_form()</code>
 *
 * copied from Genesis
 */
function basejump_comment_form() {

	/** Bail if comments are closed for this post type */
	if ( ( is_page() ) || ( is_single() ) )
		return;

	comment_form();

}

add_filter( 'comment_form_defaults', 'basejump_comment_form_args' );
/**
 * Filters the default comment form arguments, used by <code>comment_form()</code>
 *
 * copied from Genesis
 *
 * @global string $user_identity Display name of the user
 * @global integer $id Post ID to generate the form for
 *
 * @param array $defaults Comment form defaults
 *
 * @return array Filterable array
 */
function basejump_comment_form_args( $defaults ) {

	global $user_identity, $id;

	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$aria_req  = ( $req ? ' aria-required="true"' : '' );

	$author = '<p class="comment-form-author">' .
	          '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" tabindex="1"' . $aria_req . ' />' .
	          '<label for="author">' . __( 'Name', 'basejump' ) . '</label> ' .
	          ( $req ? '<span class="required">*</span>' : '' ) .
	          '</p><!-- #form-section-author .form-section -->';

	$email = '<p class="comment-form-email">' .
	         '<input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" tabindex="2"' . $aria_req . ' />' .
	         '<label for="email">' . __( 'Email', 'basejump' ) . '</label> ' .
	         ( $req ? '<span class="required">*</span>' : '' ) .
	         '</p><!-- #form-section-email .form-section -->';

	$url = '<p class="comment-form-url">' .
	       '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" tabindex="3" />' .
	       '<label for="url">' . __( 'Website', 'basejump' ) . '</label>' .
	       '</p><!-- #form-section-url .form-section -->';

	$comment_field = '<p class="comment-form-comment">' .
	                 '<textarea id="comment" name="comment" cols="45" rows="8" tabindex="4" aria-required="true"></textarea>' .
	                 '</p><!-- #form-section-comment .form-section -->';

	$args = array(
		'fields'               => array(
			'author' => $author,
			'email'  => $email,
			'url'    => $url,
		),
		'comment_field'        => $comment_field,
		'title_reply'          => __( 'Have your say...', 'basejump' ),
		'comment_notes_before' => '',
		'comment_notes_after'  => '',
	);

	/** Merge $args with $defaults */
	$args = wp_parse_args( $args, $defaults );

	/** Return filterable array of $args, along with other optional variables */
	return apply_filters( 'basejump_comment_form_args', $args, $user_identity, $id, $commenter, $req, $aria_req );

}

// add tip to contextual help menu, source: https://gist.github.com/2276418 
// Hat tip to Paul de Wouters for all his input: https://plus.google.com/u/0/108543145122756748887/posts/FcBfQ72BpeL
add_action( 'load-appearance_page_custom-background', 'basejump_add_help_tab_to_custom_backgroud_page' );
function basejump_add_help_tab_to_custom_backgroud_page()
	{
		get_current_screen()->add_help_tab( array(
			'id'      => 'custom-background-tip', // This should be unique for the screen.
			'title'   => __('Useful Tip', 'basejump'),
			'content' => basejump_help_tab_content('so-cb-help')
		// Use 'callback' instead of 'content' for a function callback that renders the tab content.
	) );
	}

function basejump_help_tab_content($tab = 'so-cb-help') {
	if($tab == 'so-cb-help') {
		ob_start(); ?>
			<h3><?php _e('Great Resource for Custom Background Images', 'basejump'); ?></h3>
			<p><?php _e('A great source for custom background images is <a href="http://subtlepatterns.com/" title="Subtle Patterns" target="_new" rel="nofollow">Subtle Patterns</a>.', 'basejump'); ?></p>
		<?php
		return ob_get_clean();
	}
}
