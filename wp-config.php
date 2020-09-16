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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tim2020' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'y:$@yKoapU8aP^khF8]$r? eG5a;%ErIK%AS9(fYfq-6SdarK3U|VdVZa<C@SP=A' );
define( 'SECURE_AUTH_KEY',  'BMd`m[~ J8aJ$!%EB8+EAQ9c7rN4$7)[S0@m]z|FZC%{2|9[`sMO5ez{PdBy([%(' );
define( 'LOGGED_IN_KEY',    '5pIW@BOu8<OsV!kCG_m[{*bO$5@tZsoA_ m0LBUrc}M<hX,/e31{y9amKjmYsMCG' );
define( 'NONCE_KEY',        'b,f9+J]EOBl8}(evxsPgZeA@ _D=0,~uIKB6vSOJ2 *T/UWG# 7E1UZ1?bg|UF@w' );
define( 'AUTH_SALT',        '|]<xD{9G*bA$SKkJ?F}sAQv 4e1^](<W+CmoxKJ=4-8i~L_5SRm;rIO0~8o1ho:(' );
define( 'SECURE_AUTH_SALT', 'iYK~v<_/U*ITV};4XYvsF_ptD7C0V%G|J~7^@r[w`*of,e@jM;ChdZR&(=GFyK8[' );
define( 'LOGGED_IN_SALT',   'rKwMng(!U]ba/D PLWRWsxBRiNo }auJ}-.z$7Fq+*`)>X:im]<*_@K}Q]H= ^t/' );
define( 'NONCE_SALT',       'WY7`CV<7U9aaeg#)i,Q5T2_DG}(&M5fD0{|q3_-f-|?U5zfUS)poM)_JjHBWk(#_' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
