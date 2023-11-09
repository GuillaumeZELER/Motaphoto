<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
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

        <!-- MODALE EMPLACEMENT TEMPORAIRE-->
<!-- 
    <h2>Créer Boîte Modale</h2>
    <a href="#" onclick="example()">ouvrir</a>
    <div id="example">
      <div>
        <p>Le contenu que vous souhaitez voir voir va ici.</p>
        <a href="#" onclick="example()">Cliquez ici pour fermer la boîte</a>
    </div>
    </div>
 -->
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
