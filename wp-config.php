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
define('AUTH_KEY',         '8 {/IQ]~co-;dU3w]9r=eB,hyF1l9oSnI^;mxYt@(bI`uz{^NXOw*6hu(2+UqBtk');
define('SECURE_AUTH_KEY',  'H8D|DgA<mN5&GQ|52z~1S5)v|-jvwho<vL(tu@?R@ch`;^| g)O!7$V*hcHv*(p.');
define('LOGGED_IN_KEY',    '((*B@^zF+dxy(<k h=;4Uy&g^,EGSHVK+xY`FH$YDxHQH`!WgLaaD!(RN=E.QY1W');
define('NONCE_KEY',        'UYT*|l5pK_ U#>F^s)6D+vT&Ut2X%38a6GhEwK4=vMm7qL_}`sU,$7qRPOyEy9QW');
define('AUTH_SALT',        '0^EzziMg6u;,W9[rj?c625c5[J!mLQ^ltz>oXGhF3]g{t%d{{hP)QU1!hGO{dR=`');
define('SECURE_AUTH_SALT', 'vYLA_!L?GZ(=--oX:af(Q<},_(a=08[cyk<pRWGl7JXlhLGcZfQ$1{P~U`CF`Rft');
define('LOGGED_IN_SALT',   '<u!hhhL]@iUij{RiVW9feQ=:g)D[sljYtZ:2.$!Nll!Yd#thT^i5K`-,@I@uUYx|');
define('NONCE_SALT',       'Npw8|++;*iQKE|2Hd0y8adA6+ATHulCHGAU8Ro>RO6{gtP3eRWY{D: *3nFze6@`');

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
