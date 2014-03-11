<?php
/**
 * Content Single
 *
 * Loop content in single post template (single.php)
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<hgroup>
			<h2><a style="color: #86BA00 !important;" href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<hr/>
			<h6 style="color:#808080; font-style: italic;">Veröffentlicht von <span style="color:#86BA00;"><?php the_author_link(); ?></span> on <span style="color:#86BA00;"><?php the_time(get_option('date_format')); ?></span></h6>
		</hgroup>
	</header>

	<?php if ( has_post_thumbnail()) : ?>
	<a href="<?php the_permalink(); ?>" class="" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
	<?php endif; ?>
	
	<br>
	
	<?php the_content(); ?>

	<more>

		<p><?php wp_link_pages(); ?></p>

		<h6>Kategorien: <?php the_category(', '); ?></h6>
		<br>
		<h6>Tags:</h6>
		<?php the_tags('<span class="radius secondary label">','</span><span class="radius secondary label">','</span>'); ?>

		<br>
		<br>
		
		<?php comments_template(); ?>

	</more>

</article>

<hr/>