<?php

/*
  Template Name: Blog-Details
 */
?>

<?php get_header() ?>
<?php
while (have_posts()) {
    the_post(); ?>
    <section class="container ptb-50">
        <div class="page-container">
            <div class="page-content">
                <div class="blog-header-img">
                    <?php $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                    <img src="<?php echo $featured_img ?>" alt="<?php the_title() ?>">
                </div>
                <h2>
                    <?php the_title(); ?>
                </h2>
                <p class="detail">
                    <?php the_date('Y-m-d'); ?>
                </p>
                <div class="blog-details">
                    <?php
                    the_content();
                    ?>
                </div>
            <?php } ?>
            </div>
            <div class="page-sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>

    </section>
    <?php get_footer() ?>