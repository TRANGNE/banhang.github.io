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
define( 'DB_NAME', 'banhang' );

/** MySQL database username */
define( 'DB_USER', 'banhang' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'zQpZ?V_}H%)}**KoW;V1mG0[r0>C3a[!}PGV(=nZ+Ij>lm5A8%$!=w?u~fV:u[*0' );
define( 'SECURE_AUTH_KEY',  'UaXE8+_~33:8/ 3|a>F}uD<u,PMyPc;(:o?mD^fZ<=d-P36GO[R(6f;/}K~e^6uA' );
define( 'LOGGED_IN_KEY',    'isKafb.VwJX|afa`5a:_@$xZ;Hro:<ZS;md5 &~`>b];c# J 2NFDVJ@ 8*deag_' );
define( 'NONCE_KEY',        'Jr2r(l(IU:-N~M/pG472h=8WP34U*5{s9%jzK8A&1@:uhl@`<}@1Tt@IOJzNy%M}' );
define( 'AUTH_SALT',        'z<,$p?g;V,>LviL*:Hk868aN@pIEI5t!,p3;DA`QL:lhG).&hocUJ.HcBPPXSc2/' );
define( 'SECURE_AUTH_SALT', 'tgzTEo0w/iWDYG79;}MC&uelZ%=Wu[N,4K#c}`opXd4vhWD@e9Bk6zi`$B?2fv)Q' );
define( 'LOGGED_IN_SALT',   '42>yE&&@_gH?<L}b&HC`6#LQ~/Bb?x[A6agnbr6Pu&9>c6`lS@xwJC^WJe4g<L:W' );
define( 'NONCE_SALT',       'T8iD=ZPT2(hO}1/az8L+d-chS!JgR/jJl$Sw$KNnYr_jn!2%XqJQ`oY]K`:LKva1' );

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
