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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'd/w#T^~[bKv,N0R_zf}>D/<2~2q2Y-= *dpFb@K@403])%aSuDo,v{9JCA{ npQ4' );
define( 'SECURE_AUTH_KEY',  'z_oD1;MGD}(O+K-31^a^Y:RVU3VedT+Agl2rKdVpL`?`!X<&N0YK~N /L}hf}jjX' );
define( 'LOGGED_IN_KEY',    ',J?`CjbCtj#E=}N[HOXZ]}thZ:XwD8Mjd+2VYrVnco7Ki0B+q|)C(T&-=M;LRElV' );
define( 'NONCE_KEY',        'zab%BKC1m[FOm?jXEmMDajE=Ez[X X+7-pY7dtII{ucD_$O`T4e7~207(Ts_LS|~' );
define( 'AUTH_SALT',        'fKj?g>AT49gcb?Yq%*ED(C5<s?kr7XcSr&(-K_pyC0;GELl`Tksc[4Ve1yOlNUS]' );
define( 'SECURE_AUTH_SALT', 'rlIw$|u>g;Axj:W7lS(; p:RPPD#1]~WijJ|xqiiLX;@AahgT?I<}EK 19rcWb&K' );
define( 'LOGGED_IN_SALT',   'EqQa~hXCy=qlYs-3m}lT#ZL793$e@%*q S2a7|c<ARg*:5a6-eBVnsJxw=ALe Yt' );
define( 'NONCE_SALT',       'BNg!}o0_g&*gb#ljHim7Cps0?F61NnAd_$10|?^V.$&f vHU 17lX$(v#T`y$$~H' );

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
