<?php

get_header();
?>


<div class="slider">
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://localhost/Spe/S04/Eval/WP-Eval-oAgency-Vince-Dcs/WP-Custom/content/uploads/2019/04/neige.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carousel-title">Partenaires</h1>
                    <a href="" class=""> <button type="button" class="carousel-button btn btn-primary">Primary</button>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://localhost/Spe/S04/Eval/WP-Eval-oAgency-Vince-Dcs/WP-Custom/content/uploads/2019/04/fete.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carousel-title">Partenaires</h1>
                    <a href="" class=""> <button type="button" class="carousel-button btn btn-primary">Primary</button>
                    </a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="http://localhost/Spe/S04/Eval/WP-Eval-oAgency-Vince-Dcs/WP-Custom/content/uploads/2019/04/montagne.jpg"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h1 class="carousel-title">Partenaires</h1>
                    <a href="" class=""> <button type="button" class="carousel-button btn btn-primary">Primary</button>
                    </a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="news">
    <h1 class="post__title">Nos actualités</h1>
    <p>Découvrez nos dernières actualités lorem psupsum !</p>
</div>

<?php
$main_active = get_theme_mod(
        'oagency_main_active',
        true 
    );

    if ( $main_active ) :
    

$posts_configuration = get_theme_mod(
    'oagency_homepage_last_posts_count',
    6
);

$posts_query = new WP_Query([
    'post_type'      => 'post',
    'order'          => 'DESC',
    'posts_per_page' => $posts_configuration
]);

        if ( $posts_query->have_posts() ) :
        ?>
<main class="posts">
    <?php 
            while ( $posts_query->have_posts() ) :
                $posts_query->the_post();
                ?>
    <article <?php post_class( 'post' ); ?>>
        <img src="<?php the_post_thumbnail_url(); ?>" class="post__image d-block w-100" alt="">
        <h1 class="post__title"> <?php the_title(); ?> </h1>
        <p class="post__content"><?php echo get_the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?> " class=""><button type="button" class="post__link btn btn-light"> <i
                    class="fa fa-link" aria-hidden="true"></i> Lire - <?php the_title(); ?></button></a>
    </article>
    <?php
            endwhile;
            wp_reset_postdata(); 
            ?>
</main>

<?php
        endif;
        ?>
<?php endif; ?>

<div class="banner"
    style="background-image: url(http://localhost/Spe/S04/Eval/WP-Eval-oAgency-Vince-Dcs/WP-Custom/content/uploads/2019/04/arbre.jpg);">
    <h1 class="banner__title">Hello</h1>
    <p class="banner__content">Call to action - Lorem ipsum, dolor sit amet consectetur adipisicing elit. Est, deleniti!
    </p>
    <div class="banner__button">
        <a href="" class=""><button type="button" class="banner__button__item btn btn-warning">Button click</button></a>
        <a href="" class=""><button type="button" class="banner__button__item btn btn-success">Another
                button</button></a>
    </div>
</div>


<?php

get_footer();
?>