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
define('DB_NAME', 'business');

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
define('AUTH_KEY',         '&ilyoklm5DC3[shtP6]$!&@GcyNT~BZ>wg!S@H3H8?P{u}-5_ nfoaEJJ=8:16PP');
define('SECURE_AUTH_KEY',  'h/;MYCa7*zJ6*2c3rw2a[nrq1WL(mTVMOZs`u(.<br39Cb([m<$y~~!_8>tK^+-L');
define('LOGGED_IN_KEY',    '`}2G@N15JF6|$.1-C=:{:XP5!{7f%gtf]_slEWU$+N)iR!o-vr9+`XyDz2ECQ><2');
define('NONCE_KEY',        'v`%Cj)y8zHs7FFDO7:C^1ewN3~@+Q~~ t]dR]&N~)+]@H tdr}U*qa7#+-%!T+Zg');
define('AUTH_SALT',        '*hU_5fKdE|S+X,C9o)n=pW[9pd^FjU|bcTjoty@,acBDv|f-8slc^aQ!3zQ8usWj');
define('SECURE_AUTH_SALT', '{TpezawfY2^>~j-(q?yNMqAJTS-;$4s2m UEnzfs_|]y`I:m&wy`BHi]*as +<u@');
define('LOGGED_IN_SALT',   'pE_Y}K|^Go@C]RP?o-i2|29g.E21/GOVQ<ir&9r3H]CW+%v.V~ac|9sNBH/^,d%w');
define('NONCE_SALT',       'zAos0{zBs>u~g,(+M1`s$*8=G/}Gna$NjN_U)d5U3D^Pk5$6t7|$-?j6#CG}Xb6F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'biz_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
?>