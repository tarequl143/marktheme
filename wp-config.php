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
define('DB_NAME', 'mark');

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
define('AUTH_KEY',         '5^vZLZ?p^YFjq=#6}DzyK$&Y:O5ppP@Ycy2gG;Cu)Ih*.OZ(AyuBnx7,CuCtsyqI');
define('SECURE_AUTH_KEY',  'GU(dKiu7{N,3^@WX5~Mr#19U8>`Aj_C$H6 5 _G,CkLWwHXD@YQ1*/N]M:M7=u>^');
define('LOGGED_IN_KEY',    'v~.Eo}XWDs#WEEje*QoUycA<R`c$/T)-IT7xG7g;]Mg<x9sA43w^<|/DFB{GZ4Mh');
define('NONCE_KEY',        'pR/L]+C:Hn.bzzStO|tiuo,]zjnStA-4reD8.lPs.&$pI,Jx4kg[,w!qg+oUg+i@');
define('AUTH_SALT',        'Zce9(zK~FCWYB}-*_ncZ:|fb9:)i~`nd]5 K55yQcGs#$?ZN7_$?uR ))Ly>h#6O');
define('SECURE_AUTH_SALT', '`{x[ZJ(n{WX+$!}-&@DWmHc^Zb?H}3S5D4`Idvzo](5tu|:ykW1-yeS%|U|7}T!&');
define('LOGGED_IN_SALT',   '{)<X_n5p[C=+}C N$rl/Izgx#}RTI*.wEr92hO,UCdbfV5RSygw0vZz_k`^=hqo.');
define('NONCE_SALT',       '$G8L4.V(+e3=}hlj(uK{p<T;.X= jV6qO_Hn#PL,ww!*DX<uViRc:Ua9G!4TRO(t');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
