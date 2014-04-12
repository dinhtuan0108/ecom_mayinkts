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
define('DB_NAME', 'ecom_mayinkts');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}U}!P*oacQqFA%ZI<:)VwiIPOUZH h2?RmdWeG}tC}*9<!v-_hg<.q?x@35P8o|U');
define('SECURE_AUTH_KEY',  '>c,1}pf]f:7ksTuhuIMUUwvzRpC?3Xw &w-VqA9wQ0CH>1sXr+Yhw}|E5Cn-czSL');
define('LOGGED_IN_KEY',    '{EyT*gRQz,),poFbuVai5%zL1M.K+;DXX6WU3-pZP~-1puIm|6 {^VV|ltXwql&m');
define('NONCE_KEY',        'f@D!APL;IxDfd FLH|PF74wpX^Kc%[6(lPPl)wHs2:kZQiyM`XP$Qro{HJfvBe@;');
define('AUTH_SALT',        ' T|urg@u|F+26Y~]`LT{bZ_p>=D$X0%?HL>>L!`kF8UPisn%]UO!Q`1Xcf[(m/{(');
define('SECURE_AUTH_SALT', 'Dx|Ay6z@XNHk$+t(w6Cg$/9|uo8L64-C]F9Rxl70-MH.otonda +t^0Tzt0[:sF<');
define('LOGGED_IN_SALT',   '#$u.]6]mS,qL].l$rr<m<od{IPm#,!1f+4c7kpVdE=3b[~TUD.w>S5P_UAf_}{mb');
define('NONCE_SALT',       '6S,SF!C4O!md||%B._ZN9*$Q&pWw8{x2):x(%][zAUk|i8Z7K&yS;qXTS4 #-[]?');

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
