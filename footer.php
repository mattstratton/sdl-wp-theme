	</div>

	<div id="footer">
	    <ul class="footercol fc-left widgets">
	    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer A') ) : ?>
	    	    <li>This column is a widget area.<br /><span class="alert">Add widgets to <strong>Footer A</strong> for this one to rock!</span></li>
	    	<?php endif; ?>
	    </ul>
	    <ul class="footercol fc-left widgets">
	    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer B') ) : ?>
	    		<li>This column is a widget area.<br /><span class="alert">Add widgets to <strong>Footer B</strong> for this one to rock!</span></li>
	    	<?php endif; ?>
	    </ul>
	    <ul class="footercol fc-left widgets">
	    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer C') ) : ?>
	    		<li>This column is a widget area.<br /><span class="alert">Add widgets to <strong>Footer C</strong> for this one to rock!</span></li>
	    	<?php endif; ?>
	    </ul>
	    <ul class="footercol fc-right widgets">
	    	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer D') ) : ?>
	    		<li>This column is a widget area.<br /><span class="alert">Add widgets to <strong>Footer D</strong> for this one to rock!</span></li>
	    	<?php endif; ?>
	    </ul>
	</div>
	
	<div id="copy">
	    <div class="copycolumnwide">
	    	<p>Copyright &copy; 2012 <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a><br /><em><?php bloginfo('description'); ?></em></p>
	    </div>
	    <div class="copycolumn">
	    	<p class="right"><?php _e("Custom theme by", "notesblog");?> <a href="http://www.mattstratton.com" title="Notes Blog">Matt Stratton</a><br />Powered by <a href="http://wordpress.org" title="WordPress">WordPress</a></p>
	    </div>
	</div>

</div>
</div>

<?php wp_footer(); ?>
</body>
</html>