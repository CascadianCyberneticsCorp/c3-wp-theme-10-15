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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '|+!gaa2Y-5R4C2dQQ5P)mQ2$#l#ya6s$(}U<-=+g{`ij!S**^86(/nKC^+xW2X)-');
define('SECURE_AUTH_KEY',  'SW*MCMEGZVpYDuQ;&&<V2jL8_Y#Ujvfd%:}Iw-.grI$&R@|.lv*U3J08q1]RZSkd');
define('LOGGED_IN_KEY',    'G[4Wkr^>DPu iX?=Vp 86_cP]|%<teNu@y9$6+ w.Fju97>0g@XH+GV>v:Z}~0[&');
define('NONCE_KEY',        'oroO]L_30D^ ^UM|ha-D8Kd72m|epWWtL7I3RNVC+y&<yW<05]y%dXu|9G&?&eJ&');
define('AUTH_SALT',        'p|D;z!r:K P9Hcj.Fn %v3U Ow@H$=Q+liLADnJ3Bzi9He(.f1Q54d%>E}Gq(b|p');
define('SECURE_AUTH_SALT', 'sM$MYLUC?vtV~+}K%s)WI,.W!.Ul>=(h6?Bx-TwG+ ol[ZB||qd-={FAbB4m]OFC');
define('LOGGED_IN_SALT',   '$yU@WXLnutffY!>>=zmbd`oo[;^<EhF~VEkZOn:+aWpFcS3d/oofF-s>WE|>k<}@');
define('NONCE_SALT',       'HNN})gFuu}`5+;Ijo_f?-b(]=+}{ ;-*z]|Blbo]-pIR1Ezgz5|,eL]BN^r1.mWJ');

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
