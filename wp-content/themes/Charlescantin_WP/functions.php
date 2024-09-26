<?php

function load_styles()
{

    wp_enqueue_style(
        'main',
        get_template_directory_uri() . '/css/style.css',
        array(),
        '',
        false
    );
    wp_enqueue_script(
        'script',
        get_template_directory_uri() . '/js/script.js',
        array(),
        '1.0.0',
        false
    );
}

add_action('wp_enqueue_scripts', 'load_styles');
