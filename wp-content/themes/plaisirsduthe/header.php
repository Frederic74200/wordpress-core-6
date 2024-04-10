<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <header>
        <img src="<?php echo getLogo(); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="logo">

        <div id=sitetiltle>
            <p class="sitename"><?php bloginfo('name'); ?></p>
            <p class="sitedesc"><?php bloginfo('description'); ?></p>
        </div>
        <nav> <?php wp_nav_menu(array('theme_location' => 'menu_principal')) ?> </nav>
    </header>
    <main>