<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
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
define('DB_NAME', 'u422339208_dih');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'u422339208_dih');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'L5!dgFSP4b');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         ',bnXx?HswkQOj#EDJMpZ[T@Q3BF4_uFisnH9-L(V$QyA%-pysAQqeb6;%9j~,GKV');
define('SECURE_AUTH_KEY',  'w8B!Il6Z8Vq|zIWDn!|lY#W);B%5DX?pt|)@{#c;l^~B G v/,$wY}&#4PO>O,|H');
define('LOGGED_IN_KEY',    '*%RYHqxXWm Lmg!mTq>+*/80dx&aRTV~Lb%#k,XLSO#9/;0Q3Qn:cG`-tf|%=@rn');
define('NONCE_KEY',        'U&`G}%I=LQ;hJ:r_9QQl;vNEw{OZ6z%|%1yo[S&DZjM]XNYaq}cw@ ?7haX!2HgS');
define('AUTH_SALT',        'W*@p:HM1/J*_nvcDHNyNX8d%[_5nh3Va4damaIl>t%x6[-EHfk)?}.W2N99:+O^1');
define('SECURE_AUTH_SALT', '*cxXd1gR/IO &wHu2pR*L6(>l;W|4iVwQ>aWinxPfqG{>O}YIZRD!GGGE@Y=lO`$');
define('LOGGED_IN_SALT',   'ea4T4z,O8Rp[lbdN i6{D{JO?a&<15ZH`4Dhx`w=2wo`9q?6.sW`s1;{&Ug?q9Sd');
define('NONCE_SALT',       '$3|5=}^<VtEhC}#o_0,tyqO|;Hy4 e0)axPoSo$D`[O~OU6&d_e+MbIR}`,5~tya');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');