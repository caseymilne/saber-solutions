<?php

/*
 * Plugin Name: Saber Solutions
 * Version: 0.0.1
 */

namespace SaberSolutions;

define( 'SABER_SOLUTIONS_PATH', \plugin_dir_path( __FILE__ ) );
define( 'SABER_SOLUTIONS_URL', \plugin_dir_url( __FILE__ ) );

class Plugin {

	public function __construct() {

		require_once( SABER_SOLUTIONS_PATH . '/inc/post-types/solution.php' );
		require_once( SABER_SOLUTIONS_PATH . '/inc/taxonomies/solution-category.php' );

		add_filter( 'template_include', [$this, 'templates'] );

	}

	function templates( $template ) {

		// Provide single template.
    if ( is_single() && get_post_type() == 'solution' ) {
    	$template = SABER_SOLUTIONS_PATH . '/templates/single-solution.php';
    }

		// Provide archive template.
    if ( is_archive() && is_post_type_archive( 'solution' ) ) {
    	$template = SABER_SOLUTIONS_PATH . '/templates/archive-solution.php';
    }

    return $template;
	}

}

new Plugin();
