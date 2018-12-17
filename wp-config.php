<?php
define('WP_AUTO_UPDATE_CORE', false);// This setting was defined by WordPress Toolkit to prevent WordPress auto-updates. Do not change it to avoid conflicts with the WordPress Toolkit auto-updates feature.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '' );

/** MySQL database username */
define( 'DB_USER', '' );

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '%uBV]2N3brZj:2I%i(Y7O&/6mhzot32aCg&p[Z]i6MA7#0@nq@o52o]zSl0VkU)@');
define('SECURE_AUTH_KEY', '5i_Ak80&|r85s0+UT*%]7&+8:&o+Q*H1+KvW:fEt-M11tb038kAaevB|%V*5q81b');
define('LOGGED_IN_KEY', '875+pr01-J@u+hCbg28ehV81b02!@zyanfg8ah)QeQPJu7gf##Hl3NwS%l%_G*u(');
define('NONCE_KEY', '4p6;_@cRPx[7ZbJd7h)aEuS9o1!I3;)mer6T06;62#g4)&G-~aP(767rF2a99C_5');
define('AUTH_SALT', 'X0RpHG0_lBUOzz60Y*afAS_D-n7k5QbMv33:512PxB;58/APQR1855Q1p-y!U1zD');
define('SECURE_AUTH_SALT', 'v0~/a9285@35x/|_)~A%NsHulIGm@h9Hy5@X;hJ6-mOZbA6n:-XUjIft59_e98P_');
define('LOGGED_IN_SALT', 'PS]*ce3yt@QHz0m6:k3E49P|P~NEWU(-n509mv~_ktrThk~jv5rNN7jaXY++9x(m');
define('NONCE_SALT', '/71uMAAgbwzH]!b%o/0[494ZU_]~CN:&FDh1V897ONd7s0|/tyD@E[#*PAf8t9SC');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '39A6d7pc_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
