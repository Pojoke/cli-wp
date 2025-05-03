<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-cli' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '-B[y<Gsco{Lf<KlH0o{D~??$#Wqwt`i`W]1)=C4y{cwbr^Rx!*frWAxL6!1%}[FC' );
define( 'SECURE_AUTH_KEY',   '%A7|mnOq 6 vqgi!R5L}=5zO:QY?8efp/3K7Pv1h#LBxsMq<Bc_SC|$?as9%BO,,' );
define( 'LOGGED_IN_KEY',     'uV5|SAWpz/^Nk&QKJLT[0/l$zHt6|T@AAs)#0lD4~e!Fy|4ea]k!%9iU`~V+o)1v' );
define( 'NONCE_KEY',         'UH5u6BB7)Jar*_Tyo~R|<m8Guq|]Ob|Zx[K$M-j~vfrttDk:~Ai9;Ye ]b~_f`4c' );
define( 'AUTH_SALT',         'K=Eta<~>F+?8bJ/H2hD.Ll!Z6,H]&CO/@& 5$@Gs=+F96 P-StQyDG~~OLP%zE-P' );
define( 'SECURE_AUTH_SALT',  'ZbOSQ%?;<=?p~F4GA^_t7H;QxY7%%Pj7PIcj|RR17+O5If6G7tpt9l3y?m~J|y02' );
define( 'LOGGED_IN_SALT',    'oNN(2,Wu05clFi!A,;},9NI*-BfhYUqp d=^h3LbL/$xk_>sYGo]?(J]F0?) R.(' );
define( 'NONCE_SALT',        'J+JFt>%2U}d6Zl5>gv*{d%7@wx`gF!3@GgjT^hx7_2[/+`W,2%b<0Fjs.gGcesh[' );
define( 'WP_CACHE_KEY_SALT', 'b)-3c=nsFl@P(VA}t4JVS.hIwmHV>XeB8nI|DVts}a?%VViXk2d3(]O]f|[^RG;P' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
