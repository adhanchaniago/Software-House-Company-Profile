<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WO<u+.3(w(O/@rjd~%3#}0yHM~a,)_U9Q.n<oX`UN}%$@Zey0H00]|,5*4^^zyh<' );
define( 'SECURE_AUTH_KEY',  ')o-1Dt$>QEN:P%EOg~a^NytQwJ)/F-s3cy49x7CZx1q5j<UOeM}gBIfA| SvZiV6' );
define( 'LOGGED_IN_KEY',    ',S{@rW=_GDcAks)Hsmp&Cs5cGm_DH@xkVsiSHL#4jrG[;=d!Ka8|EtyU*fCZ>CG%' );
define( 'NONCE_KEY',        '=zXL%C,Yesfj%!}!|=rf1`D`V Y_.p${eokZvGGE9QX%BExn/:p9!1Uwpi:x)Bl6' );
define( 'AUTH_SALT',        'y>oWFP,HTc: _Uu@s>~DOYOf6(;xODir7`#>~m4AHl.-!}Eq^vMdihkIp0Y7:/S=' );
define( 'SECURE_AUTH_SALT', '~&VO%vW&UrAPkp=nv>r8un8Ylqk7!g%&;?CZf&Nx/,z.6|z[w#Y q?`cq5Wewmbb' );
define( 'LOGGED_IN_SALT',   '-vw6D|Ipv~<v;0!,/<=h0$ZpqEzmV,+gvuFO8%~{}ssL}tMYRuYiYz@EkPgApuX}' );
define( 'NONCE_SALT',       'YDErvaPUfD;Y<X3Z1gacEYwZw>PRW(= FDIOwB0twz6Cde]IAdiLS3%DV0+o-s67' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_sh_1_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
