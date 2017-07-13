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
define('DB_NAME', 'TwessersCG');

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
define('AUTH_KEY',         'saKlX2<[h7XDyisZw^z@q{!ZBFN=bE3!j/Cqs*kYBjJS/|G~2$[bPsR_0cJ2HlK&');
define('SECURE_AUTH_KEY',  'Sx)6k;8C#w^m*LN?LPKh>.TxdXYWjaU}GJ3F`hrC #R9,2d-hm|w#)V/q6wZ0%@d');
define('LOGGED_IN_KEY',    '[qtC~ m=! NnoI^z `,0x!^LKqqM-O.7S0i5g*Nv>WS<]!&fyR[.y@O3O$wcWh>^');
define('NONCE_KEY',        '9iDoy8$&]Ce{34[!k)0_4$ABk32IHS!v<eL^*,]sE[yEmf6#_m4AcCnWpsxFYke~');
define('AUTH_SALT',        '5w,d3,Gor&+uQ!g)*s,cfFM%|)@![EH#}V$? -y4d]^i_gApU/XI mc1OaUziy%Z');
define('SECURE_AUTH_SALT', '6LW%H{;0CqOc $4X]t]u+|`zPreVVy[Tkmm1-_z!OWn^1yyL7vSutOEw`F*}:R,=');
define('LOGGED_IN_SALT',   '[[Y)p]6t@I(&Z=?Mn%)$C!<fD&R*~,HWEnRXB:B4b1y?5NjZ=:?Sa$Z<6)y}Zn2)');
define('NONCE_SALT',       'T=0AlRnH=5ov>*W?9wTp3d[kgOuOlRWy(>ED@#yu7-!(Gdj-MyZafs@Q{4mCG]a;');

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
