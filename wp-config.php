<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'store' );

/** Database username */
define( 'DB_USER', 'hosni' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'vtkt`|c0/ns6|Qof!O(~Tdkbc`U=AJwR&7fN;z&,_vn<<U<K{*7Xx}f(zmh]/DEB' );
define( 'SECURE_AUTH_KEY',  'dd`g_Bii2}KwWF=sUkMToDo4dzJ2EI)py:0Z}AUiJa| L &y/KY4!`~(E6k6k*?E' );
define( 'LOGGED_IN_KEY',    '65Rc|h2{>(*K{ ` Zk KX:g2 }%V=)x71lX<Euj326!hfZ?{fRGY$B@Aeh%Xi3i%' );
define( 'NONCE_KEY',        '[)*@DIp58]}d=YOG.v[AnC{JQ-B_aWz&CEj2:+!)<Da9X$fhmApA=f&hW(5Wj+cj' );
define( 'AUTH_SALT',        '4^kCVmp|Xu`ESCNtmTq8Wh^vtIVb kf;}$m@J#(BGV1-gy]m-d@53L.E8h$NWkdi' );
define( 'SECURE_AUTH_SALT', '|qaVK$Pnr*m# =A]!Ts_nhs^-i<1IkB,GViy{jV>hX|6$){ 8$SYs5=CJ/R<vXbs' );
define( 'LOGGED_IN_SALT',   'Y1(NPK}w*Xt^L@0rq-An9Ilq#wIJN5^y/yA)g@b)*l_+vy8u-rcJ9tu2A$t,D?^{' );
define( 'NONCE_SALT',       'FrL!<XmC|R%n(pZqne8{hH;$]XWq$TcPYaSpZy2q#=Ucy8Yt{_WMe:w#s~4>0<Zo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
