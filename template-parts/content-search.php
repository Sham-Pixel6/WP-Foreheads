<?php

/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package P6Foreheads
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card outline justify-space-between text-small'); ?>>
	<div class="post-thumbnail">
		<a href="<?php the_permalink(); ?>">
			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" class="rounded" />
		</a>
	</div>

	<h4 class="overflow-txt w-100 m-0"><?php the_title(); ?></h4>

	<div class="d-flex justify-space-between blog-info w-100">
		<p><?php echo get_the_date('d M Y'); ?></p>
		<a href="<?php the_permalink(); ?>">Read More</a>
	</div>
</article>