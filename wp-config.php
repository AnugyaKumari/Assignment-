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
define( 'DB_NAME', 'assignment' );

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
define( 'AUTH_KEY',         'f_Q6EbUCh+-D?T=9U9:td} @T:/JXR%h16AQCMsPu^2`xu{P3c1[yjxkR6t;}fgB' );
define( 'SECURE_AUTH_KEY',  '16}(q$^fv04dtU+8yZFtETmm^,IA9Nxrx8^Xv4ENA: ;hRDNaL[+?_1Boj}CiuC/' );
define( 'LOGGED_IN_KEY',    'gIq1F(>*1oydjb9F8x;);H&cs08K.4Az2):qR}{c5.,c$Bt8S@:jLSm;.Q$6Tlw+' );
define( 'NONCE_KEY',        '?_y<COKx*Xse^l$.P8?iF<2zIesJdF@gwVS{[8S(.!uWJED7JDvkL9J)9=1EB!1<' );
define( 'AUTH_SALT',        'Ig9B,_^<O(iG-Y,tf-9FR*?AR5%j^9c-qK).hQ;iH%r9]6h?]5@18#[*4V,1/07w' );
define( 'SECURE_AUTH_SALT', 'icmMlN/-%as*H<w}-H)`/;)_M=t/0~;#Qr?4Ao^q@Wv8VU6!<mj<ktTB}%H3I}&f' );
define( 'LOGGED_IN_SALT',   'eN8SOgQeckAIDn%kkyLu6yfO;5-}ZH4c)1[N|fK9Y{:I:~oHwC!)y]{fJpoas&_s' );
define( 'NONCE_SALT',       'h67+_ROLowIHQ_gVd C-v!C+XITaNF|,l2Y(FtqSV;! Gfpbp<U,:DU!hZ:iyMu?' );

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
