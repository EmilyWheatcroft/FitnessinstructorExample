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
define('DB_NAME', 'client_website');

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
define('AUTH_KEY',         '|Q7i4N$Z yzS:j^9~NLS@HVwV0ot:JA!G(7o9S22qr>Nq.)AdUm/:P+n.5z_.(v=');
define('SECURE_AUTH_KEY',  '@;]Iii@#.POf}O={0=EgZ|fIhQ55qAB 3!d{j+?TK)4ahbz@V$vzl:HHT2w=ti(F');
define('LOGGED_IN_KEY',    '5<f.3=M<zDqUh!2C/1?9cHBi-+.q-vgZRc+g7?*kQm5v)`d7)LDtg2K.moR3fz;M');
define('NONCE_KEY',        'n?b@^zAT}jH; ZVs#i@e])42yn}~=rImOTa=qkN^lS9dSo*jitGIkZ0+q.<%@oz3');
define('AUTH_SALT',        'wgPk{a%/LRZ+J4%[[#+kz1,Z<Kue#|EMAp2(-Dq|vR&Z=k0A;N:$+zvO0WRq~>d?');
define('SECURE_AUTH_SALT', 'q,c`z8;^JC?,PLE%tNpDfOLRk6[9Z9[>~D_n+F3IA4J$Z1s%`mq.tpqV7IL>9x>n');
define('LOGGED_IN_SALT',   'Oi00M9gv>O^^t7fSz8wR!c08Rm8[8%60Uha&W6>`TOC*1~y!{x]cUvB)*Yu]B0W!');
define('NONCE_SALT',       'WiGr,y,3jwGKD<acYbwHsyME~S+.sl46;N4um[Rh34ZkyKgAax9n3!M8}e-3BBs:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fiwp_';

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
