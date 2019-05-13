<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>oAgency</title>
  <?php wp_head(); ?>
</head>

<body> 
<?php
$header_active = get_theme_mod(
        'oagency_header_active',
        true 
    );

    if ( $header_active ) :
?>

  <header class="header">
    <nav class="header__nav">
      <span class="header__nav__logo">OAgency</a></span>
        <?php
        wp_nav_menu([
          'theme_location' => 'header-menu' ,
          'menu_class' => 'header__nav__list'

        ]);
        ?>
    </nav>
  </header>
  <?php endif; ?>

