<?php
define('WP_CACHE', true); // Added by WP Rocket
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
define('DB_NAME', 'pnsmachineries');

/** MySQL database username */
define('DB_USER', 'root'); 

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'APy-^4m|u0z{P4onCBFf>+T:*w^jBgLEHtI79$r4*?6x@am:YgTe-0-+^(fGOt|q');
define('SECURE_AUTH_KEY',  ';=(L}|L|w|#g!+zQ)A5IoG+rd2L76>>b6i!-!5&600SXKVa,I}@UqxHw93!`vcO[');
define('LOGGED_IN_KEY',    '1+|,Kgq6T~swDZxrICdZ>i9dYX7mH>w8VC|8VErw1|9<?}8gN+CN~/lrgh?hF@qa');
define('NONCE_KEY',        'rhCj+h`v+cp-+T-1k8,!sMqwO`|]%_H24j W=ZrUiB:(WC+%o<h=9|&o,9G!J4O2');
define('AUTH_SALT',        '(t/|-(hm6ddqJC>1@y&=EIU.zjND9YrCSrlRwG=LQ$_l?68:Y&->&N9Jpj^hEaWI');
define('SECURE_AUTH_SALT', '+K9npv1PJ7x_Cc5qZPT^%[J~HXNrXD<dZn,}4wlm@)d=W+>qB/jm>Bu#4#>+6n#$');
define('LOGGED_IN_SALT',   '`E5(lb``*jNHxP:~vCNcF!Tw:x,fg|_=IIYTl&;ibsD_Cy}Kf:1Ku uT9zV L}15');
define('NONCE_SALT',       ';j]TNa#MEXxGV&fl8#5,4cOZ(OQ`2HT5-Vp3e+rr8z3S`X[fGP!Ah^[|-#|hVcGa');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pns_';

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
