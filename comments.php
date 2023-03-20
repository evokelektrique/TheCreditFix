<?php
/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ):
	return;
endif;
?>

<div id="comments" class="comments-area section">
	<div class="container is-narrow">
		<?php
		// You can start editing here -- including this comment!
		if ( have_comments() ) : ?>
		<div class="content">
			<div class="header">
				<h2 class="title is-3"><?php esc_html_e('Comments', 'bulmapress'); ?></h2>
				<p class="subtitle">
			<?php printf( // WPCS: XSS OK.
				esc_html( _nx( 
					'One thought on &ldquo;%2$s&rdquo;', 
					'%1$s thoughts on &ldquo;%2$s&rdquo;', 
					get_comments_number(), 
					'comments title', 
					'bulmapress' 
					) ),
				number_format_i18n( get_comments_number() ),
				'<span>' . get_the_title() . '</span>'
				); ?>
			</p><!-- .comments-title -->
		</div>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bulmapress' ); ?></h2>
				<div class="nav-links level">
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'bulmapress' ) ); ?></div>
					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'bulmapress' ) ); ?></div>
				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<ul class="comment-list ">
			<?php
			wp_list_comments( array(
				'style'			=> 'ul',
				'short_ping'	=> true,
				'avatar_size' => 50
				) );
				?>
			</ul><!-- .comment-list -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'bulmapress' ); ?></h2>
					<div class="nav-links level">
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'bulmapress' ) ); ?></div>
						<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'bulmapress' ) ); ?></div>
					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-below -->
				<?php
		endif; // Check for comment navigation.
		?>
	</div>
	<?php
		endif; // Check for have_comments().
		?>

		<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<div class="content">
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'bulmapress' ); ?></p>
		</div>
		<?php
		endif;
		?>
		<?php comment_form(); ?>
		</div><!-- .container -->
	</div><!-- #comments -->
