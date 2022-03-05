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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iplfree_db' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         '6;]B>QVsmhH^rf9|8)>v#Z^XQ TDk>D#q;O*o`dqQ]2Q&nDJuK>?EvOSmo8E7?oH' );
define( 'SECURE_AUTH_KEY',  'RfAblyvr J?-[3liAbt20^M~z$4*b?o{K}P&nfbs0-.}DiUMUF)!euGQc_@Q9VI?' );
define( 'LOGGED_IN_KEY',    'V<QQ235dIn-vUmE5Lo)[RFB~},-IxP}{i2{Wi1ZM`!8}Vw9g,QDm7hx1L{O2&LWD' );
define( 'NONCE_KEY',        'Jtm/ y$lnUt $KU[@i&E7RzBft ^X*x>(.giiW/P<&zT)* ~j_n==jWGu%EYs=R3' );
define( 'AUTH_SALT',        'NmNZh[f8/rN!_TwSXO&BN7IZIz9_CLh,[|K?xE9XL<E7KH*usCWY9Ba5iOpnp},|' );
define( 'SECURE_AUTH_SALT', 'mmOrtX2;nQ->jcL!U5q!M~G#Gp4H(:f0e{*LOv7a=4XBtyY:gY&,#_5#qwL^n/e0' );
define( 'LOGGED_IN_SALT',   '}XK[jvl;X1VN}BqYv=rok}ZMy&t)tzw.yaTaJ#`bN;IB!mK9E@)8ga_NYf^LhTUV' );
define( 'NONCE_SALT',       'Z2T4<LlM+:~wp}y]f6Y2<%-.z@[43lQ%PM(2C=Q|XhKJkZFB]8L2C*>/U3v@pM?~' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
