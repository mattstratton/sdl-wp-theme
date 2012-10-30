<?php get_header(); ?>

	<div id="content" class="widecolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if (is_single()) { ?>
					<h1>TODAY'S YES <?php the_title(); ?></h1>
						<div class="postmeta">
							<?php if (comments_open()) : ?><span class="comments"><?php comments_popup_link(__('0 <span>comments</span>', 'notesblog'), __('1 <span>comment</span>', 'notesblog'), __('% <span>comments</span>', 'notesblog'), '', ''); ?></span><?php endif; ?>
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
		
			<div class="nav widecolumn">
			<?php if (is_attachment()) { ?>
				<div class="left"><?php next_image_link('', __('View previous', 'notesblog')); ?></div>
				<div class="right"><?php previous_image_link('', __('View next', 'notesblog')); ?></div>
			<?php } elseif (is_single()) { ?>
				<?php next_post_link('<div class="right">%link</div>'); ?> 
				<?php previous_post_link('<div class="left">%link</div>'); ?> 
			<?php } else { ?>
				<div class="left"><?php next_posts_link(__('Read previous entries', 'notesblog')) ?></div>
				<div class="right"><?php previous_posts_link(__('Read more recent entries', 'notesblog')) ?></div>
			<?php } ?>
			</div>
		
	<?php else : ?>
	<?php endif; ?>

	</div>

<?php get_footer(); ?>