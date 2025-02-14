<?php get_header()
?>
<?php
while (have_posts()) {
    the_post(); ?>

    <section class="container">
        <h2><?php the_title(); ?></h2>
        <div class="page-container">
            <div class="page-content">
                <?php
                the_content();
                ?>
            </div>
            <div class="page-sidebar">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
<?php } ?>
<?php get_footer(); ?>