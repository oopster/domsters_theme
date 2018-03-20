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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_domsters' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '(6tI]*KX2Q+Zg x];<~w`LyvfSqk!1]w.5Q;M&>ai@zVLO!/{}(.i1[w9 o51 gX' );
define( 'SECURE_AUTH_KEY',  'zGkJdm4yqOxx4_1IG3+z`HaUmyBZ `~1g(_ i`zY:ljL4][{lsq)frvI d7{lcmC' );
define( 'LOGGED_IN_KEY',    '{{+gbMIB9P;C!1=UJ-.n~* /z#i>/,H7+Q@hb^#B-6V*mJn#<S)~F@^MG_w:q9<R' );
define( 'NONCE_KEY',        'ctxAnlt6{.FYK9s2>Di9k}z,_C?HGNMfQ!`k?6]R?@,dIgx=crdEfMJJt]/zOl-Y' );
define( 'AUTH_SALT',        'eq637~`;?o R9o$ ~=&#Td7s1tPEQ4Qdq%eL,E)f3{+x#FG#A#Y7&7r!(gFP|a!a' );
define( 'SECURE_AUTH_SALT', '#~t>1X`Dd=L)59Ds$BF:rY)G9_gzV$4PCB^% >c4-6ki0pMseL}@2ajja?s693Qz' );
define( 'LOGGED_IN_SALT',   'Pv^0pf{:a+koMjtWD@6}UvreK<74fCW[< FTrdx(;3+/tz1)q?2Yplex(zJv:guy' );
define( 'NONCE_SALT',       'i_<tdD^fWU;bNc9vPlmn L6j,yOR>Kz)/k_]`?%<^cA?Y^#25FWYsd[st=DLAu[7' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('WP_DEBUG', true );


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
