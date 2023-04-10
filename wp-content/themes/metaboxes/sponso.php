<?php

class SponsoMetaBox
{

    // on crée une constante pour le nom du champ 
    const META_KEY = 'montheme_sponso';

    //on ajoute une sécurité supplémentaire qui évite certaines failles, on vérifiant que formulaire a bien été soumis sans "malfaçon", cf->dans la partie render on vérifiera ce champ
    const NONCE = 'montheme_sponso_nonce';

    // on crée une fonction static qui permettran d'enregistrer notre boite 
    public static function register()
    {
        // on crée une nouvelle action pour ajouter des métadonnées à nos contenus, on utilise le nom de la class et on utilise la méthode add
        add_action('add_meta_boxes', [self::class, 'add'], 10, 2);

        // On crée l'action qui va lancer la fonction de sauvegarde en BDD nos métadonnées article lié à un sponsoring, on utilise le nom de la class et on utilise la méthode save
        add_action('save_post', [self::class, 'save']);
    }

    // on paramètre la visibilité ou non de la partie checkbox sponso en ajoutant une condition
    public static function add($postType, $post)
    {
        if ($postType === 'post' && current_user_can('publish_posts', $post)) {
            add_meta_box(self::META_KEY, 'Sponsoring', [self::class, 'render'], 'post', 'side');
        }
    }

    public static function render($post)
    {
        $value = get_post_meta($post->ID, self::META_KEY, true);
        wp_nonce_field(self::NONCE, self::NONCE);
?>
        <input type="hidden" value="0" name="<?= self::META_KEY ?>">
        <input type="checkbox" value="1" name="<?= self::META_KEY ?>" <?php checked($value, '1') ?>>
        <label for="<?= self::META_KEY ?>">Cet article est sponsorisé ?</label>
<?php
    }

    public static function save($post)
    {
        // on indique la possibilité de cocher la case dans l'édition d'un article et si l'utilisateur à le droit d'éditer un article alors...  
        if (
            array_key_exists(self::META_KEY, $_POST) &&
            current_user_can('publish_posts', $post) &&
            wp_verify_nonce($_POST[self::NONCE], self::NONCE)
        ) {
            // si la case est cochée alors on sauvegarde la metadonnée en BDD en auto incrément 
            if ($_POST[self::META_KEY] === '0') {
                delete_post_meta($post, self::META_KEY);
            } else {
                update_post_meta($post, self::META_KEY, 1);
            }
        }
    }
}
