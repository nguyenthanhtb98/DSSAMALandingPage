<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4W!LodNDo9kf3Rhpy|Xm%)g`BllT7^r%*rgsQ/25_5Es(P`A`C~a/sDW}r?P]%<G' );
define( 'SECURE_AUTH_KEY',  'Je~a*rAr  Y$Wsy>>Jw<]4_zT)f8^jy@(ntKxX_$J&u.#|NmDS}:#7*-p01^NGY^' );
define( 'LOGGED_IN_KEY',    'EXwX,&1|wvAO8uR,fR5Eq)v,X(tN`&|0#?)NnwXm&+eTr974g##)]KCxrz1{j7QT' );
define( 'NONCE_KEY',        '>~:{X_FD:qHr8QnRC]_7M% EO{,U&z6zH]tTd=]-M^<Gmnu@rIz@VtF<tLr7=y+e' );
define( 'AUTH_SALT',        '&]~4x`1pXV`Oq]h7]}8k EL<c]p_$RT^GbK}d{sI+GeRn%*y-da}^HDL2s/K@GY7' );
define( 'SECURE_AUTH_SALT', 'v/_7p0bYdpk7F|D24z@v`J 9*kYLz11<`lj!-6_X,Ma7pl:#<PeT6|Bt)/C|o]Kg' );
define( 'LOGGED_IN_SALT',   ')d?g>)UZ#olV{3Cuun`gU!|/4+y3/4C23}}lV#L %,~lPj=5)&2HS.Af?jhp}AT/' );
define( 'NONCE_SALT',       'kH<STw<N^VOrS?WTlqcw~2WedERS`<]F4)L:,;(!kv|]eS{*II2`>k`.N7-EOq??' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
