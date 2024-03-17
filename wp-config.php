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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

/** Database username */
define( 'DB_USER', 'mywordpress' );

/** Database password */
define( 'DB_PASSWORD', 'Password@123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'jZvr*8;IG[Q0P0IrV1shyF$50{j)X2bXO(35deqr@&unNAQU<<rM2yxOoG{Q1mZL' );
define( 'SECURE_AUTH_KEY',  '0a$!RwQ}%.HWsJBszmbi4*^V9e,LhKQoayaeR^ru7F+<{UJ%bo+}olCoqaFX~Khy' );
define( 'LOGGED_IN_KEY',    'U{~{8sfC_sn(ZF5.mpzG[9Yb%*DjpHq,utyh?b3nkC?.9ia8 /3B:r98&E?z#</,' );
define( 'NONCE_KEY',        'be;ST2fEi,rC^7JQ{:a|m@xM&mn/9rx:t5vW-v1dfXHVMgaZVJjhcFyZ~iTx2`=a' );
define( 'AUTH_SALT',        ']?OMq=p :QmM?#r^A4z+L TvMiM h-=XF:z.Mrc$/aB=*jRT/L(MQS__HL yHayQ' );
define( 'SECURE_AUTH_SALT', 'mPf(d/F5+fk-z)[>{4rjUgmzupsCX>5}DD?T?CRB]~A]s{j77Pd,>Nf(AbPvmmm6' );
define( 'LOGGED_IN_SALT',   'o;fo-~`gws4@<~^D>f<fB<X#q w/N u/?W&36|X=~eC]Fn`j9^f<oL5vPbuD~UO0' );
define( 'NONCE_SALT',       '~gFIT3l{[=8;/J r02QP}<]0+!6%?qo-(F6MY2m^tPD[m%?Ip<oP:2?!bpT_w=0x' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
