<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'acces' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '-@GvBF,-z=BTss(6RZ?%Y>-hIH$*_-!NJ@ZUvY|T+dsv,&YE6;%a#R.(A[?F#V<k' );
define( 'SECURE_AUTH_KEY',  'G6I-(nS@}2!MQ8$U9l+MeD|20r{S]=&4eIjqoe^m{rkaydWH!ou9$}fVV4l)MXv0' );
define( 'LOGGED_IN_KEY',    'wGEVa#sboXA_=H{QxiaY$.d)=s>bk?N{^E2)6@syX#co_+C1eq]!:s9)~4t2Mgz.' );
define( 'NONCE_KEY',        '/&{rl%on&=^6)I3$~7Dpq:G%h!HUZ:c$-6y7Z8PazUuH=/;L6:_-2s!Kkk#toqD>' );
define( 'AUTH_SALT',        'a~e9szYVJA7J}QWFQ{IJ$^S9UbtQDA~%Z;*r~XapKKbc@pVPWNDkW4N?3J){ <cd' );
define( 'SECURE_AUTH_SALT', '8Wle7&3*:PLl#0,${}F@jj:U?[NB*m-^qfDqN2clpzBd.R]h(PE$|;&.$IhP<m!I' );
define( 'LOGGED_IN_SALT',   '/5f.^])7?Y3IPa]V,4R)VYB`_;blWl#$cCFo4{UO>2[:[qO{=Ciz?^Lr+r3.%qpq' );
define( 'NONCE_SALT',       'Y)Cx1DA_~;A$:>i%0knakymm}^Cg+ylyJ3&?%#sbk31}ADF5:cBH5)F5nX =^o`|' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
