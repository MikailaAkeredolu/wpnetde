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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'localwpuser');

/** MySQL database password */
define('DB_PASSWORD', 'rags2riches');

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
define('AUTH_KEY',         'k}:|b2_UTh3QCCF@pm^pTgAYh@ g94}L|hnd[~kdPL$jQq{wvK5Y>80C_.^9e-<M');
define('SECURE_AUTH_KEY',  'O?}Z|t6k3Q%J4>gZ(p0xQ,2``sa68;*_GzE=7)}t2*rulMXIMLQq,n%BI%}06u.f');
define('LOGGED_IN_KEY',    'f:Nhdi_W-{93)fZ@zg5BXCW4U(n>Y%;FhQzf$VMPp4Qr1Y}|dSm-)lwVepZM&Tn=');
define('NONCE_KEY',        'sr9TqJfCy.K+pr3K-*>Cp/kJ1ljuFBaXecQ^]5`U9&Re[!0S6<H_^XQ:pqB]WRv~');
define('AUTH_SALT',        '9xwn!h/Snp!a(lwW#Qx2rnW*C7`K3,1(rX%-axQ9^}E79<`)M}NI9kSn#[UH#itH');
define('SECURE_AUTH_SALT', '#;sIxgVaI<-3fSdz6MCECSSuGWkS~n#VJUSTX!SWPpJ&t0?Rg.ZG,_bpe=T gy:7');
define('LOGGED_IN_SALT',   '2S[k)xOiqz$Y09K1@vPW}vLJB9}FgI$Mc4[s+9,zK =54ZMPvO*7rx6VIyb<vhNI');
define('NONCE_SALT',       '5WnI[fz@%8m932K<jQPMDrr}cDn{4`$VdHexawDu+NX;wkNk7!cZf rzH)QZ0aH*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wptest_';

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
