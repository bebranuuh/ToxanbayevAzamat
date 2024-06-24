<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body>
    <header class="pt-5 pb-5">
        <div class="flex w-4/5 m-auto justify-between items-center">
            <div>
                <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                        echo '<a href="' . esc_url( home_url( '/' ) ) . '" rel="home">';
                        echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        echo '</a>';
                    } else {
                        echo '<span class="text-5xl">' . get_bloginfo( 'name' ) . '</span>';
                    }
                }
                ?>
            </div>
            <nav class="w-2/5">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => 'flex justify-between text-2xl'
                ));
                ?>
            </nav>
        </div>
    </header>