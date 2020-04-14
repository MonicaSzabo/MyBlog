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
define( 'DB_NAME', 'myblog' );

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
define( 'AUTH_KEY',         '-DkB7N|K]/1-=78xu__{E`HPF,YBR]03UTk~^|)$Fp0nZO;g=Z0YxOW~YHA4e023' );
define( 'SECURE_AUTH_KEY',  'LuI$4iZqA+~-ig?/nS7MBTc~swf[9A[yS1M`~&lvq<HB}XDGnLsnju$MDo+29!!V' );
define( 'LOGGED_IN_KEY',    'pI_BB qxUqn{I/NlPRRc--1aYXuw3,Y=##!<r45v4kIaNxg>%*Q2oLt2Pellu,)J' );
define( 'NONCE_KEY',        ';%~)@QT:+_U,!tQx8=(;Ey%%=FE/c@<rtLTOaICIh!WYWwEf`vi^_a%=Qg#(LZum' );
define( 'AUTH_SALT',        '=iCN34/=jfMPcN]>)qVVyDpQ0y&n)t=-X4vW<f.0xuL3SJl(sZwcfGH3k9Y/A@VC' );
define( 'SECURE_AUTH_SALT', '=O9v&T!KIbAa#f<z&3*d16Ll2PrIvg3/V3RxAX0s?>n60=X-uf&.#[SyaJE5b0rT' );
define( 'LOGGED_IN_SALT',   'IHo6Vl%J$0RoU[~7LpV2:zH^y)Vi[r`P[IHmJ@(O-Nl}u_k4YuO~qQ0]+isG<vY&' );
define( 'NONCE_SALT',       'oV+vjYKO</Y$IgnC[W*o4-G_vfbv0Oo 6U-#J5gtZn4t5!TV6$2Tq{jq}?i#EW$:' );

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
