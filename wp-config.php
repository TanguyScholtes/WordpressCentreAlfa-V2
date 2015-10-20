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
define('DB_NAME', 'wp_centrealfa');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Ui`@:y8)iQ%],R~S*JW(KHHS<Rl0;b-{6tk;>Mhxx{SOlyIL3T*0I}.$b|Cu# ,@');
define('SECURE_AUTH_KEY',  '1as1Q,KKZzqnjPGrj~H>_P^*V[Y&F:sme_n:}y Vahd 7`(0LhD>d9gGN)90+js7');
define('LOGGED_IN_KEY',    'T[}NrN/,W ulIPq5Pxe[K@uQZl4S&-{w)}|nAzY!v7G3_{8cpNb{>;|3ENRK>CG|');
define('NONCE_KEY',        'rH$c%0|bl/+OJ6zO(WM~%gOU8P!=kvVZ&cZlq9uRqdnV:!;7s,JfQ>/Wo~Y$hjKw');
define('AUTH_SALT',        'p2cnS#?9{6/^8/;@pj8Fp^ax/#z]CZ&_??dZ*-kuhZ8e9-[v}(mP:+!yMMkO1nM4');
define('SECURE_AUTH_SALT', 'jg<h0R0e|!*TAP~7bQ{/U?cIb7Nz,IQ8=_D<MNVC*pKM9RA>)vd_cuIXWP,k=q?`');
define('LOGGED_IN_SALT',   'P{-OnY}3bF~ug1].8hj@hs PR$zNFY~Bo:R=o$(b]~L&942:,|Ya3H_0,o>sc|J:');
define('NONCE_SALT',       ';]5vFos/f^c2v+)?d1SWY,pZTMq_?vEd0:@Ch<B_Dq-MH49}P*XQ+gYC>;O(2<V1');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
