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
define('DB_NAME', 'wordpress_troffo');

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
define('AUTH_KEY',         '!;A%rWZo{YWb{VNs j(cGj1;[=c(95o~<*<b5zy;$5i&zxaR/gqP@3%7)BK3E4}a');
define('SECURE_AUTH_KEY',  'w?Evzrfk//6zMmhRG?>6NaOele0KgNZf)!+&$.m!+{O)1;E9@RC`1fHpB=wi~9r`');
define('LOGGED_IN_KEY',    '& C}fQVWt)fU:wnZtF[DD29(9w3J[yk?8:M6DOZ2==Dp9$!9H|&jBG{Q`~1FiaE=');
define('NONCE_KEY',        'e@OT~]a_7?ROIYOpRp#ui<KAD+ep,tb!mC`wa#%wjQwuEz-xLQ2dIo9r5+2(fCGf');
define('AUTH_SALT',        'VCb*VxUl;fsN2 RlY;H[Z+trWvHHD-D3%76cCg&8[-kCe{GkghwHu/uj9z-nCG^~');
define('SECURE_AUTH_SALT', 'M41|.#SS_Qz2-j&@J}; tP+>e2-[;oL{tp;Rkp6mH/% )dnqwLYuKslB1A$+r{5n');
define('LOGGED_IN_SALT',   ']o+%#}Ja1-b<P:rj(8sM>N4eRpu9M%aTp4xR`k2)2?-+P/4VN3,Ah-0XXJQx7#*8');
define('NONCE_SALT',       '+zF5(s7pox}(6].C_mZXD-Df_m#6[qhyN!= Q[Z$f^4A1;*BMc)9K>wWLOT.Tr}z');

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
