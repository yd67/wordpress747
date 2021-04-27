<?php

// add_action('wp_enqueue_scripts', 'wf3_enqueue_scripts')


// par défaut : 1 paramètre
add_filter('the_title', 'filtre_titre', 10, 2);


function filtre_titre($titre, $id)
{
    return ">>> " . $titre . " : " . $id . " <<<";
}
