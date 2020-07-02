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
define( 'DB_NAME', 'primero21' );

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

define('FS_METHOD','direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9Y:H2CC<UX5qnQgk[fmVC3gAb*&UThDIPG(b82=p>ANLJX<}x;m^#,K@KxGhXnhJ' );
define( 'SECURE_AUTH_KEY',  '!v]`BU$C.txZRd #x(Y3Apm8Z>zfM/EgbJ7k-2_-2DIZ,iQH*<jcv/%:j2N+>IkQ' );
define( 'LOGGED_IN_KEY',    'x&ClR(zLu9~f(|]6A31L]s%t&?M {G>&BE>1e[m#`2kNxqd`]gJ8:6:Ys)6eC@s&' );
define( 'NONCE_KEY',        ' ON4[)q-[$!H{k`#s* CLF#7]K1*t,^O!h0M$oRk%aE|8Y0m<B%r{Czu|V[^HOcG' );
define( 'AUTH_SALT',        '>5-POY`3>O{IVBM>!NaX7A/I3|0d00e{Rz$;K]22CwFB1KH+{Y0f>7+RD,`ma8>1' );
define( 'SECURE_AUTH_SALT', 'oRN +:j8ST{sf ,XcJJ$@?@W4C]4|udU<f^m>j4)Z,V^l_9+cdv3yR>rbUX+IWwn' );
define( 'LOGGED_IN_SALT',   'm,^B@O@fp7N%0&PvD&I`J42cbO#tOHJc&D>+POy3Z*Uzl-%aNumekXi/Uc4a6S9x' );
define( 'NONCE_SALT',       'hYoO?<1T;:}EZ*iWb}rU)&/3 $}I#9 uE.p|b}u0A~yM8pVXHaA!e~g;+%K<MsX9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'p21_';

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
