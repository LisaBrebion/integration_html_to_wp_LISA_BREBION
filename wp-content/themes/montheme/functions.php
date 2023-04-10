<?php
function montheme_supports()
{
    // on ajoute le support des titres 
    add_theme_support('title-tag');
    // on ajoute le support des img à nos cards 
    add_theme_support('post-thumbnails');
    // on ajoute le support du menu
    add_theme_support('menus');
    // on paramètre l'emplacement des menus que l'on vient de rajouer dans le dashboard
    // 1er paramètre l'id de localisation pour pouvoir spécifier quel menu on souhaite afficher, 2eme paramètre une description qui sera affichée dans notre dashboard 
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');

    // on défini la taille des img avec ce format 
    add_image_size('post-thumbnail', 350, 215, true);
}

function montheme_register_assets()
{
    wp_enqueue_style('bootstrat Icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css');
    wp_register_style('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', ['popper', 'jquery'], false, true);
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css.map');
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js');
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

// on crée notre fonction menu, on met en 1er argument $class pour pouvoir lui ajouter notre class bootstrap "nav-item" attendu cf -> le header en commentaire nav-item et nav-link
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
// on crée notre propre fonction pour gérer (l'apparence et laffichage de) la pagination
function montheme_pagination()
{
    // on récupère l'ensemble de nos pages 
    $pages = paginate_links(['type' => 'array']);
    // on dit que si il n'y a pas de page supplémentaire on arrête la fonction pour ne pas générer de code d'erreur 
    if ($pages === null) {
        return;
    }
    echo '<nav aria-label="Pagination" class=" my-4">';
    echo '<ul class="pagination">';
    foreach ($pages as $page) {
        $active = strpos($page, 'current') !== false;
        $class = 'page-item class="bg-light"';
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

// cf chapitre taxonomie
function montheme_init()
{
    // on déclare une nouvelle taxonomy : faire attention à ne pas entrer en colision avec des termes deja utilisés par wp codex -> reserved terms / ici on choisit 'sport' car il n'est pas déjà utilisé // ne pas oublier de mettre à jour les permaliens ds réglages pour pouvoir afficher la page
    // function montheme_register_sport()
    // {
    register_taxonomy('art', 'post', [
        'labels' => [
            'name' => 'Créations',
            'singular_name'     => 'Création',
            'plural_name'       => 'Créations',
            'search_items'      => 'Rechercher des créations',
            'all_items'         => 'Toutes les créations',
            'edit_item'         => 'Editer la création',
            'update_item'       => 'Mettre à jour la création',
            'add_new_item'      => 'Ajouter une nouvelle création',
            'new_item_name'     => 'Ajouter une nouvelle création',
            'menu_name'         => 'Créations',
        ],
        // on ajoute un nvo panneau dans l'administration de création d'article 
        'show_in_rest' => true,
        'hierarchical' => true,
        'show_admin_column' => true,
    ]);

    // on ajoute une catégorie "Creation" au dashbord -en plus d'article
    // cf doc register_post_type, on définit tout ce qu'on souhaite mettre comme champs dans cette catégorie (ex: il y a la possibilité de mettre en place une hierarchie (hierarchial) de Creation etc) = ne pas oublier de resauvegarder les permaliens après la saisie pr mettre à jour ds le dashboard
    register_post_type('creation', [
        'label' => 'Creation',
        // on change la position dans le menu dashbord pour le mettre plus haut que article
        'menu_position' => 3,
        'public' => true,
        // on ajoute une icon dans la partie dashboard cf dashicons via wordpress
        'menu_icon' => 'dashicons-building',
        // on ajoute le support dans l'edition du titre, de l'editeur et de l'img 
        'supports' => ['title', 'editor', 'thumbnail'],
        // on active l'editeur ss forme de block (comme ds article)
        'show_in_rest' => true,
        'has_archive' => true,

    ]);
}

add_action('init', 'montheme_init');
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');
// on ajoute un filtre pour notre menu 
add_filter('nav_menu_css_class', 'montheme_menu_class');
// on ajoute un filtre pour les liens du menu
add_filter('nav_menu_link_attributes', 'montheme_menu_link_class');

// require_once('metaboxes/sponso.php');
require_once('options/creation.php');

// SponsoMetaBox::register();
CreationMenuPage::register();
