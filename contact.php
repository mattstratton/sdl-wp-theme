<?php
/*
Template Name: Contact
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
			<div id="calendarcolumn">
				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>
					<div class="entry">
						<?php the_content(__('Read more', 'notesblog')); ?>
					</div>
					<?php if (is_single() || is_page()) { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>

	<ul id="sidebar" class="column">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Contact Sidebar') ) : ?>
<?php endif; ?>
	</ul>
	</div>
<?php get_footer(); ?>