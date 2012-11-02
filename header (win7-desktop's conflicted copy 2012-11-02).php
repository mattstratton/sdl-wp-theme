<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>
	<?php 
		// Print the right title
		if (is_home () ) { 
			bloginfo('name'); 
		} elseif (is_category() || is_tag()) { 
			single_cat_title(); echo ' &bull; ' ; bloginfo('name'); 
		} elseif (is_single() || is_page()) { 
			single_post_title(); } else { wp_title('',true); 
		}
	?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Marcellus+SC|Dosis' rel='stylesheet' type='text/css'>
<?php
	// Comment JavaScript
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
	
	// Kick off WordPress
	wp_head();
?>
</head>
<body <?php body_class(); ?>>

<div id="site">
<div id="wrap">
<div id="toplist">
	<div class="feed">
		<img src = "<?php echo get_stylesheet_directory_uri(); ?>/images/social/facebook.png">
		<img src = "<?php echo get_stylesheet_directory_uri(); ?>/images/social/twitter.png">
		<img src = "<?php echo get_stylesheet_directory_uri(); ?>/images/social/linkedin.png">
		<a href ="https://plus.google.com/115256746078319571629"><img src = "<?php echo get_stylesheet_directory_uri(); ?>/images/social/googleplus.png"></a>
		<a href="<?php bloginfo('rss2_url'); ?>"><img src = "<?php echo get_stylesheet_directory_uri(); ?>/images/social/rss.png"></a>
	</div>
</div>
<div id="header">
	<div id="blogtitle">
		<h1><a href="/"><?php bloginfo('name'); ?></h1></a><h2><?php bloginfo('description'); ?></h2>
	</div>
		<?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'Header', 'container_class' => 'main-menu', 'container_id' => 'headermenu', 'theme_location'  => 'header-menu') ); ?>
</div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Submenu') ) : ?><?php endif; ?>
<div id="blog">