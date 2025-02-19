<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package P6Foreheads
 */
?>
<?php

if ('main-sidebar') : ?>
	<aside id="secondary" class="widget-area">
		<?php get_search_form(); ?>

		<div class="blog-cards">
			<?php
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

			$args = array(
				'post_type'      => 'post',
				'posts_per_page' => 3,
				'paged'          => $paged,
			);

			$query = new WP_Query($args);

			if ($query->have_posts()) :
				while ($query->have_posts()) : $query->the_post();
			?>
					<div class="card outline justify-space-between text-small mw-380 sidebar-card">
						<div class="post-thumbnail">
							<a href="<?php the_permalink(); ?>">
								<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" class="rounded" />
							</a>
						</div>
						<h4 class="overflow-txt w-100 m-0"><?php the_title(); ?></h4>
					</div>
			<?php
				endwhile;
			endif;
			?>

		</div>

	</aside>
<?php endif; ?>