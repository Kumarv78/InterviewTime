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
define('DB_PASSWORD', 'vk');

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
define('AUTH_KEY',         'dZ).c>}rV$B,d,q9+@7]7(KljioMiDrLBpV({bQfvuRD[i7E`(hlK|eZL1_ 7UfF');
define('SECURE_AUTH_KEY',  ')`_MFA.3!@D%-E9{nF2OU6DX;d_|u_RAH$`Cf[(/Ou-@c<fRY|r@3$mfxnBjUXZ?');
define('LOGGED_IN_KEY',    '1oB%kQy3fP=q^ZMT6;ZgA-M^].28k@`hv p!u5rW+X*{u(4@2_3r>~Fi8$8,-[3Z');
define('NONCE_KEY',        '6%.Oi=~A(#_D*6`i755/:)%I0>I0iInbpqF_=tCOCgrsAuD4fTNyHr:)_&E`y?3b');
define('AUTH_SALT',        '7p0IGT?=b K6F=rcCzTce:> r|dCM-4OqGe2.iZ4[q %{FQ>$vCA@a4CcLXd]~k(');
define('SECURE_AUTH_SALT', '_R/p>-5/XC41U11~bo7r^*l6g$KcB#]z0u6XcYw_X)d*G[:(j)[RF 05(h*h3.#|');
define('LOGGED_IN_SALT',   ')C8NBDDs2Ks!iB2l)e kFt,p!F/D?o3_,C`dCiNr(l$;Fzd}yFQw$r9Kf0V9}mcZ');
define('NONCE_SALT',       '_wZ#%;)RY|`mL.Y&XW|]~;*]~{Pun9~D7[xdWv1c|X6NI8dB+DmAi p%VH_-Y@FI');

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
