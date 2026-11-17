<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         ';HRWbS>tQJ:}o0z[s)cg]Q{Fcn}nau+&R`q=x!sH9YUC&4ckhK2Rrnxe1 guf;>f' );
define( 'SECURE_AUTH_KEY',  ')-ZLA&60mxS(x._^l9*zT.#vLVb0&Z[l5:=-1P-]5K^{OH}0Af!VTrzv/D}O>$1f' );
define( 'LOGGED_IN_KEY',    ']xJa3{QADj7&z>[Upe$G`Ojy7!yb$pN-ukGJoQrs!dLp[cW$rBpu.^KghE5.xk#,' );
define( 'NONCE_KEY',        ':Gf)x~ig6- snWOPKmGM^6#VSy5<9^ANMSz!c#Of{M(/{r+t1{h|wW$;b:C28B5,' );
define( 'AUTH_SALT',        '-ZlQK3@Qh)qc&dlhJn-Km;7|3CJn_D^YhL^X|+tO}|=C|C%Su_)}=]s#uv.]XR?N' );
define( 'SECURE_AUTH_SALT', '}b?jQ+:uBcq=Vhpsqg=7?amMQip~Od?4BGX#hw=r;Vo,0pQcIpVOWW>f><.b_AeF' );
define( 'LOGGED_IN_SALT',   '^e7,9l?7 :,&5=6{/P m%U^Lp8L<)Bo:o8iwaL:6G:3sVL4$My_20[p=.s>k/G=,' );
define( 'NONCE_SALT',       '_T5RW$%cZ4Nyw}Y(! !W_~Bz$F4FJYy[wcU9XQGBE-Z}k3zJZ=B5X$EsWP*B2;/T' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
