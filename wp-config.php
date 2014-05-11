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
define('DB_NAME', 'wp_levelup');

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
define('AUTH_KEY',         'YZN36Ga91:pRSG b%}K3sZO$:!cC4R+`Z=$/i<tmy[T!u-t<@+]U#~6G)~Evj,t{');
define('SECURE_AUTH_KEY',  'NNzoOT<61!HXc!EK6sqv_32Et!6HK{h|HGb_]?{|o;b7{cp4drjlXy@D0]c<O=L_');
define('LOGGED_IN_KEY',    'n:%d=`H+a15_4b@*KR!E&qJ. $G2:OBVlW*[u/6O3u{r9+l,F%6agd584jO$SNoJ');
define('NONCE_KEY',        '[|^z$x%m&<Rn?>R7J3.0*T$na<xO&%bd`%Q#4<Y@]Ely?Lwf0l?a+(srORVh?`V0');
define('AUTH_SALT',        'am<_}sRz_&w!dwwoQ^f+[i!:4B$?-9zkKf+J,v4dc6Z{bT+m_!|lfM%d/cee!Dm5');
define('SECURE_AUTH_SALT', 'N:V~7r&P#RXl)8ZM)U s)0)&p~O+J&GtT8rQ.3c[Y<{@qi`LO! mX5Tc  xEUemK');
define('LOGGED_IN_SALT',   '+o7fu6m$GO!NBC=J43HK52lU.FJ0iAW8@{fNa<y_iIp>pYD7vwqWA_Uq+~>8fnZu');
define('NONCE_SALT',       'pJXP}JW{ZES`Zt^z(@w~4|y7Xb)@lWYA3#vaI9M#.-^(]-1F&Dk4X9Q)TOWDp;OH');

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
