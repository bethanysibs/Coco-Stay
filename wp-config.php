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
define( 'DB_NAME', 'grau' );

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
define( 'AUTH_KEY',         '^aBJK/zInd^^F&c<nim$#Z/pb~$|:LH{wQI9xrKUo3!4slB1$ OkD4fcf<EUCGUh' );
define( 'SECURE_AUTH_KEY',  '022Nkn^}^5;bt3KyRkR=kwmy4zb1V)zy.<,unnXg*I3 jpza]yu+Y5/aKC6I[Rc}' );
define( 'LOGGED_IN_KEY',    '976+0NCH*`ej/or#}{OJyXq%U N_bN oR}Y>.&glplMYl9.svpN5j5T)ZZxh)7A2' );
define( 'NONCE_KEY',        'CK?/sFy}jhDN&suIA/C-dvayG&2d8W!>cf~9*e!u`tV<]WL:hP)K0 `%o~7Bb4 =' );
define( 'AUTH_SALT',        '}]r<IEALIoY@a{zgp{*][6w[<:/;YDLu0]C1cXSQNKz|sU H>7A6x7k(jS.&0*OU' );
define( 'SECURE_AUTH_SALT', 'Kt j/~7uNuc_VDwv$R`ABX8`,4*V,yQ3GhE>!&yQ`&VZ:=bJNvwye>U|p54qi(#%' );
define( 'LOGGED_IN_SALT',   'O%7Gu>mKI^}tjk#lcK@: Vt4s [)3)j+!i)%qm]JmWI<#vY*YeBajTM5m5}%+xG}' );
define( 'NONCE_SALT',       'wV]?Wt-Qi/OYuV9G{;StkHB$|rM|1Cu=!4^ON?Bqn3Uvjt%9HV:g*6Z~[}N.T.uq' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
