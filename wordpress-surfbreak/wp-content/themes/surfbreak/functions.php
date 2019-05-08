<?php
/** 
 * Surfbreak theme functions and definitions
 */

if(!function_exists('surfbreak_setup')) :
    function surfbreak_setup() {
        /**
         * add theme support
         */
        // featured image
        add_theme_support('post-thumbnails');
        // custom logo
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250
        ));
        // register menus
        register_nav_menus(array(
            'primary-menu' => __('Primary'),
            'footer-menu' => __('Footer'),
            'social-menu' => __('Social')
        ));
    }

    // Set permalink structure
    global $wp_rewrite;
    $wp_rewrite->set_permalink_structure('/%postname%/');

endif;
add_action('after_setup_theme', 'surfbreak_setup');

if(!function_exists('surfbreak_enqueue_scripts')) :
    function surfbreak_enqueue_scripts()
    {
        // enqueue styles
        $rand = rand( 1, 99999999999 );
        wp_enqueue_style('surfbreak-style', get_stylesheet_uri(), '', $rand);
        wp_enqueue_style('responsive-nav', get_template_directory_uri() . '/assets/css/responsive-nav.css');
        // enqueue scripts
        wp_enqueue_script('surfbreak-main', get_template_directory_uri() . '/assets/js/main.js');
        wp_enqueue_script('responsive-nav', get_template_directory_uri() . '/assets/js/responsive-nav.js');
    }
endif;
add_action('wp_enqueue_scripts', 'surfbreak_enqueue_scripts');

if(!function_exists('surfbreak_widgets_init')) :
    function surfbreak_widgets_init()
    {
        register_sidebar(array(
            'name'          => __( 'Sidebar', 'theme_text_domain' ),
            'id'            => 'sidebar-1',
            'description'   => 'Add widgets here'
        ));
    }
endif;
add_action('widgets_init', 'surfbreak_widgets_init');

if(!function_exists('surfbreak_create_post_types')) :
    function surfbreak_create_post_types()
    {
        register_post_type(
            'surfbreak-regions',
            array(
                'labels' => array(
                    'name' => __('Regions'),
                    'singular_name' => __('Region')
                ),
                'public' => true,
                'has_archive' => true,
                'menu_position' => 5,
                'supports' => array(
                    'title',
                    'editor',
                    'thumbnail'
                )
            )
        );
    }
endif;
add_action('init', 'surfbreak_create_post_types');

 ?>