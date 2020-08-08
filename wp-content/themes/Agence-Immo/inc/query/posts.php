<?php
//Fonction a mettre pour prendre en compte le nombre d'article par page défini par l'administrateur dans les réglages de lecture.
add_action('pre_get_posts', function (WP_Query $query)
{
    if (is_admin() || 
        !$query->is_main_query() || 
        (!is_home() && !is_category() && !is_search()))
    {
        return ;
    }
    //Si on veut forcer le nombre d'article par page :
    //$query->set('posts_per_page', 5);
});