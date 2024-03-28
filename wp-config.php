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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'youtube1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '$H%/R)k1pDgR36(z[X,pw)sK |*?A1VFJdM`i+Cta^MoI7!bH,RqB0n09/sG{J-=' );
define( 'SECURE_AUTH_KEY',  'yY|Hn<X{&{j?4e=4NH)J#T:pe[G:10RTi-#Ih=1x_ukzGh;c`C#K-k-VNhV$k<)K' );
define( 'LOGGED_IN_KEY',    ':dzFyM<vH2]b7*b/r/z:{25Z|* cy!$Cnj8=~{Y^%8KA+0*A/S?C2oL1,6sk3$5p' );
define( 'NONCE_KEY',        'ls+5_1q|&OuLzQj=]*16stbBt_xpes}k/V8$W}1hi!oh1wJYEfeD {BhxvdecoQ%' );
define( 'AUTH_SALT',        '%O&|tgERiM[0PjKnZ-|l-QO#tmhK0HgWRKE%E<SN-:M1bf<_t(6MEED<D-kxOc_C' );
define( 'SECURE_AUTH_SALT', 'Jao5xLL?ovP+8#@^BVA*gg8k(4X5%OE=m]ux|[8+2gDn-5Dx1.zlQ+q.#wbhO?3L' );
define( 'LOGGED_IN_SALT',   'cd1Dbe[Qim?0crK_J}9zR3L)WBlN^[*4}(]oF7>5Z F;uRq.LFqh|!Kyj;y8e#+4' );
define( 'NONCE_SALT',       '5qQV4bxBksw]NZt(7srz+L=E-;rq#UMK*,=w0cK)m-$hS[cW%:sf47+W8IL^<A53' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
