<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form. The actual display of comments is
 * handled by a callback to twentytwelve_comment() which is
 * located in the functions.php file.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() )
	return;
?>

<div>

	<?php if ( have_comments() ) : ?>
	<hr>
		<h4 class="comments-title">
			<?php
				printf( _n( '<span style="color:#86BA00;">1</span> Antwort &ldquo;%2$s&rdquo;', '<span style="color:#86BA00;">%1$s</span> Antworten auf &ldquo;<span style="color:#86BA00;">%2$s</span>&rdquo;', get_comments_number(), 'foundation' ),
					number_format_i18n( get_comments_number() ), '<span style="color:#86BA00;">' . get_the_title() . '</span>' );
			?>
		</h4>
		<br>
		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'foundation_comment', 'style' => 'ol' ) ); ?>
		</ol><!-- .commentlist -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Kommentare', 'twentytwelve' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Ältere', 'twentytwelve' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Neuere &rarr;', 'twentytwelve' ) ); ?></div>
		</nav>
		<?php endif; // check for comment navigation ?>

		<?php
		/* If there are no comments and comments are closed, let's leave a note.
		 * But we only want the note on posts and pages that had comments in the first place.
		 */
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Kommentare wurden geschlossen.' , 'twentytwelve' ); ?></p>
		<?php endif; ?>

	<?php endif; // have_comments() ?>

	<?php if ( comments_open() ) : ?>
	<div class="panel">
		<?php comment_form(); ?>
	</div>
	<?php endif; ?>

</div><!-- #comments .comments-area -->