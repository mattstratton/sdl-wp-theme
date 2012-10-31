<form method="get" action="<?php bloginfo('url'); ?>/">
<div id="searchform"><input type="text" value="<?php the_search_query(); ?>" name="s" class="keyword" style="margin-bottom: 6px;"/>
<input type="image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/search.png" alt="Submit button" valign="middle" style="vertical-align:bottom;">
</div></form>
