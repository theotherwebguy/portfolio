<?php



add_action( 'init', 'register_aali_Portfolio' );
function register_aali_Portfolio() {
    
$labels = array( 
'name' => __( 'Portfolio', 'aali' ),
'singular_name' => __( 'Portfolio', 'aali' ),
'add_new' => __( 'Add New Portfolio', 'aali' ),
'add_new_item' => __( 'Add New Portfolio', 'aali' ),
'edit_item' => __( 'Edit Portfolio', 'aali' ),
'new_item' => __( 'New Portfolio', 'aali' ),
'view_item' => __( 'View Portfolio', 'aali' ),
'search_items' => __( 'Search Portfolio', 'aali' ),
'not_found' => __( 'No Portfolio found', 'aali' ),
'not_found_in_trash' => __( 'No Portfolio found in Trash', 'aali' ),
'parent_item_colon' => __( 'Parent Portfolio:', 'aali' ),
'menu_name' => __( 'Portfolio', 'aali' ),
);

$args = array( 
'labels' => $labels,
'hierarchical' => true,
'description' => 'List Portfolio',
'supports' => array( 'title', 'editor', 'thumbnail', 'comments'),
'taxonomies' => array( 'Portfolio', 'type1' ),
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'menu_position' => 5,
'menu_icon' => 'dashicons-id-alt', 
'show_in_nav_menus' => true,
'publicly_queryable' => true,
'exclude_from_search' => false,
'has_archive' => true,
'query_var' => true,
'can_export' => true,
'rewrite' => true,
'capability_type' => 'post'
);

register_post_type( 'Portfolio', $args );
}
add_action( 'init', 'create_Type1_hierarchical_taxonomy', 0 );

//create a custom taxonomy name it Skillss for your posts

function create_Type1_hierarchical_taxonomy() {

// Add new taxonomy, make it hierarchical like Skills
//first do the translations part for GUI

$labels = array(
'name' => __( 'Type1', 'aali' ),
'singular_name' => __( 'Type1', 'aali' ),
'search_items' =>  __( 'Search Type1','aali' ),
'all_items' => __( 'All Type1','aali' ),
    'parent_item' => __( 'Parent Type1','aali' ),
    'parent_item_colon' => __( 'Parent Type1:','aali' ),
    'edit_item' => __( 'Edit Type1','aali' ), 
    'update_item' => __( 'Update Type1','aali' ),
    'add_new_item' => __( 'Add New Type1','aali' ),
    'new_item_name' => __( 'New Type1 Name','aali' ),
    'menu_name' => __( 'Type1','aali' ),
  );     

// Now register the taxonomy

  register_taxonomy('type1',array('Portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'type1' ),
  ));

}



?>