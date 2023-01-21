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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_benbakes' );

/** Database username */
define( 'DB_USER', 'dbuser_benbakes' );

/** Database password */
define( 'DB_PASSWORD', 'bakingben' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ':bk@>._xsnI=QJoK!f=?2lBr6 &^(B|RP.njY9ywxi)eQTCC,R?}9}Sp_~O).YdI' );
define( 'SECURE_AUTH_KEY',   'KbmWYW.smE}d0l{LjXx6<$~>|a)b13OplN9w@ {h<?IfcN=h? Ty*!%Mod]AdQ6u' );
define( 'LOGGED_IN_KEY',     ',2_ey-un(y=vLa4lhPA0vE.0?M!O)flZMaH-s9Xbb}c?3DzzRgM^?Rs/z8iEDZP ' );
define( 'NONCE_KEY',         'vI{WSRn/@Mm;gW_KHN!&`tAS^o1ke2Y+VR}Se<_&tJ&:CZ.&>B$po[32B({uGowq' );
define( 'AUTH_SALT',         '}*CZNloRB`qJ=<($df JONSf,:U1o&Ajxei-9DZhF_Ic_S>+`~#}sr>H|U^_MJT#' );
define( 'SECURE_AUTH_SALT',  'lz3L[&3o/h*@~aa;+/$xd8rd_B)9Var[U*LN%<S(>D0 :+W[AkxD{Vr_N Z]UG*b' );
define( 'LOGGED_IN_SALT',    '~o#mV}seX$<H(@`jmeg%adJ6XzA>!}kqq,xH=]#aB4J4$hz,FM2lf#Kc#3CE,?k{' );
define( 'NONCE_SALT',        '}Z$F.{jfV%-XB; X/^460Mx6MiKGAq680QzD=aMIr;R(=dlo#-tH4{fS9Z>rPPAJ' );
define( 'WP_CACHE_KEY_SALT', 'j]3,vNdkw36u7NAerU4;5Fqq}ws=.%uVBblD_?2(-O?5]U[M.?H]pW-a%u=>V.D_' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
