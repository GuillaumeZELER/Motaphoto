
<div id="overlay" class="overlay inactive">
</div>
<div class="placement-modale inactive" id="placement">
    <div id="modale" class="inactive">
        <div class="centrage-contenu-modale">
            <img src="wp-content/themes/Motaphoto/assets/images/Contact-header.png" alt="image de contact" class="image-contact">
            <img src="wp-content/themes/Motaphoto/assets/images/Contact-header-mobile.png" alt="image de contact sur mobile"
                 class="image-contact-mobile">
            <?php
                    // Insérez le shortcode dans le template en utilisant la fonction do_shortcode()
                    echo do_shortcode('[ninja_form id=2]');
            ?>
        </div>
    </div>
</div>



