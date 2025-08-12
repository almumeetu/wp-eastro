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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '=LH;8#xb&GM+YtDJ=|`[|7Mum;E)6.=EK93.VGs]fy^dbJk?<lucM*`[Wpn.Q:O|' );
define( 'SECURE_AUTH_KEY',   '9s=|n`(W&=q{]DZ4`BqJ^=+=3dEc4a/-PR+#0l~G|nQQVu(K,bFT`da6:G`1RQ> ' );
define( 'LOGGED_IN_KEY',     'v|lDrK ~5PBv1H&>#+:!]mRWIVRHAN&=Tn,0)K.(_m@H5wC`].m%hR(8m-+Nq/ro' );
define( 'NONCE_KEY',         '*LQ{.37_VtW=-VkPwY0|dzxOVXaiBTxfoj`]^>t<Yt(iHG%UkFwyv6i)3oBF% y7' );
define( 'AUTH_SALT',         ']X1WB!c>QnWo%}E T>}|d~yW=@_VkyX,]$#BdZy3;eRff $p$GghC?nWr}OL~k]*' );
define( 'SECURE_AUTH_SALT',  '2a<Wy|!cx?X!;Qb$IeL~as0_mKQ-;]L.c]F.o8kF<Gc`0Qpl4U8OkM:]U(BB!(n7' );
define( 'LOGGED_IN_SALT',    'V0?{D`)ENUwA*;s|Yx,-ceAJ_|3A4cVY/nZpRT*G8LU]3LpvD)dwV[kJr}i7<xJd' );
define( 'NONCE_SALT',        'P>$TKL`Jf>.`B:x+BO1uAqUt&U0RutqB&>D`S=/0vxTH:21=YDNQ$<~h}0N:0g^ ' );
define( 'WP_CACHE_KEY_SALT', '!|2hXZ9^7 !Y7[9APP(a^K*8&=xMp/+ixRMu?M;oC6`%c*/F6/eN{<ml~sq@y%6-' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
