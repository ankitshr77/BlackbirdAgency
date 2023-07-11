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
define( 'DB_NAME', 'blackbirdagency' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '=-<#X}Fhj !wV5|UDapQnBr @o`8+&FGX%{~B?}wXb.o[5i|Q|#2j*mH73cYZRdj' );
define( 'SECURE_AUTH_KEY',  '9f7&:o]YAr`Ww:Bi+m~N0oBV1%Kq,Du]EhdAu N{P,[n^KS^ob``~myX29,- )C ' );
define( 'LOGGED_IN_KEY',    '0T2z3TQ`@Eaa_0q2*ASWOP+ViQ[>%@|+l$d*BQ2pn^dKM7cB%deu-M*AOt)0a]7E' );
define( 'NONCE_KEY',        'v-[?H3yxEs24<q!l/H_dV0lZ8~#9(/DCd6g6V+tuBuu2.^5_@`!#^~k?+MvI4pnu' );
define( 'AUTH_SALT',        '4RkdAzO=a=)E*sd,x&()m1yw}^8JmnmmaCox&GF)ju;GV39hS[dNNFz@Sgf/b4v`' );
define( 'SECURE_AUTH_SALT', ';{DLO/ns7Sz4F)jPv6Fh$E2$qnml#-P$#(ucxM~-&U*-yhf)M[/[2Y0oFBhZ$>AS' );
define( 'LOGGED_IN_SALT',   '6U ,0:H9gVmIAZ?]PfUM24gUA0m3HG]++}iC>X*1DO>Z=q%|9!Jg&GE*:b$?D@j.' );
define( 'NONCE_SALT',       'evAv;@~<E+^+2XJ<`jnVC1tDAIAS^0_PRtWy>;]RrC/yZc`)>HuHIhlFt7/ <B/q' );

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
