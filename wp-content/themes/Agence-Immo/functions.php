<?php

require_once __DIR__ . '/inc/supports.php';
require_once __DIR__ . '/inc/assets.php';
require_once __DIR__ . '/inc/apparence.php';
require_once __DIR__ . '/inc/menus.php';
require_once __DIR__ . '/inc/sidebars.php';
require_once __DIR__ . '/inc/images.php';
require_once __DIR__ . '/inc/query/posts.php';

function    ft_agence_immo_icone(string $name): string
{
    $spriteUrl = get_template_directory_uri() . '/assets/sprite.14d9fd56.svg';
    return (<<<HTML
        <svg class="icon"><use xlink:href="{$spriteUrl}#{$name}"></use></svg>
        HTML);
}

function    ft_paginate(): string
{
    return ('<div class="pagination">' . paginate_links(
            [
                'prev_text' =>  ft_agence_immo_icone('arrow'),
                'next_text' =>  ft_agence_immo_icone('arrow')
            ]
        ) . '</div>');
}
