<?php

// Template du CPT project

get_header();

if ( have_posts() ) :
    the_post();
    ?>

<img src="<?php the_post_thumbnail_url(); ?>" class="background-project" >
    <div class="project">
        <img src="<?php the_post_thumbnail_url(); ?>" class="project__image" alt="">
        <div class="<?php post_class( 'project__template'); ?>">
        <h1 class='project__template__title'><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php
endif;


get_footer();
