<?php

define('FS_METHOD', 'direct');

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
define( 'DB_NAME', 'dbs707725' );

/** MySQL database username */
define( 'DB_USER', 'dbu919318' );

/** MySQL database password */
define( 'DB_PASSWORD', 'xyZwrBHyQtLUHunnBAKl' );

/** MySQL hostname */
define( 'DB_HOST', 'db5000791757.hosting-data.io' );

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
define( 'AUTH_KEY',          '-*B_|/vIH`1]{(MT<S?2Y>H.o$Yx@;LM/WnS*%53f@[7}hGW&0S0pGFP2{mS&?{|' );
define( 'SECURE_AUTH_KEY',   '`qurANKC98R94,I.JAT]Qo;nIIt/t%M9FgI73_dXm3nO*A4DMe$o#XQg=00gFd/1' );
define( 'LOGGED_IN_KEY',     '_/kWnawTI~`D&O/gS-kB`CvDyu5L.[4()Q;[qPu@2cf=Ss:<@@IFua_NIIoL<J1u' );
define( 'NONCE_KEY',         'qZDfjJH(1z,FT]AW-LARvBiM+(NDaL{3i>a@L,MAO>;R;go+QVk{D&;`t3f<C3)0' );
define( 'AUTH_SALT',         'nK|;;zWcB$XrOqRfMT;Ft{+f!GqGz&D`M)PDe]urg][pO}svabc~jo>Bc@K1l<dY' );
define( 'SECURE_AUTH_SALT',  '!i~PfT%kF0h~pM<uwdP5FHN73+s7E>uc;$sbH<FkWBd:aY(vfArB#^!yOW-@#K*p' );
define( 'LOGGED_IN_SALT',    'XG?-Cq&*a,doN+wevwY=R.>as1%Yh:RSkM`>3R4uM{,-,BTLQ.F5Mj>O:/&%5A4z' );
define( 'NONCE_SALT',        '%Xa[Zgu}&;iFAn@zbK(mb2s|uR4)q|ZI1O^j:eJ[rQ(pEd}m`W}r,BkQ F&>?WO%' );
define( 'WP_CACHE_KEY_SALT', 'gi/{lE/DQl0IFf%a3eb1l_g+01fr__2.5,[yXF}gzzQeVR}-d W/Ut[e0T|@*Mr-' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vikyn';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
