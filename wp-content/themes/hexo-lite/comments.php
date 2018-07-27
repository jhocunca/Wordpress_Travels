<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hexo Lite
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>


<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h3><?php
				printf( 
					/* translators: 1: number of comments, 2: post title */
					_nx( '01 Comment', '0%1$s Comments', get_comments_number(), 'comments title', 'hexo-lite' ),
					number_format_i18n( get_comments_number() ),
					'<span>' . get_the_title() . '</span>'
				);
			?></h3>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?> 
				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'hexo-lite' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'hexo-lite' ) ); ?></div>
  
		<?php endif; // Check for comment navigation. ?>

		<div class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'div',
					'callback' => 'hexo_lite_comments'
				) );
			?>
		</div><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?> 
				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'hexo-lite' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'hexo-lite' ) ); ?></div>
 
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'hexo-lite' ); ?></p>
	<?php
	endif; 
	comment_form();
	?>

</div><!-- #comments -->

