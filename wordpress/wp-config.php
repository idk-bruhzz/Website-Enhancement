<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mywordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'RootPassword' );

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
define( 'AUTH_KEY',         'RnAkM~NC{>0>m|lw&xaW1lBw(S=t/6j!g;tckN|Y+A0P1]5)]q:C,pvtZmaCR,B4' );
define( 'SECURE_AUTH_KEY',  '{~G)_$GKZjF5@$}[,7XC D;8kCy|YOD#=F[VN6c(@LtJ qU>d@p2uhG/T^fKE3Tq' );
define( 'LOGGED_IN_KEY',    'T>]o>AJ(4VC)2H%2@Pqbs6WodmJY&mE3r=r0_X!VOFq]/?r<Sv$rqQ&&m+Qz-}R4' );
define( 'NONCE_KEY',        'G%gis~zk.+k$-vM@y5*s+;*y:WgEQY2`S]Axjcy8#0&g;sKs8aj=r~3_c7:1Vuva' );
define( 'AUTH_SALT',        'R8-p8_I>byU(+jZe|.! ez<[-*N!u`|/t]Qx{wD{e_!@*ws32M:LNP}8$==C[.Tt' );
define( 'SECURE_AUTH_SALT', '+wxg;DZWyVM5,}LvWT5:mVCN|?ENF,ff1cLNC/cNwH$Ec{Oa6-ky:1EPJ7CnMGh+' );
define( 'LOGGED_IN_SALT',   'xb/QV`w%iE>k*SgbT@HC-`_*N.seJ$;8rV<&BmwRUF4p%]1oA8r0$e_/GPJK~T2:' );
define( 'NONCE_SALT',       '%PYcELor{:&$Jvh` NJYx(!Xfz0;=m1)2Xp5[j(/N*nX}Sn*RK3^_%,b1 QQiIYL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
