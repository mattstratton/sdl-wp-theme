<?php
/*
Template Name: Newsletter
*/
?>

<?php get_header(); ?>

	<div id="newslettercontent">
			<div class="banner">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'featured_image' ); } ?>
					<div class="bannertext">
						<?php the_title();?>
					</div>
			</div>
			<div id="newslettercolumn">

	<?php $page = (get_query_var('paged'))
	? get_query_var('paged') : 1;
query_posts("cat=7&showposts=1&paged=$page");
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


	<!-- This is each post in the result-->
			<div id="post-<?php the_ID(); ?>" <?php post_class('postsummary'); ?>>
				<div class="blogposttop">
					<h2 class="blogposttop"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>" class="blogposttop"><?php the_title(); ?></a></h2>


				</div>

				<div class="entry">
					<?php the_content(__('Read more', 'notesblog')); ?>
				</div>
						<div class="blogmeta">
							<span class="timestamp"><?php the_time(__('F jS, Y', 'notesblog')) ?> @ <?php the_time(); ?></span>
						</div>
							
				<?php if (is_single() || is_page()) { edit_post_link(__('Edit', 'notesblog'), '<p class="admin">Admin: ', '</p>'); wp_link_pages('before=<p class="pagelink">' . __('Pages:', 'notesblog') .' &after=</p>'); } ?>
			</div>
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>
	</div>
		<ul id="sidebar" class="column">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Calendar Sidebar') ) : ?>
<?php endif; ?>
	</ul>

	</div>

<?php get_footer(); ?>