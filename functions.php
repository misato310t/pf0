<?php

add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
function add_google_fonts() {
    wp_enqueue_style( ' add_google_fonts ', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap', false );
}


    add_action('init', function(){
    add_theme_support('post-thumbnails');
 });
