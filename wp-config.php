<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'admin' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Admin@100@1000' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`z!@Z7WnC#5iXR_-^B[:&;ljh0k|K/#_,T0~XxX{h<&Vk:PmDz0z+667)(V,fh,Y' );
define( 'SECURE_AUTH_KEY',  'A5SQ/AV8EQr2fg#Oy,m(y-^5w$igU&(^7A,[V*t8?!}`i^?]R6#*hhr>L03(E~k^' );
define( 'LOGGED_IN_KEY',    'C7c!kcoPhzERKgsrwj)V;PQ|-JC+C* .pZIy!H%zTVR+5m dI3+5bZH+D3uZ{IP5' );
define( 'NONCE_KEY',        '(DqLlD4PShq9fS/p<pfh-bn<J%`0i:J R)h4F:/)PR phoE%u-NX.B%,*FAj5/>.' );
define( 'AUTH_SALT',        '4,4s7:E$wO?b2b(b8I6r7,7HW)u,p%BG/B>d[}*-9tUVHcjySA{If~evsT>LT?<)' );
define( 'SECURE_AUTH_SALT', '-+d8&,WQVRvJ*7;ki[yh?<jk/le,C*j*3uXLY8Mmg)}ct:RjkDn^Ymx*dWTCRQFe' );
define( 'LOGGED_IN_SALT',   'm.kX|[:g7!asMgp;} <1CydLsWqn?#(v+}om>;^sHMo<-5nXmMn2S,V-K]!Y`k8,' );
define( 'NONCE_SALT',       'VrCdoINJ=eNSk+1yt{FvUPma,{.f;vrn6w;!*!%rBG?I5xNHTd6a[8p[u>y;im:T' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

