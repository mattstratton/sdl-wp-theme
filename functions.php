<?php
load_theme_textdomain( 'notesblog', TEMPLATEPATH . '/lang' );
$content_width = 580;
// automatic feeds
add_theme_support('automatic-feed-links');
// widgets
	if ( function_exists('register_sidebar') )
		register_sidebar(array('name'=>'About'));
	    register_sidebar(array('name'=>'Sidebar'));
	    register_sidebar(array('name'=>'Calendar Sidebar'));
	    register_sidebar(array('name'=>'Contact Sidebar'));
	    register_sidebar(array('name'=>'Footer A'));
	    register_sidebar(array('name'=>'Footer B'));
	    register_sidebar(array('name'=>'Footer C'));
	    register_sidebar(array('name'=>'Footer D'));
	    register_sidebar(array(
			'name' => 'Submenu',
			'id' => 'submenu',
			'before_widget' => '<div id="submenu-nav">',
			'after_widget' => '</div>',
			'before_title' => false,
			'after_title' => false
		));
// ends ---
// pullquote shortcode
function pullquote( $atts, $content = null ) {
	extract(shortcode_atts(array(
		'float' => '$align',
	), $atts));
   return '<blockquote class="pullquote ' . $float . '">' . $content . '</blockquote>';
}
add_shortcode('pull', 'pullquote');
// ends ---
// admin page
add_action('admin_menu', 'nbcore_menu');
function nbcore_menu() {
  add_theme_page('Notes Blog Core', 'Notes Blog Core', 8, 'your-unique-identifier', 'nbcore_options');
}
function nbcore_options() {
  echo '<div class="wrap"><h2>Notes Blog Core</h2>';
  echo '<p>This is a placeholder for upcoming admin options for the Notes Blog Core theme. These things aren\'t due yet, in fact, they are pretty far away, so just forget about this page for now huh?</p><p>Get the latest Notes Blog and Notes Blog Core news from <a href="http://notesblog.com" title="Notes Blog">http://notesblog.com</a> - it\'s that sweet!</p>';
  echo '<h3>Pullquote Shortcode</h3><p>Notes Blog Core has support for pullquotes. Either you use the <em>pullquote</em> class on a <em>blockquote</em> tag along with the <em>alignleft</em> or <em>alignright</em> tags, or you use shortcode to do the same.</p><p>Usage is simple: <code>[pull float="X"]Your pullqoute text[/pull]</code> will output att pullquote aligned either to the left or right. The key is <em>float="X"</em>, where X can be <strong>either</strong> <em>alignleft</em> or <em>alignright</em>. Simple huh?</p>';
  echo '<h3>Custom Login Screen <small style="color:#f00; text-transform:uppercase;">beta</small></h3><p>Want a custom login form? Then you can play with <code>login.css</code> in the new <code>custom</code> folder. Remember: This is overwritten when updating! <strong>Experimental!</strong></p>';
  echo '</div>';
}
// ends ---

// custom menu support
function register_my_menus() {
  register_nav_menus(
    array( 'header-menu' => __( 'Header Menu' ) )
  );
}
add_action( 'init', 'register_my_menus' );

// slider stuff
if ( function_exists( 'add_image_size' ) ) { add_image_size( 'orbit-custom', 960, 300 ); }


// rEad more stuff
function new_excerpt_more($more) {
       global $post;
	return ' <a href="'. get_permalink($post->ID) . '">Read the Rest...</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

//feature image

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
}

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'featured_image', 900, 300, true );
}

// enqueue scripts

function add_our_scripts() {
 
    if (!is_admin()) { // Add the scripts, but not to the wp-admin section.
    // Adjust the below path to where scripts dir is, if you must.
    $scriptdir = get_bloginfo('template_url')."/includes/";
 
    // Remove the wordpresss inbuilt jQuery.
    wp_deregister_script('jquery');
 
    // Lets use the one from Google AJAX API instead.
    wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js', false, '1.4.2');
        // Now register HoverIntent
    wp_register_script( 'hoverintent', $scriptdir.'hoverIntent.js',false, 'r6');
    // Register the Superfish javascript file
    wp_register_script( 'superfish', $scriptdir.'superfish.js', false, '1.4.8');
    // Supersubs script 
    wp_register_script( 'supersubs', $scriptdir.'supersubs.js', false, '0.2b');
    // Register the Nivo slider pack
    wp_register_script( 'nivoslider', $scriptdir.'jquery.nivo.slider.pack.js', false, '3.1');
    // Now the superfish CSS
    wp_register_style( 'superfish-css', $scriptdir.'superfish.css', false, '1.4.8');
    // Now the superfish navbar CSS
    wp_register_style( 'superfish-navbar-css', $scriptdir.'superfish-navbar.css', false, '1.4.8');
    // Nivo CSS file
    wp_register_style( 'nivo-slider', $scriptdir.'nivo-slider.css', false, '3.1');
    // Custom CSS for Testimonials widget
    wp_register_style( 'testimonials', $scriptdir.'testimonials-widget-custom.css',false,false);
 
    //load the scripts and style.
    wp_enqueue_script('jquery');
    wp_enqueue_script('hoverintent');
    wp_enqueue_script('superfish');
    wp_enqueue_script('supersubs');
    wp_enqueue_script('nivoslider');
    wp_enqueue_style('superfish-css');
    wp_enqueue_style('superfish-navbar-css');
    wp_enqueue_style('nivo-slider');
    wp_enqueue_style('testimonials');
    } // end the !is_admin function
} //end add_our_scripts function
 
//Add our function to the wp_head. You can also use wp_print_scripts.
add_action( 'wp_head', 'add_our_scripts',0);


?>