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
define( 'DB_NAME', 'baza_danych' );

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
define( 'AUTH_KEY',         '$O`je_Vb#CL>8E*j-GHk3!`QB! G9kBT,0Y{#I,(`3U<n&$dLjXnvoUu8.(`}x`l' );
define( 'SECURE_AUTH_KEY',  'B@6@@NN4yJ.ZHDFtHf!;Pr/x,@;DCAlNv:lRMsz%7]xh]5X&R#c~*C4iff]d{_:,' );
define( 'LOGGED_IN_KEY',    '`)uGO?dE]-gyy~t-UQKs2V]l|9aIb}NuVU8~@YkGb33iXL;e&!nN$C.lb+-ILOXp' );
define( 'NONCE_KEY',        '=H|m#Z.p~28|Y7X/OS;ef:96p3{:8.EgZ*{?LE[:2cA?2;weQ q=~B<a=TTf>1D)' );
define( 'AUTH_SALT',        'bpjGF|#~bdU+v;3WRKJy@cmB7DG.n_s$u;VG)LcpA[Y%PeMVifLuM&%bxVF<2o+`' );
define( 'SECURE_AUTH_SALT', '{<9,` %IOAi4_x1Tza]XYdWzz-5@dG B=#|<3Yl:4c^b8fKq/]+?&Rumeu?fjWAm' );
define( 'LOGGED_IN_SALT',   'n.$V+(RpSeVyzHImVd?i:3l6(HD(%y_q/1($! 1BP4j>v6y{)uOFs>De?[AUzb5!' );
define( 'NONCE_SALT',       '4f-TS&A/au[_&hpp-O22QH]eo_[:8^Q[=ru<R/vrI &gL@whf^-r~<#12g1Zn|2=' );

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
