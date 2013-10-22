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

/*
'name' => 'hoatuoih_hoadooto',
        'user' => 'hoatuoih',
        'pass' => 't2Q9gFg3lVIC',
		*/
define('DB_NAME', 'hoatuoih_hoadooto');

/** MySQL database username */
define('DB_USER', 'hoatuoih');

/** MySQL database password */
define('DB_PASSWORD', 't2Q9gFg3lVIC');

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
define('AUTH_KEY',         '}R;*b6pAg zU{pdY-Y(pb1:V3U%=nVz1eD2eOmC,:3lD7Dy9%+D[b)t4zEJG]1>5');
define('SECURE_AUTH_KEY',  '/}f^vGjYIzYih*!@ZakhYGJ`/^>/T6]+c-K7|qQ@J4B?^LQ`w^jXpn;jF#M21xAj');
define('LOGGED_IN_KEY',    'CwXU9)_mJ}?VSLi#2D[=3U1)q:UFZ#[P+=.oEqr]`OkKTP?meqTpy8739kVe.qLB');
define('NONCE_KEY',        'E0Zj%)~G(qcpf%w4/vshtN]{,@GgwzOJ/_g6z^T.G-Ctey1c&:+j-S:I.hN>:*$t');
define('AUTH_SALT',        'e:A.^~icA4z-5N^Spo16Xvdx?da@*e^Q09`T*;0ms^7DBHMlxj!YH`tzOmz @7C)');
define('SECURE_AUTH_SALT', '8^9f0MX>Ph-t_Cjsq[C7;Goyt*JQY-RUdw<A&4]l^0Z.!*7)z|!sO-|[u3j?3y9e');
define('LOGGED_IN_SALT',   'm9Jtr]36r0I%~.c]6{+}lt1LR+)DA+;6Z/TU<u/c/1)#PpH-f_u)dV52g {eZd=c');
define('NONCE_SALT',       'KqTU>u1s`O-pt*}}Vb46-g-/Py+m*NOmmch_}i-0i2-ZBzH^Ek*-aaquL6;i8hUd');

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
define('WPLANG', 'vi');

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
