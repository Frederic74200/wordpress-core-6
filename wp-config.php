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
define( 'DB_NAME', 'wordpress_core' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '! xt;A-7d7!a$o9.mz@1, `hlsvN/uw~a&}lHC#4(|p8c$ZA(A_9#YOD*1vNWN 1' );
define( 'SECURE_AUTH_KEY',  '.4gUlDe3EoqtR>4]}W~xfu_qDeQ=i{M!ddyri.IopT D}6Vf{a,iIWU[^7fQq(qE' );
define( 'LOGGED_IN_KEY',    'naY{wqjz?h.tc6PDNW~w>v>q~-4<uJVigI%|;<PaBcDkF&@*DoGh(s :3KNn1IsH' );
define( 'NONCE_KEY',        'Qv@>28@yuZRme9`h[Qur1wjxt>o9l~|J4T&<bXZB<DilQ::0a1$<$g5{dxD| ~>>' );
define( 'AUTH_SALT',        'x8g7fe,1Wn+k>-YII$3[2Od)@khy=3u[<YN)%_96;ueuWw<w70{f^o4^J#3$Vv{-' );
define( 'SECURE_AUTH_SALT', 'k>?0:6Xj5yT%~)#9@M. f%NCx`7?d{*r1jVn;G}N`GuRmZ:lv@~* Us@R`4~3b`v' );
define( 'LOGGED_IN_SALT',   '!.`Eho-KTLu%PZ|r8m>l>;v*jv^3OrF?i@8*Ty[84[FA7^+h}lWnZ/wsXLvxzr:J' );
define( 'NONCE_SALT',       'F-y)z w%00uTA-:PVfe`<_tY3}@&*bjy=({7qhk.}ZP7Z!J3p[5+t3hgVtc8__DE' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wpcore_';

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
