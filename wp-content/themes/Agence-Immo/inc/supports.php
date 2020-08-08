<?php
defined('ABSPATH') or die('');


add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
});

//Ajout de l'authorisation d'upload d'image au format svg.
add_filter('upload_mimes', function ($mime)
{
    $mime['svg'] = 'image/svg+xml';
    return ($mime);
});