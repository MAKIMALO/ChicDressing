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
define( 'DB_NAME', 'chicdressing' );

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
define( 'AUTH_KEY',         'sN)yMZPr;,9ztSSTP<Qf[wwz-sKE&rnqC>n!M>E<jzq7em8z?k234_Y_B;V.Q#iv' );
define( 'SECURE_AUTH_KEY',  ')@ltKUYp_&|CPy`*<`]UlPz&?o92cr_Xg}_i2i)rJoTm0I?8d,MWYAm#r3vb7e(#' );
define( 'LOGGED_IN_KEY',    'Z0KUHu>54&*&L%9vflLkgfD{2]lV?BVL#L~e4/CR )_0A^/>s6tneG8rdTVeA]Qn' );
define( 'NONCE_KEY',        'feH[;VQ[aJ;omXP`ckLP1VEfIJ}3H)^Z#t[ZM^JQ:X_3c4F*a5<Bj.c{t_L+r~ e' );
define( 'AUTH_SALT',        '/9eOWd5%t/<moRJ<R`m&^51Y>>m>/iL*<EE=IRumI^PzHd[]Sm3;kDh3S<Rue9cr' );
define( 'SECURE_AUTH_SALT', '.x)!MCowDF=5lM1IEyXb%~j6%icGeq,sD~Fe-Fgjp.h^#+z>a0@ 4JoO;XuCEfEO' );
define( 'LOGGED_IN_SALT',   '2LT+x^q*bjJ2+xUu+}08-:~+%YF-Qoa1gb}aLc;7P}$|csvU.G#unIx%.u^9Q)+*' );
define( 'NONCE_SALT',       '>^cqSoQ#t4DCJ4@zRS[,%O}RKu1an.osLNXY^hB~[H/EpqW[uG;T*IiQ9qWC~,9x' );
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
