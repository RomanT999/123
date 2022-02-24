<?php

function my_scripts_method()
{
    wp_enqueue_style('styles' , get_stylesheet_uri());
}

add_action('wp_enqueue_scripts' , 'my_scripts_method');