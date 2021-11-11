<?php
/**
 * The template file for displaying the comments and comment form
 */

if ( post_password_required() ) {
	return;
}
$commentvalue = false;
if ( have_comments() ) : ?>

	<?php
		$nocomment    = __( 'No Comments Yet', 'myschool' );
		$onecomment   = __( '1 Comment', 'myschool' );
		$morecomments = __( '% Comments', 'myschool' );
	?>

	<h3><?php comments_number( $nocomment, $onecomment, $morecomments ); ?></h3>	


	<ol class="commentlist">
		<?php
		wp_list_comments(
			array(
				'avatar_size' => 60,
				'style'       => 'ol',
				'short_ping'  => true,
			)
		);
		?>
	</ol>
	<div class="comments-pagination">
		<?php paginate_comments_links(); ?>
	</div>	


<?php else : /*this is displayed if there are no comments so far*/ ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->
	<?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<h3><?php _e( 'Comments are closed', 'myschool' ); ?></h3>
	<?php endif; ?>

<?php endif; ?>


<!-- Check if have Comments Open then Begin
================================================== -->	
<?php if ( comments_open() ) : ?>

		<!-- Comment Section -->	
		<div id="respond" class="comment_section">			
			<h3><?php comment_form_title( __( 'Leave a Comment', 'myschool' ), __( 'Leave a Comment', 'myschool' ) ); ?></h3>	
			<p class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></p>

			<?php if ( get_option( 'comment_registration' ) && ! is_user_logged_in() ) : ?>
			<p>You must be <a href="<?php echo esc_url( wp_login_url( get_permalink() ) ); ?>">logged in</a> to post a comment.</p>
			<?php else : ?>

					<form class="comment-form" id="commentform" method="post" action="<?php echo get_option( 'siteurl' ); ?>/wp-comments-post.php">
						<div class="form-group">
							<?php if ( is_user_logged_in() ) : ?>
								<input type="hidden" class="form-control" placeholder="<?php _e( 'Name *', 'myschool' ); ?>" id="author" name="author" value="<?php echo get_the_author(); ?>">
							<?php else : ?>
								<input type="text" class="form-control" placeholder="<?php _e( 'Name *', 'myschool' ); ?>" id="author" name="author" value="">
							<?php endif; ?>
						</div>						
						<div class="form-group">
							<?php if ( is_user_logged_in() ) : ?>
								<input type="hidden" class="form-control" placeholder="<?php _e( 'Name *', 'myschool' ); ?>" id="email" name="email" value="<?php echo get_the_author_email(); ?>">
							<?php else : ?>
								<input type="email" class="form-control" placeholder="<?php _e( 'Email *', 'myschool' ); ?>" id="email" name="email" value="">
							<?php endif; ?>
						</div>						

						<div class="form-group">
							<input type="text" class="form-control" placeholder="<?php _e( 'Subject', 'myschool' ); ?>" id="subject" name="subject" value="">
						</div>						

						<div class="form-group">
							<textarea class="form-control" placeholder="<?php _e( 'Message *', 'myschool' ); ?>" id="comment" name="comment" rows="8" ></textarea>
						</div>												

						<div class="form-group">
							<input type="submit" value="<?php _e( 'Add Comment', 'myschool' ); ?>" id="submit" name="submit" class="btn btn3">
							<?php comment_id_fields(); ?>
							<?php do_action( 'comment_form', $post->ID ); ?>	
						</div>						
					</form>						
			<?php endif; ?>
		</div>								
		<!-- Comment Section::END -->


<?php endif; ?>


<?php if ( $commentvalue ) {
	comment_form();
	wp_enqueue_script( 'comment-reply' );
} ?>
