<?php

function surfbreak_customize_register($wp_customize) {
    require_once get_template_directory() . '/inc/customization/_contact.php';
    require_once get_template_directory() . '/inc/customization/_our-mission.php';
}

add_action('customize_register', 'surfbreak_customize_register');