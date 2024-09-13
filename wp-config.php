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
define( 'DB_NAME', 'test1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY', ',r1,];ff=5n9wrIfZ>WM$P)!`Kk7HnPQ^i)By?#PC=@}y3G(Zxdo])TKst5q4+zy' );
define( 'SECURE_AUTH_KEY', '[o<S/MeXl9:c=#E)/]~EN4OP0NW/R)lxB=}Dj8P>ia7T$m6fkkh,/m-?wrisfcFn' );
define( 'LOGGED_IN_KEY', 'zr,(jp4_b#{x~: Z9?;.?[}+Wpqm-)#$t}*&zZMYs.Wsx]<j$p-D]dEPq/7F#@.[' );
define( 'NONCE_KEY', '],Zu+x=FMD95uj6n5]AQo4NnO<UnB:z!q.(GZ5S]jl)^F.l6rdU]QQ)`9cURn{UP' );
define( 'AUTH_SALT', '{>|z8Pk5kl^#rJJXTo=IeHG#uBOH~rYr^E#W/LKR#C=DKfA} B[27[7i,^Q0h&9.' );
define( 'SECURE_AUTH_SALT', 'l|Q!`hsr.:P_Mj;VtP]G3=,JbAUAoz%*UB8e,(<0wH[n`V[/LF>zCk7WSv^|/:Jb' );
define( 'LOGGED_IN_SALT', '5t~n^VeA/xQ{v{v>!#odMZXed[H^.bVM8Y3{N|,f[lTG+R,J:[J#.?kxV%k_sGgT' );
define( 'NONCE_SALT', 'O_)?6f;*jtcn`5?_Qb!F(y{@}sWT6+Ta-)/*q_HxKCo rg}1G.>_sLrU( mz)5}$' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
