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
define( 'DB_NAME', 'wordpress-sandbox' );

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
define( 'AUTH_KEY',         'm7P+0C@u.LyMJ/f-baqtuzidJ#Rnx#vH1b~:,#OTwW;5CmIs]5)8<;5q|`$3d8Mp' );
define( 'SECURE_AUTH_KEY',  'B%d_2:d#zrx!0yp@B^3j/*NPal9..2qghj+QxVDVI?e<31#JAjeisg+TJE,Vg10Q' );
define( 'LOGGED_IN_KEY',    'S,xW4/Gpy5GXR8CuHJM:/Pb[YeNT8j[?bJ2nx8OYFp1$sh+enW(1~L[q-sVu_q.,' );
define( 'NONCE_KEY',        'V}6Joaa%:dXo>:4If~XI$XU}zGN]Vv]N3e-QzpFi/8:riV<e=C$QyE{9mMwB2Pt|' );
define( 'AUTH_SALT',        '7-1+lrg}3r8E@Y?Mo5qH0<;5sn]%@&rHN$|W7n@is<eN^6Yp8=;J.*tP)F;=t=D?' );
define( 'SECURE_AUTH_SALT', '9x./`9R*5F%ZS,u=%~^/~=*%!c+3&xR!Q|pAGitUj*ocL0VPhK9Efy3E{[)>XZ`n' );
define( 'LOGGED_IN_SALT',   ')K]r<=DnpCII:/1-0V?QaTYyB$W*^Ur],kQ;GebH#V)vpzP|c(;/y?b =<hCDJUC' );
define( 'NONCE_SALT',       'OC.-.4XU4IP$Zb6/[k&Vaoa__%h=nI-cqFY75+SI_BykgD=2Ib2v]w-Y[?=x5i!u' );

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

/** Permissions for themes */
define( 'FS_METHOD', 'direct' );
