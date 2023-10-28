<?php

wp_enqueue_style('padma-style-css', get_stylesheet_uri());

wp_enqueue_style('pagma-boots-css',get_template_directory_uri().'/assets/Boots/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_css_bootstrap.min.css');

wp_enqueue_script( 'padma-boots-script', get_template_directory_uri().'/assets/Boots/cdn.jsdelivr.net_npm_bootstrap@5.3.1_dist_js_bootstrap.bundle.min.js',array(),'1.0.0',true);


add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');