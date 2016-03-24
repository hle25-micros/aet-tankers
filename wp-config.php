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
define('DB_NAME', 'aet-tankers_db');

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
define('AUTH_KEY',         'p}C|x3a:65DCX;-19r?0}|#Hk)bO|=s6Qsm.vKmnWFMDwtf*I!?iI:Ir1X$29`K?');
define('SECURE_AUTH_KEY',  '}I58U,x%mo`Rw=>@QLgZ>zeF;9SGBzbyue>O2-qV.=gum6%~mK0LdBbr(g_%V~hN');
define('LOGGED_IN_KEY',    'D0}!Dxfh9^G8/qRCIFHDWgYiR2e~NO@Nc!@3PxAaFvZ5}W,^SL(Usz5KXFEa3Hb[');
define('NONCE_KEY',        'B+Yxpk:=0P8Rn6ammkb-7x,+Q;1mh3IT%Wv9vUPjVRJr,XF~zf)]RF,j2h/P|(m ');
define('AUTH_SALT',        'WMMa|[|~qsgNpjg3~`;CQn(WYpvD|}78p!#rfB]Us|<y5>g0id`jQQWo*Wf-/&=f');
define('SECURE_AUTH_SALT', '`@9`a@@2OEtXSOURWnNS GQgC-B-3<>5BQIr6|7a US&b6#tk5pO2Go/}_U(Q;^U');
define('LOGGED_IN_SALT',   'j4n[LAU-xP*|hY6gyBiTCXyY1S+$$lA,Zc6SLC~Pi?yK$/rfi(~v[rR<Sc5vrH{y');
define('NONCE_SALT',       '9_J@BX^z%4/~+9;C{>P 8wx*k@>qi#~s<@py+3yasC!O>I~Z$vXdF2bm:Y1SPKeV');

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
