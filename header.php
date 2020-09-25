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

<nav class="topnav" id="myTopnav">
  <a href="#home" ><?php the_custom_logo(); ?></a>
    <?php
                wp_nav_menu(
                    array(
                        'menu'=> "primary",
                        'container'=> "",
                        'theme_location'=> "primary",
                        'items_wrap'=> '<ul id="" class="nav-list">%3$s</ul>'
                    )
                );
                ?>

  <a href="javascript:void(0);" class="icon" onclick="cellapseAni()">
    <i class="fa fa-bars"></i>
  </a>
</nav>