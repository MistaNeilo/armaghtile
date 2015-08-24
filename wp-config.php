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
define('DB_NAME', 'armaghtile_db');

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
define('AUTH_KEY',         'RN)`!>b=h@BC?i|YyD+4E4_u:|{c^m8zFZ,t9v|n/@rzP^nNcV_3CWS~B*f%,[Yi');
define('SECURE_AUTH_KEY',  'Wc9aExLklhr&+- 83n2+1%FD*z|;]3.2D*j1_<8*h1?Ak-.ThC:;:PDk(yNFrC+|');
define('LOGGED_IN_KEY',    'AX5u:2d3m6<tVdig^+iStII2fDs%`cHCu@Fp*N`#LLmPv;LarE7+{/@-L&4}/ueU');
define('NONCE_KEY',        '.,t#tUI N:Bw?a1L8fxA}NqO|Lw MJ=A,wmCuBQt;YTn,vOFxKmPArV+s^;}Dx2+');
define('AUTH_SALT',        'rI@Z|^WerzZ:Tq/AIvMKWBjF]6@_i2S{s+>L,=}B-JfZz-?+bc9-j+{sLju1 iJZ');
define('SECURE_AUTH_SALT', '?{/d+[tPMMY@t(27yGk`o~<xy{/!7u6=5knTHM[fu{N?$|M &O[+:~|Qu ):ICT0');
define('LOGGED_IN_SALT',   'cFBs.9LypvT-]&<--I#[?^|0p>RH2k(lb9:fT3=#hj;ngVIF)*3#el1C!({Ct9Ul');
define('NONCE_SALT',       'X=]h+4Yn|+5~VE,Z_lc}y?[Z0R?h5CX{F[/S~Z<?n@`=X8qs1O+njGwI-ZbWk= G');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'at_';

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
