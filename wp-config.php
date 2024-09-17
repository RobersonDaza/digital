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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digital' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '2b9j)rL;z5q_WxJgcca^K-X(L:`IF8Z$D<k#.q%f;{qC: Eu=Y7Z 3E !.|-[YH7' );
define( 'SECURE_AUTH_KEY',  'XgspB2Tcu>>y;*Sf#>sWh2u:7r7&2?M,t9NFahtAx~hY]wPhI~$b]=0:eY{0<a,3' );
define( 'LOGGED_IN_KEY',    '&VKt}]c0n9mOSYCg8r0]Coqy[&9214sO+7>$fr}b!,Fj(h2.[3%q#z 2D3(1KTO[' );
define( 'NONCE_KEY',        'ftY9g}Q{LQ2DEBXYD<RsNR+wrJFC)s<nOYWX/2p$X(xnFl(#@BFdi_rBW@kfpfIE' );
define( 'AUTH_SALT',        'MHTB p4u~_|4,Nc;|fmj3K/,7z|s2o2e6+FKkGjh#IFM/}-#l h4vON{pe^F]]p3' );
define( 'SECURE_AUTH_SALT', 'lPPPq3 %&ky/ZJ8fq`OS [:%*GbP}-D5`ve&|tXL3W`O}KEN7Q*l>geOk/-eV|o ' );
define( 'LOGGED_IN_SALT',   'Bt`%|,zvtU*KRnbL,8<}sez:CW(1>Bd89r07z>_&7@E~~uf (-Z`mL|a`JA]{{MB' );
define( 'NONCE_SALT',       ']6tT^@C[BmW4}.1c4?W;?N3uI!V:H%Z]P^8UDH8vfnC=G]sd<eM$~M#>-yuM0R|%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
