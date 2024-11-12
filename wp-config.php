<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '3f bk0NySM4mZ-%FR@->opfR^ToO~+D*vU;G(n.dR7?2^.I~zX.%J^c m ;MT:jV' );
define( 'SECURE_AUTH_KEY',   'Dvi z0rnq`LRj{];#YtZpy7@Uz=8i1S/0zwexw1FQV`{$PUWHDjR!l] #a=?}{pb' );
define( 'LOGGED_IN_KEY',     '=5eG0fXhxZO|&h2&Q%F <ok4GQ.)1ID59>nH@bf.D!m^&,d,H,%}.(&=ct`lsY/g' );
define( 'NONCE_KEY',         'IbXSjh5b-NptF?OG*azA{W$h`tKhFL!-p/seWaIu_ty7(qi8W~yED(BPdno*trr+' );
define( 'AUTH_SALT',         'QU.mHamSsN{!h}s$c&[.2TTpreKK?hvyr!-=2.Mp=}*_+-_}[&s8akN04J^]m45q' );
define( 'SECURE_AUTH_SALT',  'dGYp%@[a71Km1)C7Ic*5GA}G jkOgm~zBYyo{=zR*MvVi5saamDbrLT-9v~N8WW#' );
define( 'LOGGED_IN_SALT',    'o2[s,@mH-3AkG0?MCA63:ceAB$06}?K<sTgreQ`C8%zLwRVUF0uW%)4X@P+x#BgN' );
define( 'NONCE_SALT',        'MJBDuF6$_9*[LF+{)fEvZ|.OPTC9M_t#ObEMr&_!^f[aN}t>lK`n2|XD5YBs[{OX' );
define( 'WP_CACHE_KEY_SALT', '/rQi|rd4LmhrCGZA6q-TWIz]Ji|S9JG<TwhIB*WeooQECP>-wV/>yDdS63dC@olv' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
