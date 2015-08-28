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
define('DB_NAME', 'guitar_shop_wp');

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
define('AUTH_KEY',         'I3akxlva|dQ!rap~N/|f( ;-qtX`P/SiIh:i-#IV38OFQ[$V[mzdh|MAz )~rQCP');
define('SECURE_AUTH_KEY',  ')~B!NZ,&?#TGXzK1+gQ1*@{iVVf;+(4o^0<9[Jrs|ZOa;8zgc$i+YYOc5xVd/g: ');
define('LOGGED_IN_KEY',    '@|=R!([uQ o5rGp^/%LpPA1hP&rDW~5bkHE}E|}p!{;gV{,E]C^}2ot~W_3e|-%*');
define('NONCE_KEY',        ')yl9Vh@-=(q/2Ke x+2CvWouohs|RzVF[0d|Ms{=LhKqo4vC?6jj_l$:gwYQtlbo');
define('AUTH_SALT',        'a|+St^S`KPFCn~l<vX$.}pRf]JlN45qf`l4mG%W]Uo.X5mslR GueRo<-X1U|v3Z');
define('SECURE_AUTH_SALT', 'sC&~>hn&jh-G{yUVjycMn+I0,4[+q686K`Sk{SZdM,mzZ>/bC|P5|ph#B-iOim.(');
define('LOGGED_IN_SALT',   'B9M+10 w{FueSA#}7WxMqRge>{Q`//>h;9U|Hla`E|!5=jCQ?K@]0g+-fh+B2D]9');
define('NONCE_SALT',       'xu8JvrN^oLtbWOyC]545:OMVtlEN6 }IC#^e!&#%QB*bT]rH8XcG~5xs#;fPCQT1');

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
