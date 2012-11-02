<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
	<div id="slider" class="nivoSlider">

		<A href="http://www.spiritdrivenliving.dev/enneagram-quiz/"><img src="/wp-content/uploads/slider/enneagram-slider.png" alt="" title="Enneagram Quiz"/></A>

		<A href="http://www.spiritdrivenliving.dev/products/enneagram-jewelry/"><img src="/wp-content/uploads/slider/jewelry-slider.png" alt="" title="Enneagram Jewelry"/></a>

	</div>
<div id="quotebar"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/quotebar3.png"></div>
<div id="columns">
	<div id="leftcolumn">
		<?php query_posts( 'page_id=1153' ); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
	</div>
	<div id="rightcolumn">
			<div id="testimonial">
		"Beyond the complexities of the mind resides the simplicity and beauty of the heart. Rosemary Hurwitz holds a deep and sophisticated understanding of the Enneagram and its personality types. She has a poetic way of interweaving this complex psychological system into practical ways for living a meaningful and purposeful life. I highly recommend her services to anyone searching to discover their truth."
<br />
<br />
- Dr. Darren Weissman<br />
Developer of The LifeLine Technique and Author of The Power of Infinite Love & Gratitude
		</div>
		<div id = "blogteaser">
		<h2>Latest blog post!</h2>
		<?php query_posts( 'posts_per_page=1' );?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<h3 id="post-<?php the_ID(); ?>">
				<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
					<?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
		<?php endif; ?>
		</div>

	</div>
</div>


<?php get_footer(); ?>