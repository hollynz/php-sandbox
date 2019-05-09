<?php if(!function_exists('surfbreak_create_taxonomy')) :
function surfbreak_create_taxonomy() {
  $labels = array(
    'name' => _x( 'Areas', 'taxonomy general name' ),
    'singular_name' => _x( 'Area', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Areas' ),
    'all_items' => __( 'All Areas' ),
    'parent_item' => __( 'Parent Area' ),
    'parent_item_colon' => __( 'Parent Area:' ),
    'edit_item' => __( 'Edit Area' ), 
    'update_item' => __( 'Update Area' ),
    'add_new_item' => __( 'Add New Area' ),
    'new_item_name' => __( 'New Area Name' ),
    'menu_name' => __( 'Areas' ),
  );    
 
    // register the taxonomy
  register_taxonomy('areas', array('surfbreak-regions'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'area' ),
  ));
}
endif;
add_action( 'init', 'surfbreak_create_taxonomy', 0 );