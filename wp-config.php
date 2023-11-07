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
define( 'DB_NAME', 'test' );

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
define( 'AUTH_KEY',         ':8WN!8G&]K@OE}X-9m&D|^QyFiw3WwbA)aKD$9LDAk(}?7y47BcnHCgPHYPTNy,2' );
define( 'SECURE_AUTH_KEY',  '8`+y0>p~ev[?(#Uy9XJn0<KXpf-iz078~hT_A-Uwl?yDFC7hs!/WU9~98[pCrc%,' );
define( 'LOGGED_IN_KEY',    '`d*zLbf_8m_qyzb jWVw!AKv%$zQ LUHt<+8dhf)Y+S2ItgVE.42^.pI>ibC+D5.' );
define( 'NONCE_KEY',        'S_pQbt~_x,?h:Aeom_V$)q?:P-&6e %3Cxwz=:~I8>v%!# e{jT.!v1P+/IP^F/y' );
define( 'AUTH_SALT',        '!ky[7UdO4c)&yQPM/@-0gg1c4W<YsF$ ,9jG0,:cr3PW7,d:$dEqN*H*X5FO^*=<' );
define( 'SECURE_AUTH_SALT', 'n 2/lxm&T?zoKprz(0]hD:um7xC/OP)xhfT!K2QvJix5@b82FSH:5eew.4Yi2*eq' );
define( 'LOGGED_IN_SALT',   'gZ`n:o+V)LkDYh[~z*m+ ^i80Re0I/UvtXcea/z/[HmO=KD?F1|JXA@vM2Ej|(=2' );
define( 'NONCE_SALT',       '<JOUWw,[7)(5r8=Iya$[iL;pUJW[.B=DB^!;_.}|;/<]m0AFjF=,${ Z,o^Y7&Fr' );

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
