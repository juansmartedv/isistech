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
define('DB_NAME', 'cloudcre_isis');

/** MySQL database username */
define('DB_USER', 'cloudcre_cc');

/** MySQL database password */
define('DB_PASSWORD', 'Blessthefall2004.');

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
define('AUTH_KEY',         '9VfJCk^~XBo[sj4WHd|Ij5#cM-/_?+`r#}hS4c C%}TX}h&lxm$AhY ;(85{{-je');
define('SECURE_AUTH_KEY',  'xQk644/v@V]{R-CE8a.lOhD[jl_{NOqv4zL|.SbGfumAHLB628hV64ld&UK6%-A>');
define('LOGGED_IN_KEY',    '6jvus{-^W>f=~Ok_Xxlj0DQQ5x:#P!Ejpr!rbW(LIp>+jov},}kf[|MUXYHOkAVE');
define('NONCE_KEY',        'cdUA?[5XQV2uXsptAcU72,$<|9X!Vba[guLnnrkcxPBb;WJYF~(;DqlCuc#/_1_Z');
define('AUTH_SALT',        ',PAI2d^qRI;V@{Z^0.:Hp,j@8R=|o`!z3HBW[=p+%B^wUrp[S$-}:&bn({%q]-z/');
define('SECURE_AUTH_SALT', 'B4Z=O4p3{+tfVo,cI;jw$j/32Aq*g=j-#4917]6D9t Edwr$))k8#68gcaN.J5.E');
define('LOGGED_IN_SALT',   'UOVQ%9RfX#H1H7k.=zPg Nwfuf+^aea];h-+Qat{HSE(QH$.Qj=TUL{0ZQPSF[wz');
define('NONCE_SALT',       'ob~$Bw+Li+;<mL7NPUCk#9]GbOawt@MB06Cd@;:ptI 1h)SQnef|}F#4K7,{vh%/');

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



@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

