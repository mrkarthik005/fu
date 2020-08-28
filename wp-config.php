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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fudb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd>NC:G[<gek?Y0(JMZvRPg]egY|iVB8323^y@U:T-3E5Zs7&A<<1W%1{[rz^Pm&_' );
define( 'SECURE_AUTH_KEY',  'UJR<J4~# b^#GF]AWL^98l5`yPY&$VTY;mVxxE<er(9+dthKrFnXA9`)=3-3VOX8' );
define( 'LOGGED_IN_KEY',    'T+<mW?ho]q_~qw6Xo%6J]su6&JR/+Fx6R!<nTI,]Z :(yR/`%W,Lqee8w(iiM7tU' );
define( 'NONCE_KEY',        '.&LZs5;xDt|yAZ+P;?H7}0g:j@0Ea!:_<>4M]Ap=[!-bO/?1EK0unucj`0B<$Evs' );
define( 'AUTH_SALT',        'qMWq+c(`NG@=U4sjkE9*y8(Pf r%%,!^*nSYdETD)x`16>UUIt%]j#!dvMa2Z)6.' );
define( 'SECURE_AUTH_SALT', '09d&iK.%#Q=BtiXrdgjmL3.^I)gw4?OX/)/N1eKNi;MFw2*=9Wa*b#%5t|l58JPk' );
define( 'LOGGED_IN_SALT',   '{~$0VRf%6M^6<Y8$=>6A#HxPAKz84*SUVAcKT.aiWGLc18w|v9mcU[k)q(-|1`)^' );
define( 'NONCE_SALT',       'e(Hv<TH).ctN1zC6RK(FJiT_&?otAleY;2/6+dRR?mR@k_<%6xw5jcKDiLk;-JDo' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
