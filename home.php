<?php get_header(); ?>

	<div id="content" class="blogwidecolumn">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<!-- This is each post in the result-->
			<div id="post-<?php the_ID(); ?>" <?php post_class('postsummary'); ?>>
				<?php if (is_single()) { ?>
					<?php if (is_attachment()) { ?>
					<?php } else { ?>
					<?php } ?>
				<?php } elseif (is_page()) { ?>
				<?php } else { ?>
				<div class="blogposttop">
					<h2 class="blogposttop"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="blogposttop"><?php the_title(); ?></a></h2>


				</div>

				<div class="entry">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'thumbnail', array('class' => 'blogthumb') ); } ?>
				<?php } ?>
					<?php the_content(__('Read more', 'notesblog')); ?>
				</div>
						<div class="blogmeta">
						<span class="timestamp"><?php the_time(__('F jS, Y', 'notesblog')) ?> @ <?php the_time(); ?></span>
						<?php if (comments_open()) : ?><span class="comments"><?php comments_popup_link(__('0 <span>comments</span>', 'notesblog'), __('1 <span>comment</span>', 'notesblog'), __('% <span>comments</span>', 'notesblog'), '', 'Comments are closed'); ?></span><?php endif; ?>

					</div>
				<?php if (is_single() || is_page()) { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
			</div>
			<?php if (is_single()) {comments_template('', true);} ?>

		<?php endwhile; ?>

			<div class="nav widecolumn">
				<div class="left"><?php next_posts_link(__('Read previous entries', 'notesblog')) ?></div>
				<div class="right"><?php previous_posts_link(__('Read more recent entries', 'notesblog')) ?></div>
			</div>

	<?php else : ?>
	<?php endif; ?>

	</div>

<?php get_footer(); ?>