<?php get_header(); ?>
<?php $image_aleatoire_photo = obtenir_image_aleatoire_photo(); ?>

<div class="banniere-img">
            <img id="banniere-img" src="<?php echo $image_aleatoire_photo ?>" alt="Photo bannière">
            <h1 class="banniere-txt">PHOTOGRAPHIE EVENT</h1>
        </div>

            

<?php get_footer(); ?>
