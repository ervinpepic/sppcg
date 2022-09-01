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
define( 'DB_NAME', 'sppcg' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'hack7319soft' );

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
define( 'AUTH_KEY',         'cgh:ybov2ek^dLr9h+_:AOQ1rIvG7j}`?(lfK0jr!%bHF&y)X8&%_Y?,z]x9/2{w' );
define( 'SECURE_AUTH_KEY',  '5!!=F6/kmt82N32hA&hUTdx;5rhh+n+(:w>q^7vP:#n$:cDm,K!DFn_^#QQhZzLe' );
define( 'LOGGED_IN_KEY',    'kptR/vxjx)itX]eO[tWE]=}OgzVkM=ddv!K/kDn-G[^c3;h!d2;{:Rsk]*o)nE`K' );
define( 'NONCE_KEY',        'HcJrd!33?,([77H$BWLX$7F!#c*{/:D&SJm5g_*{A]Kt!{t|K!TD62zuXueBh,D=' );
define( 'AUTH_SALT',        'D516(n5e8jZU*X.6<<!.jNWP%CK.-}~Me<Ivoz*SH)U@URN_ai,h6Km e M?E(*H' );
define( 'SECURE_AUTH_SALT', 'y]sY[^N<cltWuJA:U0]VaSpmS.E$QV,dj2UGoLP^C8!3~0| dKVo7+f7:x_4hd_g' );
define( 'LOGGED_IN_SALT',   'u]=?)[<=ityuu/CJ[@x~0nkS){U0Y1vwDzpW +dLEeNXFV 9b~ ,e=H}R4t@:Qfb' );
define( 'NONCE_SALT',       ' <,).[CLVi`-X:sXJ[6;.jsNU7(vUIeLxVnidH!uC;WK)$oa)~ :0|`:hG|T`~r9' );

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
