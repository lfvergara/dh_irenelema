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
define( 'DB_NAME', 'dhirenelema' );

/** Database username */
define( 'DB_USER', 'Naboo' );

/** Database password */
define( 'DB_PASSWORD', 'Chuwy$1630' );

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
define( 'AUTH_KEY',         'E|rX4}oabVRP v<vClBJpdlS?u!X_#d55B#<Sq>YfN#P2{F>yDFFb/c{92vH$#2u' );
define( 'SECURE_AUTH_KEY',  'kcQ__} &[xD3CTtF=lbTfn];6#}8b6pdCCCI,l%@>JyN4A8Ux2Z9@~ya]MJ=:^^S' );
define( 'LOGGED_IN_KEY',    '*4C=hV;Xc*w5;Q&DE6`=]=vc&|M~g)-UAAWY1&D)[ZSinkv/uGy{t_|Y&o}%p{A/' );
define( 'NONCE_KEY',        'NXIph#j,eUS,TftF#c-6U:O]E74]}(?&-Q&`?wa<x:R~O43nkt9]oCSr2m.`n}.a' );
define( 'AUTH_SALT',        'y.sSpuyjcWqaqU`ft:M1UImFIv:aW-K[DjQoy%C72dB]@:gS=7_uUP O2n6*A60*' );
define( 'SECURE_AUTH_SALT', 'XPm|9R5yMn%-B&(t#pKUbA${Shav-7:t$/7> z31kQw{Jk7-IfH-?:/~5nC3aQo+' );
define( 'LOGGED_IN_SALT',   '7,O26T1D(Nrfstlax;Nvo&Dht%1<K6kyA2<OsWG+g[G3 9)C$i+cwAtho,Q?q0L~' );
define( 'NONCE_SALT',       'br:w5FJiY~mJGAQh3%hoUKr+<qzi)FJ?aHU;21h6<5-qn8wb:kHA*?%t?7fi{_:?' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpil_';

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
