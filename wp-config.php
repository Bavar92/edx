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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'edx' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'VsZ{!W|0bUAMt7i,>yX{y .?Zp2C,@JPw?^h$FU_1v(sZB@J OweYHG(>y|+/|xm' );
define( 'SECURE_AUTH_KEY',  'TbKQr5Bi-=2D7j~Ou+iW6&/$p5Jrn&@2L%<0g uDRL$2[&IYD)B8 s]V-RDR(uyb' );
define( 'LOGGED_IN_KEY',    'Ltz@X7dfTE#%ERjN=CNhY<.V2r(;XtbB6vK|fG(:*39%f/k3[MZ9c3+8Z{)7Yztz' );
define( 'NONCE_KEY',        '5!;o@b)ng-S/cXnc8uK7$.v*SC0^Un<E V`IZ[sD1HWbF{-Q1}pF9bnK[G;PL}]2' );
define( 'AUTH_SALT',        'CM5j.]}XrN<5_P`RAiE$/U7.@$=J XL5LRpT>w&!Af~z+%&yFB((@i#x4`*ey7bd' );
define( 'SECURE_AUTH_SALT', '[`2(lDax!ak^/ElWDRM8M.}#{Aiec+k%;.1kh{i^.(l1`{Z ?qI_H371xK|@Fc(5' );
define( 'LOGGED_IN_SALT',   'p]FnB?k2``H,9}zhz&0*2l$S.ujc83`Q~#{KxJvs#sVsKgE,%!-xS`Gq%o`47,Fi' );
define( 'NONCE_SALT',       'Qzf3,|]:yX@SFHh1 8vB,^!zYU3Gp&sLAkL2r!?R<h3giv7fMf!|&%.AZPgLS:)+' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
