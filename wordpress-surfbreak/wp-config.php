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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress-surfbreak' );

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
define( 'AUTH_KEY',         'IuKbSCA2`YY$7)YFmN8VGD3RLI5T%CB`in^Jo3Gw;u^n;`zIoeL*2pq0^_d/9da,' );
define( 'SECURE_AUTH_KEY',  'bZq|%U?jnnq_>Y%3rgVvlvxx&nI /,%OW/zph4uS5EB-FDf7oy*/{Ln=Ym0;Z9VV' );
define( 'LOGGED_IN_KEY',    '85{r[58<CE#xx)@0Lkx!s17?5wjVVVaK )b0g:OS+`n>&pR{c/}?$vH~=PamWOjs' );
define( 'NONCE_KEY',        'Em6]`0|.`r%-=ylTG560sE:.I{el^^DASDEV~6Rv)Byw(dN#9JM_U]JWYD6Iar7@' );
define( 'AUTH_SALT',        ']tWuQhk7-TW)AG]_UP;=u&lv5vz_0!@BKR2|Fsbd^lZ|Y(E>WFL%Ro?A5;DGf7v2' );
define( 'SECURE_AUTH_SALT', 'kn@]ajP%hrd$|1o SWq9(466C<<t!_d?HZ!uee=YOPE``VswZDF!LWr,j|ZQHbN3' );
define( 'LOGGED_IN_SALT',   '/p4|jg(#iNhp50|Pd^/`ts{*l:k^5VHlZM.v>3..Ke`5]3Vy<M87i.bIUyfa+;J2' );
define( 'NONCE_SALT',       '[VZh#}x3(c6OPcYW&AD#@&jMT[h `^Mc<%|(#gHmE-i4E (w:<YKuG0JjGijdf#|' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

/** Something? */
define('FS_METHOD', 'direct');