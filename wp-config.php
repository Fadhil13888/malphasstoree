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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'malphasstore' );

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
define( 'AUTH_KEY',         'nv!:O*op2$@KTm]&&pO oE%S~],_CIV/cM&MZ_P++Aig1-d^AsBJXllBe !}en I' );
define( 'SECURE_AUTH_KEY',  'O$Q y+,la/MC);$,VGCIYc8Le-zYpDnEg^tXqb[=tCPq{BXe7uMd$u{`B@e 2taC' );
define( 'LOGGED_IN_KEY',    '^B,d3d|o2ZG([Dud&G>ghU:mV7F_FHk2,lq)^[~_;[L;gW^Qf/lw:ToMo7yUz)S4' );
define( 'NONCE_KEY',        ':dD@pGg13>_QLL?ZAbZAB3&xmsTLA<:!VAk74>Cp(Bx6n=P35k2R1p!d 1o1LQQr' );
define( 'AUTH_SALT',        's!J:ZBIPjYo|i@-$h4|]s|l8pz8FJe|p[]tP[[ul9%+qNE5zb(o_~~6vw?#N!G36' );
define( 'SECURE_AUTH_SALT', 'yvXX2bOJn61TWHR;=N<x.=}@m*Nbk{ZI>C=#7j5i/Rf5X<2<}%D*?w.t9Ay?{GcC' );
define( 'LOGGED_IN_SALT',   '9_*d6@SRC;I1ClyyNfd231w)Xx0/wEHR_:=759[XBx[k&:@Zq#Cw(($W1tK!GIKO' );
define( 'NONCE_SALT',       'sH0-qZyXzgjdUSSQL6B%OT*`*G!Ju0o^NGeh.5/PUp0pK,i%`%w_([ilt9/ue>`n' );

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
