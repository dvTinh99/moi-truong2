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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '|BJ$gYuDV(|zHD9q3t1U:d7YZ5R!;QW%*[/v2nR-:a9xu(^s:8xFLDE?igCC0m%g' );
define( 'SECURE_AUTH_KEY',  'ONhmyNK&V&@~MfQ%+D[)yy@/T Q}l_7O!NwI`{x[>]P;:dr;xnbg~s-/h=bB^$;c' );
define( 'LOGGED_IN_KEY',    ',}?^n<I`hGW;=5~q{2R$eaw_v2h$P)9z )RystaZIta=*8A>Dl0(8@LW|4-4+`&Z' );
define( 'NONCE_KEY',        '<t7!_d37R1+YSud$SonlA}!IvqN7}-kMC)WznMm7;xik&3vBd9uKGiV[Cf[ef1$)' );
define( 'AUTH_SALT',        'W6n=i:%vU>>gNINLE/p)B6*m./j^H(Gp[yM9*34`u;dgH?~-<34h}$l2TAT6$/WB' );
define( 'SECURE_AUTH_SALT', 'q,)`{D|,2$!_K6<F3TAF=<3,<D]k,cb/4]3HHH]z:1o(~N=.7!IJY9{t3XYcyUN2' );
define( 'LOGGED_IN_SALT',   'ss --/jo-RoWoPGiL-Yz&X3OtNQgAHoqovzZxJo@MHvUj=_RRJ@Qt5-7ycJ<X)e*' );
define( 'NONCE_SALT',       ';0Tkf|&e{;}liW,q%6.Tpblx{kx$`}0BXa5N[2w,SIoef4I,}sEa2)LI~u|d*xX%' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
