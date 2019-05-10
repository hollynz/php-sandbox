<?php

$wp_customize->add_section(
    'surfbreak_our_mission_image',
    array(
        'title'     => 'Our Mission',
        'priority'  => 30
    )
);

$wp_customize->add_setting(
    'surfbreak_our_mission_image_setting',
    array(
        'default'      => '',
        'transport'    => 'postMessage'
    )
);

$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'surfbreak_our_mission_image_control',
        array(
            'label'    => 'Our Mission Image',
            'settings' => 'surfbreak_our_mission_image_setting',
            'section'  => 'surfbreak_our_mission_image'
        )
    )
);