<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'planty_load_scripts');

function planty_load_scripts()
{
    // Chargement du style.css du thème parent blankslate
    wp_enqueue_style('planty-style', get_stylesheet_directory_uri() . '/style.css');
    // Chargement de la font google
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&display=swap', array(), null);
}