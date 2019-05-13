<?php if(!function_exists('surfbreak_widgets_init')) :
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