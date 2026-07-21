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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home/bbmilanoco/www/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'bbmilanoco' );

/** Database username */
define( 'DB_USER', 'bbmilanoco' );

/** Database password */
define( 'DB_PASSWORD', 'b8ca7b49-f671-4d76-b032-7939df30259a' );

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
define( 'AUTH_KEY',         '(ZArV]D]uaVw$@XBr~6>DCM,M=r4YcWrE56)|WX7O9a)SsL@Q:OUG49][x%5eCao' );
define( 'SECURE_AUTH_KEY',  'dV2v}{E$e!+Ds>r>ddXqYM#.k?hPUsL>e]$p r-n[]B[CfSlx!XLxupj3i9[]fjI' );
define( 'LOGGED_IN_KEY',    'Hv@V1s|]V?Be&P!tLY2A1|sJ.YYeI+xuy[+x(Cmsze&m5~#kujnE#=0m2e!2bV*1' );
define( 'NONCE_KEY',        'v%zS~*nf>qD0!=htM:O~|$;L935u:&(c1A;??PQX).BNSHlQu[K>vbxkm:t.(`=7' );
define( 'AUTH_SALT',        'ts@V.}VR^zWyH5~boC3&6_>aC~OmjuG]Q4PEZtpdG1@_O}Qu;.bi>?BV_%BOyf4d' );
define( 'SECURE_AUTH_SALT', 'K|t$yrdDA9Ltgbr334Q4,3fUe3DG{^U}((9{(>ZH/*vAU<[?&~H4.D(l>Xt7aSYA' );
define( 'LOGGED_IN_SALT',   '1O@U=>QyC N1A[j=:;{w3TLv1%SkZ$oK;Dt#{lrrPu]u=|&y(*i?e4pH VFb!4QP' );
define( 'NONCE_SALT',       '0>^Zu<9h5jwc4aE9|5Q8$j<Hn@_%IjW$idC6C;:3e~mW+e|Krz5%^>b0X0Y`WzB`' );

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
