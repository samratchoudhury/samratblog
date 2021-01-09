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
define( 'DB_NAME', 'samratblog_db' );

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
define( 'AUTH_KEY',         'iqxw;]xo6>`Cfh9F0y1Ua0V8z#7o-?;P*Njg3BTmE>ZR$31.at+/jT{7MET*l=!*' );
define( 'SECURE_AUTH_KEY',  '25lI%MLW x^UBMw 3|7^6kNQ#P>8(z0y+0Xja@grHKLeTxE6$+[k~75egWYrNu{M' );
define( 'LOGGED_IN_KEY',    'ZVk7$Chj-hhfoh&UNFtwvb}Yq~_xAxHN!PQ@zxOYA=LXSIhtI*LWL,KG#wymsycB' );
define( 'NONCE_KEY',        '=H6;:o?gJCuI%OT 0&qG=/:~v{BdS5y&H4T`6x1S[;qt*,<Vh/|G+:C^VT6^3$cH' );
define( 'AUTH_SALT',        'hhrLvg~y$GpTwOoA+u%[h&0[2^rl.BSn~K/?F*I5P;)@=^^;wl6D.)th[uh>hP/V' );
define( 'SECURE_AUTH_SALT', 'T>]+XT?m-$m4!vSOp+u>0|[_6[~tWOXWxSwtt_b5-cu/O(NKlJTz?h!^MdPhbtL+' );
define( 'LOGGED_IN_SALT',   'M|/~$=N$w=1}9O+5;x3=D&pT{obZdsFSu7/Ge)ssZE]80]bDa{5OA$=ILyvZZr1V' );
define( 'NONCE_SALT',       'y,my*/qUP@@g,C50){O(134(YJ%:&G21fiH2tG[eiZ6P[u:{h- OIxj,(!q+T,OB' );

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
