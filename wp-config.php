<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'ray_garofalo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '+Wwydf.p!/h%eL%vFX_ l[_9w:g4CS2V-p-WF5+1SR|%cX-MI1%F+~-zoNbn-bG&');
define('SECURE_AUTH_KEY',  'L2z1+R58zI|ayK|26No]nZhm 1+meBvq|==Y[Ffk$Y.Sb(n@M@%)~%]$Bu<1C9)R');
define('LOGGED_IN_KEY',    '|]n~8E%%4>y4lpwoSmx5nl8LBk_fOQc>jL/A?9}GW$.c*PA8ykc%5oXc[.0+HGci');
define('NONCE_KEY',        'e2~g[ q:4loOw`Qj*(bM7ukvZ,?StbdQ ++|~(C.}|4g/lJ)a+CX~/iyUiN<6+ b');
define('AUTH_SALT',        '8bmZk+4Hz-ei071%}MNk-@}?1Lwfp|0rs@qfwT+s-!>|k/u$yWNq]A%k@D~,|q7R');
define('SECURE_AUTH_SALT', 'i{)2gR:nv|P}mv!.gyFDG5=4cRxJr2{<33bL1Q~jx+*l+%NN)m&pZbN 9ok>Jx%-');
define('LOGGED_IN_SALT',   'SH=lYRc33_]xmk=E&$_8mYNK|plNmZWlg-B?k?Rsf&euOPjyU:A_1(-LykeaRmbM');
define('NONCE_SALT',       'D;NFCr2Jd @L)$q=<o&u}bttb,NSTKP8mZ(leBfAa~o]DLM3-E+tzx =(EE_qwoV');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
