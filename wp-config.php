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
define( 'DB_NAME', 'sajtic' );

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
define( 'AUTH_KEY',         'f4,}Y/$dF!Q98-T7Pi~7 EORStAr?RIF7hg$(52gd-BmuTD]3aXfc[yUnso=N-/S' );
define( 'SECURE_AUTH_KEY',  'g!:)F%H##SuxWD:oZqRCU6}9Gs{6`|<FX{>D1MKR#|l2ob)^ju#zcWv&%4>E+[T9' );
define( 'LOGGED_IN_KEY',    '3{Lsoo~Y>C] Pf-n<T(wX,-zml7@^>gs5FeAe&<v`TYCNFru BrM-3Et/5,c|Ez>' );
define( 'NONCE_KEY',        '4/R<ZHwum0I!;txsrv)9D|Xyj_*idB?sX;`/2oildm?Zss_EtU26=UOb-Qf/?IYd' );
define( 'AUTH_SALT',        '8&VZpy=lLJUy+OCaK0wh~)mB;A<P_Zi8Lvuy[|qaj6Ps6`<y:UFzfzdrRS{L:i3r' );
define( 'SECURE_AUTH_SALT', '9g W}Y[,dA$6mFdrnJO-|P)(?].+vqY~q S5F5#DoB5CA:i<DWQ`p2@W3of[>4y!' );
define( 'LOGGED_IN_SALT',   'n|Ukm?I%Z,`Y>DpVTQBrp^v<|#i[jq1n8^$#^b)}?-Y+zck#e*z?O(>Xb&[!%Ahs' );
define( 'NONCE_SALT',       'QZr*0K%xTe#mbf4A0QHaQCi1-YUUYWE3B5}W&>]2)_TV`Bhr7 J9EilV?((myIf]' );

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
