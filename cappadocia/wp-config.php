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
define( 'DB_NAME', 'cappadocia' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '1111' );

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
define( 'AUTH_KEY',         'Ll=^}?QS.`OPLJot_,Ozn!H;%0<FmqEH/nsi]Z2U<458UV>a,fj%d_IrP:*W.&(3' );
define( 'SECURE_AUTH_KEY',  'u.9{H4Eo=F7mCnBdI8`s{~X8#y>`6Ch/CRI_(C>ELdY}|0ZY_V)hG0/,aSB^.(Uj' );
define( 'LOGGED_IN_KEY',    '}d@I,|TQG_9[$Obxg|375txebLikk[ccL,}{St<]dN;zk@VE$$6]mc~HI(28+oMa' );
define( 'NONCE_KEY',        '2>Zu-]G0GW3Fu7_3Te<UF~:#7Y6x_4I`9L$a|%~Oy&^C3o-(m9FdI)NQ_1E3k5!>' );
define( 'AUTH_SALT',        'qTi0X4go>a XQ2TUy3{yz8V~b=T$wu})aV01ofBS ocYo bRd@E>wi+4:/axF&5,' );
define( 'SECURE_AUTH_SALT', 'wpHZE^PBn@pm4RKQoB14g) p?~X!L0cQqK10w*5#7&hMPi*=TfG>y#|^B4+Je0`v' );
define( 'LOGGED_IN_SALT',   'QA3ZP+V5|?s4m*wk+2T .@x#=VMcN(8!lZ9`;Gp4]9FlN&7q[I<tNKm.0=+eeQd.' );
define( 'NONCE_SALT',       '}%Wn>R%<sX @T0d@5rv4y[(]w$/PXof88>,F(GK;?`m}hn}7nbI6FEJLv2I5ceqR' );

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
