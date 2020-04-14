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
define( 'AUTH_KEY',         'ot]k{R&sG&Z2g7Z+,(SUK=^HQZPm<1PlAj]9iP![.Bj 94Xtr~6jEw(`d5cf,p3@' );
define( 'SECURE_AUTH_KEY',  'CDDEZIDggkU->=aq2K/+tG*1h+:%`]iLWp`&!o1th/TQ@0uD}rGMf#]BS%*Q]|o.' );
define( 'LOGGED_IN_KEY',    'a5$]VR9_FjIEV}xDf12Wm>vR@*ieD5~64(ReNW*;j#|b&rDPZSN*~J4$.HcHn1x(' );
define( 'NONCE_KEY',        '.H))UHs8HvmEB]:1dg?.7[cKo(y:g|Yfge IY/=@$%&Dh@rN5T{+&_K!sKSHXG>o' );
define( 'AUTH_SALT',        '&l?FWpCB77/)`rZ>=oGdqutVZ*>yTLdFdGO`>xAtnH].1CxCa4z{9B8y^:m17Wu5' );
define( 'SECURE_AUTH_SALT', 'wHS`*`41A4sw[+GQw>B9<NHDv), )tKmFB!]8{`pCmLSXn{8xY$.y8HC+6Y=H$HA' );
define( 'LOGGED_IN_SALT',   'WaIAywe/:5+xb,-6v[C$WqHtgSa~C)qEw-oc!^7w+4F&XwR(:2+RgBC6nTrdyK/%' );
define( 'NONCE_SALT',       '5oj@O~3H^;EmD1!KsPWWM72fdcQE;FS/%BWhw1m;bvaG7tq7+c]:Tq 5]x`,=4<Z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_plugin';

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
