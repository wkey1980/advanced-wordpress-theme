<?php

echo '<pre>';
print_r();
wp_die();

function advanced_wordpress_theme_enqueue_scripts() {
    wp_enqueue_style( 'style.css', get_stylesheet_uri(), [], filemtime() );
}
add_action( 'wp_enqueue_scripts', 'advanced_wordpress_theme_enqueue_scripts' );