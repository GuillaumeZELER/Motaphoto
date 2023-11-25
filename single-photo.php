<?php
    get_header();
?>

<div class="fiche-photo">
    <div class="photo_informations">
        <h1>
            <?php
            // Récupérer l'ID du custom post type en cours
            $post_id = get_the_ID();
            // Récupérer le titre du custom post type
            $title = get_the_title($post_id);
            echo $title;
            ?>
        </h1>


        <p>référence : 
            <?php
            // Récupérer la valeur du custom field "reference"
            $ma_reference = get_post_meta($post_id, 'reference', true);
            // Vérifier si la référence existe
            if ($ma_reference) {
                // Afficher la référence
                echo $ma_reference;
            } else {
                // Afficher un message si la référence n'est pas définie
                echo 'Aucune référence définie pour cet article.';
            }
            ?>
        </p>


        <p>catégorie : 
            <?php
            // Récupérer les termes de la taxonomie "categorie" associés à ce post
            $terms = get_the_terms($post_id, 'categorie');
            if ($terms && !is_wp_error($terms)) {
                foreach ($terms as $term) {
                    echo $term->name;
                }
            } else {
                echo 'Aucune référence définie pour cet article.';
            }
            ?>
        </p>


        <p>format : 
            <?php
            // Récupérer les termes de la taxonomie "format" associés à ce post
            $terms = get_the_terms($post_id, 'format');
            // Vérifier si des termes existent
            if ($terms && !is_wp_error($terms)) {
                // Boucler à travers les termes
                foreach ($terms as $term) {
                    // Afficher la référence
                    echo $term->name;
                }
            } else {
                // Afficher un message si aucun terme n'est trouvé
                echo 'Aucune référence définie pour cet article.';
            }
            ?>
        </p>

        <p>type :
            <?php
            // Récupérer la valeur du custom field "type"
            $mon_type = get_post_meta($post_id, 'type', true);
            if ($mon_type) {
                echo $mon_type;
            } else {
                echo 'Aucune référence définie pour cet article.';
            }
            ?>
        </p>


        <p>date :
            <?php
            // Récupérer la date du custom post type
            $date = get_the_date('Y', $post_id);
            echo $date;
            ?>
        </p>

    </div>


    <div class="photo_img">
        <?php
        // Récupérer le thumbnail (image miniature) lié au custom post type
        $thumbnail = get_the_post_thumbnail($post_photos, 'large'); // Remplacez 'thumbnail_size' par la taille d'image que vous souhaitez utiliser
        echo $thumbnail;
        ?>
    </div>
</div>

<div class="zone-contact-et-miniature">
    <div class="zone-contact">
        <div>
            <p>Cette photo vous intéresse ?</p>
        </div>
        <div class="bouton-contact">
            <a onClick="passerRef('<?php echo $ma_reference; ?>')">Contact</a>
        </div>
    </div>
    <div class="zone-miniature">
        <div>
            <p>Miniature</p>
        </div>
    </div>
</div>

<div class="presentation-autres-photos">
    <div class="presentation-texte">
        <p>VOUS AIMEREZ AUSSI</p>
    </div>
    <div class="presentation-images">
        <div class="presentation-images-gauche">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/Photo-header.png" alt="Photo">
        </div>
        <div class="presentation-images-droite">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/Photo-header.png" alt="Photo">
        </div>
    </div>
    <div class="presentation-bouton">
        <input class="bouton" type="button" value="Toutes les photos">
    </div>
</div>

<?php
    get_footer();
?>