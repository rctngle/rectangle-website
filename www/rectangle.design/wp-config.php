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
define( 'DB_NAME', 'rectanglewebsite' );

/** Database username */
define( 'DB_USER', 'rectanglewebsite' );

/** Database password */
define( 'DB_PASSWORD', 'rectanglewebsite' );

/** Database hostname */
define( 'DB_HOST', 'db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'WP_HOME', 'http://rectangle.localhost' );
define( 'WP_SITEURL', 'http://rectangle.localhost' );
define( 'WP_HTTP_BLOCK_EXTERNAL', false );


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
define( 'AUTH_KEY',         'Hh3MQz9/VMVUtOZ.*f#wG}~q>/JR(A.^_3@F/$ $9yV@k{}`304t.;}9*Vtg2{gk' );
define( 'SECURE_AUTH_KEY',  ']k#riU;Z-Q:Mf:HveBg$2FEy-su(>,%d=}S-7.FZZ=$d8GizxGecbu/i+X&u_L=}' );
define( 'LOGGED_IN_KEY',    'fCE;}LkTSRBDLxum3[ALU(dp%.9S-SNwypA!2U}:JJm^$+wT^`%!O5 (:``!qSQn' );
define( 'NONCE_KEY',        'DO+pKwE=B&Lr$8[y@0jcPAOv/fBa(0`4~ZUS0]A|QJAz=2(Z{L8]70HQWTGzF=:h' );
define( 'AUTH_SALT',        'k&$2q!2Lg)&A/c%zedrqSUeVRHIvqMErRdGP0h]T4C3OMqd@ 4}8r,<h{K9[r2ou' );
define( 'SECURE_AUTH_SALT', 'XT(#&ppz1%5>$=P8r~0;J}9IU<S%ab f#MwX8$tsT ,|5.<YqB)6aS76 2P[76T3' );
define( 'LOGGED_IN_SALT',   '`E8fyo.,6+Xp8(i[(!p_Ja;vsOP)24%|Ie_{tp20Jw!AkVk1cnbeXd.0#d?g)TfY' );
define( 'NONCE_SALT',       'B#pUs>m8AGK-Tml~dD$*ly%rJ~J/<b#o._N/Ap1*DKnte-Syx%>)hP(hG{ywD4/,' );

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
