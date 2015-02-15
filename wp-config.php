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
define('DB_NAME', 'raykyri_acm');

/** MySQL database username */
define('DB_USER', 'raykyri_acm');

/** MySQL database password */
define('DB_PASSWORD', 'MBcAGhp33fy');

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
define('AUTH_KEY',         '88hs*|&2f]&I.l]GeS[#-RMYEF(ew7/vRHDqMNp1wFbeJN(qdif$-AS=s*fWMLm-');
define('SECURE_AUTH_KEY',  'Z3xk[{IXhvhZ7K0<~|%<JDEuz|]A t</c,:O+{0<%jb5~mwFBKs%PB*[%g-m_~f/');
define('LOGGED_IN_KEY',    '3jPckxM}@P.*dYZ-|e`no$|2is-CS0+tAE7l2GF+n*W1({4&|RBKe6*_]Y>I!D&|');
define('NONCE_KEY',        '){I0iqKXp|s>Tg3I*(>4oICI%&_-0I+h>83a~Y*i `1Z.+Fk*TctshSCI;)2==Hb');
define('AUTH_SALT',        'NR+)VbqCfp9+U7SIS[pW{djoPQvqBV4J#I,IWC/w5;6G=4d5x=byDw7FENs&W|B!');
define('SECURE_AUTH_SALT', 'jZ<y(|Bl,_9a@2{y_2&b0HKd|)MY{7J&ecI]S^MsXn+Q5THy|/*+i| ;/(su_kMw');
define('LOGGED_IN_SALT',   'l0rm>z/NP%vG>NEbyX447m>/wIOc<-78P5=@Y3C(jYSE28JIxhB)Ry/d/3-_mA>c');
define('NONCE_SALT',       'QYQhIUj.`?|b;85]h Vk[`--NWCzVv+e119::p+([Ie0w._Z`0 v< Um-Wwi?h/h');

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
