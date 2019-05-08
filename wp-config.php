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
define( 'DB_NAME', 'eleganthome_db' );

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
define( 'AUTH_KEY',         '}XEqj 8Qo:M1uQPrxZq:Xtri9ho;_)!IGRyfm26:#[9T=H~W`<LHRJW8jPaQiT/p' );
define( 'SECURE_AUTH_KEY',  'I@[/Z+hLmr@@6{%^P]`7C?K09l:jfl=  DP0M*BR0:/OGW&ecV.4b4Z_{Ai.` O=' );
define( 'LOGGED_IN_KEY',    '%{`1`7%RL1VUa7Og/omeH5b;us4gitC-gxa`Y8;Q#s:fjrS!RJ+ySNL<UCZTc_9o' );
define( 'NONCE_KEY',        '_2{u5F1-Rz:c8Mk4D`2v 1q?4J1& ~3fwmfEr%;m]7AdPf&ZwQSf` |Oq+Ne2aWh' );
define( 'AUTH_SALT',        'W?^c; 4{51N@~Y);-Na=%;u(Nimc]SVG/?FK.#Jl&7pU$Bc:]>Jot-k S>V}m`0[' );
define( 'SECURE_AUTH_SALT', '44kO)#_2HVXqZ`Xyi2^2Q~!QQ:mCdV_<3>H_Qu/M(;Q|5<[,<Mfq,lxGT:^iI Lj' );
define( 'LOGGED_IN_SALT',   '=0hgaMq7S[r;3!PwYFU/d+->bj1M])5_&[-p0Y;!jv-x?{B0YTHhkdQrr~i,D##c' );
define( 'NONCE_SALT',       'k[{je=l@7j|H}!S^H<`m_7z,*iXU<3x8s{]d_H)C{tm.P_sQCPMb%*|yWpd5:$D,' );

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
