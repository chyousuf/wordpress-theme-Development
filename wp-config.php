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
define('DB_NAME', 'market');

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
define('AUTH_KEY',         'W6-) J@T_;Z~9Dg0LzEk5T7-]Te!2jlr%D]ku.3lupOAI^%9@nfk+!Qbg7u~lAiW');
define('SECURE_AUTH_KEY',  'F[oSj3>PG=~#&8Y7dupcWti1[!Rv>6;y(|/`9P5L/G>;<[d<GJ;Jl~rJbR](P|#)');
define('LOGGED_IN_KEY',    'y[BHF2f+sjl,Rvk,80$M3*QhKCsSSo]5PBi7`!c2RvZ<mH9Gf0[4n7jI{WiA;jaf');
define('NONCE_KEY',        'zVGA$E 5.aq(bRdJ#; A;$7ZgUt9oCFiC+vYd@3JI1>K!qWpaqg1l9l36zpiQ@u@');
define('AUTH_SALT',        '60~!1#Zb}^nxdnrhBR_^ev]A2/1F4mB.`xd;X v<f>B7nC]KO*n&6#9$f*x@Q[,?');
define('SECURE_AUTH_SALT', 'tz@`N{[+UeAV]Y?dV!C$o49KKQCvvu8Zn|8R=Vg6pm%Jgnf)0{dM;1kcf?Z@S,1P');
define('LOGGED_IN_SALT',   '~lGK0~|-v?7BnL+^!eVg87~[*nSXzd{hw*mgWTqpvdkp]@(cFqw&/j*!|OtR)[tb');
define('NONCE_SALT',       '*,?K^.Mz[P+NFn>GOBqxks5|l{T]/d] mBAT~A(9}pYX2{*]$h9*PjkFnOn(>0t=');

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
