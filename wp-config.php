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
define( 'DB_NAME', 'icy' );

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
define( 'AUTH_KEY',         'Y E%&s>>|AnLS15+[Ay[`xTq:5xWn*Y()MwpjI,fY()^GL0YlDk;(sD6R6m2fTOb' );
define( 'SECURE_AUTH_KEY',  'qrKVor9.VFq^p}Q/e}%hlpsbVf:f-Nz|r]/*`h>s>efHxI*3+@;ATcRy/FH%|E8*' );
define( 'LOGGED_IN_KEY',    '#AjiB=<*h(uE*74x^=b4n<n3;?U,=|[/o2k`f 4N1+?mX5,og]$H@8PxH<N=Vf8J' );
define( 'NONCE_KEY',        '%nJlc7r5;2Z:%X,x#2i8]_PSo*_!7.N^@WQ{pB$c0oTmyJ&.SlHAMgB*<}dD#gix' );
define( 'AUTH_SALT',        'dTkW2?`QaDAf:GX}aN<&yGZ|$Oc|. ndUs^;lSx0uI5XkFPd,Ww)2Nu6BN*~0|P!' );
define( 'SECURE_AUTH_SALT', 'QBk/EElaCY[n$,RzF7PMvKh!$A:$tFY.!FfIqH%()xW]yVYr4xN<U4-.`m7M@=ZC' );
define( 'LOGGED_IN_SALT',   'r&69wU>X5Ib^Sln1+sEh9fo[{zS.S>R./U=RW5AJ%bv+K<i{.EP4YgOv=<1m2<Y(' );
define( 'NONCE_SALT',       '*et<0@:^1Z ufFA@x 0du:oo6]b+0];nd-Z~DgrH5 3tH1.@HRdq,G3XaX8:%gtI' );

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
