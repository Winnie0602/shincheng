<?php

function theme_support(){
    //add dynamic theme title tag
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_support');


function load_stylesheets(){
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css', array(), 1, 'all');
    wp_enqueue_style('carousel', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/assets/owl.carousel.min.css", array(), '2.3.3', 'all');
    wp_enqueue_style('OwlCarousel2', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css", array(), '2.0.0', 'all');
    wp_enqueue_style('animate', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css", array(), '3.5.2', 'all');
    wp_enqueue_style('custon-SweiSpring-fonts', 'https://cdn.jsdelivr.net/gh/max32002/swei-spring@1.065/WebFont/CJK%20TC/SweiSpringCJKtc-Regular.woff2');
    wp_enqueue_style('custon-SweiSpring-fonts', 'https://cdn.jsdelivr.net/gh/max32002/swei-spring@1.065/WebFont/CJK%20TC/SweiSpringCJKtc-Regular.woff');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');



function addjs(){
    wp_enqueue_script('jquery', "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js", array(), '3.3.1',true);

    wp_enqueue_script('OwlCarousel2', "https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js", array(), '2.3.3',true);

    wp_enqueue_script('js-func', get_template_directory_uri() . '/assets/js/func.js', array(), 1, 'all');

}
add_action('wp_enqueue_scripts', 'addjs');

