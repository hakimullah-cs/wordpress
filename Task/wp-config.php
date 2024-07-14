<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'task' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CZEz8a&]Pb5sEe m:Xgb yN=l:yyIP*{&AI2`,X7L4]2S)eEjzb2EacNYy;&>z[J' );
define( 'SECURE_AUTH_KEY',  'ATwG;+G9/]6}pTK#>tiY 7?[uPw6$u61$v$HAH1q*!;3^6d*@Cy+RCr#pnEnAHxG' );
define( 'LOGGED_IN_KEY',    'Il>&RW2!%;N|!ZJTrsL*mpS+&$m_iCU~-(.Gn4*1l+d2{94 ;w6:TUpB`3E+)$-K' );
define( 'NONCE_KEY',        '#cHG<VLngMc*a|gd ZEL0qOJ.}x{ttoy5}vC{g{w2yUbP>T!PO]XsKw*wqgfql25' );
define( 'AUTH_SALT',        'qo^](qalQn.KJMU`PY.~f8r8W.Q4r+%|k!R13LV61yMbfpP rOkYT>H]8d>9l46G' );
define( 'SECURE_AUTH_SALT', ';t e;V?B+;wr! NeZ=QDk$?D#3h=iB (/jle<vrR8cZL$HQ|j5qU<cu-^?7LW!(;' );
define( 'LOGGED_IN_SALT',   'IkeNF+j&G*}Ra/Gx(pgrhah[YJ~L$,Gs`p;hpxzZs=qqp!/+#fIJERn8 %39iFk}' );
define( 'NONCE_SALT',       '!NkPV4P,4YyzVB.!heJmG>W1ly/_d3E}iiCE{g#_r4(L=(Z;sxH,d54tK:nf<GTI' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
