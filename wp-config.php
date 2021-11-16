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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database-terminal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'FIox=6O)-8M9?m9(o*Z7fXI Jfo$N9}0]<x[j}#F`Q.2:T.D~QF~Q<hL)]dYRm.$' );
define( 'SECURE_AUTH_KEY',  '3iBO-uh=%C5|PH29WY>w%tS>soUIayTZJ*A_}*5[5Pv~IR-M!FyyW06)7L-=LN_m' );
define( 'LOGGED_IN_KEY',    'y{pf<oAB#j]fSXrsG0XIYs&OR3yu:x~$KF&gs45o8IipI3X~j,WJi7xYh55vDTOy' );
define( 'NONCE_KEY',        'mey^[r6V^y8U)y#WAi^lV_Rk(>Ui)^FVT4>85z_DX}<Q@q<~NZ~[H66BhK^)$UX ' );
define( 'AUTH_SALT',        'gK4(b&jC~U_<W{?HBv6aB@{-ozV;<3dC+I=R1FukxD5b!!A~%2Y-gz;7KArAv;/!' );
define( 'SECURE_AUTH_SALT', 'i#Q9Jk:~>4=|Kyy<A^4fb5fu~Lw2.d$Eol3A{8D3YtGQmiF/8*xpBDR-DsNG}-UJ' );
define( 'LOGGED_IN_SALT',   'al<SeLI2B![Za`K&-=Dps44Ed~8,jtH?Ddt![6]e vN+gJ:(Rw9[qM-kDF`xb)pA' );
define( 'NONCE_SALT',       'D]r52kZy5H-53 jvG 9Whe Z0.r(hLK09V^2/a=I5si4y+D+*|Uhhm!A9IV2[v{;' );

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
