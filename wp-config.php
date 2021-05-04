<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?hBBQ%zC0m:5$$aBt(Dg8ho)9?s]+1LT3S4aGux%|)L~-~r$_&Cn$IMPV@1>0p_Y' );
define( 'SECURE_AUTH_KEY',  'Z..I/zXE8LRsi7isSV/;V3@7^T75F/dFnnS*]V,Yn(#?Tnd|lNa}om 9QHB9uKiZ' );
define( 'LOGGED_IN_KEY',    'zfv~)3<(aMUF7)  BZ1=a{*[ 7gH>CV0v[dFwxTnhA>+qZ.aLQH9kQ29]SnV3qr+' );
define( 'NONCE_KEY',        'vi2@0O>;39&CcS}:A3RbHpdKj)tM2Ql*4aUgRiEdU,3[*{#I|p2O.[dOxVbFVRvQ' );
define( 'AUTH_SALT',        'z_:;*il*?+OyZ#9$&pqTw5r4[</pP.F-_BXW mpuoiQ1Cbr2=u19|5f2_|@-^d$c' );
define( 'SECURE_AUTH_SALT', '5,Y~19T4=iWSJLRR2T4[M-3poF5.}7YWfM` 8Rh1;`Fod`Oyx=TmlZyCBE_8t8~j' );
define( 'LOGGED_IN_SALT',   '__bQ]3-1([0HKJsX8Z}RSdACE^TXZih+LHxiqzWpS&^j9;@2(p)DB64r6#@D%=1f' );
define( 'NONCE_SALT',       'X0?`Oc4uB?DkHP[~jD.Sl#^=OWP4nR>j~qy2%q824g#%8@Zhl95G=iSeO@plOlpl' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
