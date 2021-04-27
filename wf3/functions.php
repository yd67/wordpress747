<?php

add_action('wp_enqueue_scripts', 'wf3_enqueue_scripts');

function wf3_enqueue_scripts()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), false, true);
    wp_enqueue_script('wf3', get_template_directory_uri() . '/assets/js/wf3.js', array('bootstrap', 'jquery'), '1.0', true);
}




// par défaut : 1 paramètre
// add_filter('the_title', 'filtre_titre', 10, 2);


// function filtre_titre($titre, $id)
// {
//     return ">>> " . $titre . " : " . $id . " <<<";
// }
