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


require_once get_template_directory() . '/inc/widgets.php';
require_once get_template_directory() . '/inc/custom-post-types.php';
require_once get_template_directory() . '/inc/taxonomies.php';
require_once get_template_directory() . '/inc/custom-meta-boxes.php';