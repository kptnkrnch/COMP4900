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
define('DB_NAME', 'a3542399_project');

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
define('AUTH_KEY',         'Y74.gAetK>PaCz`|8+T|z:%]LQS^[YZ-MWa t-&-Z1e$WUsMHiCJHhGQea{A;vs[');
define('SECURE_AUTH_KEY',  'M2enIIC){D#x^{?TURIFjplJ5MXT) @.jikW$^ZWV&|L+HJpVl#q</Z?C#@8<xBH');
define('LOGGED_IN_KEY',    'QI<a@_W!bV1!fexGD(%yu$_8i{_M`-4`A|f a7Y$f80Rpne;zTo[fl#Ae<SB8+C(');
define('NONCE_KEY',        'KE~YY+8cJL35m8.fd0U:oKM/<mSAjd=m9&|&g{7`B@7b9C%gm+Q2P)gP%;|H6l O');
define('AUTH_SALT',        ',NI&mM$f(;3Sl+$pikF:A)j^_fn1,2c&fS~}6hlG(+L8*fhJlVS9{~;j)8hC|v_c');
define('SECURE_AUTH_SALT', '9zIVsa3|~7Wgt(?(-]*pUA4z>7u%x gP0f2d;?( P6+W09JPiji)h{UT$Je(|;9w');
define('LOGGED_IN_SALT',   'a/KXX+|XUf|r--e+d^ flJ:dHP!{IJoX}qAu*>a9T<7-$ |<vIK>[72=$R#Vwvw[');
define('NONCE_SALT',       '3kMJ9d]84#6)B^+Ot.|w#d?,WE[+|,i2ZsCCJbFz-4%3:Eiy(ouQmaL;|]9HT0qy');

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
