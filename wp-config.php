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
define( 'DB_NAME', 'pinaclea_db_03Feb' );

/** MySQL database username */
define( 'DB_USER', 'pinaclea_zobair' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Scbd@2049' );

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
define( 'AUTH_KEY',         '`_b71/P~zMp^/X1RH.31is#nbiy26v>JljKCo[.yL8~!n, 6GI^RzQQp}N}}Y/IV' );
define( 'SECURE_AUTH_KEY',  'UYps#|^s,:(sL_qNvVA7s 3ZQ,Z1C`{#c)r@8$,(x2PqzCETY]POC03,J?-B{Xjw' );
define( 'LOGGED_IN_KEY',    'W6%wt9j5Ibq8p^Ib.G{:0Pk?7CFyD]w*Y4 re_WfF)R)FX0{k1-$5=.(Q**$4e!N' );
define( 'NONCE_KEY',        'iqz?JGGfi2[oa-,)@})PA9c2M+M>X+4Fmu,9*K)kwz2utsmW3v>1XtO0(d^ehFC^' );
define( 'AUTH_SALT',        '[x^hGTPnN=_xxk2?*KBm)k}y#9D~7#ebI<4%7%hTcTmG*@I*l4!MF>*kmsimE^O<' );
define( 'SECURE_AUTH_SALT', ' c(1kQc.-q9,Or;8uMy[.aJx?K#U2wee{7E &T5(wW_a1]_hJ}bNV=L6<JEql.Bt' );
define( 'LOGGED_IN_SALT',   '=XL[6l95/RG:.b1&b(<L:>{(fFyOM6!<HZmv=pG-1nB@4Cr[ baucKl&r]Ej^jr ' );
define( 'NONCE_SALT',       '%{>E/e{q!7+Bpy,0FgQ}cm*K1Sho>_v?>015&)Mo[~a<*3+2.rd?OM=|E =mjH@!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pa_';

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
