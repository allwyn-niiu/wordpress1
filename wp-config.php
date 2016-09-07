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
define('DB_NAME', 'wordpress1');

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
define('AUTH_KEY',         'I_eesG|=TTN7i_F4AiBxq$LOS5xbXhCWP1=|wHt=5Ey&E`p{VP-Cx:QbaK88<xT/');
define('SECURE_AUTH_KEY',  ' R?*_6C&Q`.A/NP?THNjh>^(tHS6E^`IQVF=Uy(9J/9{^H-DS3@v,GU?XsqdKm1h');
define('LOGGED_IN_KEY',    'iUf-]Da;)H0Pc0-F|XOl~d[yaB;YF1k 9>< L-^q0/1:n.u+/U)AttKVMFmar@Se');
define('NONCE_KEY',        '*Bg6Gk3%Vg YVb0:!y$A#==n^mWt~uNtl=McgTP7*m){VyuNHBH@+{`3U<wlr)>M');
define('AUTH_SALT',        ',)8P0i/?jF(UH$]neQ>]:g88tnX?T2S>y^i4ij@4hbpg $:U81RO+}ASkUlAvPCN');
define('SECURE_AUTH_SALT', 'B3$j6P[<Ew6%;Qj._{KZ`bo(V*TX deNJD}b+jQe?Eb4[7On<Vr=xx&jT}dm{=`W');
define('LOGGED_IN_SALT',   '=V^`LLUj:&:<GK%XH[nF~*[Z7,39RlhO)uj)ljk2}tWr{-C%9( n>-YJ304RXWm7');
define('NONCE_SALT',       'VN3+R``@1p?Ilx!Z4WBD)Am10e:W]mmLMO[=)0]wX6IMqEm(J)O;+8v1a%^CP7b2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_wordpress1';

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
