<?php 

    $wp_customize->add_section('surfbreak_contact', array(
        'title' => __('Contact'),
        'priority' => 30
    ));
    $wp_customize->add_setting('surfbreak_contact_blurb', array(
        'capability' => 'edit_theme_options',
        'default' => 'We\'d love to hear from you!!!!!!!!!!!!!!!!!!!!'
    ));
    $wp_customize->add_control('surfbreak_contact_blurb_control', array(
        'type' => 'textarea',
        'section' => 'surfbreak_contact',
        'settings' => 'surfbreak_contact_blurb',
        'label' => __('Blurb')
    ));
    // $wp_customize->add_control('surfbreak_contact_blurb_show', array(
    //     'type' => 'checkbox',
    //     'section' => 'surfbreak_contact',
    //     'settings' => 'surfbreak_contact_blurb',
    //     'label' => __('Blurb')
    // ));