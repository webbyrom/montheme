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
define( 'DB_NAME', 'montheme' );

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
define( 'AUTH_KEY',         'O+k~~}!-}K?*Dzb14^tR$XXvzXE+/F?[.58DqnasV0AB[Xj)$SS;@}MhV&gW}kY2' );
define( 'SECURE_AUTH_KEY',  'k6H a;Q;1gn} xWC&9ov@X)B[t1B}zwQZhB5_K_xMG@]9r!t@<E9.!O64M00.|FR' );
define( 'LOGGED_IN_KEY',    'H*DA;GtI>X(@=J;3}70^d`7$O8`dg1,oEvBQnVCgYh [[nvTIm?ODZ+H>sSN5t?<' );
define( 'NONCE_KEY',        'zt+h/:eXK6/VSUdSZq@bxaMMgFQkrWcJtJ8SNtEH{:$8JpZw).GjG2~PJ-aEsAKH' );
define( 'AUTH_SALT',        '-xmJ6Dg2OVA-VqW4u#(uq=%AM4DrS79lI/jF]b`q7.TcGm7#gu*Ore@83&aQGV$X' );
define( 'SECURE_AUTH_SALT', 'C6mdLO}|[^NvG8|tb/a;LO@5`=1#{f<tVxQ?[ghU(uwKRxug^&:b5f-OSS$R0P4/' );
define( 'LOGGED_IN_SALT',   '<D!0iM:jX4jdg66&{Rc>QEHr=qO5[0idB;%*IIV8W_CQGc;.DQav8+3<pipBC*D,' );
define( 'NONCE_SALT',       '4@),Sv50u9//tc~^K:>`]hxebcYW4nUwY9Ag%wQ^*?DI;l7LVC[#}98<HaXmEAp&' );
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
