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
define( 'DB_NAME', 'db_metrologifront' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'U)@1b.NIO(@Y{s !E:5*)dA24`)CA)L7e^q?5utE+S9|3>BB2nwO>[Cm2Hru 2Je' );
define( 'SECURE_AUTH_KEY',  '*GB;YLt_![U+S}6!H?!%=r?>_r[%sG+Hxq*,rpd_&wB/Gf(g,5OXL[qh5ky{fK8R' );
define( 'LOGGED_IN_KEY',    'M 8/sot?`cxT(U(7JA)~P_`/O1%IGT{NX~CkI5%&I%JV>@C2$O3:a-i0N&SXsVF$' );
define( 'NONCE_KEY',        ']C7ZX/007%CEqBh.4_c0h;Ot,%Bg`r(Yvmsfx(^cItaC70U-vH5LCZMPF[V/U`l*' );
define( 'AUTH_SALT',        '6JPOU(SV~hfa72D2^(e`:NxCv4<>+jz;K2/#$pG|6)d``*}BdB|{KT%F7t93x/9+' );
define( 'SECURE_AUTH_SALT', 'NPHH6ZDNts;vA^#3;};A#O9I48a5:jl6JVRj8]xrg[KB8Mj*cQ J#k&{1ri_SwXx' );
define( 'LOGGED_IN_SALT',   'Y>le@qn1z7o#8p ^M2,OpmOfn1!hkWqdL(a!;M4l(TC N+%KmUGr7?/ yio^?1zt' );
define( 'NONCE_SALT',       'X@RkQ>=V??<%f:w$`qSzR8/T1RB%7|$uavD79OWHw#FN+/M(IvB;8!aF%v/w-7dG' );

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
