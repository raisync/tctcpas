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
define('DB_NAME', 'tct');

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
define('AUTH_KEY',         'V@SjjJa<Vtm#Lqb@05F:C%)}qr&MI~2Dwk%I3RIbYQ^d.YKs3j_2_[dkXk>7wfYq');
define('SECURE_AUTH_KEY',  '6mGDt./:B=ZM,5RPFuKW* /tqzI]w9lU0tj1Vb#phcrCbK_V2C%CwGfCc>-{cUG?');
define('LOGGED_IN_KEY',    '237IT P6GrmUG&l`bIlBy3no*x6XO8c!#O7FO&oV~`7ak~9a# CYhk1;25n3<5i!');
define('NONCE_KEY',        '2)hE>Z}c_-x[pDbVaN~#d;SR=:C]t]6Oy[;ft$(E6-el>BbqhWPxNr5f00Vhi[R.');
define('AUTH_SALT',        'IKgBn KF^5CnpvzE|wPDK#!S,>BUCh~~Pw^wy:om5KNLEV5!X9<bJ^#-y|.kc; /');
define('SECURE_AUTH_SALT', '/8rQLb{xam-n#qXL5>l@WPix3 dsWE@<{FVLu1)KfmXCIA_(BwLsW5Av?A#^|EIz');
define('LOGGED_IN_SALT',   'wpg_QgDWx64V#&A$MID^GB7I+~-(ktD883oP|UJ~n $_#PqA3Dp 75G$(fdjZkAa');
define('NONCE_SALT',       'ED-`*kKC!<Ro<*`iQQLqsD{yfNUY{r[3RX#^3~KDWpG83{^__1j]K;mjde/}%VI|');

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
