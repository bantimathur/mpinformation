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
define('DB_NAME', 'mpinformation');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '');

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
define('AUTH_KEY',         'ABdOL1Z@(<{l2Xu133 bFptWbDn2iFP1i>l^Grv&]:V5j}d5]sOzy]&)%#eI1~r]');
define('SECURE_AUTH_KEY',  'dZyP,qQ(8T/LUr5[m.zXTv4g)60i`O$PHS?hy?mpW~icDUopU~?H68cJxqGh+)_I');
define('LOGGED_IN_KEY',    '8*Neg)sVN<0VZnsa?pk`YozG}P,!uC<d+}HdXQI69M,T:!T F@v_z9&R;bP:7n4!');
define('NONCE_KEY',        'kZGu76:Hf1NFO%9rC&^(=!p38X[9WHWKZ78kxH6UyGm*GoP~Jcwm#`iBl.42A11G');
define('AUTH_SALT',        'b=ys*8KUoi4aN/Qf7l[N*x$53Br!tZ{4G@TFy;Ct_9@Uv{;?mbr$m(1eBzf#m52T');
define('SECURE_AUTH_SALT', '36h]$qvUm_@~Z/i > aAN:w4[0|<%*Va#==j3DeM:e^TDbn0[:lJYcb.N|<Vt?tx');
define('LOGGED_IN_SALT',   'M(zP~JtDbSQn{PI`0>g~+@]c7lI8JZv8oMJV qo7Hl2Cq&.FtorIdjDPp!7>!-85');
define('NONCE_SALT',       'fIa9^#cj]g~2o>x!6`Lx4WJS^[#poeo>UD,QES#CW;g#Ad`wc<=uY;BrdAwtNp5U');

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
