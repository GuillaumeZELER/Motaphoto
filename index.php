<?php get_header(); ?>
<?php $image_aleatoire_photo = obtenir_image_aleatoire_photo(); ?>

<div class="banniere-img">
    <img id="banniere-img" src="<?php echo $image_aleatoire_photo ?>" alt="Photo bannière">
    <h1 class="banniere-txt">PHOTOGRAPHIE EVENT</h1>
</div>
            



<div id="gallery">
    <div id="gallery-container">
        <?php
        $args = array(
            'post_type'      => 'photo',
            'posts_per_page' => 10, // Nombre de photos à afficher par défaut
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
                // Affichez vos miniatures ici
                echo('<div class="gallery-img">');
                the_post_thumbnail('large'); // Utilisez la taille de la miniature par défaut
                echo('</div>');
            endwhile;
            wp_reset_postdata();
        else :
            echo 'Aucune photo trouvée';
        endif;
        ?>
    </div>
</div>


<script>
jQuery(function ($) {
    var page = 2; // Numéro de page initial
    var canLoad = true;

    $(window).scroll(function () {
        if ($(document).height() - $(window).height() <= $(window).scrollTop() + 100 && canLoad) {
            canLoad = false;

            $.ajax({
                type: 'POST',
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                data: {
                    action: 'load_more_photos',
                    page: page,
                },
                success: function (response) {
                    // Ajoutez le contenu de la nouvelle page à votre conteneur d'affichage
                    $('#gallery-container').append(response);

                    // Réinitialisez la variable canLoad
                    canLoad = true;

                    // Incrémentez le numéro de page
                    page++;
                }
            });
        }
    });
});
</script>


<?php get_footer(); ?>
