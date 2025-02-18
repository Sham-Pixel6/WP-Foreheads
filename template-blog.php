<?php
/*
  Template Name: Blog
*/
?>
<?php get_header(); ?>

<!-- News & Updates -->
<section class="container">
    <div class="blog-header updates-header d-flex pb-50">
        <h2>News & Updates</h2>
        <div class="blog-search text-small text-center">
            <?= get_search_form() ?>
        </div>
    </div>
    <div class="blog-cards">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 9,
            'paged'          => $paged,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
        ?>
                <div class="card outline justify-space-between text-small mw-380">
                    <div class="post-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" class="rounded" />
                        </a>
                    </div>

                    <h4 class="overflow-txt w-100 m-0"><?php the_title(); ?></h4>

                    <div class="d-flex justify-space-between blog-info w-100">
                        <p><?php echo get_the_date('d M Y'); ?></p>
                        <a href="<?php the_permalink(); ?>">Read More</a>
                    </div>
                </div>
        <?php
            endwhile;
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>

    </div>

    <div class="pagination">
        <?php
        echo paginate_links(array(
            'total'   => $query->max_num_pages,
            'current' => max(1, get_query_var('paged')),
            'prev_text' => '« Prev',
            'next_text' => 'Next »',
        ));
        ?>
    </div>

    <?php wp_reset_postdata(); ?>

</section>

<?php get_footer(); ?>