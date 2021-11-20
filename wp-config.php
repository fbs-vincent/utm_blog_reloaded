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
define( 'DB_NAME', 'db_utmblog_reloaded' );

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
define( 'AUTH_KEY',         ')-u$ud!]wFUeu_L9[*&JR2^,hXE{W@qd-r<TH{oyLpe} 9me}[Z:kMe$9$okzP],' );
define( 'SECURE_AUTH_KEY',  '6h`2H))tl~R|P(<U|pqf)-*_Ojf}iTi+C5%@0E#-PwRf97uq+q58ZS-MuXsh,XdH' );
define( 'LOGGED_IN_KEY',    '0^G68&HoKmbX/O{(ooxOY{JpW^MzYt,%d|7OtzMp}0iYg,=&JucFD!:3ua#>oy~/' );
define( 'NONCE_KEY',        'bJbf9IN*dq4LPC6U44yOZtRMA?/t[i4!qur?mAfJ4IQE@umDHQmKg)z[0x?Y^y.[' );
define( 'AUTH_SALT',        '6f=Vsrg.rXYp@7l?o9x;uAhgPB gUq?KO|8($@IuG`Pvh=~AWdD#f~!AtwjIkjXO' );
define( 'SECURE_AUTH_SALT', 'W3o%u(VI%(M93+7]|Jm}O2OV,8(jevr)J&e-_R+#F@W)e%H:=.R{272&E#h2`G:P' );
define( 'LOGGED_IN_SALT',   '}}WC%! CY`23Y L*m|l-Z!lm{]zAzbnevf*A4zb5fwf7Yk}[VmkpoV&aMWu(Sv@k' );
define( 'NONCE_SALT',       'fCVs]f<2fce-H,eZ/mU*#z_Y<N;(a5Jce?-~t#,8MoX5h,k, R+YlA+}=N~|!@6f' );

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
