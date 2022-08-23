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
define( 'DB_NAME', 'wlfoundation' );

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
define( 'AUTH_KEY',         'E{*?30>mkqQ(ew%st`&m:|I&3%{Bh%c-XT@T8XmMjOjWmd8GpE&yFFN@75K5JAR;' );
define( 'SECURE_AUTH_KEY',  'e/Nrm|NN$aF$> QL>Dge1w*;Pb,a-AW<bK-EYk.d<bWY,[9bkHD72ZIud[%NR}7X' );
define( 'LOGGED_IN_KEY',    'y056>6Ztj |!E.TAkQm6/?fYS{}c#Rh(tEQQIIF?4|o1yR;&|!kVzc-pZ;_F#Aaa' );
define( 'NONCE_KEY',        'RVwa[.o5^P+pgAr#JVhoO;/DDHG+2HXI7I~0#fik#5U}UU,99DH]Z ,}QUoIaI3P' );
define( 'AUTH_SALT',        'q?GmLfY-D]%JyQ7f$@8c*H:ZKH%LMck*_?P <,g-C(1=LzmXYio;}[5nO+PD$E7^' );
define( 'SECURE_AUTH_SALT', '`+xwCtw^p}W`ukaS?r_J[&*}KkI `-0=uVI I6>@aIK-P|8GtV}c/]1L~tvHh7!0' );
define( 'LOGGED_IN_SALT',   '[[}1u<M}K80/Pf-Tx>l4ZUk1rhCKB<n~&$EQ19K 0`ouT[{4*Efi40JNvvD_l+3s' );
define( 'NONCE_SALT',       'dy8Wv-@Oq1SsBV<%MIf!A(zDZ;)NBTuHWg*[*UXo%weh*2Q95N>II5be|0N,~EH`' );

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
