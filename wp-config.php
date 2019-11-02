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
define( 'DB_NAME', 'projektas' );

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
define( 'AUTH_KEY',         '@qas&2*AF(+MmSg;9-je-!~~.@NhJ@[c#Q66iFQ03CDWfMkzK=suubr-j&[1GM(7' );
define( 'SECURE_AUTH_KEY',  '=1Gbz+c^@>Q~.*h&8bj~>ai|UY6x$7w}?A8>I}]N@T{+i<yJQ( vS5bLR@LQwbDq' );
define( 'LOGGED_IN_KEY',    'S>Su}_N<n*5yVrZD%_U(&(Vkn^8R~g(35L)?Ky%nH:rS#}1}Ds9k9@_]7&gqokCl' );
define( 'NONCE_KEY',        '}v#X 7.eUTUVfMy`aaf,b!UKok}<8N??I%UZ;50 03.H!G :A)mVUe<U{x h@YL(' );
define( 'AUTH_SALT',        'ztyyNpsSH8[^O.,H8/oz.E^++fZ_0~htEJcFOWZ$8V7YVk^cE5 X.AY[}_^.Er#w' );
define( 'SECURE_AUTH_SALT', 'k7XNv/r<Rf=rsVgPaR#dH!<K8T-V5NN*.!4#^xqyr#/o[TqJsAxqC;9mp@3wk%=f' );
define( 'LOGGED_IN_SALT',   'gW4^Yswd+}c*`>J}^e[ &3cfAu~a/d2%f:r3OgH?$@CZ[0XnkwchNo,6wME.ICBk' );
define( 'NONCE_SALT',       'c1ZNNI0_K@?MbW<;N`%|P)T%y`O@[J6.rK2EY~A8L/vro!,:&E tLQJ9^>W7 5-C' );

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
