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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'YB_a{-DO90O?8n[kJPL&`c[mbY~3~R[-JYdWA^N.[nF}K:#l6f>:jamC8!-|w>x/');
define('SECURE_AUTH_KEY',  'UAs|u]XRSg!&9Zkxjn{o;D1r]H2).c5x#`dxa@F|7UXx1dGB*/7Zojb|bG>El:G;');
define('LOGGED_IN_KEY',    '?;iJ)9R9w/KE0gxP.#.mg7[4vQ=!8fK2xrp&2TM7~E9hZtBL}1Iic7Q/YLY`Cew!');
define('NONCE_KEY',        '-*=_V`2(XmIPh+Tne_rT-)YoTa@_6KFa<w6$[m-9:hLWR!b}+FxMDD9HdXcN=;~!');
define('AUTH_SALT',        '(R:+k4UQq#V`Ea?g%KLY}]jG*_jd>a1B_(EVf_ |[E;tt_wk)XU]Y!.2_>pGn6tu');
define('SECURE_AUTH_SALT', 'ZV!2YHHca=2#ZSjr&u?$3-y=1+-PKjcKd4Ln?zviau rXnWc%ARg<->mP%oOK#G^');
define('LOGGED_IN_SALT',   'JLnxs`@uPkCrW[hh??6b+I-qh;L})N=iyyMc0Q=S]Hn!?pF`7}lCev28pNKT(|lL');
define('NONCE_SALT',       'tNW%COPCr}fjmjh<%0g JB(8oV*1=l@,?CJb?7~Z2-qa;pm*g^2lq6m*t%%rWks{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cbe434_';

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
