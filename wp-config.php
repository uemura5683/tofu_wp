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
define( 'DB_NAME', '2a51l_ces76rsf' );

/** MySQL database username */
define( 'DB_USER', '2a51l_44hduu74' );

/** MySQL database password */
define( 'DB_PASSWORD', '8N3,6+6H38' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql50.onamae.ne.jp' );

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
define( 'AUTH_KEY',          '>f<{ww?-uG~zCgI^q49,h61nDb7@MyBgawyUBfLI#q3)ODmJp1J>!j?P4fjx$wEq' );
define( 'SECURE_AUTH_KEY',   'Gu)~TsPWR>%[).CK)PB%ntrGy6EjF}ih(56d{ 3,W<r#Zki$e;x(idVa(0mJ!fr5' );
define( 'LOGGED_IN_KEY',     'B2!O1<:(:#B5I+n;|2`D/Ob&uU-PU{hN?bA0TWzb6):ydBU=W7ra#J,2oaU)iu[|' );
define( 'NONCE_KEY',         '+#p]4NlEh`8 -]34l-bv$/6u,>[]~0^0y1BPMyp>vKFI(ND(eFEkkj=J:UW<7<bn' );
define( 'AUTH_SALT',         '`5[H<aJ5^DDdeser1f98uGX($e[*%at4dVU@/%gu,Mep VAp3)G%9[_k.:9.6c7C' );
define( 'SECURE_AUTH_SALT',  'f@g4PA^!F#M!zHi_7R3U*y&U.9;:3!6|]{A?kQ6qqP&)!gGqnoC/X~OzfHrg-=[g' );
define( 'LOGGED_IN_SALT',    'G+,1i#o.FD:78K$Vl~lk#j%6;(^xg=)oGF&$EuX~,-o7UkHFJE;bMp %}VELN_NH' );
define( 'NONCE_SALT',        'Z6,10j*.{A!fW0,%*uAdY7d%V~_5G>-hfj}L.kn6[,=ak*$)o&-3F2]u:B#}:%}R' );
define( 'WP_CACHE_KEY_SALT', '8Iwa[~eb$%_78[/-:mZVE6sd]@kD5)KT8+KK3$!f+:E<H$hE?30(X)9 o}_Gmjci' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === "https") {
    $_SERVER['HTTPS'] = 'on';
    define('FORCE_SSL_LOGIN', true);
    define('FORCE_SSL_ADMIN', true);
}




define( 'RS_DASHBOARD_PLUGIN_SID', 'ZGrnfTY3Mzsk3_RNcCJIeuHaSkuH3vIeftmT977WQzq1ozAkuwqLwOP9icN8uwv6nkcXhrkreR0HhYpo6KBf5sgbbz8tFUWROj5nWALqp0w.' );
define( 'RS_DASHBOARD_PLUGIN_DID', 'wQSz4GLmUowpul6D5UoJV06_oP1tb_Mz52MBDlZpP5axuBGDuwp3AAXAgutLlN6ILLQaGofYYJa3nl56jvvRey2uuw_HAW3trjatIvm84x8.' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
