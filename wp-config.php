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
define('DB_NAME', 'fing_wp');

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
define('AUTH_KEY',         'mhUQ(U[sZtX@RQx]I$Q^40P*Y2yy:_L;5kp+%((rZ/rO?(O0#eKNp `AKB+j{Xc1');
define('SECURE_AUTH_KEY',  '5DDe_=RsR?#azY#%T6@s0/RC/eURN9{ 7ZwN>XQu8O-N&TH(K!5r1Uc`SMe$[~3l');
define('LOGGED_IN_KEY',    'y~>L?69v8+^)#&{Mjs2Qxn,(Dp+25PU?Fuw]TaA;9%.O8o>>E[7rj7xo11R{)j;y');
define('NONCE_KEY',        'rhXt<|GJR-7U~/x+B0Q{TYANV|ugEaGM>I|ymII|*ErTy69UdsTM)VL1jS0-]xx>');
define('AUTH_SALT',        'uWx[xf(J8_imZ%b3Hn)W1Tq$4[.Jr<B_Vl]vI6!a6duZC_U3t[:YYkX;Zi$=v=W ');
define('SECURE_AUTH_SALT', 'Ku96|U2WQ;,=Jb07Qd!us8[_)&$F~YlJw{o^_,tr;P:P.@`X=8V1kb*?54R)J60u');
define('LOGGED_IN_SALT',   '/1aBfD`M</LkF~gJuQ5S.~t6W;:W_IZegBf57|; b!MDe>$v4/}:TMC.3u@Uqy!T');
define('NONCE_SALT',       'DdKcEWe+OJ.Oo 5~{Pc{KxGKh5&S8vElD-[0]k1vH8~#j-2$!vr3RbB~^Sg6bt)Q');

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
