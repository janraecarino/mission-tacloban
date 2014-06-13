<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'missiontacdb');

/** MySQL database username */
define('DB_USER', 'missiontacdb');

/** MySQL database password */
define('DB_PASSWORD', 'Tacloban2014');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'fiuT~;=5ND~`R8>T*~!:] +ofq#v wphne(+7aDXUDR^),#ii1~qnv_`qRKu;4A3');
define('SECURE_AUTH_KEY',  'Au2VHSG?w#eo:C$~UZcVJjFX-UOeTv6FjleYy]tSI#YHn?}6&Z,ys_vQot(R*zoC');
define('LOGGED_IN_KEY',    '[E2PvwRCB(4u$ot}IVir,dWkMQ^$pN!@i9g(rHV0ahPv l.k/qr:O7 9Go_a/`3V');
define('NONCE_KEY',        'e+~|dfd@vpy;{xO%gub%E!IN/KFEJor?yND`O5t{[>lY;MGG!!4x=&ZLv)dScQ#s');
define('AUTH_SALT',        'PFS9[#0w6?+(ypV.fww|v:rQAH06S@T9?[nra`Y~6xu}P4e@#_X1;r/D7WH&HgVy');
define('SECURE_AUTH_SALT', '2-n0?_>PYA (DgEeX+<}6jD+)eM=vKtM>+O=nh4+58]u!yv)0wbg3uST0LM8%7l*');
define('LOGGED_IN_SALT',   '7&A`u!<E]e[=ZSI&5e{McN:ksNscJ<#$bZ8$q]i,`]0=qCT8{t<U3kqCmXu>A=|;');
define('NONCE_SALT',       'S3h%L5.>5#=5i078Mf(d-6i<60/Y=$<-vc5:CX6E0ace2?kX2;~9$!v4V];w&j%H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
