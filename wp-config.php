<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', '4836_wp');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', '4836_wordpress');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '#4rvmWedf');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' }mb)7z,tyocLyZ-ObkJUEfWjn2N->T[B_1z>(Jj?r;>_ib2JDlB-t6Z%zHT8s#[');
define('SECURE_AUTH_KEY',  'sZBK8.^>sbiNH-$DYp2o;_*aSo._8(C+EzrnadXiwYX+uu`ulq4yQvwLN1hj:o^=');
define('LOGGED_IN_KEY',    '~-QL{Q7v~cwY|sV|0EbSE=K$FZ#k<K,D@G<$hh(a2P^G xagT7!wQG^1RMxn,}(N');
define('NONCE_KEY',        'Y(J9{(-q>:*#|$@fw8psi?[x(|+.PT}Kh|T*G[F[b.r~%?p+BWuCV.%N$an2A`Sj');
define('AUTH_SALT',        'ngA9SAWy|y/9uq%32*:Kmb8Ht[)p2L#b9xm[^R^gZOxX8M(-|.dR1Rg^.iE#!`$5');
define('SECURE_AUTH_SALT', 'L(c|{F&$+&J{;IET8CDh0Jt`t$H3~a_4@V#gR0s[4yht)YsbrwoeJJ<,FzuMT)^a');
define('LOGGED_IN_SALT',   'G6G[h}l-pO+zcrv|i1Wrjl3n#|j`BOn05|MQ~80BF:uac+hl0jGKU|EL=5N{S7Yd');
define('NONCE_SALT',       'a|HAAu0m[%`{fY9_>z>n}48*j-](vWibCGh(S{#6[[o;m:Ay+Tb2m8mgiJI.0M)~');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
