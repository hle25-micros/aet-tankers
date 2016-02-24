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
define('AUTH_KEY',         '7r-|>Cz;vJ,JIh@w<-:{QPxin-m1f-Dr`KScT7^0k/>`TK:0{zV=oLc1D@mDnsc[');
define('SECURE_AUTH_KEY',  'JEUVt6J~eMAtv;}7(]Qa!Y 9b83rs8 )GA_>MXMzCF^O1JKLT.W7,G=D$%^:+.u}');
define('LOGGED_IN_KEY',    '=2p) =-+zVUUdTiX;X6]$DiX:g#8I&y)C_2Qy@7I3KjPYGEaXNN`y4mI9q7A+w`t');
define('NONCE_KEY',        '09K+[C{|6_G9@Cti_3qQPM?T3j=g>OGoF(@:dpP-q:v&SP[xc5[sf9<->[J4aG: ');
define('AUTH_SALT',        'TeBGEvt}pEc4qOz]Y^s`K3H&vc|_wc,s}MaTWW4Jn`C-T1el}xg|gISd=l>81;Y7');
define('SECURE_AUTH_SALT', '<-52|Doa12nyTV+M5u~o!g%QrZ#q;[~J7{(c5P|(LJ)AZ|AI]bRZHZO#E( =Y()]');
define('LOGGED_IN_SALT',   ',<;Ymv;4AbD83-,ZaZ8Tq#s8(|B(iK|oDhjxm#|b+Bh1Mr0^)Wa7wt:-DjH+HIjb');
define('NONCE_SALT',       '5S[)OjWqrl,pYz$NW2R9Ry+78&{E.jQGZ<;m ZbYGOLt.gxWd+V*dXWunu[x6~Db');

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
