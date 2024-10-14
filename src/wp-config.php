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
define( 'DB_NAME', 'wordpress_dp' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'sandi_wordpress' );

/** Database hostname */
define( 'DB_HOST', 'mysql-server1' );

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
define( 'AUTH_KEY',         '#!;IxYv.h4d6&%u3 C9!*g]RVcg|ZetD{Mq&i!-aR)g`?8_or3ZMv+F33f`;G$+>' );
define( 'SECURE_AUTH_KEY',  'BTY-cfZ]2?<M@A)bvua+t#V@9#0 xd7j!$_rs]VRbbq21QE46`k#/Q9G oxI@sW?' );
define( 'LOGGED_IN_KEY',    'ih,bWL|.5Q=rXpmfR:T9|3X.Hi0G;wN tU%tDc6A1vHiQ Co0G9m zwEJ=cV2 H;' );
define( 'NONCE_KEY',        '%3VO$mnBWAqLqDG:-?by}8g<<SWp0zye,^,#iO>1,3Ps53Ug]>U%x&:d{UO6m8NB' );
define( 'AUTH_SALT',        '/X|4?a}e&0ZC(QH5P0heU^Qd.Tr]/ffw1Hs]J=m!,d$h9JJn6r+~TBA/(D|G?<Wd' );
define( 'SECURE_AUTH_SALT', '#,VwP]QWKH#ih#RCkl4ypcFHo-SZ5eB<{:l,m-/?-{rr|{mxSwn;[sx-{hE.0BS8' );
define( 'LOGGED_IN_SALT',   'G>9X|<N)I;ZJ+#U?$NP58Y]zfO7N.hfAn?pA5/.Th;V._BE&*a#H.&qIq^N,12#+' );
define( 'NONCE_SALT',       ',nPaFa3H=Do<[Q:e*n4+rN79kc_1A8w`0O1IxX%syQ-D]k:=8~[ya$4@ON7wcaYF' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

define( 'WP_REDIS_HOST', 'redis-server1' );
define( 'WP_REDIS_PORT', 6379 );
define( 'WP_REDIS_PREFIX', 'dolanan' );
define( 'WP_REDIS_DATABASE', 0 ); // 0-15
define( 'WP_REDIS_TIMEOUT', 1 );
define( 'WP_REDIS_READ_TIMEOUT', 1 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');