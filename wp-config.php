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
define( 'DB_NAME', 'directionrh' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '4J{f|EK P X*/%<V=OR)yN d O4sqKaw5=aD#f}J@YYj!Wp?H{w7+[jB!+XrJbPG' );
define( 'SECURE_AUTH_KEY',  'DU[XB:fFI6@p>FHY4!hMD)?N2GDYmkZ2sg4SG?-jS;QhXgGtVlPc*,=[dz48Wbnb' );
define( 'LOGGED_IN_KEY',    'NB`xW:bcH.qUJ&)2tl*-)3Ta6!$G7*t8+Asr)HD+xOu}u=Eb1cb,j&Hq *}1J86L' );
define( 'NONCE_KEY',        'Ru&v:g]af}rL*dLSMaKc$s,qqjH&yj}BecDj;H@HFSf]a2{&,D*) _DpGiML;i` ' );
define( 'AUTH_SALT',        'c?Ox_ls||F7m&^--AS|2<R;vU(g1QX`OlUL[H:Y[[1*n/<HE|j3X@uq)<^PynFsb' );
define( 'SECURE_AUTH_SALT', 'd0(=$X}u7tqhO.MO!WV.I9c=QC0>5P{e3/mG1^nXJ%Am6M*9P;=jG;@t>fkPfwzi' );
define( 'LOGGED_IN_SALT',   'T=3YexY=,`ytM#d^7,,gU*p@heZTN3i3^. m)u=wzir`ByoW2P(qY3j[:CzBJrwj' );
define( 'NONCE_SALT',       '(pw]D~=U]`7`(IoM3xbwgeH][Q4p<zKsb2c{b|gWIhkzThe<A6X-{*VBU(Ugb1:z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
