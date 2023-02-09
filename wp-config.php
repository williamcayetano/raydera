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
define( 'DB_NAME', 'raydera' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'S9i5e%YI0(ehzQO0`|$s<{WxM.;3-gy8wXDZs,V*^mQau%DN+(28/Hlk{t;;E%d*' );
define( 'SECURE_AUTH_KEY',  'Wf/><(5-@jnvraoJ><jAg^,jA/jTe|o$O}bqq;.1nii5K2FprN3Fb}^B&rM0GtP#' );
define( 'LOGGED_IN_KEY',    '8YclOMtMID,oe0UA_JD9Ye0yTgN*Z+tLT<>}Y[KU*++Dwa@3h{cm/x:z;K6a@w33' );
define( 'NONCE_KEY',        'hDKhS!nk91-/B/FvAJQB!W)ai#Y=a?OqI]6R_ey:uaA`g8#Re]n}:.LtHGT?=.0k' );
define( 'AUTH_SALT',        'rA{I:7%PL:WG*T=H^`p{VD4IZ K#U3Um*pn1c0yMD sqdF+)D+0FuJE4$^TC[}k2' );
define( 'SECURE_AUTH_SALT', 'VO$FS5)%WrNJvfZCk8j!`0(B*/ZiN8J7:,0TtASllz8~:@x*L(y(UvOJc;>K8ws:' );
define( 'LOGGED_IN_SALT',   '75ZQn}aS$]xjim_pZ6bEiQx233m45HBnbUb@!)24k*HFEWG8{rHrZSw,@k!l/ddm' );
define( 'NONCE_SALT',       'N1x`QXQ|JvV(w{681.VB>~6*2p:&kQs7=Y(o7Yqa~;/b3K^a]299gzqUo5vX=W7c' );

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
