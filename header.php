<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome --> <!-- need to enqueue -->
    <!-- <script src="https://kit.fontawesome.com/a00eb704a4.js" crossorigin="anonymous"></script> -->

    <title>Advanced WordPress Theme</title>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <h1>header</h1>
    </header>