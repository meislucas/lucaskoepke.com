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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'kd19418_wp_is30t' );

/** MySQL database username */
define( 'DB_USER', 'wp_3dc6o' );

/** MySQL database password */
define( 'DB_PASSWORD', '57kO3MB6$4AOY&gf' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '1d3!zlAQ9Hs@iRl6ohd49x/L%0TONkWV&Y17Ww:N!aPH~42Nn]-H6z4#-38F1ZMT');
define('SECURE_AUTH_KEY', 'Y:Xt8%gCstGF87fdKgi90%Jxte0eO7+RMV*GkB:6vIq+N1xj5!;w)kj33~0e@Ipy');
define('LOGGED_IN_KEY', '89PT-]t2RU|31yYBk|Ei3Q&fuJCP[7[[u]w/b#ck@-Hs0-1k~BSaYwj6i+R%*g+9');
define('NONCE_KEY', 'O:P1b5IHX!x3tQlu08mR*jbo078lX4)1(;|T0Aq&HwY2W~h1BGhPrfR(A2/x9YM&');
define('AUTH_SALT', 'XHj@l@%&3820&[&@p5QVQ%RGs34/_~4%#xS7~qaP+L%4xz5xq#6l-Mb(Up~*Pe03');
define('SECURE_AUTH_SALT', '[@&%8kh6w2_F%Vb~9xgv%H#9Q75U~sq1u06K;@36T)Imu~w1#bH7*C2Bjdbc:4Ly');
define('LOGGED_IN_SALT', 'Q+RJ:D-B4#689uzW97j9PNC|xVb0iIa6h9A~1;#rIGF8#u#wbPEt&BO1f|5&*f0s');
define('NONCE_SALT', 'd260#/[W/Al688adxa~43SuRz1&ps:#2%C6;2*V:I3c/[fsIu(Oym[Ig28u@Jq#Y');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ySsF1Kr_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
