<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php global $page, $paged; wp_title( '|', true, 'right' );
// Add the blog name.
bloginfo( 'name' );
// Add the blog description for the home/front page.
$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<!-- /* @license MyFonts Webfont Build ID 2229308, 2012-04-13T00:49:51-0400 The fonts listed in this notice are subject to the End User License Agreement(s) entered into by the website owner. All other parties are explicitly restricted from using the Licensed Webfonts(s). You may obtain a valid license at the URLs below. Webfont: Flexo Caps DEMO by Durotype URL: http://www.myfonts.com/fonts/durotype/flexo/demo/ Copyright: Copyright &#x00A9; 2011-2012 Durotype, www.durotype.com. All rights reserved. Licensed pageviews: unlimited License: http://www.myfonts.com/viewlicense?type=web&buildid=2229308 © 2012 Bitstream Inc */ -->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/flexo.css">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php if ( is_singular() && get_option( 'thread_comments' ) )
	wp_enqueue_script( 'comment-reply' );
	wp_head(); ?>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon16.ico"/>
</head>
<body <?php body_class(); ?>>
<div id="wrap">
	<div id="header">
		<div class="wrap">
			<div id="title-area">
				<?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
				<<?php echo $heading_tag; ?> id="title">
					<span>
						<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</span>
				</<?php echo $heading_tag; ?>>
				<div id="description"><?php bloginfo( 'description' ); ?></div>
			</div><!-- end #title-area -->
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Header Widget") ) : ?><?php endif; ?>
		</div><!-- end .wrap -->
	</div><!--end #header-->

	<?php if ( is_404() ) {
	} else { ?>
		<div id="main-image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/basejump.jpg" alt="main image" title="Basejump Theme" /></div>
	<?php } ?>
	
	<?php // Check to see whether WPML is active, if it is we include the Language Switcher in the navigation menu and internationalize the date field on the right - source: http://webdesign.onyou.ch/2010/07/28/check-if-a-wordpress-plugin-is-active/ ?>
	<?php if (in_array( 'sitepress-multilingual-cms/sitepress.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) )) {
		wp_nav_menu( array('container_id' => 'nav', 'items_wrap' => '<ul id="%1$s" class="menu menu-primary superfish sf-js-enabled">%3$s' .wpml_language_switch().'<li class="right date">'.date_i18n(get_option('date_format') ,strtotime("11/15-1976")).'</li></ul>', 'theme_location' => 'primary' ) );
	} else {
		wp_nav_menu( array('container_id' => 'nav', 'items_wrap' => '<ul id="%1$s" class="menu menu-primary superfish sf-js-enabled">%3$s <li class="right date">'.date_i18n(get_option('date_format')).'</li></ul>', 'theme_location' => 'primary' ) );
	} ?>
	
	<div id="inner">
	<?php if ( ! is_home() && ! is_404()) {
		if (function_exists('basejump_write_breadcrumb') ) { 
			echo '<div class="breadcrumb">';
			echo basejump_write_breadcrumb();
			echo '</div><!-- .breadcrumb -->';
		}
	}
	?>