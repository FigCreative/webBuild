<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'domain');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '~ui-^]wFuH=q9xlXp1Kn(N2x}+2<aMV@W_i{T,Nz2K+M|j_=|/DzK9]0ts;Egs/+');
define('SECURE_AUTH_KEY',  '!iR:j1h8p }vOlPj}s[|5A@EIb|,.GFc2Y_I-%+0RAN9A>-vU A|uI-eFC)MU;+2');
define('LOGGED_IN_KEY',    '2m_GaDIn2P)sA?<2+>a};@R@LD1t_^*}e6?1jKr?|t7.OvO=mx#vKe):t9U$3)X=');
define('NONCE_KEY',        ':z(1IBKcY|yp-K+G_P3*d&<0|AwOH]&SK(cK:_A-|aKNObgiE1#F|oe+M)+M~BCj');
define('AUTH_SALT',        '-J9zwi7m/H=CV2h_o_E-X`nV^<@2[C.x{{!5`?[hTcB_8/j+)nlD.%2F4K)VRtSg');
define('SECURE_AUTH_SALT', ',-])BqcC.pW=ge4UmgZR6}DD(?3 2ONVI+*V.@up|}-^laTFP_ fA-1y6ASe`FS~');
define('LOGGED_IN_SALT',   '+64xH952)+>bvAqn|;[ !6<5*OJGYS<5N,$A~@#cU213ll55hv}k~9D.#j{g_3H3');
define('NONCE_SALT',       '<z[:Sa-7Kp,_>[HR-n0g3&PM&(~p*+|/{R/O?Zl;u5(e+NmfSPxzsznW:mS`car}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
define("LOCALHOST", true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
