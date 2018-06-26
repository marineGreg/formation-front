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
define('DB_NAME', 'monsite_marine');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Pr812v>[k>Gv2uW.{=EWhW-9{3f:kI#ga?x6gyHEO@u9S[[1Qp_>O#)alFSQIb~p');
define('SECURE_AUTH_KEY',  'B>|k_[WqW4F5,}_%^#Pq9e`<.:N~v-PukkvkqVA<^jqyNKPL1*|{kDM%u-Z|u.0N');
define('LOGGED_IN_KEY',    '`t4=G~OJ*+Ma9n7rhl=zJSdfR%dO0~f?G&i{`GN],<esb@7XMAQ*Z7#OHeFJU}Y`');
define('NONCE_KEY',        'MkRu_xAUwVKwH*mS]}p;9WzAtWOLG30Y;S&+Hu4ck.v+U)^,VRc7au>Dqw?Ng9hE');
define('AUTH_SALT',        '|uT$lNL)u8@Q )NX5C(]:e4}c(H3!GDWYj-BC|TZ:JYKSTNt?R[qNn=,x6~J.0,>');
define('SECURE_AUTH_SALT', 'VtVs!E13`dk1TB<E-Z-rd^:(.>p|U/I4?cjWd3oLHQ*~m}Zv:QORw:Q*2^aH-d;q');
define('LOGGED_IN_SALT',   'gK$c1WF^&ixLD6u<[7)hPs5tY%90L3K|s}cfA|e~@/PxjMDOQ>Ntkw%FiM37 5Ee');
define('NONCE_SALT',       'xg|VHb~*y^v6Xb}QX22oo/huht?D,u9_9aavP,;~|!d.N{9j{M*-u>W4b.ie^HJM');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');