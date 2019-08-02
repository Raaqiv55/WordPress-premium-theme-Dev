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
define( 'DB_NAME', 'myfirsttheme' );

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
define( 'AUTH_KEY',         '2J;&+NP9].JbChNN!%QwY=36)5BAu>M7H/!PcQ$m!vvt4[.]|#q__;l/lO-I%m(C' );
define( 'SECURE_AUTH_KEY',  'p hY@ATIYAZmd@z2z=daXv]P@GU,nVCC$<qi*d  &Q4r5K9{!/;V#f57/*q{uj@Q' );
define( 'LOGGED_IN_KEY',    'OrsI{HU}GEyg#3g5}W6t!MNsay+<rM7^ZLiI6TDzDh!>3}Y1<2O@PE6tKn0+E3RM' );
define( 'NONCE_KEY',        '@?-K=O0Y&w)gvS)y[kFVkI%v8y@37q^>ND1$Ou-M#/-d:![OpRDpbu=}Qh>00j =' );
define( 'AUTH_SALT',        '4s,D}wk^({*%zS`[O*y@wJMod0-d&i)Pjkbv1yh$xzij~Dm<_1fLO8b|h/ 2A723' );
define( 'SECURE_AUTH_SALT', ':L$oO&>3QkDNxEC&x1}nf2g=piy=z1=3@|$y;c-6i{hn4e~kO]71|4b-$He2dRM+' );
define( 'LOGGED_IN_SALT',   'xB,W7r~40LH G6]^8QdD1oBdqv6DF!A`2>S=Gyw*-.fMEC$ywMPEF)$jDs*f*DyM' );
define( 'NONCE_SALT',       'Q{7?`fPvAn]/HK&.enR)C/+-E+al1f-y?&rt/wYd(F3]T;R^H(S8Z{8?Z2nF>hUD' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
