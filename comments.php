<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e("This post is password protected. Enter the password to view comments.", "notesblog"); ?></p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h2 id="comments"><?php comments_number(__('No comments posted yet', 'notesblog'), __('One single comment', 'notesblog'), __('% comments', 'notesblog') );?> <a name="comments"></a></h2>

	<!-- top navigation removed -->

	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>

	<div class="nav widecolumn commentnav">
		<div class="left"><?php previous_comments_link() ?></div>
		<div class="right"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<!-- <p class="nocomments"><?php _e("Comments are closed.", "notesblog");?></p> //-->

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond">

<h3><?php comment_form_title(__('Post a comment', 'notesblog'), __('Post a comment to %s', 'notesblog')); ?> <a name="respond"></a></h3>

<div class="cancel-comment-reply">
	<?php cancel_comment_reply_link(); ?>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php _e("You must be logged in to post a comment.", "notesblog");?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e("So log in!", "notesblog");?></a></p>
<?php else : ?>

<?php comment_form(); ?>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
