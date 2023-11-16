<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet"> 

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Votre en-tête -->
    <header id="header">
        <div class="top-menu">
            <img src="./wp-content/themes/Motaphoto/assets/images/Logo.png" class="logo" alt="logo" />
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'header',
                    'menu_id' => 'menu-header', // ID attribué au menu
                ));
            ?>
            <img src="./wp-content/themes/Motaphoto/assets/images/menubtn.png" alt="bouton d'ouverture du menu" id="menuBtn" class="mobile" />
            <img src="./wp-content/themes/Motaphoto/assets/images/Croix.png" alt="bouton de fermeture du menu" id="menuBtnFermeture" class="mobile inactive-mobile" />
        </div>
    </header>
        <!--Menu mobile-->
        <div class="menu-fullscreen inactive-mobile" id="megaMenu">
            <?php 
            wp_nav_menu(array(
                'theme_location' => 'header',
                'menu_id' => 'megaMenu', // ID attribué au menu mobile
            ));
            ?>
        </div>
