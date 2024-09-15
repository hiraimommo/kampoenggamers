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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kampoenggamers' );

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
define( 'AUTH_KEY',         ',c.B:He~]rUcu)lwi$dZ-YxJno6^sAVj,I9Dh%g#e@iT60;yX%*aN%]Sp<h$t_+x' );
define( 'SECURE_AUTH_KEY',  '{^8p<{JWTPt^8PFNbl#j{]oGt&NS4,<PRlWYabYjlWqdY)4Kd/u|@A:WA`7S7gsH' );
define( 'LOGGED_IN_KEY',    '%%IE:)[~Bfg`.^{^a`?9wI.hobr4,Bd{sl_WCDDZZCy>a]aJ)||i8qnAZb 8l6!_' );
define( 'NONCE_KEY',        '>,XhV)<$c=GWeqg#},9A]G~<T7`D, c(d!koDe nz]H?oZd)KUkzo?S2DX#&`BRS' );
define( 'AUTH_SALT',        'TTm@-|Wo=*dG&G0mh-eO7H]G!M?M$9Sf:ssb%.B2bAICk+]x3a<jr!d@|fpfwhSH' );
define( 'SECURE_AUTH_SALT', ')cMw/2_Nfug8F2SV|uaoUqaa8~vXz3nP1Igb8C{MAkVi|1zO<U[A!98,_|wlLzev' );
define( 'LOGGED_IN_SALT',   '-yU3Ddl.|um0=TJzB9KZ1(g,mw-VVTO!Pb1JP vgb`l5DAGOta8x)(@lpE+Cm$bs' );
define( 'NONCE_SALT',       'uD:JE7mnFclXs6RnDR@>T>.f+VQ6:GV=OmunQ GHmXx5|2q~E8I$;6::Yt4X^R0Q' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
