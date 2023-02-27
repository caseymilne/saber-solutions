<?php get_header(); ?>

<div class="max-w-xl mx-auto">

<?php

// Get all terms in the solution_category taxonomy
$terms = get_terms( array(
    'taxonomy' => 'solution_category',
    'hide_empty' => false,
) );

// Loop through the terms and display their name and link
if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
    echo '<ul>';
    foreach ( $terms as $term ) {
      echo '<li><a href="' . esc_url( get_term_link( $term ) ) . '">' . esc_html( $term->name ) . '</a></li>';
    }
    echo '</ul>';
}


?>

</div>

<?php require_once(get_template_directory() . '/components/marketing/page-sections/content-sections/centered.php'); ?>
<?php get_footer(); ?>
