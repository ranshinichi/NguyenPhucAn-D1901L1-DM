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
define( 'DB_NAME', 'phucan' );

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
define( 'AUTH_KEY',         'WWBZLUwt98d1$j5W`^v}I*0|vICE?jg1Zv~]_W[cd78=!Pe>: a=Yrm7;IU3,,QP' );
define( 'SECURE_AUTH_KEY',  'G5%iMp[)]Z>E>6=(]q57a5rm#[eim1Yb2ohcL~d35`l7#dS[w jQ@%.-`M1C$n`D' );
define( 'LOGGED_IN_KEY',    ']SfK*j6C)o6i/E##-]DIX *4HLp6^(EdV^Lq8j7n*>JYg(peqclG4NY}<,-+T5mC' );
define( 'NONCE_KEY',        'K d?}XFksKqwHFJ%y_nIBr[:i7GvUqb) kqRRp6d<Qq?(z??74-7Tt)D_CIh08`i' );
define( 'AUTH_SALT',        '%37Sfad=_h|UD$t2RdB+dXN:gFiSb <kgy`Zv9(2WOoi=r6n[p)[VZ&krDjWtn/k' );
define( 'SECURE_AUTH_SALT', '4N&Xvp&*g6;8hqYtnpPdbfm-pt ,pL.!d%d07JTzxA~GQlG|zAXi&bo{9@{7 OR+' );
define( 'LOGGED_IN_SALT',   'GcfK!^<Vg]=b~{g1ST,SEu:E(uGShMJCq?n^~H3Yj:P#rGcZ,w&y9Lh6cdu71)T{' );
define( 'NONCE_SALT',       '${&kvD L{3Yu/j%<1@bPeUr5qBmeF_TgtXvV-p&s1/m0A5C&.C~>ZXsJ3n-N@CYV' );

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
