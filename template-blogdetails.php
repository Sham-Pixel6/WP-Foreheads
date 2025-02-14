<?php

/*
  Template Name: Blog-Details
 */
?>
<?php wp_head() ?>

<?php get_header() ?>

<section class="container ptb-50">
    <div class="blog-header d-flex">
        <header class="font-48">Diwali Celebration at Foreheads</header>
    </div>
    <p class="detail">
        02 Nov 2024
    </p>
    <div class="blog-details container">
        <img src="<?= get_template_directory_uri() ?>/assets/images/blog-detail.jpeg" alt="">
        <h4>Festive Vibes in Pune</h4>
        <p>
            Foreheads Fleet Services celebrated Diwali with joy and
            togetherness. The
            office was lit up with colourful decorations, glowing diyas, and vibrant rangolis, creating a
            festive atmosphere.
        </p>
        <h4>Team Bonding and Fun</h4>
        <p>
            The team enjoyed fun activities, shared sweets, and bonded
            over games, making
            the day special. The celebration brought everyone together, spreading cheer and positivity.</p>
    </div>
</section>
<!-- More Updates -->
<section class="container pb-50">
    <div class="blog-header d-flex">
        <h2>News & Updates</h2>
        <a class="more-arrow d-flex" href="<?php get_template_directory_uri() ?>/app/blogs.html">
            See All
            <span class="img arrow-icon" aria-hidden="true"></span>
        </a>
    </div>
    <div class="blog-cards">
        <div class="card outline justify-space-between text-small">
            <img src="<?php get_template_directory_uri() ?>/assets/images/blog/blog-card-1.png" alt="blog card" class="rounded">
            <h4 class="overflow-txt w-100 m-0">Diwali Celebration at Foreheads</h4>
            <div class="d-flex justify-space-between blog-info w-100">
                <p>02 Nov 2024</p>
                <a href="../app/blog-detail.html">Read More</a>
            </div>
        </div>
        <div class="card outline justify-space-between text-small">
            <img src="<?php get_template_directory_uri() ?>/assets/images/blog/blog-card-2.png" alt="blog card" class="rounded">
            <h4 class="overflow-txt w-100 m-0">Foreheads' new contract with Mastercard comes as a significant milestone,
                marking the beginning of a strategic partnership aimed at revolutionizing digital payment solutions.</h4>
            <div class="d-flex justify-space-between blog-info w-100">
                <p>13 Dec 2024</p>
                <a href="../app/blog-detail.html">Read More</a>
            </div>
        </div>
        <div class="card outline justify-space-between text-small">
            <img src="<?php get_template_directory_uri() ?>/assets/images/blog/blog-card-3.png" alt="blog card" class="rounded">
            <h4 class="overflow-txt w-100 m-0">Custom Fleet Service</h4>
            <div class="d-flex justify-space-between blog-info w-100">
                <p>13 Dec 2024</p>
                <a href="../app/blog-detail.html">Read More</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>