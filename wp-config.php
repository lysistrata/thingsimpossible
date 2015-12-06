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
define('DB_NAME', 'thingsimpossible');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '[<,kG,&XWn4VWqJ7gdt2dM]h+E(CGmM))#@s~q$v55(A_I7o56/t++QO*UdR<rpX');
define('SECURE_AUTH_KEY',  'b^MgUWtn3GpBP+GiIzZ.on(Uh8-p0$lrU2g0mxpnb`|2prE!K/K*+tgXHNSTXHyt');
define('LOGGED_IN_KEY',    'EAE)jy?H|d^@{qA?kwDGRB],*joXT,+Xyr%0b jBDKYi2_65`/p,&2Ut5}-gqK4]');
define('NONCE_KEY',        '``oQBvbpXpSCKk+A*1Seo]h4~O[=>$XC}!zM [)-unt*<dq65V 9i|.z<-STbLQr');
define('AUTH_SALT',        'x2L_V{!Ge+2aJaF-67*`<r|}lE*u,u/)(<]cITQUyiY-IHw5_!bdzSWgY>zeHzg&');
define('SECURE_AUTH_SALT', 'D/)Q?{UNJ+k|yrc!@ZEk9WOV[`nfj7@;(y~+IFagN_%@>2]0y/-+!md^rPi=zzoy');
define('LOGGED_IN_SALT',   'iGUJFz}/`u2sQ`l~#C-Wr6Qr!@Rsn~x?i&0W1P7>}xsh+8F&D0Y*&eG1~.#a6D{u');
define('NONCE_SALT',       'T]%vGA[e+dBWL!4?d>Yu/RyhfXK@Xb$$fK|4UX3`||9v > ^HvFyVJ|sK!|K|khy');

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
