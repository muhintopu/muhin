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
define('DB_NAME', 'code and design');

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
define('AUTH_KEY',         'FnMw1.*rF&$*-I}eE_<kBd,Zc==7i+v3>ja(I5lT.uAu R#;3n.m&qtuE4;ts(36');
define('SECURE_AUTH_KEY',  '@R+2G<tghj1(O]y^rTX*z&6#_%/_]& 1UV%f)e1C?HosH6Ph6>TV3(y*79hiBGA!');
define('LOGGED_IN_KEY',    'e{=U}MS&ek{I7-;I_*t<f&:MG;KFA<Vn{LL5}m?McQvYm 0T:En[k<=CYVmYP^5?');
define('NONCE_KEY',        '}Jg1T~dY)J>CI>z]mGP{U/4%^1`zRWh)1}+z6;=(NvJ U~A(:[B5(b7cq4p5wqzr');
define('AUTH_SALT',        ')?EBh{$JQ|*V~88N*Gi~zBPTTl+|stAU>6PqJMmPXRbLhZpIu>~>|:*_pbwa%9*2');
define('SECURE_AUTH_SALT', 'as]7V#t@9;*F*/2?2/:svxzqdA[Smw|)g_$k`mzj1csboxg}|vA{T8>FKjnliHq_');
define('LOGGED_IN_SALT',   '=5SLXXe8G8+?A,/|>7Awr2l`9]z(^Og{J  wvIoQ31EZ,-F(|$Hp+:.c%}nCBO`^');
define('NONCE_SALT',       '|1d-`L5ua{$n.>q|?r3| 1DveTs-9N%veSVz,#pF<CMlx$jlT=Cs8i>oC/_z@j {');

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
