<article <?php post_class( 'post__page' ); ?> id="title" >
    <h1 class="post__title"> <?php the_title(); ?> <span>écrit par <?php the_author(); ?> </span></h1>
    <img src="<?php the_post_thumbnail_url(); ?>" class="post__image d-block w-100" alt="">
    <?php the_content(); ?>
</article>
