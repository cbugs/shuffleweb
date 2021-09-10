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
define( 'DB_NAME', 'shuffleweb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'mx`s/s#.!/Uh<afn=t{V6icr#4qUK?)f];lm}%6$^xP`xOSfW%Y}|Lu-9j!-W&Fk' );
define( 'SECURE_AUTH_KEY',  'QynDf%kzf?WW+zI&bhI/$D>BkWjP30;5Ve-y%@:g=|V%x %JR~;MK+p]H R_2T^:' );
define( 'LOGGED_IN_KEY',    ']^P,mV_}K=c^%# 8eY?LR|1N?Z/bg4VMr5(7Dxz;k>t|p%X0g*|C?</)wq&.q>Av' );
define( 'NONCE_KEY',        '17HP^}l+;2q`md{n_5N>w{f#@}^n;2m)zR[P)1j!Zn 4,//pq9MziO)*99}*dx3B' );
define( 'AUTH_SALT',        'uiv]T{1HBmM*[z&l0w]&l`kr>4ZWq-k>777J66>0VT7&.zga0QzN]o|Gs7LEyINT' );
define( 'SECURE_AUTH_SALT', '|JKOaH~ev<wxnd-JLqZ&Pi|M8 pj-|C{e*mR)MGpeS18*:A}5,-WsAoEL^|{?e^T' );
define( 'LOGGED_IN_SALT',   '_@E=;v(1QNc%r57%/{l^AS{UHs1%f+2s`]J[8E#Zqp;5pk_nyxM{$-D[Is_;d6O0' );
define( 'NONCE_SALT',       ']A/5GG*W#-8vC6>JVC~l!)A.q`,JEtOW^c8m(B^JdJ;;n0~t/iEyXOlr4Ae]])Kg' );

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
