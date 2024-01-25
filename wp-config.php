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
define( 'DB_NAME', 'wtmbcn' );

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
define( 'AUTH_KEY',         '6kyD,_~NyJ:7sgbNDZ|.|.$ Xr$Ff^=%?hkG#x?1FS4Zt`Sjg])&tt[W.5aD_8$Y' );
define( 'SECURE_AUTH_KEY',  '*a.G/}9mf4&*jMw}3iXnG^d9(362C{f>6o_i-$QX|ygz`BP@141,*TvA*j_gSq%3' );
define( 'LOGGED_IN_KEY',    '$&~aozOqS5`EE.+io|R9W7{z!Sd(8?w=PN+k;#ELTSThia5@Mvj4pH-Lpk2sIUp+' );
define( 'NONCE_KEY',        'C_7(-3_Q^H9*9zN7qFC;X&sT~dJXhTZUQfg2kMz}.Q&cl40n{Xi*o#Ic1OQY^{wU' );
define( 'AUTH_SALT',        '}-#Rx/qux4MQb~=YIAzA(D0--{A}cJ[a# 0oQmWhAF9|<e^C}#Oe/DCrhZivr(zP' );
define( 'SECURE_AUTH_SALT', '$v2Qg_zu~q8`cNFKOFN5V,R,7mi[-7d+SMS]D:{6idD;50+*jHcfDexfV*5 egI6' );
define( 'LOGGED_IN_SALT',   '6]j@8KcymNrY`aOg<!,if>^>237> 7(;#w[$D/Zq+9/Tux|%`6vz<Zl4s:ih,3E*' );
define( 'NONCE_SALT',       'm2U8b&MzE-0Yl>foQR9*z0JCikoNTBsw:,^EF`S-Ra0.G3=YTp[{I6^,iLzMb-Nb' );

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
