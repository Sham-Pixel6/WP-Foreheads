<?php

/*
  Template Name: Services
 */
?>

<?php get_header() ?>

<!-- Banner -->

<section class="banner">
</section>

<section class="container pb-50">
    <div class="">
        <div class="blog-header">
            <h2>Why Chose Foreheads</h2>
        </div>
        <p class="detail">
            At Foreheads, we pride ourselves on providing a comprehensive range of services to meet your every
            transportation need.
        </p>
    </div>
    <div class="blog-cards">
        <div class="card outline-gray">
            <div class="col-head">
                <span class="img icon-64 card-img-1"></span>
                <h4 class="m-0 mtb-10">Operations</h4>
            </div>
            <p>
                We provide 24/7 operational support to your teams.
            </p>
        </div>
        <div class="card outline-gray justify-space-between text-small">
            <div class="col-head">
                <span class="img icon-64 card-img-2"></span>
                <h4 class="m-0 mtb-10">IT infra</h4>
            </div>
            <p>
                In-house team for IT, back office, and support.
            </p>
        </div>
        <div class="card outline-gray justify-space-between text-small">
            <div class="col-head">
                <span class="img icon-64 card-img-3"></span>
                <h4 class="m-0 mtb-10">vehicles</h4>
            </div>
            <p>
                2200+ Vehicles on road per day 24/7 by managed scheduled.
            </p>
        </div>
        <div class="card outline-gray justify-space-between text-small">
            <div class="col-head">
                <span class="img icon-64 card-img-4"></span>
                <h4 class="m-0 mtb-10">Compliance</h4>
            </div>
            <p>
                We adhere to corporate compliance standards.
            </p>
        </div>
        <div class="card outline-gray justify-space-between text-small">
            <div class="col-head">
                <span class="img icon-64 card-img-5"></span>
                <h4 class="m-0 mtb-10">Safety & Security</h4>
            </div>
            <p>
                Employee safety & security is our first priority.
            </p>
        </div>
        <div class="card outline-gray justify-space-between text-small">
            <div class="col-head">
                <span class="img icon-64 card-img-6"></span>
                <h4 class="m-0 mtb-10">Support</h4>
            </div>
            <p>
                In-house team coupled with vendor out sourced model.
            </p>
        </div>
    </div>
</section>
<!-- Transport solutions-->
<section class="bg-gray ptb-50">
    <div class="container">
        <div class="">
            <div class="blog-header">
                <h2>Our Transport Solutions</h2>
            </div>
            <p class="detail">
                We’ve got you covered with our exceptional offerings. Explore our services to discover how we can make your journey more convenient and enjoyable.
            </p>
        </div>
        <div class="blog-cards">
            <div class="card bg-white text-small">
                <span class="img card-image card-1 rounded"></span>
                <h4 class="m-0 w-100">Employee Transportation</h4>
                <p>
                    We guarantee the safety, punctuality, and efficiency of your employees' journeys to
                    the
                    office, all of which ultimately translate into cost-effective advantages for your
                    organization.
                </p>
            </div>
            <div class="card bg-white text-small">
                <span class="img card-image card-2 rounded"></span>
                <h4 class="m-0 w-100">Car Rentals</h4>
                <p>
                    Our selection includes impeccably maintained vehicles accompanied by expertly
                    trained
                    chauffeurs, all available to corporate clients at favorable rates, including premium
                    and
                    luxury car rental options.
                </p>
            </div>
            <div class="card bg-white text-small">
                <span class="img card-image card-3 rounded"></span>
                <h4 class="m-0 w-100">Green Fleet (EV)</h4>
                <p>
                    Amidst the global battle against climate change and the collective effort to
                    harmonize
                    with the environment, India too aims for enhanced and sustainable transportation.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Pitch -->
<?php if (is_active_sidebar('benefits_with_us')) : ?>
    <?php dynamic_sidebar('benefits_with_us'); ?>
<?php endif; ?>

<?php get_footer() ?>