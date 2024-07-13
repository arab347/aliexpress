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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u840496083_affiliate' );

/** Database username */
define( 'DB_USER', 'u840496083_affiliate' );

/** Database password */
define( 'DB_PASSWORD', 'Monadel.younes87' );

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
define( 'AUTH_KEY',         ')Cp(BOuwfU:X$&UEHChP6n;Atr}tiilA|V{_h:n*d.Yj5qvejjSPQu(f%h^ c[Eq' );
define( 'SECURE_AUTH_KEY',  'H@w KZFsW0142i:r}s_wtl,:fMPgGWd}9HpU~>JI-jjKZB>L(R4^z~dd;6C&JSy_' );
define( 'LOGGED_IN_KEY',    '^rML>X]l.In?[/nyF()!0|?zjgk@s?:8 a=69no27PeQ.Guu`;`e=QMuU8G`WpM[' );
define( 'NONCE_KEY',        '5YN b[%|]XVP`3T^]J@O/[B/GdE?x6I8/X68<V.c~EP{@#m8#g8Vxk LC{yPB%k!' );
define( 'AUTH_SALT',        'Blk!Dmh_(@cSX}9+hXTO/kxL?b!IjrQ;t1)QdrBng7TZ=?Ccy|+@7[p{DqhRRs!E' );
define( 'SECURE_AUTH_SALT', '.SAW3~xp,KJT3ooNPYwG}r4_Efxaxh3Ip/cf3cT_ig)|~af(=IK&UOqj,Ki<W&_,' );
define( 'LOGGED_IN_SALT',   'Z1@6*HUdlNInh)]^9Qtl=5=>JcuRQ hbONQ%}#m8>Y@#CsVJTRzd,Q<<,^5rH<#j' );
define( 'NONCE_SALT',       '5xuLcv(Fy[(U95(mR8b!c-z>zm4X4WjoeyKTXozR2^Rxr RDz3/4bxmD.T#XJp;O' );

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
