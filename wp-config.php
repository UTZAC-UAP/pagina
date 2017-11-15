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
define('DB_NAME', 'uap');

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
define('AUTH_KEY',         'oOi|!S)7h90lD&/^%dCw.tG^*U^a0d($60^M)qYc,Oqsf;)9XpzRB2B]F;4LE}5^');
define('SECURE_AUTH_KEY',  'j=F^0_d@uC-.kp.mfz|;Jy$(mfHBI;}*=(8h>_4rOW]DLhm@#Aa$B7nSI3wi:R*@');
define('LOGGED_IN_KEY',    '_0?%j[y,z=THj}xQ.JA%&x`svH_3/l<v?M&jq`0Vs437_!!rMrlQ1/NC&UivG$i}');
define('NONCE_KEY',        'z1/SG?`)xGEkM@*N3l!wb!v 6mX-ChCL!W<fL%7UxIB?L7sRGU<qyr_hu_ e47kv');
define('AUTH_SALT',        'z8]l>,>!H!;kT7RA/Q!:a)3;ciya<_%0$g)xghL 0;bkov_x&U:2.+%][j}d..(H');
define('SECURE_AUTH_SALT', 'h1Q6fI]~=Fq^R,|v3TXeZ!sS}RnfGp>tj zB(3ueUt7zET/m_c6u#GL<G/)hg71,');
define('LOGGED_IN_SALT',   ':Yw=)A;mY1hL@CnS!j{(<`1lg[n*$[v[:%jnwzrAJMy_%cBV1(oa)1G?nCs}?bPy');
define('NONCE_SALT',       '[w$*<D?k$LE-x(^zv-$<m+aqUDmzt:<c;I!HhE|R%eQf5JWmiTV?ZBd-&g/@q]`~');

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
