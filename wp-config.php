<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'agence_immo' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'R?L~0fBS--AySjj8SS3INCvpK?!+q5b a!8)P]@$4j^Dv%:^o$eeJZO4MM[@}=ca' );
define( 'SECURE_AUTH_KEY',  'yj-hS}Eg&YhEt>,l|u}2uDmok+pw;O_Z%p3Tsa?S^m+}8};*-+GHX_RzP$,$v`E9' );
define( 'LOGGED_IN_KEY',    'obd_BrvL&E0t.4Bg15j&F:j3A~K=,=U|5u0Y&InyZRI{+$Ss$5IXgWyy$]3-d#>o' );
define( 'NONCE_KEY',        'fS{S,SXlXRwQkkcE)gZF3~-BNL,;(yyF8Styu`7}ef/bPb Ha4^N*JkN!D<(f[k7' );
define( 'AUTH_SALT',        '[knAJ%?%=>A:%k:l#==<vgnK`fdt98]h=bEx5l%val.[qf<ke@>x(N.vnMjC 3vl' );
define( 'SECURE_AUTH_SALT', '>(M0[3bT[BM4oRL^~:321K!5]`^j#TiO4?Zv_%,8d{ H{zwg,p|3KYh4]pm,[(+6' );
define( 'LOGGED_IN_SALT',   'T&xS}SxqsH@:O;}k_.RD:,T?ln<8%M8(w1I4gb;iNhK9|ag],HhvmnW=@3e?t:9>' );
define( 'NONCE_SALT',       'TK/n~71h:{+VDkcuq~8<+ZqHp4]^_x)@kNA {4s_?p}Ro7h|D?aAgb[KV<ZUXQ{D' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
