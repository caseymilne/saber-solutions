<?php

function create_solution_post_type() {
    $labels = array(
        'name'               => __( 'Solutions' ),
        'singular_name'      => __( 'Solution' ),
        'add_new'            => __( 'Add New' ),
        'add_new_item'       => __( 'Add New Solution' ),
        'edit_item'          => __( 'Edit Solution' ),
        'new_item'           => __( 'New Solution' ),
        'view_item'          => __( 'View Solution' ),
        'search_items'       => __( 'Search Solutions' ),
        'not_found'          => __( 'No solutions found' ),
        'not_found_in_trash' => __( 'No solutions found in trash' ),
        'parent_item_colon'  => ''
    );

    $args = array(
      'labels'             => $labels,
      'public'             => true,
      'has_archive'        => true,
			'rewrite'            => array( 'slug' => 'solutions' ),
      'capability_type'    => 'post',
      'hierarchical'       => false,
			'show_in_rest'       => true,
      'menu_position'      => 80,
      'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
      'menu_icon'          => 'dashicons-welcome-learn-more'
    );

    register_post_type( 'solution', $args );
}
add_action( 'init', 'create_solution_post_type' );
