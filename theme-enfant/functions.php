<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function theme_enqueue_scripts()
{
    wp_enqueue_style('theme-parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-enfant', get_stylesheet_directory_uri() . '/assets/css/theme.css', array('theme-parent'), '1.1');
}


// path 
// error_log(get_template_directory());  // répertoire du thème parent
// error_log(get_stylesheet_directory()); // répertoire du thème actif


// url
// error_log(get_template_directory_uri()); // répertoire du thème parent
// error_log(get_stylesheet_directory_uri()); // répertoire du thème actif


error_log('Passage dans functions.php du thème enfant');
