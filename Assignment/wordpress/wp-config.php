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
define('DB_NAME', 'cmsassignment');

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
define('AUTH_KEY',         '9_k@zkMP(zQ9$AH8-1oOgMGYRwQjzg?6ueSUqo$h%!XV?@+gBJxc#8l]DP4{).kt');
define('SECURE_AUTH_KEY',  'Bd|EZ(_tZJSMmUz*.(Y!)P$d,}KM/;e?f;|0.pH2%eyMnUiGbC.tU8b/jA`zY}&)');
define('LOGGED_IN_KEY',    '(Ymz|%0n#5~pew>y3h?jh~ftoih8]wJL%<N+(~q4~xzf)%5M:p$|}Z$N}LtYId|2');
define('NONCE_KEY',        ';`+tpsp1>N>vxr;&1>s,*JC>?bXh6T;.KLa6zGx:,H{O5Xzo7|?p$!P9r#pUv0B$');
define('AUTH_SALT',        'F4CVFr]y8KM0($Pc<H*TZlCr:8BD,?E7JpR8Os{L3v0sp,p#QVu*VBwiBkw-100y');
define('SECURE_AUTH_SALT', '(8OpkWp6yyZ3ha>>?gD:j5G@z(@#,D0dN7ArW-Zc]T$zgG$m3L7(@PZdrkK`wJ17');
define('LOGGED_IN_SALT',   ';+~=*xDCp7*5XLRYOV3LJW<)l~j{j-j;q272$W2}f[%U2Ctd|)Tax/ ?cZ3aPijS');
define('NONCE_SALT',       '0Ls^16#)_$[~wFb0_h*Cmvt^m0m_OK=>nl_@H!Z~fBxk4&i_y3wP:2A6i02d_g*;');

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
