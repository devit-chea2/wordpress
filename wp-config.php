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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '3w/>SVgkUE.JF| zk6v 2_x%!85:V|78PzT~4 RSZYui[_)O]n?u*Z)PLY:^pZ I');
define('SECURE_AUTH_KEY',  '1!s@SZPcLOp@r<oW 0,dWt]xp/t#vgu^)E)nl8EC!jO0#yjOP=;8Y3h/ F-<(Bk5');
define('LOGGED_IN_KEY',    '+fBBN;`pA+Zm]i1/OjCe5LL3|K_bTOTv&2U:uPoFO%s2CVei9TfJ/y7<J(@1$9y#');
define('NONCE_KEY',        'f5NezD9b1Gm`:x@WtO~]Q2-<dN4MIr@ -I3%[~[fq^`s_gHlADPwoPD?~kR1Of>l');
define('AUTH_SALT',        'C9ZFtQ>V6C!|sEb1n4^#7p(P`o[*Y5${ZRCmR,Oe07=}%Q~J==dRM]!hty=Ct6jc');
define('SECURE_AUTH_SALT', 'v2R),Gg7+!qOy>Mpp}Nft<x1_M2;mY!$V0c!kyCh$jn+FFH-JwPa+Zxqo[luA`F5');
define('LOGGED_IN_SALT',   'JY!6z?> `m ML,@^8<.lhFN@SOu107!8a{ >w7D)GGYe# AoHmsWR?u$*7LxmwG8');
define('NONCE_SALT',       'hk8GOUzgI#r7fe2jQ`V%01^/0uRr^7N#`>zvN0^);|x{ `#AkS:=s^d>Dk|R{BZJ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
