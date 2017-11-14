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
define('AUTH_KEY',         'l:R!DL3yUe*9%0=|usY@f&7T1&RVf:+.b+mFx4y_P/]u/h4]x{IbU7Y2$miVq.&p');
define('SECURE_AUTH_KEY',  '0hW)L#Tmb`FF}h;A)~{2*Xcp/!I-j|i$TB1|a9~2!Ox(n5gnCXdBh,$hu> 1F?(?');
define('LOGGED_IN_KEY',    '4p2=>^Ttp) ..wM|fviNv6W4QO>fc= @ksA=sX&F|TH3c@fV%}=MvabP3^)gA*7[');
define('NONCE_KEY',        'zXsde/1|A5T/e{{+7`QXemD8LH{ZtOw &&mpIK?Y^YiFI40VnmC%*:.D(:8)>xNz');
define('AUTH_SALT',        'vu]83a+C/vfYjg|;Y09oX+L~^2<-5r8cf$MaNd-u-2yEP`L9|cg7QUfwab:<}oqf');
define('SECURE_AUTH_SALT', 'v]w88U?5O)yy!SEe2K#@8<g|7x:xSAkBg~<xW;YMI3,)uHku&=t6)L@af&{sv$%M');
define('LOGGED_IN_SALT',   '%5vgw)-4~$!ar:tSDS>@u=-J3njxZqc*!^WDRbzo3:uXc>Jks_QrJ%+L=DClFI&L');
define('NONCE_SALT',       '(u[AoZg@mJCh[-YYvL0B96@,YGBorQZMCJQobx`Nb-u(/#?U<I5{KqjTUZ>9v*.k');

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
