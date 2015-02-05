<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// specify the known environments here
$environments = array(
    'production'    => array(
        'DB_HOST'     => 'localhost',
        'DB_NAME'     => 'wp_power_posts',
        'DB_USER'     => 'wp_power_posts',
        'DB_PASSWORD' => 'wp-power-posts-password',
        'DB_CHARSET'  => 'utf8',
        'DB_COLLATE'  => '',
        'WP_DEBUG'    => false,
    ),

    'staging'   => array(
        'DB_HOST'     => 'localhost',
        'DB_NAME'     => 'wp_power_posts_staging',
        'DB_USER'     => 'wp_power_posts',
        'DB_PASSWORD' => 'wp-power-posts-password',
        'DB_CHARSET'  => 'utf8',
        'DB_COLLATE'  => '',
        'WP_DEBUG'    => false,
    ),

    'development'   => array(
        'DB_HOST'     => '127.0.0.1',
        'DB_NAME'     => 'wp_power_posts',
        'DB_USER'     => 'wp_power_posts',
        'DB_PASSWORD' => 'wp-power-posts-password',
        'DB_CHARSET'  => 'utf8',
        'DB_COLLATE'  => '',
        'WP_DEBUG'    => true,
    ),

    'qa'        => array(
        'DB_HOST'     => 'localhost',
        'DB_NAME'     => 'wp_power_posts',
        'DB_USER'     => 'wp_power_posts',
        'DB_PASSWORD' => 'wp-power-posts-password',
        'DB_CHARSET'  => 'utf8',
        'DB_COLLATE'  => '',
        'WP_DEBUG'    => true,
    ),
);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define('FS_METHOD', 'direct');
define('AUTH_KEY',         'g|F )`k~hny}<hPKn7ek{P%SR-<R@fkso R/?;{n.]WLAt.A4C;=@GP*8|M$G,3Y');
define('SECURE_AUTH_KEY',  '54r/F2B@*[BYS}gTZ?eT^b|Wjkd#VX_II{IvOCud4G$2#9={0NFXQwkT,uBnO89^');
define('LOGGED_IN_KEY',    '.8nf]5KXdW%ioS-S$LMBOSZvs%W-oZkP5N- *}}o6*U|7k!,T+|3J[Oy/G%b~0v(');
define('NONCE_KEY',        'M`+)YSwOIA`di|@G4};qrRqZ3o@KBmg!N[Lx/Mm[$%#GRzVs;m{e|?o+%0-8+uOk');
define('AUTH_SALT',        'QvzTDB,]=nP0J7e-@z+H/Y~}9+z#iwtu3j%y)>KHX*>#~K*N$.0i2!]zg1-OUp,(');
define('SECURE_AUTH_SALT', '<ca:Mdt+HoG:2FT/l>.M1n7|o}ws-_ko]2v/({.=@A0WHFH/<qwU)?SU[u$K<5=&');
define('LOGGED_IN_SALT',   'e>NnnE68YF88)]_I>U^ZnUS;$FjR8skb/|#F&[~<BCD7$GCrF&{Y5R6t;k/V.YT(');
define('NONCE_SALT',       'Q8<5mc$s8TE):9jK~bUakmEa/F (G]it_5Aiv#;8CuF-82 :aY?,va8>bBYC=3*a');


// determine which environment is being served. Default to produciton
$env = getenv('APP_ENV');
if (! $env) $env = 'production';
$env = $environments[$env];

// ** MySQL settings - You can get this info from your web host ** //
define('DB_HOST',     $env['DB_HOST']);
define('DB_CHARSET',  $env['DB_CHARSET']);
define('DB_COLLATE',  $env['DB_COLLATE']);
define('DB_NAME',     $env['DB_NAME']);
define('DB_USER',     $env['DB_USER']);
define('DB_PASSWORD', $env['DB_PASSWORD']);

define('WP_DEBUG',    $env['WP_DEBUG']);
define('WP_DEBUG_LOG',$env['WP_DEBUG']);

// avoid database values, as this is a huge pain
define('WP_SITEURL',   'http://' . $_SERVER['SERVER_NAME'] . '/');
define('WP_HOME',      'http://' . $_SERVER['SERVER_NAME'] . '/');


require_once(ABSPATH . 'wp-settings.php');
