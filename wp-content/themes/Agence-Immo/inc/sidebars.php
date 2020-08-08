<?php

require_once __DIR__ . '/widgets/social.php';

add_action('widgets_init', function () {
    register_widget(AgenceImmo_Social_Widget::class);
    register_sidebar([
        'id'            =>  'footer',
        'name'          =>  __('Footer', 'Agence-Immo'),
        'before_widget' =>  '<div class="footer__col">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<div class="footer__title">',
        'after_title'   =>  '</div>'
    ]);
    register_sidebar([
        'id'            =>  'blog',
        'name'          =>  __('Blog sidebar', 'Agence-Immo'),
        'before_widget' =>  '<div class="sidebar__widget">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<div class="sidebar__title">',
        'after_title'   =>  '</div>'
    ]);
});

