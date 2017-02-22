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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', 'wppass');

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
define('AUTH_KEY',         ',z.6Z?cejKg 3=oTr~XDWuAxul<ARfd~Ui_{e!fsNOll.]&*Uy aE-#mVrLVS8+$');
define('SECURE_AUTH_KEY',  'oZ<]<D+3W:oJc5:4pRS|]( snlI![W6xQ#NQn0Z#?pxMKG7 W?#=^<nCknf%!. F');
define('LOGGED_IN_KEY',    ']wqyk5pX57!qqO-SwX.x1vOcsPnw{l>o9%,eqnj<T=c.47JMQ %r7`3*~8LXX%:$');
define('NONCE_KEY',        'wo?,x~G7i:Rks&H2oN=hjB6OHJ=hGS#Caq{ES_WDw^m6*`<j <TTK>f?3r Z`9B5');
define('AUTH_SALT',        '<3cJgvq5>^tY!yoIz#1`-6]HV|UVC-+x:g,9<r.S[Ah5lhdrJF]t8kR[[}[nMy&g');
define('SECURE_AUTH_SALT', '8Y?Zrb=9ln:NOU/oN0Nnqq/JJ3;U#b)*=QeX[{,6Glw(:~jN252ML^Dne@wL.^;i');
define('LOGGED_IN_SALT',   '&-@D;=lGH 0x9yM6-0XakO!h,4d`p{3ZDVV2)r.Yv_[.~$.jRXeyQUCZ>7[9pM,i');
define('NONCE_SALT',       'qliQf(2v8fb;|<U>o;JBg`FfX=eIvC1AIxYy?W=ydr1WJ2!T&XEmd[mni`W-$<W0');

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
