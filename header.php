<?php
/*
* Slan Hotel 
* @package Slan
* @subpackage Slan Hotel
* @since 1.0
* Este es el encabezado
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title><?php wp_title('-', true, 'right');?> <?php bloginfo('name'); ?></title>
    
    <?php wp_head(); ?>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

</head>
<body <?php body_class();?>>



<header>
    <div class="header-inner">
        <div class="top-bar">
            <div class="container">
                <ul class="social-top-bar">
                    <li>
                        <a href="#" class="text-black">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="logo-container">
            <a href="#">
                <h1 class="d-none">Slan Hotel</h1>
                <img src="img/logoslanhotel.jpg" alt="Slan Hotel">
            </a>
        </div>
        <nav class="main-menu-container">
            <div class="container">
               <?php wp_nav_menu(array(
                   'theme_location' => 'main-menu',
                   'menu_class' => 'main-menu',
                   'menu_id' => 'mainMenu'

               )); ?>
                   
                <a href="#" class="mobile-menu-button" id="mobileMenuButton">
                    MENÚ PRINCIPAL <i class="fas fa-bars"></i>
                </a>
            </div>
        </nav>
    </div>
</header>