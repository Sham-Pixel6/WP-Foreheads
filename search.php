<?php
get_header();
?>

<section class="container ptb-50 search-result">
	<div class="result-head d-flex justify-space-between">
		<p>Search Results for - <b><?php echo get_search_query(); ?></b></p>
		<div class="result-searchbar">
			<?php get_search_form(); ?>
		</div>
	</div>

	<?php if (have_posts()) :
		$post_count = 0; // Count search results
		while (have_posts()) : the_post();
			$post_count++;
		endwhile;

		// Apply 'd-flex' when results are less than 3
		$blog_cards_class = ($post_count < 3) ? 'd-flex pt-30 searched-cards' : 'blog-cards';
	?>
		<div class="<?php echo $blog_cards_class; ?>">
			<?php
			rewind_posts(); // Reset loop
			while (have_posts()) : the_post(); ?>
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
			<img src="<?= get_template_directory_uri() ?>/assets/images/zero-searches.jpg" alt="">
		</div>
		<h4 class="not-found">Back to <a href="<?php echo site_url('/blog'); ?>">Update's</a> Page</h4>
	<?php endif; ?>

</section>

<?php get_footer(); ?>