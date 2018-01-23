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
define('DB_NAME', 'sarana');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~F:z~axRv0!8+cF<er=`E%^(1N-?2+FNy&KdcCf46Q&3J+{kW_I6iiB8K=s0*yl:');
define('SECURE_AUTH_KEY',  '#%!/j@d]OL>4.g!(U15J*P$=f/SAqctx*54H7jU=BjMCf]hPLi[b20F#cLY-StY~');
define('LOGGED_IN_KEY',    ':Gpo3DP01}e.;N3*+bJ7GKj[4xk9D0OzU7|!l~7J+h({d!sjV 7[R~DSTK26V2nQ');
define('NONCE_KEY',        'be0}hM5iD~ZN=8=~:m[fR@$Mb>1.qUf>8|_N~!|o-vimzd m3@$kh{5F=_0R=~gn');
define('AUTH_SALT',        'o-roHd)#  m1*!gzmh]$}4f,AwY*$0{mF4uG+gi?iOz=/Rt~z3ZIPS!ExPQ_@Ekq');
define('SECURE_AUTH_SALT', 'qS3XODM{a5U^}%cj,qZfrZ3/T_bd`R@NM9Utw+fEwL,#Fm6$KSP)D;Okmn]2b ;r');
define('LOGGED_IN_SALT',   'o?kq29%cc+t|CTV[2V>37,Zk|<KK S)i%<s71WZqPz@Dc{)gCHt14Arh BSwNS]G');
define('NONCE_SALT',       'Xh2h_Xz(OPk[]4J_6ofT}-@6#osG)$spp 7E^:qr-dDsI0m. ~YR-UB} JzCJ,^R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sk_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
