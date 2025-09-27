<?php
function globenow_scripts() {
    wp_enqueue_script('globenow-js', get_template_directory_uri() . '/script.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'globenow_scripts');
?>