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
define('DB_NAME', 'blogdolucas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'm6ef8QWE`{c%SAz.Q1zth5!M VJ$8%mgg^nOC<UofyQz#l44%SaiJ@Ms^f-gU,#6');
define('SECURE_AUTH_KEY',  'Ig(rc93I#y.f-}`=1EB;6^J|PKhlVJNZI,{:Cz`h[+hkXKPjnShsn*`vqoRXo@He');
define('LOGGED_IN_KEY',    '](-bi=#IU#k+NBC=GFujKJ3qvGDNrlM&*_~m3ph$-)v{OTY.y@>: X(&SrN|Iw5}');
define('NONCE_KEY',        'rmU<Su[}Q0T>9!ML0FN?^U,+jj,hCb9:9YLqBqzt_`LRDU!>pCIvG)./|7-N~lC+');
define('AUTH_SALT',        '$J`s9|uj[QOT^<dCq~c`D8e$BNzpm`4Z14/@=&}_p7D~tEMlN.z] AuGU^CUD~wm');
define('SECURE_AUTH_SALT', 'Ko3Q/*05m(kdS18phLXj<]@FQqI&e1r({,M>s)weUf&QVLT; gxI^:dU5w,DLsC8');
define('LOGGED_IN_SALT',   '`{icTTuzhiFj.C8OvgO:UJa|MnI#eeYqZdBFq78<<hm(-h*:&/<kL3g3vwh3$uB0');
define('NONCE_SALT',       'Yg=j5&Gxmr5$cr`{m<&O7i->F4g|Q}8MnsOHAEcJP!lL<6P1zD9JWZn~[z;]V|bm');

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
