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
define('DB_NAME', 'avlab');

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
define('AUTH_KEY',         'vVEv&97gN i/&:xA_3*Xy^2NN|SJQ *.<k|5N~4J4soP4E]g?^YrTZ/M5Eu?D<MU');
define('SECURE_AUTH_KEY',  '#YU(.YPF.5j;5MSoKwMY96`*ZINkn:e#5KP<9Q Cn~::NiXfaG3LXo[xQ+q0t<rQ');
define('LOGGED_IN_KEY',    'BUR2(^cMYH]<}czs>8k>[m- V~2EJ-8!24h6swNU?1{!=rJp:]Z*(f?F/cjsk0b.');
define('NONCE_KEY',        'HKGzbz&L?i[-p4|R@t*IPI7I-?lpAtNKqgi>|ErNb!)26ruG/dP[2`dj~[$dB21*');
define('AUTH_SALT',        '6wjTtL6V,>l39fDF*nB>rm=S]jn(uS.Df>r&o>B,sp(0+yRl+[zpH*{PyGNF0xVX');
define('SECURE_AUTH_SALT', '&*`>djh^!:=kQ^tL$#0N7o=,q,+{-#%j)e01)gZGLL[O).yLf&XQ_0PI?7Hy~38b');
define('LOGGED_IN_SALT',   'm!xS@oUr_mgx}R(93MiVAb]$L&q8q(*7su@ET3sa+rU|?y+B6#MCtMFf*iBr@J*8');
define('NONCE_SALT',       '?zB%&ESH/;@p[n#yu4/<2Z3K-U1f!d:7Sz*&qvQMW|!`_FSafq_l.-)dSVnmh3if');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'avlab';

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
