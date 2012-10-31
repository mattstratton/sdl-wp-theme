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
<?php
	wp_head();
?>


<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link href='http://fonts.googleapis.com/css?family=Marcellus+SC|Dosis' rel='stylesheet' type='text/css'>


<!--set up Superfish-->
<script type="text/javascript">
$(document).ready(function() {
        $('ul.sf-menu').superfish();
});
</script>




<!-- Set up the Nivo Slider -->
<script type="text/javascript">
jQuery(window).load(function() {
	jQuery('#slider').nivoSlider({
		effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
		directionNavHide: true, // Only show on hover
		directionNav:false,
		controlNav: false, // 1,2,3... navigation
		animSpeed: 300, // Slide transition speed
        pauseTime: 5000, // How long each slide will show
	
	});
});
</script>


</head>
<body <?php body_class(); ?>>

<div id="site">
<div id="wrap">
<div id="toplist">
	<div class="feed">
		<a href="http://www.facebook.com/spiritdrivenliving"><img src = "<?php echo get_stylesheet_directory_uri(); ?>/images/social/facebook.png"></a>
		<a href="https://twitter.com/rosemaryhurwitz"><img src = "<?php echo get_stylesheet_directory_uri(); ?>/images/social/twitter.png"></a>
		<a href="http://www.linkedin.com/pub/rosemary-hurwitz/8/a34/257"><img src = "<?php echo get_stylesheet_directory_uri(); ?>/images/social/linkedin.png"></a>
		<a href ="https://plus.google.com/115256746078319571629"><img src = "<?php echo get_stylesheet_directory_uri(); ?>/images/social/googleplus.png"></a>
		<a href="<?php bloginfo('rss2_url'); ?>"><img src = "<?php echo get_stylesheet_directory_uri(); ?>/images/social/rss.png"></a>
	</div>
</div>
<div id="header">
	<div id="blogtitle">
	<img src = "<?php echo get_stylesheet_directory_uri(); ?>/images/enneagram.png" align="left">
		<div id="blogtitle2">
			<h1><a href="/"><?php bloginfo('name'); ?></h1></a><h2><?php bloginfo('description'); ?></h2>
		</div>
		
	</div>
		<?php wp_nav_menu(array( 'sort_column' => 'menu_order', 'menu' => 'Header', 'container_class' => 'main-menu', 'menu_class' => 'sf-menu', 'container_id' => 'headermenu', 'theme_location'  => 'header-menu') ); ?>
</div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Submenu') ) : ?><?php endif; ?>
<div id="blog">