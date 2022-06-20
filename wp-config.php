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

define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);

define( 'DB_NAME', 'moitruong' );

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
define( 'AUTH_KEY',         '@_lL6.HC(OB9ImRB3Sb(a?pF[t`+czb|@mWxo+4vB(LtHkY0( twwBFR^esd<aUC' );
define( 'SECURE_AUTH_KEY',  'y:61>+=7{|d7e*sy/ &q[g?NB1 9ec!^QkHHt6nJTTf6m~xW!G=`JqMjwf^1aep9' );
define( 'LOGGED_IN_KEY',    'kA|KfNYPmLS.*P0)sCN9%8+})Y5qkuiM9sE{N<skwokE}`Xu<Q(Ts7j3AFC,Z!&Y' );
define( 'NONCE_KEY',        '^O/NGBKbU5J.?SYgi#y._3ni;U/7YO)=9M5(N&i]%iyKk_!r&a%{DuA=>|/dW(w(' );
define( 'AUTH_SALT',        'i|kWGsj 3 li LMq%N2X/1|*@8`}P&@-IdiU0HC~TN2vsH@ vEu6w iSD0apFxJL' );
define( 'SECURE_AUTH_SALT', '[6(cM  gI7R)CR@R{<KL[Pou*DXxEy!n%{$U$7zm[_XrVh=eMd&&PP,kwX`Dq^iN' );
define( 'LOGGED_IN_SALT',   'B9,6?|D?7Ao]sY-eJz&Zu-8p^p3m,mki^#fd>u5e8Bv|-1prK B>qV3/ATdUX3vb' );
define( 'NONCE_SALT',       'sj( Izm^:7qfU|:=4n=iKo^=}?kQ3I7j@Luh0M.mJj(&lek<6Tw(; IK<#GI:G^5' );

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
