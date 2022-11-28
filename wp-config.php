<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_chualonghoa' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'geopacket' );

/** Database hostname */
define( 'DB_HOST', '192.168.1.139' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1$MUz$ou#qZ V/C{?CpXD:_G.m|5JcS}NOs.=e|;a]#R.>(B3,],3JtvhxwIVy.-' );
define( 'SECURE_AUTH_KEY',  'XB>!mfh&I^LZPW0}C75j#CP_{r4oup(:+~X=0Pf_QyVfit[$>s_Zs=I#l9uSnM.r' );
define( 'LOGGED_IN_KEY',    'yp:+~CM_yo$mFbNJWJrT<I6j,L*V|/&g<]A;4sz7WM&3/2NmyX4T@HgJkwmKsHV#' );
define( 'NONCE_KEY',        '&|?3_# QLIMMt{NI]4>fcZastjF._Jy5pbXX]my)c*KJJ)+YR+5s>##2`NeQ%)8?' );
define( 'AUTH_SALT',        '439~a]k8(mo7+!B3yk=/t*_9SdaLOSYdISR~wLcU>pPdB|q)J|7zmGp]*XHJ)a(@' );
define( 'SECURE_AUTH_SALT', '^oC8D(PQwSs@+KH7^G=w~`-_a-gl@f:rl{wl@nJtEG-KDlU&j H_IM co&nU10U3' );
define( 'LOGGED_IN_SALT',   '?h@+;ji=zp2w_NgEBj_-hQ,a(y;Jl~J_^blI=ykK @$KA(I]Vj:D[z.8t6z6)zyC' );
define( 'NONCE_SALT',       '&F[nIWgJ=3H+xEzXlLsEM!PYRZ^P{G7.WG1.o6,0bqkN/A8?gpS?!ht!9tg%~[VO' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
