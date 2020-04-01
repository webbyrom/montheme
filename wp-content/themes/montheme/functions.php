<?php

function montheme_supports()
{
    add_theme_support('title-tag');/* declarer le support du titre au niveau du theme */
    add_theme_support('post-thumbnails');/* declarer la prise en charge des images mise en avant */
    add_theme_support('menus');
    register_nav_menu('header', 'en tête du menu');
    register_nav_menu('footer', 'menu footer');
    add_image_size('post_thumbnail', 350, 215, true);/* taille image souhaitée, 350*215 true = cropage ( mise à l'échelle/centrage) ***/
}
function montheme_register_assets()
{
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');  /* enregistrer la librairie bootstrap*/
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);/* idem + declaration dans le footer*/
    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');/* ajout de notre fichier style ou script */
    wp_enqueue_script('bootstrap');
}
function montheme_title($title)
{
    return 'Le meilleur site internet';
}

function montheme_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}
function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}
function montheme_pagination() /* création de la fonction pour la pagination **/
{
    $pages = paginate_links(['type' => 'array']);/* variable contenant la declaration wordpress pagiantion */
    if ($pages === null) {/*  pour éviter les erreurs si un seul articles */
        return;
    }
    echo '<nav aria-label="Pagination" class="my-4">';
    echo '<ul class="pagination">';

    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $class = 'page-item';
        if ($active) {
            $class .= ' active';
        }
        echo '<li class="' . $class . '">';
        echo str_replace('page-numbers', 'page-link', $page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}


add_action('after_setup_theme', 'montheme_supports');/* pour utiliser la function montheme_supports()*/
add_action('wp_enqueue_scripts', 'montheme_register_assets');/* pour utiliser la function montheme_register_assets()*/
add_filter('wp_title', 'montheme_title');
add_filter('nav_menu_css_class', 'montheme_menu_class');
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');

require_once('metaboxes/sponso.php');
SponsoMetaBox::register();