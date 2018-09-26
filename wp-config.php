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
define('DB_NAME', 'ledokombo');

/** MySQL database username */
define('DB_USER', 'ledokombobaru');

/** MySQL database password */
define('DB_PASSWORD', 'OY_ju=j@q1#9');

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
define('AUTH_KEY',         '>zIY6B/{KB~{w`Tzi|5VeGuNZ/$Fua:Xy3t7~F7.M6n%%CQ^g(F[bb:yXsTrL-Pa');
define('SECURE_AUTH_KEY',  '4YM.9;+S9{x<EShN!xES8T0manqc;D+M%&05(QX{g`!ONHtpp&Kl%{`q0OFFY7L#');
define('LOGGED_IN_KEY',    'Fp73Hel[o``$AHpPQpCiLUUvqgVR^OP3#S,W!vXp;J<zyL=dUK ywR`R[FpARzW*');
define('NONCE_KEY',        'IkylG?Isq66d12k]ST.-8@@c]2|TkOdjc+,ci1+ EoG0UklumS)Cy`%=na*5-6 Q');
define('AUTH_SALT',        '*^=aD1IX9YRPs>[g5^o1A[qY7&SxpL^gk{~J/U|r$*jQe2[TR<I&WGemBg:Sn(U}');
define('SECURE_AUTH_SALT', ',D2ZyD!MNAd4t@a}M0+M`#D8DZ:3@FqWhEft8C_aN-GvezXW{O2SuJW4{G1,ovUs');
define('LOGGED_IN_SALT',   '9<wS(:+?&>4UH3n#Er)ek$Um7o:uUNsKKN5BcOGC[+58](}_UTZCfc@n}|8SbI/B');
define('NONCE_SALT',       '(p%ST8#R5(s9eZ/k=;FdnZ%jEE{d1 NRu*F+j~z(c@V%%Hqbt[y?ff5qf*Oo5$tm');

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
