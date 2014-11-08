<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'cac');

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
define('AUTH_KEY',         '/,ebVkBtQ9SkjJ&K5dB6Zyr`WURi) x_6MNnV]JJ;g_J4Jv :t)_$3x; Y*NjS)?');
define('SECURE_AUTH_KEY',  '/ZnKVNBc2aZErNSG+|Fn$:^sIQsvetcO|-4:~iz#we,|?eAd-|Ln+p]}bR3K]@WS');
define('LOGGED_IN_KEY',    'bY;nyU+lFfGB+A_Ayw63.6&p^/6lB!tQ~;K4Y#;]PMsEhIG&g+@9b7hO.ZZNCYU=');
define('NONCE_KEY',        'oD?ps3]-is-4]}C;S=01#=me1[&}I1dFf)rSW,;~a6(t>@qL%FH_CC$X8.J 9h8^');
define('AUTH_SALT',        'S/~.xP[<_AeHRN-w(l^|y`|C,tL/Lc+x-7W:f4f2n4UB@43=C~yf(9-n*C/NMO{l');
define('SECURE_AUTH_SALT', 'UT!] *o22f{|)Z&U`du*SI~%V--*-8!+~Qn]]ML;P`{;VYCgVp=RdujHw(v$+S]-');
define('LOGGED_IN_SALT',   ',)Ug1-;Sa5d0ErQz$+}g%WWZU,KhwJ}w^XlqZfc-mP+e9m+rM%H[Ff1tycy:b OW');
define('NONCE_SALT',       '_%js=)6/>v|d/ ;ifCnTVJ ],?ap1S/VUu0M n$gD=1Y<]^I%bmHrwf:8z7)dKf-');

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
