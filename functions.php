<?php

add_theme_support('custom-logo');

function load_stylesheets()
{
    // Always load global styles
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/styles/styles.css', array(), false, 'all');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Aboreto&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Space+Grotesk:wght@300..700&display=swap', array(), false, 'all');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), false, 'all');
    wp_enqueue_style('swiper', '//unpkg.com/swiper/swiper-bundle.min.css', array(), false, 'all');
    // Get the current page slug
    if (is_page()) {
        $slug = get_post_field('post_name', get_queried_object_id());

        // Define CSS files for specific pages
        $page_styles = array(
            'about-us' => 'about-us.css',
            'services' => 'services.css',
            'blog-detail' => 'blog-detail.css',
            'blogs' => 'blogs.css',
        );

        // If the page has a specific CSS file, load it
        if (array_key_exists($slug, $page_styles)) {
            wp_enqueue_style($slug, get_template_directory_uri() . '/assets/styles/' . $page_styles[$slug], array(), false, 'all');
        } else {
            // Load a default CSS file for other pages
            wp_enqueue_style('page-default', get_template_directory_uri() . '/assets/styles/page-default.css', array(), false, 'all');
        }
    }
}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_js()
{
    $scripts = array(
        'navbar' => get_template_directory_uri() . '/script/navbar.js',
        'accordian' => get_template_directory_uri() . '/script/accordian.js',
        'reviews' => get_template_directory_uri() . '/script/reviews.js',
        'about-us' => get_template_directory_uri() . '/script/about-us.js',
        'blogs' => get_template_directory_uri() . '/script/blogs.js',
    );

    foreach ($scripts as $script => $url) {
        wp_register_script($script, $url);
        wp_enqueue_script($script);
    }
}

add_action('wp_enqueue_scripts', 'load_js');

function get_image_details($image_id)
{
    if ($image_id) {
        $image_url = wp_get_attachment_url($image_id);
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

        return array('url' => $image_url, 'alt' => $image_alt);
    }
    return false;
}

function title_for_page()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'title_for_page');
add_theme_support('post-thumbnails');

function mytheme_register_widget_areas()
{
    register_sidebar(array(
        'name'          => __('Footer Widget Area', 'mytheme'),
        'id'            => 'foreheads-address',
        'description'   => __('Widgets in this area will be shown in the footer.', 'mytheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
    register_sidebar(array(
        'name'          => __('Benefits Widget', 'mytheme'),
        'id'            => 'benefits_with_us',
        'description'   => __('Widgets in this area will be shown in the footer.', 'mytheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ));
}

add_action('widgets_init', 'mytheme_register_widget_areas');


function mytheme_register_sidebar()
{
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'mytheme'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets in this area will be shown in the sidebar.', 'mytheme'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'mytheme_register_sidebar');


require get_template_directory() . '/template-parts/widgets.php';


function theme_customizer_register($wp_customize)
{
    $wp_customize->add_section('gallery_section', array(
        'title'    => __('Gallery Images', 'your-theme'),
        'priority' => 30,
    ));
    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_setting("gallery_image_$i", array(
            'default' => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control(
            $wp_customize,
            "gallery_image_$i",
            array(
                'label'    => "Gallery Image $i",
                'section'  => 'gallery_section',
                'settings' => "gallery_image_$i",
            )
        ));
    }
}
add_action('customize_register', 'theme_customizer_register');

function register_certificate_post_type()
{
    $args = array(
        'label'         => 'Certificates',
        'public'        => true,
        'menu_icon'     => 'dashicons-awards',
        'supports'      => array('title', 'thumbnail', 'custom-fields'), // Enable custom fields
    );
    register_post_type('certificate', $args);
}
add_action('init', 'register_certificate_post_type');
