<?php
/*
  Template Name: Contact Us
*/
?>

<?php get_header(); ?>

<section class="footer">
    <section class="ptb-50" id="lets-talk">
        <h2 class="lets-talk">Let's Talk</h2>
        <div class="contact-form d-flex">
            <span class="lets-talk-image bg-no-repeat"></span>
            <?php echo do_shortcode('[contact-form-7 id="9b66d15" title="Contact Foreheads"]'); ?>
        </div>
    </section>
    <section class="container ptb-50">
        <h2 class="lets-talk">Office Location</h2>
        <div class="address pb-50">
            <div class="contact-info outline-gray br-16">
                <div>
                    <div class="contact-heading">
                        <h4>Pune</h4>
                        <p class="bg-gray p-12">Corporate Office</p>
                    </div>
                    <p class="detail-add">
                        Foreheads Car Rental Service Pvt Ltd, Shop No 1 & 2, Shiv Arya Nisarg Pooja, Wakad Road, Mankar Chowk Pune - 411057
                    </p>
                </div>
                <div>
                    <a href="tel:+91-9011036102" class="contact-detail">
                        <span class="icon icon-24 dialer-icon"></span>
                        +91-9011036102
                    </a>
                    <a href="mailto:info@foreheads.in" class="contact-detail">
                        <span class="icon icon-24 mail-icon"></span>
                        info@foreheads.in
                    </a>
                </div>
            </div>
            <div class="contact-info outline-gray br-16">
                <div>
                    <div class="contact-heading">
                        <h4>Pune</h4>
                        <p class="bg-gray p-12">Registered Office</p>
                    </div>
                    <p class="detail-add">
                        Aksha Apartment, No. 4, D.P Road, Jagtap Dairy, Pimple Nilakh, Pune - 411027 </p>
                </div>
                <div>
                    <a href="tel:020-65320088" class="contact-detail">
                        <span class="icon icon-24 dialer-icon"></span>
                        020-65320088
                    </a>
                    <a href="mailto:info@foreheads.in" class="contact-detail">
                        <span class="icon icon-24 mail-icon"></span>
                        info@foreheads.in
                    </a>
                </div>
            </div>
            <div class="contact-info outline-gray br-16">
                <div>
                    <div class="contact-heading">
                        <h4>Mumbai</h4>
                        <p class="bg-gray p-12">Corporate Office</p>
                    </div>
                    <p class="detail-add">
                        Foreheads Car Rental Service Pvt Ltd, Shop No 1 & 2, Shiv Arya Nisarg Pooja, Wakad Road, Mankar Chowk Pune - 411057
                    </p>
                </div>
                <div>
                    <a href="tel:+91-9011036102" class="contact-detail">
                        <span class="icon icon-24 dialer-icon"></span>
                        +91-9011036102
                    </a>
                    <a href="mailto:info@foreheads.in" class="contact-detail">
                        <span class="icon icon-24 mail-icon"></span>
                        info@foreheads.in
                    </a>
                </div>
            </div>
            <div class="contact-info outline-gray br-16">
                <div>
                    <div class="contact-heading">
                        <h4>Nagpur</h4>
                        <p class="bg-gray p-12">Corporate Office</p>
                    </div>
                    <p class="detail-add">
                        Foreheads Car Rental Service Pvt Ltd, Shop No 1 & 2, Shiv Arya Nisarg Pooja, Wakad Road, Mankar Chowk Pune - 411057
                    </p>
                </div>
                <div>
                    <a href="tel:+91-9011036102" class="contact-detail">
                        <span class="icon icon-24 dialer-icon"></span>
                        +91-9011036102
                    </a>
                    <a href="mailto:info@foreheads.in" class="contact-detail">
                        <span class="icon icon-24 mail-icon"></span>
                        info@foreheads.in
                    </a>
                </div>
            </div>
            <div class="contact-info outline-gray br-16">
                <div>
                    <div class="contact-heading">
                        <h4>Hyderabad</h4>
                        <p class="bg-gray p-12">Corporate Office</p>
                    </div>
                    <p class="detail-add">
                        Foreheads Car Rental Service Pvt Ltd, Shop No 1 & 2, Shiv Arya Nisarg Pooja, Wakad Road, Mankar Chowk Pune - 411057
                    </p>
                </div>
                <div>
                    <a href="tel:+91-9011036102" class="contact-detail">
                        <span class="icon icon-24 dialer-icon"></span>
                        +91-9011036102
                    </a>
                    <a href="mailto:info@foreheads.in" class="contact-detail">
                        <span class="icon icon-24 mail-icon"></span>
                        info@foreheads.in
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- footer -->
    <div class="bg-gray">
        <div class="footer-container container">
            <div class="left-footer">
                <!-- navbar-->
                <nav class="d-flex foot-nav">
                    <a class="navbar-brand" href="./index.html">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/Foreheads_Logo.png" alt="Logo">
                    </a>
                    <ul class="d-flex">
                        <li><a href="#">Home</a></li>
                        <li><a href="<?php site_url() ?>services/">Services</a></li>
                        <li><a href="<?php site_url() ?>about/">About</a></li>
                        <li><a href="<?php site_url() ?>blog/">Updates</a></li>
                    </ul>
                </nav>
                <!--Addresses-->

                <?php if (is_active_sidebar('foreheads-address')) : ?>
                    <?php dynamic_sidebar('foreheads-address'); ?>
                <?php endif; ?>
            </div>
            <div class="right-footer">
                <div class="maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3781.6740890773053!2d73.7777734!3d18.588726400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b969f5e1b709%3A0x560b7c95d930cdee!2sForehead%20Car%20Rental%20Services%20Pvt%20Ltd.!5e0!3m2!1sen!2sin!4v1735646811568!5m2!1sen!2sin" width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <P> @2025 Foreheads All Rights Reserved </P>
            </div>
        </div>
    </div>
</section>