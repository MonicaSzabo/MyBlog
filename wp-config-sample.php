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
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'rL<L!>_(s.Mek9TBwGCa8-%mNNF!636F+hy)K=L`oiRzg[2D++HSC4>>92|/-AX5');
define('SECURE_AUTH_KEY',  'y,=J3Q`EO:q!7#TdB)umts5t2Cz-{L;)fKEX+MkNukM}&K:liRc:Db$fOi<3$AYV');
define('LOGGED_IN_KEY',    '8^W;-6,z=~[?a*=EQnzWSJ@LwAVJd?B|U-@.z|,~N<i<tmtm|F0bM)T|TY +2-$*');
define('NONCE_KEY',        'i{vsae;(<-tMeit%Sm- 8w8~k*4dz- -90>-n)XPe]^|0NK?-Oz<8D_A j>Ul$xZ');
define('AUTH_SALT',        'fSa[pogPbPp&F?!p-0W/xSOi)VC~OC?4->P,lcoQ=e=[~MOhr{3)hMn0QHv /1sw');
define('SECURE_AUTH_SALT', '+:9``o_s}Z^hDz=7|9*l|dsG]&-l;oYo63C4.)}eW9Rju Z2*>bN>/;7!c_8[|>7');
define('LOGGED_IN_SALT',   '|c2 fPLR4g?]B-$AswIyT=mL6<:G:c=BMY+=O0k|hhB;TL1rJ/B|j+9/W+t q,O>');
define('NONCE_SALT',       '9Q/=q<VjT~,h$A^;GjB0eQl flUPTnjIfUS{SU8&ufJ]eU;ohN:<]GV-181r99kU');

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
