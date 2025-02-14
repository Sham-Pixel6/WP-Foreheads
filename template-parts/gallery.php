<!-- Gallery -->
<div class="container ptb-50">
    <div class="gallery">
        <?php
        $args = array(
            'post_type' => 'gallery',
            'posts_per_page' => -1,
        );

        $gallery_query = new WP_Query($args);
        if ($gallery_query->have_posts()) :
            while ($gallery_query->have_posts()) : $gallery_query->the_post();
                $gallery_image = get_field('gallery_image');
                if ($gallery_image) :
                    if (is_array($gallery_image)) :
        ?>
                        <img src="<?php echo esc_url($gallery_image['url']); ?>" alt="<?php the_title(); ?>" />
                    <?php
                    elseif (is_string($gallery_image)) :
                    ?>
                        <img src="<?php echo esc_url($gallery_image); ?>" alt="<?php the_title(); ?>" />
        <?php
                    endif;
                else :
                    echo '<p>No gallery image found for this post.</p>';
                endif;
            endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No gallery posts found.</p>';
        endif;
        ?>
    </div>
</div>