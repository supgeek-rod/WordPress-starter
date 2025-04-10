<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_dev' );

/** Database username */
define( 'DB_USER', 'mysql' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'V2#+C<XkoMg/^Jd`;hyJ^lg1uVa459HSIhPn:H&GMw{J)/G)VM]x/gIwI|B`1Ad/' );
define( 'SECURE_AUTH_KEY',  ' iP*CFCTUH,4lw3/:|`l`d_~h,^u/,EAlNbp~RU ;FT$(3.0&}gmQ9G%.VaFh?Qc' );
define( 'LOGGED_IN_KEY',    'g6aOfEV~:M7_=;C4pEmbr1JLUm|.[af*k9B=S8IOp@uu`JoFsA{l| pD~;[6brSp' );
define( 'NONCE_KEY',        'uirBCOZ?-YfC`dNxB85IH;1zS^qKVjXG_&>kat!@+)k%oR*Ojq8;| duNsY95pE+' );
define( 'AUTH_SALT',        'T/0V6d>^hK}^NJipZfcu}y%.8QgkZfW{5:FMP:HWNmTVS/3kz[KR$9V<+a![+Znv' );
define( 'SECURE_AUTH_SALT', 'LE[t3I11e?Km{^ImW]lxR`U?N3g2dzwY}]G/QANyAtm4Yn<a;tVVN|PCdo&BY1<W' );
define( 'LOGGED_IN_SALT',   '0Y%,#6GMOebhHFiiSX2/AkrErT6vdsu(F.[IZlJ[Je9FL{%s2kik/;NjNIS.vu*$' );
define( 'NONCE_SALT',       'e8`$39aU>78C&E=37{XZ}33NWCb}AJ?x0&0FRD^%gxtvD7Ot!>A@p%S|(:Qrt`53' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'FS_METHOD', 'direct' );

// Any domain
if (isset($_SERVER['HTTP_HOST'])) {
  define('WP_SITEURL', 'https://'. $_SERVER['HTTP_HOST']);
  define('WP_HOME', 'https://'. $_SERVER['HTTP_HOST']);
}

// define( 'WP_HTTP_BLOCK_EXTERNAL', true );
// define( 'WP_ACCESSIBLE_HOSTS', '*.wordpress.org,www.example.com' );



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

