<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        // Instructions
        the_title();
    endwhile;
endif;
