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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'm*AhIH?zVzv&1xCU+$-_4IY>lMFK]-s`<m)Oo/Yvhk&p4JH lEft#,`Ckq[i#5b+' );
define( 'SECURE_AUTH_KEY',  ']bS6-Q<Y*dpEF!?)_tu<,IjN_#U1TlC41RM!B1$NC<B<<$J-)J53R_K aqN1(@K&' );
define( 'LOGGED_IN_KEY',    'rw9U3X+Q?$s]PEgTP5FgdacQMu!o@j[:))46syt+=OL7:5{0ssMV5/c&:qE0X3dc' );
define( 'NONCE_KEY',        'q[x9K?p=[@q|LAuXn}nAVbDi5t2qU2yc(>_Y.wkgYP:3w71+sn#2(q@LT&* :{s?' );
define( 'AUTH_SALT',        'L)hf[_iM-yg2,KM1:u<0_?*YkmhhVp uQ?m+4]<RqW`Ugnhx:enY-se$0`MQLDl!' );
define( 'SECURE_AUTH_SALT', 'G%i4z#vQgb1o}!l>,2B_4yNnO?sNv8(Lmuwchv6<!Sv|:C+oiP}9S6E6hUF,pX]V' );
define( 'LOGGED_IN_SALT',   'lP4d;?]DutPB2&Djr0ZK(vNvb;j-SBq[3Q[%pc]oIh|7F8v_A;B!%`n#?=z.T}3q' );
define( 'NONCE_SALT',       '54m5Yu8QJquKu3lMu`PJOOs.ARl<b@(/gCDiNOh}7AkjmXo2^u5CAH:lZPo3Y^0m' );

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
