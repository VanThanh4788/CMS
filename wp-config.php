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
define( 'DB_NAME', 'wordpress_v631' );

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
define( 'AUTH_KEY',         '%~.d~(YF_dbFA]7SOl#{`.g`mt)-Iw2WxR: 0U~0AX|0s8Ghq:(IpGe>r4q)(-Zn' );
define( 'SECURE_AUTH_KEY',  '&b@&gRA PkY2H7:wDNY&5~3!gtk;E}oV@i@O+w=,,kH@:;8Jtj2N2@CVrq5%J=@Q' );
define( 'LOGGED_IN_KEY',    'Ir3d/Uy5u8:GbC^h;z V+@2N`<_>!?0 -U+6w_s6ZwB^kx-R(rEb+p!W5)wtNszj' );
define( 'NONCE_KEY',        'WUq.{:-rWzXD0)Pio3RuH9b*Ys^L|7%SP^F{d4dWQenPd)n0q=,v+=Si!$lju]X6' );
define( 'AUTH_SALT',        '`&O&/wmkfkXUEKdpPRH01# f!cI8|!T~DyBAgiC143#*iT!>]$; Nd:C45@UA,Bj' );
define( 'SECURE_AUTH_SALT', '19$#d8BZZc~!o(D]FA]tI=EAih&Vo{aBq?rp(fUfO8g}-I)7Xt!G(r]:Yfyrxe;w' );
define( 'LOGGED_IN_SALT',   'na61s,C^Dw&D194%8i/ Ycb6@Y1gV|nX_<MZq7bI0vWw-dVRa=c?nEH:?X-(r&KG' );
define( 'NONCE_SALT',       'w*In0CrH,;Tdl<sC:oebnVk !Qr(l!25%M0PS9]x=9FwoIjr(S(+nQp4GN|d~L}4' );

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
