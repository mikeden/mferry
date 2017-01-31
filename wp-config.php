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
define('DB_NAME', 'mferry');

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
define('AUTH_KEY',         ',{}It{2[gV<u+%!WAI6Dv(9~FG6}+*o_hvq>DQG;vmu~{ x4!UWEN5Ubk?LAsE>J');
define('SECURE_AUTH_KEY',  'nvg?nFH5Q) 3EG&^}iv!u_wq1mB#9c:{wS@/sjOPKBT$@M>{EkWL*:CJKWfv8=5r');
define('LOGGED_IN_KEY',    'v)`_MF/D&GTQpV7m^,wI 3Ubk1>]`m%5{G{O[HE!wQw)&-xT&N&%{_#<%tsygv0<');
define('NONCE_KEY',        'Yh)mgvXO)S/AloJsU=nqsTXp8qLQ@:=%285T5ys9B8E03uO=^_Jfm$s6}hM)W683');
define('AUTH_SALT',        'L3a2L-AE=7*kR4MsmAct)|ew|:tL?n[zz&8S8[GppS)36R=2bwI@tq<rhNVk{%&0');
define('SECURE_AUTH_SALT', '@%Y/Fzpo]gYft$9-[5/N8qa)3JlCorQ.hwqr29Z0K3& Q8+GzyR:DX0-u6{rE*-t');
define('LOGGED_IN_SALT',   '+pi9ASW8.9SeZ^F>iL_dQ9}Ly(JK[GNR2]:Plud4sN&pok9p77]{C9|0S=B9H6XG');
define('NONCE_SALT',       '[w]@_NJwX;CHPud+TK<*vb0<!W4j~3lG_TQis>UZ<vJ=ao;ok+~ry^QdZUp]ijm=');

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
