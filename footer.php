<?php if (is_front_page()) : ?>
    <section class="footer">
        <section class="container pb-50" id="lets-talk">
            <h2 class="lets-talk">Let's Talk</h2>
            <div class="contact-form d-flex">
                <span class="lets-talk-image bg-no-repeat"></span>
                <?php // echo do_shortcode('[contact-form-7 id="9b66d15" title="Contact Foreheads"]'); 
                ?>
                <?php get_template_part('template-parts/contact-form'); ?>
            </div>
        </section>
    <?php endif; ?>

    <!-- footer -->
    <div class="bg-gray">
        <div class="footer-container container">
            <div class="left-footer">
                <!-- navbar-->
                <nav class="d-flex foot-nav">
                    <a class="navbar-brand" href="<?php site_url('/') ?>">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/foreheads-logo.png" alt="Logo">
                    </a>
                    <ul class="d-flex footer-menu">
                        <li class="<?= ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php') ? 'active' : '' ?>">
                            <a href="<?= site_url('/') ?>">Home</a>
                        </li>
                        <li class="<?= (trim($_SERVER['REQUEST_URI'], '/') == 'services') ? 'active' : '' ?>">
                            <a href="<?= site_url('services/') ?>">Services</a>
                        </li>
                        <li class="<?= (trim($_SERVER['REQUEST_URI'], '/') == 'about-us') ? 'active' : '' ?>">
                            <a href="<?= site_url('about-us/') ?>">About</a>
                        </li>
                        <li class="<?= (trim($_SERVER['REQUEST_URI'], '/') == 'blog') ? 'active' : '' ?>">
                            <a href="<?= site_url('blog/') ?>">Updates</a>
                        </li>
                        <li class="<?= (trim($_SERVER['REQUEST_URI'], '/') == 'contact-us') ? 'active' : '' ?>">
                            <a href="<?= site_url('contact-us/') ?>">Contact</a>
                        </li>
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
                <P> &#64;2025 Foreheads All Rights Reserved&#46; </P>
            </div>
        </div>
    </div>
    </section>
    <script src="<?php echo get_template_directory_uri(); ?>/script/navbar.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script/reviews.js"></script>
    <script src="<?= get_template_directory_uri() ?>/script/certificate-slider.js"></script>
    <script src="<?= get_template_directory_uri() ?>/script/blogs.js"></script>

    </body>

    </html>
    <?php wp_footer() ?>