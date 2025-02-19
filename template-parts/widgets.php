<?php
class My_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'foreheads-address', // Widget ID
            'Foreheads Address' // Widget Name
        );
    }

    public $args = array(
        'before_title'  => '<h4 class="widgettitle">',
        'after_title'   => '</h4>',
        'before_widget' => '<div class="widget-wrap">',
        'after_widget'  => '</div></div>',
    );

    public function widget($args, $instance)
    {
        echo $args['before_widget'];

        echo '<div class="address">';

        // Corporate Office
        echo '<div>';
        echo '<div>';
        echo '<h4>' . esc_html($instance['corporate_title']) . '</h4>';
        echo '<p class="detail-add">' . esc_html($instance['corporate_address']) . '</p>';
        echo '</div>';
        if (!empty($instance['corporate_phone'])) {
            echo '<a href="tel:' . esc_attr($instance['corporate_phone']) . '" class="contact-detail">
                <span class="icon icon-24 dialer-icon"></span> ' . esc_html($instance['corporate_phone']) . '
              </a>';
        }
        if (!empty($instance['corporate_email'])) {
            echo '<a href="mailto:' . esc_attr($instance['corporate_email']) . '" class="contact-detail">
                <span class="icon icon-24 mail-icon"></span> ' . esc_html($instance['corporate_email']) . '
              </a>';
        }
        echo '</div>';

        // Registered Office
        echo '<div>';
        echo '<div>';
        echo '<h4>' . esc_html($instance['registered_title']) . '</h4>';
        echo '<p class="detail-add">' . esc_html($instance['registered_address']) . '</p>';
        echo '</div>';
        if (!empty($instance['registered_phone'])) {
            echo '<a href="tel:' . esc_attr($instance['registered_phone']) . '" class="contact-detail">
                <span class="icon icon-24 dialer-icon"></span> ' . esc_html($instance['registered_phone']) . '
              </a>';
        }
        if (!empty($instance['registered_email'])) {
            echo '<a href="mailto:' . esc_attr($instance['registered_email']) . '" class="contact-detail">
                <span class="icon icon-24 mail-icon"></span> ' . esc_html($instance['registered_email']) . '
              </a>';
        }
        echo '</div>';

        echo '</div>'; // End address

        echo $args['after_widget'];
    }


    public function form($instance)
    {
        $fields = [
            'corporate_title'   => 'Corporate Office',
            'corporate_address' => 'Corporate Address',
            'corporate_phone'   => 'Corporate Phone',
            'corporate_email'   => 'Corporate Email',
            'registered_title'  => 'Registered Office',
            'registered_address' => 'Registered Address',
            'registered_phone'  => 'Registered Phone',
            'registered_email'  => 'Registered Email'
        ];

        foreach ($fields as $field => $label) {
            $value = !empty($instance[$field]) ? $instance[$field] : '';
            echo '<p>';
            echo '<label for="' . esc_attr($this->get_field_id($field)) . '">' . esc_html__($label, 'text_domain') . '</label>';
            echo '<input class="widefat" id="' . esc_attr($this->get_field_id($field)) . '" 
                         name="' . esc_attr($this->get_field_name($field)) . '" 
                         type="text" value="' . esc_attr($value) . '">';
            echo '</p>';
        }
    }



    public function update($new_instance, $old_instance)
    {
        $instance = [];
        foreach ($new_instance as $key => $value) {
            $instance[$key] = (!empty($value)) ? sanitize_text_field($value) : '';
        }
        return $instance;
    }
}

class Benefits_Widget extends WP_Widget
{
    public function __construct()
    {
        parent::__construct(
            'benefits_with_us', // Widget ID
            'Benefits With Us'  // Widget Name
        );
    }

    public function widget($args, $instance)
    {
        echo $args['before_widget'];
?>
        <section class="container ptb-50">
            <div class="section-header">
                <div class="blog-header d-flex">
                    <h2><?php echo esc_html($instance['title']); ?></h2>
                    <a class="more-arrow d-flex" href="<?= site_url(); ?>/services">
                        Explore More
                        <span class="img arrow-icon" aria-hidden="true"></span>
                    </a>
                </div>
                <p class="detail">
                    <?php echo esc_html($instance['description']); ?>
                </p>
            </div>
            <div class="blog-cards">
                <?php for ($i = 1; $i <= 3; $i++) : ?>
                    <div class="card bg-blue">
                        <h4 class="card-header d-flex">
                            <span class="img icon-64 <?php echo esc_attr($instance["icon_$i"]); ?>"></span>
                            <?php echo esc_html($instance["header_$i"]); ?>
                        </h4>
                        <ul class="text-small">
                            <?php
                            for ($j = 1; $j <= 4; $j++) {
                                if (!empty($instance["point_{$i}_$j"])) {
                                    echo '<li>' . esc_html($instance["point_{$i}_$j"]) . '</li>';
                                }
                            }
                            ?>
                        </ul>
                    </div>
                <?php endfor; ?>
            </div>
        </section>
<?php
        echo $args['after_widget'];
    }

    public function form($instance)
    {
        $fields = [
            'title'       => 'Section Title',
            'description' => 'Section Description',
            'link'        => 'Explore More Link'
        ];

        foreach ($fields as $field => $label) {
            $value = !empty($instance[$field]) ? $instance[$field] : '';
            echo '<p>';
            echo '<label for="' . esc_attr($this->get_field_id($field)) . '">' . esc_html__($label, 'text_domain') . '</label>';
            echo '<input class="widefat" id="' . esc_attr($this->get_field_id($field)) . '" 
                         name="' . esc_attr($this->get_field_name($field)) . '" 
                         type="text" value="' . esc_attr($value) . '">';
            echo '</p>';
        }

        for ($i = 1; $i <= 3; $i++) {
            echo '<h4>Card ' . $i . '</h4>';
            $card_fields = [
                "header_$i" => "Card Header",
                "icon_$i"   => "Icon Class (e.g., bus-icon, shield-check-icon)",
            ];
            for ($j = 1; $j <= 4; $j++) {
                $card_fields["point_{$i}_$j"] = "Point $j";
            }

            foreach ($card_fields as $field => $label) {
                $value = !empty($instance[$field]) ? $instance[$field] : '';
                echo '<p>';
                echo '<label for="' . esc_attr($this->get_field_id($field)) . '">' . esc_html__($label, 'text_domain') . '</label>';
                echo '<input class="widefat" id="' . esc_attr($this->get_field_id($field)) . '" 
                             name="' . esc_attr($this->get_field_name($field)) . '" 
                             type="text" value="' . esc_attr($value) . '">';
                echo '</p>';
            }
        }
    }

    public function update($new_instance, $old_instance)
    {
        $instance = [];
        foreach ($new_instance as $key => $value) {
            $instance[$key] = (!empty($value)) ? sanitize_text_field($value) : '';
        }
        return $instance;
    }
}

function mytheme_register_widgets()
{
    register_widget('My_Widget');
    register_widget('Benefits_Widget');
}
add_action('widgets_init', 'mytheme_register_widgets');
