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
define('DB_NAME', 'wordpresstest');

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
define('AUTH_KEY',         '63ubCv74cITU@AjX^^v{MH{}c/FFN=v{( Y4)K2>kW8;OjlGP,d?ReDKRjld=VG<');
define('SECURE_AUTH_KEY',  '`8X#6=I*yndNG9AvL~ksa0M;uTpy55?qbyBCXpGD_yD7BJFAa@)e$}VS-~<DHmae');
define('LOGGED_IN_KEY',    'w-Fi0ODMIf%4Gch3`CfsBrVhbO5V8Qxaw,O[RWKdsQEzS?gi4q!~9<.FuTe1?Hm#');
define('NONCE_KEY',        '%BDbmR8vwP6CK9s{yP-f|~ZBcHZlVi jeKg%RNni$JX#_P99,@?P$Xl}jomCvZ_|');
define('AUTH_SALT',        'xd+|IKo`)J%Wo)0/**WJu{L&itu,8yt9nTin*rs1rwFET4jx(Hn<Xt`!Lf{v+N{E');
define('SECURE_AUTH_SALT', 'V9fOP{K0IFTSg[}Qy-pEb?zfd XzO$Y=Ho+Fc?,{OH9*w>>w-Dp y!m!1*o= c^N');
define('LOGGED_IN_SALT',   '~dJlE33L2Q&> +85b:3OnKcmxqn{e2(+n?DB~L?I#bPby<6u~hVT`Ff=DTD0F/ek');
define('NONCE_SALT',       ';nP!^6;`.q{ W6B&b#WnT+7]Hpzf(H(aU<-pT3HoGA9,VYC9{n##W^@gUbX|#lqv');

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
