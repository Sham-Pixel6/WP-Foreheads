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
                        $company_logo = get_the_post_thumbnail_url(get_the_ID(), 'full');
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
                                <a href="<?= esc_url($certificate_pdf); ?>" target="_blank" class="w-100 text-center view-certificate">View Certificate</a>
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
<script>
    class Slider {
        constructor() {
            this.container = document.querySelector('.slider-container');
            this.slider = document.querySelector('.cert-slider');
            this.cursor = document.querySelector('.custom-cursor');
            this.slideWidth = window.getComputedStyle(document.querySelectorAll('.slide')[0], null).getPropertyValue("width");
            this.divs = document.querySelectorAll('.cert-slider .slide');
            this.left_arrow = document.querySelector('.nav-arrow-left');
            this.right_arrow = document.querySelector('.nav-arrow-right');

            this.currentIndex = 0;

            this.init();
        }

        init() {
            this.setupEventListeners();
            this.positionSlides();
        }

        positionSlides() {
            const slides = this.slider.querySelectorAll('.slide');
            const newWidth = Number(this.slideWidth.slice(0, -2));
            const offset = (this.container.offsetWidth - newWidth) / 2;
            const baseTransform = -this.currentIndex * newWidth + offset;
            this.slider.style.transform = `translateX(${baseTransform}px)`;

            slides.forEach((slide, index) => {
                const normalizedIndex = this.normalizeIndex(index);
                slide.classList.toggle('active', normalizedIndex === this.currentIndex % this.divs.length);
            });

            this.updateArrowColors();
        }

        normalizeIndex(index) {
            return index % this.divs.length;
        }

        moveSlides(direction) {
            if (this.isAnimating) return;
            this.isAnimating = true;

            if (direction === 1 && this.currentIndex >= this.divs.length - 1) {
                this.isAnimating = false;
                return;
            }

            if (direction === -1 && this.currentIndex <= 0) {
                this.isAnimating = false;
                return;
            }

            this.currentIndex += direction;

            this.slider.style.transition = 'transform 0.3s ease-out';
            this.positionSlides();

            if (this.currentIndex >= this.divs.length || this.currentIndex < 0) {
                setTimeout(() => {
                    this.slider.style.transition = 'none';
                    this.currentIndex = Math.max(0, Math.min(this.divs.length - 1, this.currentIndex));
                    this.positionSlides();
                }, 300);
            }

            setTimeout(() => {
                this.isAnimating = false;
            }, 300);
        }

        setupEventListeners() {
            this.container.addEventListener('mouseenter', () => {
                this.cursor.style.opacity = '1';
                this.stopAutoplay();
            });

            this.container.addEventListener('mouseleave', () => {
                this.cursor.style.opacity = '0';
                this.startAutoplay();
            });

            window.addEventListener('resize', () => {
                this.positionSlides()
            });

            if (this.left_arrow) {
                this.left_arrow.addEventListener('click', () => this.moveSlides(-1));
            }

            if (this.right_arrow) {
                this.right_arrow.addEventListener('click', () => this.moveSlides(+1));
            }
        }

        startAutoplay() {
            this.stopAutoplay();
            this.autoplayInterval = setInterval(() => {
                this.moveSlides(1);
            }, 3000);
        }

        stopAutoplay() {
            if (this.autoplayInterval) {
                clearInterval(this.autoplayInterval);
            }
        }

        updateArrowColors() {
            const leftSvg = this.left_arrow.querySelector('svg');
            const rightSvg = this.right_arrow.querySelector('svg');

            if (this.currentIndex === 0) {
                this.left_arrow.classList.remove('blue');
                this.right_arrow.classList.remove('gray');
                this.left_arrow.classList.add('gray');
                this.right_arrow.classList.add('blue');
                leftSvg.style.fill = '#454545';
                rightSvg.style.fill = '#0092f3';
            } else if (this.currentIndex === this.divs.length - 1) {
                this.left_arrow.classList.remove('gray');
                this.right_arrow.classList.remove('blue');
                this.left_arrow.classList.add('blue');
                this.right_arrow.classList.add('gray');
                leftSvg.style.fill = '#0092f3';
                rightSvg.style.fill = '#454545';
            } else {
                this.left_arrow.classList.remove('gray');
                this.right_arrow.classList.remove('gray');
                this.left_arrow.classList.add('blue');
                this.right_arrow.classList.add('blue');
                leftSvg.style.fill = '#0092f3';
                rightSvg.style.fill = '#0092f3';
            }
        }
    }

    document.addEventListener('DOMContentLoaded', () => {
        new Slider();
    });
</script>