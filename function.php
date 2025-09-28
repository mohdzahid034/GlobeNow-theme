<?php
// Functions file for GlobeNow theme.

// Add theme support for WordPress features
function globenow_setup() {
    add_theme_support('title-tag'); // Let WP handle <title>
    add_theme_support('post-thumbnails'); // Enable featured images
}
add_action('after_setup_theme', 'globenow_setup');
