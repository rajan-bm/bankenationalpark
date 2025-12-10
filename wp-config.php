<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '.:WlpacUOY5|8O_dLJoiKsD=rs~P/]+wfb~}T{MPDP/Y{P52QC!TsWZvb;RDL)b-' );
define( 'SECURE_AUTH_KEY',   ']ISDrOw8!,nY9Ek~GRZy>x,E0Lc2d{#W:;vTq.RxOBrLi*F^ S)yV))@IzdVG$wr' );
define( 'LOGGED_IN_KEY',     'IA#Ab?+plIg5ly!TT4d^3Mp21eR-e8Uh82^Hop~}}[Xji$H;.%MON5i7H/PA0yh`' );
define( 'NONCE_KEY',         's~A}|8^z5Fw@:,P= {Pl*Ak5rc@rLlf>c~*-l*k FT]~VVw80,Te920=a4-Oi|0x' );
define( 'AUTH_SALT',         'U.zhKsiFVK~?tX5QtT|Md&Rn*.sNd~+!?(d/O^d/xH`QYi0Ix/m h)L?mbT>4p/[' );
define( 'SECURE_AUTH_SALT',  'C#^w9*3^xE_hbC,xK$}W-jYwJ}^jXB.UE}hm>9~nB#{2U+.sDaYb@u^?Ex{wcf/e' );
define( 'LOGGED_IN_SALT',    '!PyY5Bk6rEN6Mn&%=@k+4V>XRwLr;u#rIdaF$*ZF|fXqqPIKe/sm+kP2@Vk~)ZV:' );
define( 'NONCE_SALT',        '(BGudWU$d[#s`k)AD^Z6K}WautD~IFfhI+MAbyqWj;E4zI%H*mJC|io?7EE{_^Gs' );
define( 'WP_CACHE_KEY_SALT', 'HU<LuwAe/Jb$DkZnj5V?,HJo#;{XL>ue&IzQ13?k%S5pYn`0y2zvH~P(f7a$%]Y=' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
