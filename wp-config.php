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
define('DB_NAME', 'xdl_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '.9vx: SH1>DbzHH;p`e*rZTu!TN:H{I$goQClD`pmCtDsg)++!y#`6LfOms=*KFi');
define('SECURE_AUTH_KEY',  '~h#C5kbm!NDv)b,|_WmY{{k?/zC/w(tOIlpNm,^9TC6p,6Q37deAI.`fFHxunEE}');
define('LOGGED_IN_KEY',    'c+N E2PHC2G,Y0JlMr1QmS<Ae^|5I&P( eN{6AVmM.x544dYuBY!0vdz2D*/lW{;');
define('NONCE_KEY',        '$eI)|PJHNCCmVy#vwK- Mfk@4Ul[f.*d@IEI1Up*5h:!P=/I2{B*VnGUA[/t/`-I');
define('AUTH_SALT',        'murx9 0Z15MMk_ |n6G{GHEGStf1F+8i:m6.L4XhfnGoa1D %{LyeTcCV.+d*[9(');
define('SECURE_AUTH_SALT', 'nmQ;ee=9^<V:qh KD= yQ7-U4qW|8.gbc/^M&,11pb;IHbDe:cdS>nY@%Ammi*)e');
define('LOGGED_IN_SALT',   'ognRuBEsTvrZ+t)SU]]2*{w|1f?EsaY(By[#qhP?x@-rIcgtnjF[k-UBVo}Il&@_');
define('NONCE_SALT',       '*fj4+uZ&l)l|CA}dP{E$d0JJC2*hqiH>)~rrnZ:7ghM(C-f+mjg6[@: m;Z4]a53');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
