<?php //get_header('ete', array('cle1' => 'valeur1', 'cle2' => 'valeur2')); 
?>
<?php get_header(); ?>


<div class="container">


    <?php


    // pour le thème actif
    var_dump(get_stylesheet_directory()); //      -> path 
    var_dump(get_stylesheet_directory_uri()); // -> url

    // pour le thème parent  
    var_dump(get_template_directory()); //       -> path 
    var_dump(get_template_directory_uri()); //   -> url

    if (have_posts()) :
        while (have_posts()) : the_post();
            the_title('<h2>', '</h2>');
        endwhile;
    else :
        echo 'Aucun résultat';
    endif;

    ?>

    <?php get_footer(); ?>

</div>