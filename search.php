<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package P6Foreheads
 */

get_header();
?>

<section class="container pb-50">
	<h2>Search Results for: "<?php echo get_search_query(); ?>"</h2>

	<?php if (have_posts()) : ?>
		<div class="blog-cards">
			<?php while (have_posts()) : the_post(); ?>
				<div class="search-item">
					<div class="card outline justify-space-between text-small mw-380">
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
					</div>
				</div>
			<?php endwhile; ?>
		</div>

		<!-- Pagination -->
		<div class="pagination">
			<?php
			echo paginate_links(array(
				'total'   => $wp_query->max_num_pages,
				'current' => max(1, get_query_var('paged')),
				'prev_text' => '« Prev',
				'next_text' => 'Next »',
			));
			?>
		</div>

	<?php else : ?>
		<div class="not-found">
			<img src="<?= get_template_directory_uri() ?>./assets/images/zero-searches.jpg" alt="">
		</div>
		<h4 class="not-found">Back to <a href="<?php echo site_url('/blog'); ?>">Update's</a> Page</h4>
	<?php endif; ?>

</section>

<?php get_footer(); ?>