<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    wp_head();
    ?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="col-6 d-flex justify-content-center">
        <a class="navbar-brand" href="#"><?php the_custom_logo(); ?></a>
    </div>
    


    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

    <?php
                wp_nav_menu(
                    array(
                        'menu'=> "primary",
                        'container'=> "",
                        'theme_location'=> "primary",
                        'items_wrap'=> '<ul id="" class="navbar-nav ml-auto mt-2 mt-lg-0 justify-content-around">%3$s</ul>'
                    )
                );
                ?>

    </div>
</nav>
