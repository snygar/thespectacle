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
define( 'DB_NAME', 'thespectacle_db' );

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
define( 'AUTH_KEY',         '0%!{,%u*7A,|^%0zBd%g 9lzEz1P:f+nuZ=:5/GG=]MX6]qI%:>jAl/pL]u[(X.>' );
define( 'SECURE_AUTH_KEY',  'n>ttLH61165KJ%I,rm$p9(|Q>Fvxe#$SkUP|=:IUlyxw^4},?zOv8lham%?yjmP#' );
define( 'LOGGED_IN_KEY',    '-wZ]th>WNo9X1lIj+kTvhA=K;TvW~n>@L;Y|Mx$+p.yxBgAkwC@0WKu4uwZocjfT' );
define( 'NONCE_KEY',        'r%?_apKHm1CKY`k7?W(zk*qs+js*^?EU]Wr>NtARFIn}qj-M14)F`efILV3E`^Xh' );
define( 'AUTH_SALT',        'KWgt09{fh^p9Ry99P)>X,wI<xH#^DH=-}:v?v~XeV(2#>2Feg.+H?/Jj4p5)@%)k' );
define( 'SECURE_AUTH_SALT', 'BFVs]uYns4^wx$wBPGqP{n1%]IcCRCq0-UA3P6lJayqF(erRN3kKx**[>0 u3kzE' );
define( 'LOGGED_IN_SALT',   '=v37}n[-)[ESJKZ6lb+]MY8~]8W<d<:tBQzkbS.me*)l3TBuSq}~4(n86)1.0^nV' );
define( 'NONCE_SALT',       'vvsC|?Woe|+q;|Qe|47o*+B7rX`k-oxr/<J[;FPS]$2lm]!zhCbQ$>__3,]dz#wU' );

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
