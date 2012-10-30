<?php
/*
Template Name: Calendar
*/
?>
<?php get_header(); ?>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="calcontent">
		<div class="banner">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'featured_image' ); } ?>
						<div class="bannertext">
							<?php the_title();?>
						</div>
					</div>
		
		</div>
	<div id="calendarcolumn">
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if (is_single()) { ?>
					<h1><?php the_title(); ?></h1>
					<?php if (is_attachment()) { ?>
						<p class="attachmentnav">&larr; <?php _e("Back to", "notesblog");?> <a href="<?php echo get_permalink($post->post_parent) ?>" title="<?php echo get_the_title($post->post_parent) ?>" rev="attachment"><?php echo get_the_title($post->post_parent) ?></a></p>
					<?php } else { ?>
						<div class="postmeta">
							<?php if (comments_open()) : ?><span class="comments"><?php comments_popup_link(__('0 <span>comments</span>', 'notesblog'), __('1 <span>comment</span>', 'notesblog'), __('% <span>comments</span>', 'notesblog'), '', ''); ?></span><?php endif; ?>
							<span class="author"><?php _e("By", "notesblog");?> <a href="<?php the_author_meta('url'); ?>" title="<?php the_author(); ?>" class="author"><?php the_author(); ?></a></span>
							<span class="categories"><?php _e("Filed in", "notesblog");?> <?php the_category(', '); ?></span>
							<span class="tags"><?php the_tags(__('Tagged with ', 'notesblog'),', ',''); ?></span>
							<span class="timestamp"><?php the_time(__('F jS, Y', 'notesblog')) ?> @ <?php the_time(); ?></span>
						</div>
					<?php } ?>
				<?php } elseif (is_page()) { ?>
					
				<?php } else { ?>
					<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
					<div class="postmeta">
						<?php if (comments_open()) : ?><span class="comments"><?php comments_popup_link(__('0 <span>comments</span>', 'notesblog'), __('1 <span>comment</span>', 'notesblog'), __('% <span>comments</span>', 'notesblog'), '', 'Comments are closed'); ?></span><?php endif; ?>
						<span class="author"><?php _e("By", "notesblog");?> <a href="<?php the_author_meta('url'); ?>" title="<?php the_author(); ?>" class="author"><?php the_author(); ?></a></span>
						<span class="categories"><?php _e("Filed in", "notesblog");?> <?php the_category(', '); ?></span>
						<span class="tags"><?php the_tags(__('Tagged with ', 'notesblog'),', ',''); ?></span>
						<span class="timestamp"><?php the_time(__('F jS, Y', 'notesblog')) ?> @ <?php the_time(); ?></span>
					</div>
					<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'featured_image' ); } ?>
				<?php } ?>

				<div class="entry">
					<?php the_content(__('Read more', 'notesblog')); ?>
				</div>
				<?php if (is_single() || is_page()) { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
			</div>
			<?php if (is_single()) {comments_template('', true);} ?>

		<?php endwhile; ?>
		
	<?php endif; ?>

	</div>	
	<ul id="sidebar" class="column">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Calendar Sidebar') ) : ?>
	sidebar
<?php endif; ?>
	</ul>
<?php get_footer(); ?>