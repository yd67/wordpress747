<?php
// echo '<pre>';
// var_dump($wp_query);
// echo '</pre>';

if (have_posts()) :
    while (have_posts()) : the_post();
        the_title('<h2>', '</h2>');
        the_content();
        the_category();
    endwhile;
else :
    echo 'Aucun résultat';
endif;


// if (have_posts()) {
//     while (have_posts()) {
//         the_post();
//         the_title('<h2>', '</h2>');
//     }
// } else {
//     echo 'Aucun résultat';
// }
