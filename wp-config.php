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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpresss' );

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
define( 'AUTH_KEY',         'OC(L]A&-Q&{](XrXkB5AYDy:n}~?N@ZZo sr:a., (Mim[**X)W&s#~!RQ+eH!;k' );
define( 'SECURE_AUTH_KEY',  'hKoeri97,}qn<dMj`L:mUKe&[c_zWfV5QF#;7^[H! cq|JuQKF>A4x`)R(kbYu)s' );
define( 'LOGGED_IN_KEY',    '`tzgLoj!pYj@{qE209Xw3KpO5F#so)1#_~?ADpp`-W[Qw+zL,CwUg{e3a6TV2k~o' );
define( 'NONCE_KEY',        '[Xz9zKG/Q6B,#( j4Q1@+j=#IYW1%Q0BRlsZxcxAjqsGc4bTKN#UJte)mLZH.mnT' );
define( 'AUTH_SALT',        'n895CdlQ#||tJ&nW!SDe UI<=&{V@KKv;YoJ5mAr}=8H(^x/]!~o=ntXS 9n^zv?' );
define( 'SECURE_AUTH_SALT', 'N.veuc#Z6j21=BM?AlNUCK/KfVCNg FeYa/p +ny x,UwA&o,jjb&<bKDQfJ-!}g' );
define( 'LOGGED_IN_SALT',   '#`2XTpXXuk^izMcphmVLXX/EY8{=m%%1mHW,wH^ #`al}A7v~$xM`n2`]u}<&9Oi' );
define( 'NONCE_SALT',       '_0)JiodIH2$d%tpie9L4YNFAyPC/CY0  7Q@taK`r,nU+}{UCkqN-F*HZ9`/Be>l' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
