<?php

add_action('wp_enqueue_scripts', 'twentyseventeen_parent_theme_enqueue_styles');

function twentyseventeen_parent_theme_enqueue_styles()
{
    wp_enqueue_style('twentyseventeen-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style(
        'twentyseventeen-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'twentyseventeen-style' )
    );

}

/**
* Example custom function to add the HSTS header while rendering a response.
**/
add_action('send_headers', 'add_header_hsts');
function add_header_hsts()
{
    header('Strict-Transport-Security: max-age=15984000; includeSubDomains; preload');
}
