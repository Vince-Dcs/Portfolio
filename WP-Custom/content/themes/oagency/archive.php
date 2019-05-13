<?php
/*
Template Name: Archives
*/
get_header();
?>
<?php
if ( have_posts() ) :
?>
<div class="template-projects">
<?php
   while ( have_posts() ) :
        the_post();
    ?>

    <div class="projects">
        <img src="<?php the_post_thumbnail_url(); ?>" class="projects__image d-block w-100" alt="">
        <div class="<?php post_class( 'projects__page'); ?>">
            <h1 class='projects__title'><?php the_title(); ?></h1>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?> " class=""><button type="button" class="projects__link btn btn-light"> </i> Lire - <?php the_title(); ?></button></a>

        </div>
    </div>
    <?php endwhile; ?>
</div>

<?php

endif;


get_footer();
?> 