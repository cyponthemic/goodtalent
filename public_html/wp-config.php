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
// Use these settings on the local server
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
include( dirname( __FILE__ ) . '/wp-config-local.php' );
// Otherwise use the below settings (on live server)
} else {

include( dirname( __FILE__ ) . '/loginwordpress.php' );


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'yakxdcortewqxw5smypaig689xsvb2vhzhd9euuz5nbtvxow4fjjefpy4dk2cjue');
define('SECURE_AUTH_KEY',  'gcxqnwkldqffzyyv4xgwhjvfznlcjfhwuk1rfbyltssfanjojpd5ygthb3claabn');
define('LOGGED_IN_KEY',    'kymisdmwsm4wlmwh9pjeg7cxyihd7irfyqy3otw1wwhrohpfbj8jyngyczlqgegy');
define('NONCE_KEY',        'xqf77dorjdifbnqpjcspfcpdcbkrihryyagrlpwqijzl9ma2ed3xpwbyjvmy1r6y');
define('AUTH_SALT',        'arxhcxzm2n92o41yrr2mjvccol6xnmppxpcgy5hemkjmfhtv0yehzv8chpup1yja');
define('SECURE_AUTH_SALT', 'fpmptlwfsaytoan7kadjtdldt0rayhemgw7pcy3g1w3oyfdawruob5sk1s5vihv4');
define('LOGGED_IN_SALT',   'hbpuirrziy7omao4orpzwylhvyhs6qa3xq5zc2i8rlylrs88sxhbl4s7qjkgscz5');
define('NONCE_SALT',       '5n5i6w78xcsg5ybs0xw4uobiqxx2kpzgtyu1nbkvba8nipnxwpyvt72uqwufsxfs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
}