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
define( 'DB_NAME', 'wpboilerplateTS' );

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
define( 'AUTH_KEY',         '~YrSr-0`l[i{BpO|}$sd?L)7CW-SGZ[dN/}:Rvq5/ORTxKvS:/o| B3WSfCSNA0H' );
define( 'SECURE_AUTH_KEY',  'PEKd$y.8GtmD!k))S?D.]JTF4=Dpzl-y>h+HT4$MdObr!zG~f9`n<D?%XsngKP6n' );
define( 'LOGGED_IN_KEY',    'g0LBKI#|!tVR!/Cq3xr^afF<I#s}d@2%bP_zeL.O;sA4 7[PhChk*ed7|*<&r@JK' );
define( 'NONCE_KEY',        '<cV? }ldgP%S9I(4?wirNj=]LU1o<rZS@ p!dX|7oMbfme1h*4J?!y,ayA:?J:};' );
define( 'AUTH_SALT',        '@IIM/Kk839n%UD8iy/1=PN#Yw?V+T5i43D4l-elYG!uEcJ#]f~;EL1R!HvtmHf9e' );
define( 'SECURE_AUTH_SALT', '@M}INqX1[QIgArM6!UO$%yn_9-u;#0ZY-JidjZbU,j9V|u& rS(6N1T[AePGqc_]' );
define( 'LOGGED_IN_SALT',   'kyoN%[9e_X%g<NTFc_y>G!nVb*K8[w0ufUzsSC~mh/!:fBn>,5lI]e#^+;;<.]w.' );
define( 'NONCE_SALT',       'd__~nMO}52AXGb$DG8%fMRdXAD3,]U]K!s*BDQ~`iJ]2?NC_SQ2hT39juN-qJd%*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nmj_';

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
