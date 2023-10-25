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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'TdsT=BwHawT)b3f>Ga_].+D5nlWqybmVrKJ;8*&o}kFW|!KKu`ua16}2fhfmu!ua' );
define( 'SECURE_AUTH_KEY',  '_d`pQZp@.#=Du$W;(FDHy/q:Wn%_MQvx?rVpgvR[)C?oA&h&~4;^{/<,:h1[)MMj' );
define( 'LOGGED_IN_KEY',    't/@<f^%M(6j*w0ll=Z&OpDxy$`c_??$+g2P8@z.uRSg)W-kjl%XW=2$ Eg(5Dxmv' );
define( 'NONCE_KEY',        'M=@xAkhM0xYo(zm/OhL8nA5;Zg!U(_f^}7Irk%xoDkos_$B|(DrDCqG8m8Y*?W,]' );
define( 'AUTH_SALT',        'eV6C+D|358SG;.~l(nXsB$mK ehDw}-zJ/|JRq#8&r^)r50CP[3[}J)-a/Rcm*Sj' );
define( 'SECURE_AUTH_SALT', '|U^g{qARC!<Jayd!{8b/*zD,0l &nJ1uOK@E[<eHZ{%I`#VKF{x6-AKh-!,kf;k8' );
define( 'LOGGED_IN_SALT',   'F2JkN|XVo{SJ6pna#Q>un(dP02{4%[/ma#MexYSIAcA=?8O~mN)H4c~kn#5k67NG' );
define( 'NONCE_SALT',       'ug7Y>vck$8~{8D%N?EP^9OfM<@kSz_^nuRp.`%$!eRHDf~}%Mff6(o2Fk)Ez]Lqi' );

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
