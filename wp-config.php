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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'sCGe8#:dfyhX,.WT!a19BAh7g0lCD98p(dyAqr9VqgFr<3V<sH_P*3@{i_[T!Q.T');
define('SECURE_AUTH_KEY',  'uen4@:Ww~hA_[B,FiAqt-wQzi:.mZsX{.i>aKxe:/*<I+FSA.+ d*q9! *AhCrz,');
define('LOGGED_IN_KEY',    'W|5HNd=708=V+^vmV?eB%++JZ_2(!7C(F{viC.W^`8o3vI4{TuC=KI6+!`9=`f{n');
define('NONCE_KEY',        'GvcF%T&xyzt6,,8fY[EE=w4ZX!D4<F9H_MaQ6iep:^90[DB^p_Z@)AI2Z/_;(fFh');
define('AUTH_SALT',        'V.ZW/PB2,ych,d~@NH]Z!kR{Q~u,!uMPE]GmQ,g@cd@P(&y6id^%#wW#-Bq&6j;H');
define('SECURE_AUTH_SALT', 'C>X.c*}VUyHRDb-R>*k/u)tw3)R|gwo_r?BOL;DB:Tl5bDvk~6FrC >Az.}0{!BD');
define('LOGGED_IN_SALT',   '}:Cp0z/q{/M-m=tT$]Z{>QDaZHrRjxpy%hTpp>D78,zj+q{}pC+-_25CuKj*gY~s');
define('NONCE_SALT',       '*83!Y*zB[Ob<D;=k[(DAVK8)HeF@Bg*vA:m;rie#)3xf4{SY2&>7AuK+:SK0(I .');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp4_';

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
