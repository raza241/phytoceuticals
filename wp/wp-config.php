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
define('DB_NAME', 'phytoceuticals');

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
define('AUTH_KEY', '8WS3qt)C3x oFHJz|v&Xf0?8tC(o#zX`v/lj}l^gvZSdy+~xz_x<l[,EyG|#>?O!');
define('SECURE_AUTH_KEY', 'J]b8pHNNYH6~Lbjep< ](u{w3K0.yTf4$yLBL[jI+@/>W1xt*v^#Fr:c9),,yhH3');
define('LOGGED_IN_KEY', 'nxlAOi-7%Iv{;|7: @D-i6a-,y0kQ=6]f$8e90 w*w4F${!?>h+/BhR5:M6aFA,[');
define('NONCE_KEY', ':Y(K&k}pMS]uohe%_bwK9xa_9l.+@$3gjqYqin|dTD^&1${[3d:z0Ib;Y!eDo_oL');
define('AUTH_SALT', '6RrPufjS1QNo$[^* 6[+,lF)%g,8By>z0>r(E:psoN)et1>lNcEhPP,wTAuO&?ts');
define('SECURE_AUTH_SALT', 'rt*k+|`pbW,|?F~@0NcrmI0`X[F$CfZwS/|~|?R#Mm#Y-0MZ7O(up-p9mc4lF_Hp');
define('LOGGED_IN_SALT', 'S1L$T2c?wGz-T9MJ+`-2THIJnYlSyMJTErO^#_Y9wC$gR/;Oc:XjSQe7Zh5o2u`S');
define('NONCE_SALT', '3EQj0kt%(H5(Re#6587v7*,4M^ /0M|=&(`JnpZ^8W0EWxef$Bz GZkW++<BG|s4');

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
define('WP_DEBUG', false);
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
