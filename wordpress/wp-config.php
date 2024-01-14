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
define( 'DB_NAME', 'Prueba_Wordpress' );

/** Database username */
define( 'DB_USER', 'phpmyadmin' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '*(QA4L`vi>bo-Q`t44TJ^To8{kdI&|jOor_c)|y3mm9+E$nG#vnlXu<uf9y)i|d*' );
define( 'SECURE_AUTH_KEY',  'wVlo35Hvg;3Io{M9>?L:n54^n]Bf=~DtrI[> N5|0y=g)o9#/XyI8wgqBhnU)p&B' );
define( 'LOGGED_IN_KEY',    ']A&TE5VNPrJv_TWadLmh5(f9?H@,r]eSW177|*]FCX,UtEZ-bEJv_mjEa+k,y9(V' );
define( 'NONCE_KEY',        'R1_/S&1@=__@Lr.u15sfGFVP~koV*EX%3c<`;$py81lah <1`E-N{@?jAh<9y2t/' );
define( 'AUTH_SALT',        'xIH,Cn/YZp_&4Lq,uOTIG9wy#+s8o~jz_hkXpK_;iq=.C_MQt6#UuPc^::KR8nbO' );
define( 'SECURE_AUTH_SALT', 'f/t?/yV@@QQm$K^*3LjEj3|IHf<v@9wRCYXl+s1jOo[v_2cah2J_]TRF/Q($S6n!' );
define( 'LOGGED_IN_SALT',   'oLD}jl03>#]OocKGZ9%2lnzw/Xr|D-sLtu-A)a3b?vPL9pcIMyU=2ZlnG);PcC_E' );
define( 'NONCE_SALT',       'p9rG,fA)|IeHmObq|>TBcV2@uX)teEHU7BS7ZQH?I;1.jB2ai7+lIXN6dj;X4*:b' );

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

