<?php
/*
The comments page for Bones
*/

// Do not delete these lines
	if ( ! empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename( $_SERVER['SCRIPT_FILENAME'] ) )
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<div class="alert alert-help">
			<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.', 'bonestheme' ); ?></p>
		</div>
	<?php
		return;
	}
?>

<?php // You can start editing here. ?>

<?php if ( have_comments() ) : ?>
	<h4 id="comments"><?php comments_number( __( '<span>No</span> Responses', 'bonestheme' ), __( '<span>One</span> Response', 'bonestheme' ), _n( '<span>%</span> Response', '<span>%</span> Responses', get_comments_number(), 'bonestheme' ) );?> to &#8220;<?php the_title(); ?>&#8221;</h4>

	<!-- <nav id="comment-nav">
		<ul class="clearfix">
			<li><?php # previous_comments_link() ?></li>
			<li><?php # next_comments_link() ?></li>
		</ul>
	</nav> -->

	<ol class="commentlist">
		<?php wp_list_comments( 'type=comment&callback=bones_comments' ); ?>
	</ol>

	<!-- <nav id="comment-nav">
		<ul class="clearfix">
			<li><?php # previous_comments_link() ?></li>
			<li><?php # next_comments_link() ?></li>
		</ul>
	</nav> -->

	<?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
			<?php // If comments are open, but there are no comments. ?>

	<?php else : // comments are closed ?>

	<?php // If comments are closed. ?>
	<!--p class="nocomments"><?php _e( 'Comments are closed.', 'bonestheme' ); ?></p-->

	<?php endif; ?>

<?php endif; ?>


<?php if ( comments_open() ) : ?>

<section id="respond" class="respond-form">

	<h3 id="comment-form-title"><?php comment_form_title( __( 'Leave a Reply', 'bonestheme' ), __( 'Leave a Reply to %s', 'bonestheme' )); ?></h3>

	<div id="cancel-comment-reply">
		<p class="small"><?php cancel_comment_reply_link(); ?></p>
	</div>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<div class="alert alert-help">
			<p><?php printf( __( 'You must be %1$slogged in%2$s to post a comment.', 'bonestheme' ), '<a href="<?php echo wp_login_url( get_permalink() ); ?>">', '</a>' ); ?></p>
		</div>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform" class='form'>

	<?php if ( is_user_logged_in() ) : ?>

	<p class="comments-logged-in-as"><?php _e( 'Logged in as', 'bonestheme' ); ?> <a href="<?php echo get_option( 'siteurl' ); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url( get_permalink() ); ?>" title="<?php _e( 'Log out of this account', 'bonestheme' ); ?>"><?php _e( 'Log out', 'bonestheme' ); ?> <?php _e( '&raquo;', 'bonestheme' ); ?></a></p>

	<?php else : ?>


		<div class="form-group">
			<label for="author"><?php _e( 'Name', 'bonestheme' ); ?> <?php if ($req) _e( '(required)'); ?></label>
			<input type="text" name="author" id="author" class="form-control"value="<?php echo esc_attr($comment_author); ?>" placeholder="<?php _e( 'Your Name*', 'bonestheme' ); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
		</div>

		<div class="form-group">
			<label for="email"><?php _e( 'Mail', 'bonestheme' ); ?> <?php if ($req) _e( '(required)'); ?></label>
			<input type="email" name="email" id="email" class="form-control" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e( 'Your E-Mail*', 'bonestheme' ); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
			<small><?php _e("(will not be published)", 'bonestheme' ); ?></small>
		</div>

		<div class="form-group">
			<label for="url"><?php _e( 'Website', 'bonestheme' ); ?></label>
			<input type="url" name="url" id="url" class="form-control" value="<?php echo esc_attr($comment_author_url); ?>" placeholder="<?php _e( 'Got a website?', 'bonestheme' ); ?>" tabindex="3" />
		</div>
	

	<?php endif; ?>
	<div class="form-group">
		<textarea name="comment" id="comment" class="form-control" placeholder="<?php _e( 'Your Comment here...', 'bonestheme' ); ?>" tabindex="4"></textarea>
	</div>

	<button type="submit" id="submit" class="btn btn-primary" tabindex="5">Submit</button>
	<?php comment_id_fields(); ?>

	<?php do_action( 'comment_form', $post->ID ); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>
</section>

<?php endif; // if you delete this the sky will fall on your head ?>
