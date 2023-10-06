<?php 

// Product Custom Post Type
function teacher_init() {
    // set up product labels
    $labels = array(
        'name' => 'teacher',
        'singular_name' => 'teacher',
        'add_new' => 'Add New Teacher',
        'add_new_item' => 'Add New Teacher',
        'edit_item' => 'Edit Teacher',
        'new_item' => 'New Teacher',
        'all_items' => 'All Teachers',
        'view_item' => 'View Teacher',
        'search_items' => 'Search Teachers',
        'not_found' =>  'No Teachers Found',
        'not_found_in_trash' => 'No Teachers found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Teachers',
    );
    
    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'Teacher'),
        'query_var' => true,
        'menu_icon' => 'dashicons-randomize',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type( 'teacher', $args );
    
    // register taxonomy
    register_taxonomy('teacher_category', 'teacher', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'product-category' )));
}
add_action( 'init', 'teacher_init' );

?>
