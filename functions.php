<?php
function onphpid_scripts()
{
  
    wp_enqueue_style(
        'onphpid-bootstrap',
        get_template_directory_uri() .'/assets/css/bootstrap.min.css'
    );

    wp_enqueue_style('onphpid-style', get_stylesheet_uri());
    
    wp_enqueue_script(
        'jquery-cdn',
        get_template_directory_uri() . '/assets/js/jquery.min.js',
        array(), '', true
    );

    wp_enqueue_script(
        'bootstrap-js',
        get_template_directory_uri() . '/assets/js/bootstrap.min.js',
        array(), '', true
    );
}


add_action('wp_enqueue_scripts', 'onphpid_scripts');
