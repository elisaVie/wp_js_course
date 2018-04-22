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
define('DB_NAME', 'wp_js_course');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'g84:n =NO`e=3|r)atW7koB<Eq=i/@BI-,I^^{8fVF]m|80t>V_R{nMncIKb!Vu6');
define('SECURE_AUTH_KEY',  ',0hzawRB|(RS&DlP@[+c.yOX&Hsyx[pK]*spp-WwV%>IF=a=erwccW~{RZz/;.+o');
define('LOGGED_IN_KEY',    'w4+&;<L-q*@|:d|3-OQK;JL+N+!sT41= I:w3sH1jt,|VO?z]H^Sz<RYb}sqKd1q');
define('NONCE_KEY',        'FViICQaM9n_ DPk#4l.tp-6`=[B[h[=1+7>8BT-:*|40A9Rb*.1b!XcE@X,KLt_l');
define('AUTH_SALT',        'Bos@lyN^Zi5p)T,-#ez##|)O0UL?RV@Nem.,UtbK&C{{I!0)rrDMI$WhyBNVOwb#');
define('SECURE_AUTH_SALT', '>I2/<,Nifw6&J=^Z+gGM(on|1^Bj7.eoV`T.|GJ;[vhwKki1of-v(4(!=>L[7v4>');
define('LOGGED_IN_SALT',   'TSBanvpjJRfq~`+#36BWW3z(V*df|lWj4mrPe/j~BB}w=S|fBTbOR|OrjYDua#YA');
define('NONCE_SALT',       'Cy uwu-O4]o]M&^Ow+Wn(? 0crI={p1rBEHphMhcFl5By:37XL>c|`|(2*2!X.{v');

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

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', 'http://localhost:8888/Developer/wpjs/wp-content' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
