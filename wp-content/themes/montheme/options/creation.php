<?php
class CreationMenuPage
{

    const GROUP = 'creation_options';

    public static function register()
    {
        // on enregistre le menu 
        add_action('admin_menu', [self::class, 'addMenu']);
        // on déclare les champs de notre formulaire 
        add_action('admin_init', [self::class, 'registerSettings']);
        // on utilise le hook admin_enqueue_scripts pour importer la librairie JS et CSS 
        add_action('admin_enqueue_scripts', [self::class, 'registerScripts']);
    }


    // on crée notre fonction dans laquelle on importe nos librairies en un filtre sur le prefixe (le hook "suffix") pr ne pas charger le scrpti sur toutes les pages (uniquement sur la partie paramètre agence)
    public static function registerScripts($suffix)
    {
        if ($suffix === 'settings_page_agence_options') {

            wp_register_style('flatpickr', 'https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css', [], false, true);
            wp_register_script('flatpickr', 'https://cdn.jsdelivr.net/npm/flatpickr', [], false, true);
            // on importe notre script via " monthemeadmin" précise le chemin vers notre fichier JS (url de notre template), on a comme dépendance 'flatpickr', false car on ne précise pas de n° de version, et true pour charger dans le footer
            wp_enqueue_script('montheme_admin', get_template_directory_uri() . '/assets/admin.js', ['flatpickr'], false, true);
            // on importe ds notre fil d'attente notre style 'flatpickr'
            wp_enqueue_style('flatpickr');
        }
    }

    public static function registerSettings()
    {
        // 1er paramètre notre groupe et 2eme : nom qu'on donne au champ (attention au doublon), 3eme : (facultatif) on peut définit une valeur par défaut (ex:['default' => 'Salut'])
        register_setting(self::GROUP, 'creation_titre');
        // on rentre notre champs qui va permettre de specifier une date 
        register_setting(self::GROUP, 'creation_date');

        // gestions des sections et des champs// on lui donne/affilie en 1er paramère :  un ID, 2eme : un titre 3eme :le contenu de notre section (ici une fonction qui génère le contenu de notre section et qui prend en paramètre la page d'option qui est associée)
        add_settings_section('creation_options_section', 'Paramètres', function () {
            echo "Vous pouvez gérer les paramètres liés à la création";
        }, self::GROUP);
        // on intègre le champs qui va permettre de spécifier les horaires (on precise un ID, 2eme: le titre, 3eme:le call-back à utiliser (une fonction qui rend notre champs) 4eme : page associée, 5eme section qui va être reliée)
        add_settings_field('creation_options_titre', "titre de la creation", function () {
?>
            <textarea name="creation_titre" cols="30" rows="10" style="width:100%"><?= esc_html(get_option('creation_titre')) ?></textarea>
        <?php
        }, self::GROUP, 'creation_options_section');
        add_settings_field('creation_options_date', "Date de création", function () {
        ?>
            <!-- on utilise notre class qui correspond à notre champ (avec apparence de la librairie) après value  -->
            <input type="text" name="creation_date" value="<?= esc_attr(get_option('creation_date')) ?>" class="montheme_datepicker">
        <?php
        }, self::GROUP, 'creation_options_section');
    }

    public static function  addMenu()
    {
        // 1er paramètre : titre de notre page, 2eme:ce qui va s'afficher ds notre partie menu, 3eme :permission qu'il faut avoir pr consulter la page 4eme: menu slug, 5eme : fonction a appeller pr afficher le contenu de cette page
        add_options_page("Gestion des créations", "Créations", "manage_options", self::GROUP, [self::class, 'render']);
    }
    // on rend/affiche la page 
    public static function render()
    {
        ?>
        <h1>Gestion du portfolio</h1>

        <form action="options.php" method="post">
            <!-- settings_fields vérifie les infos du formulaires un peu comme NONCE -->
            <?php settings_fields(self::GROUP);

            //  on affiche les champs du formulaire avec do_setting_sections
            do_settings_sections(self::GROUP);
            submit_button(); ?>

        </form>

<?php
    }
}
