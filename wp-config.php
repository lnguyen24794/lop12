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
define('DB_NAME', 'ffse_lop12');

/** MySQL database username */
define('DB_USER', 'ffse_lop12');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

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
define('AUTH_KEY',         'P51IyW<|@-IDa%{b@KyC2IIDbgDiP 7#Z6LeyL>$!iG5J.jzL4;C.USv1 %>=&i!');
define('SECURE_AUTH_KEY',  'm^1f*Q+P@xp+M 9CrCgmK<Vr-vNXWrwwm{y6:QK#h.#[6jSfp%%GV~`]Yy$kt~nl');
define('LOGGED_IN_KEY',    'Ud>w8=1mm}LOqt+Ctw3Q;|^rG$?S@|tX^S.^Hwy@&j|2-6@09~(cV9qq%H=@k^9D');
define('NONCE_KEY',        '=5swC4HrUD`i#Us=ZDD2xTL2u_~_nA m ,{;X)fqjrN1<nBh .mP|}]OwVtGH1$,');
define('AUTH_SALT',        'hEONE./hTGF%81+M)n!:)D.CIAfKNQt~w!0^h*n`sLLAbUM[$<jAq4W*d|$zZ-|w');
define('SECURE_AUTH_SALT', 'K{6YdSuV>]yb|^}Un7jSz7~W_-KU{L}W!w(qLc63O][<OA@w#[=Rerq:ffP;)P#g');
define('LOGGED_IN_SALT',   '6idj{q),z{rjx@:<Gh{j02??+wBjP[7#0o}A(d:g.aTO(r$ctb:w/jVVii+Q#F/u');
define('NONCE_SALT',       '0KV_V4qH;2Qgqow>}r7HkQB=;X}>+PaRg[y}^at`>@Iu;Q,0; RaF8>q*);.)jSv');

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
