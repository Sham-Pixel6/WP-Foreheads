<?php

/*
  Template Name: About Us
 */
?>
<?php wp_head() ?>
<?php get_header() ?>
<!-- Hero -->
<section class="container grid-hero ptb-50 flex-align-center">
    <div>
        <h2 class="font-48">
            We deliver our services with Quality, Flexibility and Pride.
        </h2>
        <p class="text-small">
            The Transportation service is not one-size-fits-all. With Foreheads 360 Degree Operations,
            we provide a tailored & fully managed solution (Dedicated Fleet, Operations Team and a 24/7/365
            Days with support & tracking command centre).
        </p>
    </div>
    <div class="bage" data-bage="About Us">
        <img class="w-100" src="<?= get_template_directory_uri() ?>/assets/images/about-us-hero-image.jpg" alt="">
    </div>
</section>
<!-- About Us -->
<section class="about bg-gray pb-50">
    <div class="container">
        <!-- heading -->
        <div>
            <div class="blog-header d-flex">
                <h2>About Us</h2>
            </div>
            <p class="detail about-detail">Our organization based in Pune having a strong experience for 18 years in IT/ITES/BPO and manufacturing industry.
                 At present we are operating from Pune, Nagpur and Hyderabad as well as our Firm is working for Ex Serviceman Welfare as a
                CSR Activity.</p>
        </div>
        <!-- misson and vision -->
        <div class="grid-hero">
            <div class="card bg-purple text-small">
                <h3 class="card-header d-flex">
                    <span class="icon-80 bg-no-repeat rocket-icon"></span>
                    Mission
                </h3>
                <p>
                    We provide innovative and sustainable employee transportation solutions with advanced technology, strict quality assurance, and a skilled team, ensuring reliable service, increased market share, and value for customers, employees, and shareholders.
                </p>
            </div>
            <div class="card bg-blue text-small">
                <h3 class="card-header d-flex">
                    <span class="icon-80 bg-no-repeat safety-icon"></span>
                    Vision
                </h3>
                <p>
                    We strive to be the top choice for our customers by delivering exceptional value. Our focus is on setting new standards of excellence in the industry. Through innovation and quality, we aim to inspire trust and lasting partnerships.
                </p>
            </div>
            <div class="card text-small">
                <h3 class="card-header d-flex">
                    <span class="img icon-64 objective-icon"></span>
                    Objective
                </h3>
                <p class="text-content">
                    To provide professional employee transportation solutions that address travel challenges, reduce costs, and enhance efficiency.
                </p>
            </div>
            <div class="card text-small">
                <h3 class="card-header d-flex">
                    <span class="img icon-64 values-icon"></span>
                    Values
                </h3>
                <p class="text-content">
                    We are an organization that values integrity, excellence, diversity, cooperation, creativity, respect, and service.
                </p>
            </div>
            <div class="card text-small">
                <h3 class="card-header d-flex">
                    <span class="img icon-64 strength-icon"></span>
                    Strengths
                </h3>
                <p class="text-content">
                    Strong credentials and Track record with experience and proven performance amongst BPO.s, IT, ITES and manufacturing Industry in Pune and Mumbai.
                </p>
            </div>
            <div class="card text-small">
                <h3 class="card-header d-flex">
                    <span class="img icon-64 training-icon"></span>
                    Induction Training
                </h3>
                <p class="text-content">
                    All drivers employed by us have minimum experience of 5+ years of heavy vehicle driving and carry appropriate driving license.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Success Story-->
<section class="success-story bg-no-repeatbg-gray">
    <div class="container ptb-50">
        <div class="text-center pb-50">
            <h2 class="m-0">Our Success Story</h2>
            <p class="text-small m-auto">Foreheads is known for quality, flexibility and client satisfaction</p>
        </div>
        <div class="gallery container">
            <div class="card text-small bg-white flex-align-center text-center">
                <img class="icon-64 m-0" src="<?= get_template_directory_uri() ?>/assets/images/mdi_car.svg" alt="car image">
                <count class="font-48">200+</count>
                <h4 class="txt-blue m-0 font-w-300">Fleet Size</h4>
                <p>
                    Combination of SUV, MUV, EV’s, Mini Buses & Buses
                </p>
            </div>
            <div class="card text-small bg-white flex-align-center text-center">
                <img class="icon-64 m-0" src="<?= get_template_directory_uri() ?>/assets/images/fluent-color-building.svg" alt="building image">
                <count class="font-48">50+</count>
                <h4 class="txt-blue m-0 font-w-300">Clients</h4>
                <p>
                    Serving Big and Mid Size MNC Companies
                </p>
            </div>
            <div class="card text-small bg-white flex-align-center text-center">
                <img class="icon-64 m-0" src="<?= get_template_directory_uri() ?>/assets/images/famicons_people.svg" alt="people image">
                <count class="font-48">350+</count>
                <h4 class="txt-blue m-0 font-w-300">Manpower</h4>
                <p>
                    Drivers & Billing and on-site support.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- certification and Compliances-->
<?php get_template_part('certificate-slider'); ?>

<section class="container pb-50">
    <div class="blog-header pb-50">
        <h2 class="font-48"> Systems &amp; Compliances</h2>
        <p class="detail">Policies and systems that drive sustainability, safety, quality, and resilience.</p>
    </div>
    <div class="policies flex-column">
        <div class="policy d-flex text-small outline-gray p-12">
            <span class="policy-image img icon-40"></span>
            <p class="m-0">EHS Policy</p>
        </div>
        <div class="policy d-flex text-small outline-gray p-12">
            <span class="policy-image img icon-40"></span>
            <p class="m-0">Environment & Sustainability Policy and Management System</p>
        </div>
        <div class="policy d-flex text-small outline-gray p-12">
            <span class="policy-image img icon-40"></span>
            <p class="m-0">Health and Safety Management Plan</p>
        </div>
        <div class="policy d-flex text-small outline-gray p-12">
            <span class="policy-image img icon-40"></span>
            <p class="m-0">Quality Management Plan</p>
        </div>
        <div class="policy d-flex text-small outline-gray p-12">
            <span class="policy-image img icon-40"></span>
            <p class="m-0">Modern Slavery and Diversity, Equity & Inclusion (DE&I) Policy </p>
        </div>
        <div class="policy d-flex text-small outline-gray p-12">
            <span class="policy-image img icon-40"></span>
            <p class="m-0">Business Continuity Plan</p>
        </div>
    </div>
</section>
<?php get_footer() ?>