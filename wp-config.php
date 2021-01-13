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
define( 'DB_NAME', 'wpcontactform' );

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
define( 'AUTH_KEY',         '_/n4l!JB1JqeY+a0HVE7c+H-lsg&bpaaePN5f#AHQSWk+*EuK#7:4A#NKxi8WP4i' );
define( 'SECURE_AUTH_KEY',  'WV]0N)Q>sg?I3M1VO)O]Ov}|KV#heCDUcm6K}7{`hP^d4mrnhVYou$Qa%yY]Fcw~' );
define( 'LOGGED_IN_KEY',    'wW,F& NcVMAY{;^DpWNVZZ| Y#Ov9{(B&XuDcIOZH?Y6S-`B@DnaCj5&GtHk-;c@' );
define( 'NONCE_KEY',        'UnagyyfT2F):v0Qt*` XTb3,rordc=1+_s/d$kfLMZ>/?sZ:7^[@Z};5dy,$akDE' );
define( 'AUTH_SALT',        ')HMA4*o2t63Fipno!i,n[CK`N{D&dnSJp# <yEnS`Od!.i +{x*n3wN#Nt/sCKn.' );
define( 'SECURE_AUTH_SALT', '|-QbTYj+H ip7l$A9U*^|XSPm<%ev^<3;~{qH#bd6w2Gr-u2ndVI3p&y7povx&W4' );
define( 'LOGGED_IN_SALT',   'x}wf)a.#o]{0bJ!NZ7|Cs/KO:,0W4g#kB}X74]p%1TdGfa2&2 Z;fV}cm6(yAP~@' );
define( 'NONCE_SALT',       '}7&2C05BQC#&s[.D!,RPv~AD+W@Ux-Xpq~83#)~;Grr66}q-oqyo@r06nyfq-N01' );

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
