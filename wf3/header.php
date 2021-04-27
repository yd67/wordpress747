<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();
    ?>
</head>


<body>

    <?php //var_dump($args); // Permet de récupérer le 2eme paramètre de get_header() 
    ?>



    <!-- 


    function wp_head() -> do_action('wp_head')

    hook wp_head -> function wp_enque_scripts() -> do_action('wp_enqueue_scripts')

    hook wp_enqueue_scripts -> fonction wf3_enqueue_scripts() ->  wp_enqueue_style()

 -->