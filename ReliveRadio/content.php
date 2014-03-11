<?php
/**
 * Content
 *
 * Displays content shown in the 'index.php' loop, default for 'standard' post format
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<hgroup>
			<h1><a style="color: #86BA00 !important;" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<hr/>
			<?php if ( is_sticky() ) : ?><span class="right radius secondary label"><?php _e( 'Sticky', 'foundation' ); ?></span><?php endif; ?>
			<h6 style="color:#808080; font-style: italic;">Veröffentlicht von <span style="color:#86BA00;"><?php the_author_link(); ?></span> on <span style="color:#86BA00;"><?php the_time(get_option('date_format')); ?></span></h6>
		</hgroup>
	</header>

	
	<?php if ( has_post_thumbnail()) : ?>
	<br>
		<a href="<?php the_permalink(); ?>" class="" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
	<br>
	<?php endif; ?>

	<br>
	
	<?php the_excerpt(); ?>
	
	<br>

</article>