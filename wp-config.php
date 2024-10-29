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
define( 'DB_NAME', 'gymfitness' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'JW1S{wg2ySw1g>D3;JSH%YI&6]r!+mJAs6KUM%T4<!q@IuB nS+,&AOM]v|an6Mo' );
define( 'SECURE_AUTH_KEY',  'VFK)7xyqTm%TQear`<app3Ox1HbMWr:xV)$^eV,FM}/O7gA>xr33U)]vI vgao_~' );
define( 'LOGGED_IN_KEY',    '5Fb+3J:amBV]chgP )$@8$9m.|-/{+J<W*.<_Q6)DMSM**:h:||%O0?X|Kd$#]NT' );
define( 'NONCE_KEY',        'c`Ta<Vvb+}`B5vU(D10(F8W8Vf70C4}A8$Ip*;3Mb^xR3=DH#GeTKtm-DE!)}$oG' );
define( 'AUTH_SALT',        'IZb,(N1)2TfJ<Vd{ef+FV[k$x1+B^nIZgg<te?+>%Vvs^oJXZ2;ODAtPF)m!9dq@' );
define( 'SECURE_AUTH_SALT', '8C&zQ*kTAIlbImZ9em>ADj!6y#*lrB]n/U<<&W``f}5,k}_Lfi7>Ck3hgJy;S/ks' );
define( 'LOGGED_IN_SALT',   'YCCuqSbHW>ZA]fPw%V-FqkI&?CVWjem]}8hj!|C_]Rd5n;/87&6lMs#qY7_r~OY_' );
define( 'NONCE_SALT',       'V_?yIW]mrL6nC/M5;0f/qd+4wo%&^#s<pJ71tX]v,p`{qM>l%H9#AE7=KYxI9|Z3' );

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
