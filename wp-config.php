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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'nextu');

/** MySQL database password */
define('DB_PASSWORD', 'Carvajal2019');

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
define('AUTH_KEY',         '`]8&ip%IxM$$bF~F#_&{L:^oOa^qvt#IT^]u 3P&bSI%^4 p1iV/g:pFSQMXvPu}');
define('SECURE_AUTH_KEY',  '4&KI.8P$ra q~+O]-,Fn2Lobj3_=CyUDQ#PjW4/iw^$aWzp3nHY_}u)~zA=j:zM<');
define('LOGGED_IN_KEY',    'w?]Gu0yJ{.04-e,x~$IJV-SzJY!rtCzG6!tPT2!d%xx_JxIZ;QDJOVc*:9NU/W.,');
define('NONCE_KEY',        'B/OW?,k#W>8],:`k7zn<xcHG&JJf}.Erea{ckgiBKY#8^mLni@.BjKiD(<Au?s_N');
define('AUTH_SALT',        '#@>s^!#$v*j-.lK<^~GQ:{N&=WqjvM`w0pwOlu.$WaBdSE)GUOuJFr#myi.-:]!d');
define('SECURE_AUTH_SALT', 'Q_)5sx+Wedp7A.M&U02F{L.FE9ICsD)lWIyXkMep)J2/59S?[R<s0p*Y_e)fRH_x');
define('LOGGED_IN_SALT',   'h}KA;4`S8?,9.{ilW`wh>K-xN,hcWeu^+&7?d/6{Y#9%nbz2yB}}_1E(6B60!*()');
define('NONCE_SALT',       '# o+==deL1(wWuED.RCHO*cd Q/t)S{XK1}lOV8b4>}m)NO4J&t&4hdgXksS>yKS');

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
