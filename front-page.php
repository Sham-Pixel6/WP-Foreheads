<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package P6Foreheads
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero ptb-50">
	<div class="container">
		<div>
			<div class="header-vt-slider">
				<h1 class="head-bold">
					<span class="head-span-1"><?php the_field('header_span_1') ?></span>
					<span class="head-span-2"><?php the_field('header_span_2') ?></span>
					<span class="head-span-3"><?php the_field('header_span_3') ?></span>
					<span class="head-span-4"><?php the_field('header_span_4') ?></span>
				</h1>
			</div>
			<h2 class="head-semibold">For Employee Transporation
			</h2>

			<div class="header-slider-container">
				<!-- Text Section -->
				<div class="hero-partner">
					<div class="contact-btn">
						<a href="#lets-talk">
							<button class="btn-lg outline" href="#lets-talk">Enquire Our Fleet Services Now</button>
						</a>
					</div>

					<!-- Road image -->
					<div class="road-container w-100 bg-no-repeat" style="background-image: url('<?php the_field('road_image') ?>')"></div>
					<div class="car-slider w-100">
						<div class="car-image bg-no-repeat car-image-1" style="--image-index:0; background-image: url(<?php the_field('car_slider_image_1') ?>)"></div>
						<div class="car-image bg-no-repeat car-image-2" style="--image-index:1; background-image: url(<?php the_field('car_slider_image_2') ?>)"></div>
						<div class="car-image bg-no-repeat car-image-3" style="--image-index:2; background-image: url(<?php the_field('car_slider_image_3') ?>)"></div>
						<div class="car-image bg-no-repeat car-image-4" style="--image-index:3; background-image: url(<?php the_field('car_slider_image_4') ?>)"></div>
					</div>
				</div>
			</div>
		</div>

		<div class="mt-40 cert-stats">
			<!-- certificates and companies -->
			<p class="detail">Certifications and Companies</p>
			<div class="cert-list bg-no-repeat d-flex flex-wrap">
				<?php
				$args = array(
					'post_type' => 'certificate',
					'posts_per_page' => -1,
				);

				$query = new WP_Query($args);

				if ($query->have_posts()) :
					$counter = 1;
					while ($query->have_posts()) : $query->the_post();
						// Check if the post has a featured image
						$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
						if ($thumbnail_url) :
				?>
							<span class="cert-img cert-img-<?php echo $counter; ?> icon-52 img"
								style="background-image: url('<?php echo esc_url($thumbnail_url); ?>');">
							</span>
				<?php
						else :
							echo '<span class="cert-img">No Image Available</span>'; // Fallback text
						endif;
						$counter++;
					endwhile;
				else :
					echo '<p>No certificates found.</p>';
				endif;

				wp_reset_postdata();
				?>
			</div>
		</div>


		<div class="stats-reviews">
			<div class="reviews-row">
				<!-- First Card -->
				<div class="card bg-blue flex-wrap text-small">
					<div class="card-header font-48">4+</div>
					<p class="card-text">MultiCity Fleet Service Operations</p>
				</div>

				<!-- Second Card -->
				<div class="card bg-blue flex-wrap text-small">
					<div class="card-header font-48">650+</div>
					<p class="card-text">Vehicles operating at locations</p>
				</div>

				<!-- Third Card -->
				<div class="card bg-blue flex-wrap text-small">
					<div class="card-header font-48">5+</div>
					<p class="card-text">Fleet Solutions Tailored to Your Business Needs</p>
				</div>

				<!-- Fourth Card -->
				<div class="card bg-blue flex-wrap text-small">
					<div class="card-header font-48">2.5k+</div>
					<p class="card-text">People Commute Smoothly to Work Every Day</p>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>

<!-- News & Updates -->
<section class="container pb-50">
	<div class="blog-header d-flex">
		<h2>News &amp; Updates</h2>
		<a class="more-arrow d-flex" href="<?= site_url(); ?>/blog">
			See All
			<span class="img arrow-icon" aria-hidden="true"></span>
		</a>
	</div>

	<div class="blog-cards">
		<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => 3,
		);
		$query = new WP_Query($args);
		if ($query->have_posts()) :
			while ($query->have_posts()) : $query->the_post();
		?>
				<div class="card outline justify-space-between text-small mw-380">
					<div class="post-thumbnail">
						<a href="<?= get_permalink(get_page_by_path('blog-details')) ?>">
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="blog card" class="rounded" />
						</a>
					</div>
					<!-- Post Title -->
					<h4 class="overflow-txt w-100 m-0"><?php the_title(); ?></h4>
					<div class="d-flex justify-space-between blog-info w-100">
						<p><?php echo get_the_date('d M Y'); ?></p>
						<a href="<?= get_permalink(get_page_by_path('blog-details')) ?>">Read More</a>
					</div>
				</div>
		<?php
			endwhile;
		else :
			echo '<p>No posts found.</p>';
		endif;
		wp_reset_postdata();
		?>
	</div>
</section>

<!-- Reviews -->

<div class="reviews ptb-50">
	<?php
	// Query to fetch 3 testimonials
	$args = array(
		'post_type' => 'testimonial',
		'posts_per_page' => 3,
	);
	$query = new WP_Query($args);


	if ($query->have_posts()) : ?>
		<div class="review-slider">

			<?php while ($query->have_posts()) : $query->the_post(); ?>
				<div class="review-slide text-center text-small">
					<?php the_content(); ?>
					<span class="opening-quote img"></span>
					<img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'thumbnail')); ?>" alt="<?php esc_attr(the_title()); ?>" class="rounded" />
				</div>
			<?php
			endwhile; ?>

		</div>
		<div class="indicators w-100">
			<span class="indicator" data-slide="0"></span>
			<span class="indicator" data-slide="1"></span>
			<span class="indicator" data-slide="2"></span>
		</div>
	<?php endif; ?>

</div>


<!-- Pitch -->
<?php if (is_active_sidebar('benefits_with_us')) : ?>
	<?php dynamic_sidebar('benefits_with_us'); ?>
<?php endif; ?>

<!-- About Us -->
<section class="about bg-gray pb-50">
	<div class="container">

		<!-- heading -->
		<div>
			<div class="blog-header d-flex">
				<h2>About Us</h2>
				<a class="more-arrow d-flex" href="<?= get_permalink(get_page_by_path('about-us')) ?>">
					More About Us
					<span class=" img arrow-icon" aria-hidden="true"></span>
				</a>
			</div>
			<p class="detail">Founded in 2006, Forehead Car Rental Services has set industry
				benchmarks by providing seamless employee transportation solutions. </p>
		</div>

		<!-- misson and vision -->
		<div class="grid-hero">
			<div class="card bg-purple text-small">
				<h3 class="card-header d-flex">
					<span class="icon-80 bg-no-repeat rocket-icon"></span>
					<?php
					if (get_field('mission_title')) {
						echo get_field('mission_title');
					} else {
						echo 'Mission'; // Default fallback text
					}
					?>
				</h3>
				<p>
					<?php
					$mission_content = get_field('mission_content');
					if ($mission_content) {
						echo $mission_content;
					} else {
						echo 'We provide innovative and sustainable employee transportation solutions with  technology strict quality assurance, and a skilled team, ensuring reliable service, increased market share, and value for customers, employees, and shareholders.';
					}
					?>
				</p>
			</div>

			<div class="card bg-blue text-small">
				<h3 class="card-header d-flex">
					<span class="icon-80 bg-no-repeat safety-icon"></span>
					<?php
					if (get_field('vision_title')) {
						echo get_field('vision_title');
					} else {
						echo 'Vision';
					}
					?>
				</h3>
				<p>
					<?php
					$vision_content = get_field('vision_content');
					if ($vision_content) {
						echo $vision_content;
					} else {
						echo 'We strive to be the top choice for our customers by delivering exceptional value. Our focus on setting new standards of excellence in the industry. Through innovation and quality, we aim  inspire trust and lasting partnerships.';
					}
					?>
				</p>
			</div>
		</div>
	</div>
</section>

<!-- Gallery -->
<?php get_template_part('template-parts/gallery'); ?>

<!-- clients -->

<section class="bg-gray slider">
	<div class="container pb-50">
		<h2 class="text-center">Proudly Serving</h2>
		<div class="client-slide-track">
			<?php
			$args = array(
				'post_type' => 'testimonial',
				'posts_per_page' => -1,
			);
			$query = new WP_Query($args);


			if ($query->have_posts()) :

				while ($query->have_posts()) : $query->the_post(); ?>
					<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>" alt="<?php the_title(); ?>" />
			<?php
				endwhile;

			endif;
			wp_reset_postdata();
			?>
		</div>

	</div>
</section>


<?php

get_footer();
