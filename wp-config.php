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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'exchange_rate' );

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
define( 'AUTH_KEY',         'ZUk6Q[^$hpQ9M6<pZU`-[D/xvgwt; TUq5E.B`*Ht6zAv<#A$_Qv5i.8Kf@8yv}y' );
define( 'SECURE_AUTH_KEY',  '(}]{y8fdR]y%u!CtMqH PdY;zunt9-I35^NC?sHz nu9p{Oh7zs@S:4{egfPiU^/' );
define( 'LOGGED_IN_KEY',    'jJYB<ZOK+NoZz?FK3HK JC8w;V$/as9+%>*s?<mKTu700_Fr/d0HKL8j|SPl/]5d' );
define( 'NONCE_KEY',        'n_X:U15[z<V%k$wjMe0>Ogb09-|*{:m~)eM47cK|K/2oPZ}-ax3VKesy=GG2l$I&' );
define( 'AUTH_SALT',        'wMB{bfih/R<x`1`VG85dyhp?HCDqAL^Y&a-?9CkX3=&_0Hn0 r$i?twagxas3=Aa' );
define( 'SECURE_AUTH_SALT', '*AQZ/cE)#NvnGnAINfMfepxg^=Ro1.<0nfk02]3#h39`Ui-2z:p6 vc1+HD3QL*4' );
define( 'LOGGED_IN_SALT',   'hDLr_SMcbj*a-p4FD=rdHj5;c~c<slVhqqQ%d?-U~5aQKX0pL;{H-8Q>$3d4GD?{' );
define( 'NONCE_SALT',       '6F-}w0x&+;}#SjE=[w]W!)e@t}LuiDJPB*{F_*2ib`8@!I0ut_PZOT2MC_>&{gI-' );

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
