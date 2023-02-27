<?php

// Register custom taxonomy
function custom_taxonomy() {
    $labels = array(
        'name' => __( 'Solution Categories' ),
        'singular_name' => __( 'Solution Category' ),
        'menu_name' => __( 'Solution Categories' ),
        'all_items' => __( 'All Solution Categories' ),
        'edit_item' => __( 'Edit Solution Category' ),
        'view_item' => __( 'View Solution Category' ),
        'update_item' => __( 'Update Solution Category' ),
        'add_new_item' => __( 'Add New Solution Category' ),
        'new_item_name' => __( 'New Solution Category Name' ),
        'parent_item' => __( 'Parent Solution Category' ),
        'search_items' => __( 'Search Solution Categories' ),
        'popular_items' => __( 'Popular Solution Categories' ),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'solution-category' ),
    );

    register_taxonomy( 'solution_category', 'solution', $args );
}
add_action( 'init', 'custom_taxonomy' );
