<?php
$footer_active = get_theme_mod(
        'oagency_footer_active',
        true 
    );

    if ( $footer_active ) :
?>

<footer class="footer">
<div id="sidebar-primary" class="sidebar">
<?php dynamic_sidebar( 'primary' ); ?>
</div>
    
    <nav class="footer__nav">
        <a href="" class=""><button type="button" class="footer__nav__button btn btn-light">Contactez nous</button></a>
        <a href="" class=""><button type="button" class="footer__nav__button btn btn-light">Sunlight</button></a>
    </nav>
</footer>
 <?php endif; ?>
<?php wp_footer(); ?>
</body>

</html>