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
define( 'DB_NAME', 'mademoiselle' );

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
define( 'AUTH_KEY',         'HdDdX9YGfS(xwae^DZo<x(di=^]b|L!CTJ$rI:PJ63yD;v<nlz[UeK1TT<icvfEC' );
define( 'SECURE_AUTH_KEY',  'l$4^/vE$.q5T_RhS!ym7_MsvFRa_5lNmRF`p `T}P.j ^ZpG~2d9< f2M-IB|6Y4' );
define( 'LOGGED_IN_KEY',    '$Z%GS-Z$D,zBl]rw[N$@KiUh3Y+B.Eb<{tQ9nHgrvFnir})1)bjws<WBzb Lxs7*' );
define( 'NONCE_KEY',        'bnn4I7*h,SKA3mLE-Kl:jJ+dsj.<[#BO-y7EC?6%M/Twf)m<-f^bb!eN6KSlY16D' );
define( 'AUTH_SALT',        'PW`i`2j:Fz~a}<r1d]Ka_u%xK>-dF{tfIfGY_+P^E{/4Z`]HWAuy!i[xBX`[Ff%d' );
define( 'SECURE_AUTH_SALT', 'Gg^e{q..h0vuzXuLw[ShtMky3zjFZ]yilopYS?1G@>,~fD.e6)3o5@P1=N=hirN9' );
define( 'LOGGED_IN_SALT',   ' fW8r/Wy4xX/pT4jTKm7]p,>Z4]yei}|^(xK^VA&Rd2[YT@j?Ag_!y3 U#AA+<qq' );
define( 'NONCE_SALT',       '$[JNqhGSw~7sSMBWWX3,m+WJh=eeSM)LIzsiTGRM|8<ml`]xlqvAU>5*R],PaAw[' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
