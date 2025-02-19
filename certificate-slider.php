<section class="certificate-slider">
    <header class="container pb-50">
        <h2 class="font-48">Certificate & Compliances</h2>
        <p class="detail">Foreheads is a leading, reliable, efficient and economical transport service with
            all the Legal Compliances.</p>
    </header>
    <div class="slider-section">
        <div class="slider-container container pb-50">
            <div class="custom-cursor"></div>
            <div class="cert-slider">
                <?php
                $args = array(
                    'post_type'      => 'certificate',
                    'posts_per_page' => -1,
                );
                $query = new WP_Query($args);
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $company_logo = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                        $cert_number = get_post_meta(get_the_ID(), 'certificate_number', true);
                        $certificate_pdf = get_field('certificate_pdf');
                        $cert_name = get_the_title();
                ?>
                        <div class="text-small outline-gray slide w-slide">
                            <div class="slide-content-wrapper d-flex flex-column">
                                <div class="cert-img">
                                    <img src="<?= esc_url($company_logo); ?>" alt="<?= esc_attr($cert_name); ?>">
                                </div>
                                <div class="cert-detail">
                                    <cert-num>Q- <?= esc_html($cert_number); ?></cert-num>
                                    <p><?= esc_html($cert_name); ?> Certified</p>
                                </div>
                                <a href="<?= esc_url($certificate_pdf); ?>" target="_blank" class="w-100 text-center ">View Certificate</a>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <!-- nav-arrow  -->
            <div class="nav-arrow">
                <div class="nav-arrow-left arrow nav-arrow-left.gray">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="">
                        <path d="M560-240 320-480l240-240 56 56-184 184 184 184-56 56Z" />
                    </svg>
                </div>
                <div class="nav-arrow-right arrow nav-arrow-right.gray">
                    <svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="">
                        <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>