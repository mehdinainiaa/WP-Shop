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
define( 'DB_NAME', 'db_shop' );

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
define( 'AUTH_KEY',         'bI q>d8N^>5Nwg}4.UT~{qSjGaMI+N88E&aw:#(/Dqr`t&}t|`V+FkH0O!+:)qeo' );
define( 'SECURE_AUTH_KEY',  'SY` *R-mm. DHk{kVqaI7n#mxqAH/SdC7$p/qjb[g=bt)`0as<c&a.yn74M {3w|' );
define( 'LOGGED_IN_KEY',    '5 %c]g|IO:8(9luFiAz:S18~J+*X#;^gO-*E6FCyNFuYE6*rz|b#jZY})4dD@7GU' );
define( 'NONCE_KEY',        ']cO0IFypW,-[*#AxTA-LEr6zMI&s}nmH3,Pze_7r=6RV.jo%;4{?F^0otbJB838]' );
define( 'AUTH_SALT',        'ts?<diaRk<kQWCB]c]m|y,<}&Z;>KopP=L59D=pBElG(R+OcxEVh&k[pN9EwBuBn' );
define( 'SECURE_AUTH_SALT', 'ecE:nRZ j=g/jHfx]@k,y@Hljg(Ew9&*pJ=x5F9F]A,}I=F+@05yK$OPH`UnEbnZ' );
define( 'LOGGED_IN_SALT',   '<NA#TdEx/X>~=/?d@T{=`gLYx>Vv^$%%j:~[Q/QC1Aa;*|m@sZ1;nwK?I-Kl%u}m' );
define( 'NONCE_SALT',       'HV-{#>P5Fkndx]i6Nk,jt5FUr[|p4TS1t1OQMZnN=:P:E;I6<6=%USFKsCwhOLe`' );

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
