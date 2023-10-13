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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet6' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SKK4<CBy</a?EVsD5/WyK0Cc6 cTsClrk;/h;x]WMu^jEgH87Qn_]f-!JU$lpm%J' );
define( 'SECURE_AUTH_KEY',  'm*;IXwU3v%(g;gtiD#1t&g#tDv$Qvh]K_-}gq9NMo+?%^Cy}b#mh^!iiVk(K;oxr' );
define( 'LOGGED_IN_KEY',    'j6hDG,zlTv wa5S!L0bQ|hxRVQ?ozu~(07*Vm03z%1qZ(Uahw+y)91g|.`1:G$*a' );
define( 'NONCE_KEY',        '>KX1t4Zulp1>eOFVYqDJwVn}F0{Cm,pwg)]F{!9]XxPzGhLA[|dyah.Ty0ElvF7(' );
define( 'AUTH_SALT',        'RTLJ+-kMmS?S0,}ec$H{>.!qic#Gn+z!@;olLE`(:tE&;`Ra.SonaNKl ,[%`J!k' );
define( 'SECURE_AUTH_SALT', 'Y2!/`5;[WJj.e!;C.(e`K?af_uB}vvAJMVs_t$cS0(mfxFOK>dzb*UF<|zehHP?0' );
define( 'LOGGED_IN_SALT',   '/KjQq=PyO)qw}JiQ3p-A=I9 }x3Og4c:gB4kSZxpSo/&:O2fp^nujISIaI-JzYD|' );
define( 'NONCE_SALT',       'hXtPJr}n}5/&,A;1lJ9ZHfE`or|HWAVwYzisW+NjMe/vZ4kKa6-:&g2m`Ka?|ZR]' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
