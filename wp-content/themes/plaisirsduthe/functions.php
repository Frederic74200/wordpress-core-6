<?php

// Gestion des menus --------------------------------------------------------- 
function enregistre_mon_menu()
{
    register_nav_menu('menu_principal', __('Menu principal'));
}

// réupére logo ------------------------------------------------------

function getLogo()
{
    $logo_id = get_theme_mod('custom_logo');
    $logo_url = wp_get_attachment_image_url($logo_id, 'full');
    return $logo_url;
}



// Gestion des menus --------------------------------------------------------- 
add_action('init', 'enregistre_mon_menu');
// réupére logo ------------------------------------------------------

add_action('init', 'getLogo');
