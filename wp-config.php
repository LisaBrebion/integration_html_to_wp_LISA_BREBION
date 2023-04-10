<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'tp_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jNgYOOsSBrzhcGIUy@4`t,Mb2fj^XnnjD(Iog<Sabl& Y{XFg#3a]0CAJgJUTGD%' );
define( 'SECURE_AUTH_KEY',  'Pv,-:e(66f[>NYYLO0 usqjLrfhOc|b]eky[W,)6prlJ,8{md^*b{UyPZ=-k{m;s' );
define( 'LOGGED_IN_KEY',    'oR9VtO?g^ZXsqulN3WHw*8Agx-Ze4#9&I6f>2q+4*OJ]ggF$3IOdn9l4Elj!pJ[U' );
define( 'NONCE_KEY',        '~G(q*{?(T~Nn#n^||tBm.irQFC6;)$=dYe>b_T {{vHyG  Mkqz1q`Sy A9{cZxY' );
define( 'AUTH_SALT',        'oe=*e14i[r5@!%|nql@!?08d& td~+0s.{V/6,cp;N>|97_%C$QI/YD~BlU5)kD{' );
define( 'SECURE_AUTH_SALT', '@E@z&!<#qegTpB)^IS@zGXt3Yh5Y}$h_}4K?u/Rb`!^E#oc`r)I$uR{LtW8~ggOS' );
define( 'LOGGED_IN_SALT',   'o]iP2;U;a!Y !Gk?e/`%J+.yybZ@dTB]L;XjZIPAo %e!o||p+x+>r[UG#M_*{Ex' );
define( 'NONCE_SALT',       '/|TrEW1%Yf].H})RfSFbqP,pf(Lf[ZjDqj-K xjUToV_Tm{P3EsJWvxB!w1)[>Gl' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
