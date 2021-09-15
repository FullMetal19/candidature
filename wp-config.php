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
define( 'DB_NAME', 'ussein_candidature' );

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
define( 'AUTH_KEY',         'A&SJq8sR{.K!olQh$YSyQZdtLF%KONQHLdjAcMqaa/B<)4oPq$S$0R[%FFCv[<Z`' );
define( 'SECURE_AUTH_KEY',  ' kbR+.<]j7iq?2 kjo%Lmm!!X3^8A^ZtvXgKVF4pzg^+Nq.|2KY>@ssl0-``j6{1' );
define( 'LOGGED_IN_KEY',    'bX.ufj,$O1q<d4hM<!%v<x+^mahL</s}+4Uc^*tY[Iaek0-h=mff$ fyDYcZ|cy!' );
define( 'NONCE_KEY',        '8-!7AMSzN5RKZ(J/PKOG9JFCGqeY3rZ&?/(R1pHXXDHY5?*Q/!}pYrEr.>`svW+t' );
define( 'AUTH_SALT',        'y}s<Np:MzX(QR-[n2gjV@`B7kybP$gVXt{GNPy>d|I:BDUslT^?=D=B+QkK w Nu' );
define( 'SECURE_AUTH_SALT', 'fccfSMq%sL|9@5#a}nG#IOXBz=Q?ub`7:r2c(r*cD@z{f0|%jb+g=xWXn=%,0M}f' );
define( 'LOGGED_IN_SALT',   'PZIhBJ1_C6WXo#7&c<1jWp|Fm+6CS0Ist!q+B#+.SSI[4_:=_)ZCRUdn,8?DSND2' );
define( 'NONCE_SALT',       ':>SYsze& b4r&V$IJtLvm4aY<+KM;$>05^S#b>=]XG<$1fl18qyXDRu2Nt!dh/?5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ec_';

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
