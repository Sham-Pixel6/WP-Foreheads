<?php

add_theme_support('custom-logo');

function load_stylesheets()
{
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/styles/styles.css', array(), false, 'all');
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Aboreto&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Space+Grotesk:wght@300..700&display=swap', array(), false, 'all');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css', array(), false, 'all');
    wp_enqueue_style('swiper', '//unpkg.com/swiper/swiper-bundle.min.css', array(), false, 'all');
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

// Load JavaScript files
function load_js()
{
    wp_enqueue_script('navbar', get_template_directory_uri() . '/script/navbar.js');
    if (is_page()) {
        $slug = get_post_field('post_name', get_queried_object_id());
        $page_scripts = array(
            'about-us' => 'about-us.js',
            'services' => 'services.js',
            'blog-detail' => 'blog-detail.js',
            'blogs' => 'blogs.js',
        );
        if (array_key_exists($slug, $page_scripts)) {
            wp_enqueue_script($slug, get_template_directory_uri() . '/script/' . $page_scripts[$slug], array(), false, true);
        } else {
            wp_enqueue_script('page-default', get_template_directory_uri() . '/script/page-default.js', array(), false, true);
        }
    }
}
add_action('wp_enqueue_scripts', 'load_js');

add_filter('wpcf7_load_js', '__return_true');
add_filter('wpcf7_load_css', '__return_true');

function load_jquery_for_cf7()
{
    if (!is_admin()) {
        wp_enqueue_script('jquery');
    }
}
add_action('wp_enqueue_scripts', 'load_jquery_for_cf7');


// Add custom image sizes
function get_image_details($image_id)
{
    if ($image_id) {
        $image_url = wp_get_attachment_url($image_id);
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

        return array('url' => $image_url, 'alt' => $image_alt);
    }
    return false;
}
// get title for page
function title_for_page()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'title_for_page');
add_theme_support('post-thumbnails');


// Register Navigation Menus
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

// Register Sidebar
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

// Register Widgets
require get_template_directory() . '/template-parts/widgets.php';

// Register Certificate's Custom Post Type
function register_certificate_post_type()
{
    $args = array(
        'labels' => array(
            'name'               => 'Certificates',
            'singular_name'      => 'Certificate',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Certificate',
            'edit_item'          => 'Edit Certificate',
            'new_item'           => 'New Certificate',
            'view_item'          => 'View Certificate',
            'search_items'       => 'Search Certificates',
            'not_found'          => 'No certificates found',
            'not_found_in_trash' => 'No certificates found in Trash',
        ),
        'public'        => true,
        'show_in_rest'  => true,
        'menu_icon'     => 'dashicons-awards',
        'supports'      => array('title', 'thumbnail', 'custom-fields'),
        'has_archive'   => true,
        'rewrite'       => array('slug' => 'certificates'),
        'show_in_nav_menus' => true,
        'menu_position' => 5,
    );
    register_post_type('certificate', $args);
}
add_action('init', 'register_certificate_post_type');

// Register Gallery Custom Post Type
function create_gallery_cpt()
{
    $args = array(
        'labels' => array(
            'name'               => 'Galleries',
            'singular_name'      => 'Gallery',
            'add_new'            => 'Add New Gallery',
            'add_new_item'       => 'Add New Gallery',
            'edit_item'          => 'Edit Gallery',
            'new_item'           => 'New Gallery',
            'view_item'          => 'View Gallery',
            'search_items'       => 'Search Galleries',
            'not_found'          => 'No galleries found',
            'not_found_in_trash' => 'No galleries found in Trash',
            'menu_name'          => 'Galleries',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true, // This is important for Gutenberg block support
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('category'), // You can also add custom taxonomies here
        'rewrite' => array('slug' => 'galleries'),
        'show_in_menu' => true,
    );
    register_post_type('gallery', $args);
}
add_action('init', 'create_gallery_cpt');

// Only show posts in search results
function custom_search_query($query)
{
    if ($query->is_search() && $query->is_main_query()) {
        $query->set('post_type', 'post');
    }
}
add_action('pre_get_posts', 'custom_search_query');

//send the email using wp_mail
function handle_contact_form_submission()
{
    if (isset($_POST['your-name']) && isset($_POST['your-email']) && isset($_POST['your-contact-number']) && isset($_POST['your-message'])) {
        $name = sanitize_text_field($_POST['your-name']);
        $email = sanitize_email($_POST['your-email']);
        $phone = sanitize_text_field($_POST['your-contact-number']);
        $message = sanitize_textarea_field($_POST['your-message']);

        // Email recipient
        $to = 'info@foreheads.in';

        // Email subject
        $subject = 'New Contact Form Submission';

        // Prepare email content
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone: $phone\n";
        $email_content .= "Message: \n$message\n";

        // Email headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        // Send the email using wp_mail()
        $mail_sent = wp_mail($to, $subject, $email_content, $headers);

        // Return JSON response
        if ($mail_sent) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Failed to send email']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Missing form data']);
    }
    wp_die();
}
add_action('wp_ajax_send_contact_form', 'handle_contact_form_submission');
add_action('wp_ajax_nopriv_send_contact_form', 'handle_contact_form_submission');
