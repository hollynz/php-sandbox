<?php if(!function_exists('surfbreak_create_post_types')) :
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
                // non-custom taxonomies
                // 'taxonomies' => array('category', 'post_tag')
            )
        );
    }
endif;

add_action('init', 'surfbreak_create_post_types');