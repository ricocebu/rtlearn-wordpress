<?php
/**
 * Plugin Name: My WordPress plugin
 */

function unoptimized_wp_query_shortcode() {
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => -1, // Fetch all posts.
        'orderby'        => 'date',
        'order'          => 'DESC',
    );

    $query = new WP_Query($args);

    $output = '';

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<h2>' . get_the_title() . '</h2>';
            $output .= '<p>' . get_the_excerpt() . '</p>';
        }
    } else {
        $output .= '<p>No posts found.</p>';
    }

    wp_reset_postdata();

    return $output;
}

add_shortcode('unoptimized_query', 'unoptimized_wp_query_shortcode');