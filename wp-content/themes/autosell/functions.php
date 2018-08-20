<?php

function getFiles() {
    wp_enqueue_script('jQuery', get_theme_file_uri('/lib/js/jquery.min.js'), NULL, '3.0', true);
    wp_enqueue_script('foundationJs', get_theme_file_uri('/lib/js/what-input.min.js'), NULL, '5.1', true);
    wp_enqueue_style('foundationStyles', get_theme_file_uri('/lib/css/foundation.min.css'));
    wp_enqueue_script('foundationJs', get_theme_file_uri('/lib/js/foundation.min.js'), NULL, '5.1', true);
    wp_enqueue_script('commonJs', get_theme_file_uri('/js/common.min.js'), NULL, '1.0', true);
    wp_enqueue_style('mainStyles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'getFiles');