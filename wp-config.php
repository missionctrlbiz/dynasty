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
define( 'DB_NAME', 'dynasty_db' );

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
define( 'AUTH_KEY',         '0:prt7D7kHvfdso9js HCQE;-?8<(!z6|F1|W7f>ea<V+y1]fvS.4#q{ElS:YBYC' );
define( 'SECURE_AUTH_KEY',  'yg<=(R(=e]qC7mPztI#oJy]^Up:.~.p;?95*xOQbA)rOX&DB#HQ:,W44.sTW70b-' );
define( 'LOGGED_IN_KEY',    'xi>Mw87#IlAtZqr7u/MX3ig+P|&lK`}xNI>f@#<3$/jBF4,p cWbG#C:ZE>]$!GT' );
define( 'NONCE_KEY',        '(gqN:E~M(,Q!~oD=2!~0Ef4f@Dq/`iv4<FHvN(*ZxY|/w9U#>qKC[g:W(s&0eaKo' );
define( 'AUTH_SALT',        '(7JWgbvBg!&sYtG&7>Y-u5fJ1>pc*,;OOedQ%0A*veH<*b^<I)Aq>*Vw&CY-wvKk' );
define( 'SECURE_AUTH_SALT', '@U2]4%cy=%.G9+&X3E3[:]X,uno0Lg?HjQ~EkMT*5~?),%/@^[pS[Eqzr 6g}T[<' );
define( 'LOGGED_IN_SALT',   '~]4i@q2jG)<SiX4kJsS1z4!o?T=WHAYq`;A jFv`ryC4qx$&.#q v`;is%UsN#*O' );
define( 'NONCE_SALT',       'b&eoyu?6/K~O0<+v[nx&0f[b25+E]!k6h$r^n#[-9bW%Kuzxev}?D+Goh[I)>Jyd' );

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
