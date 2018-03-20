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
define( 'DB_NAME', 'wp_hansolo' );

/** MySQL database username */
define( 'DB_USER', 'Alex' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         '},Udg$&E9k&c=gHq:aA;fsNY}i|nyI@ujCV9Bwa~RBq0pM`:sW&}H$G^idBM/->8' );
define( 'SECURE_AUTH_KEY',  'PKXtIUl+Oik,o-+86=nR$>O_-zYq1v?,q;>SRF(;lI}9N4/*s=2L2N@Wxv;+)Xot' );
define( 'LOGGED_IN_KEY',    ' 8<2@so3^L>-K^<0% FJ UJS i=aQKD%Y|6p,NHij1-NkjN)x-UW}M]fL (bDn)_' );
define( 'NONCE_KEY',        'dBT/N{~qxS8Th`TsI]{Efu.gYG#(  L)3%}RTnq0nFLKnyZh2*@o>HaD+^UZ(R 0' );
define( 'AUTH_SALT',        'lpuam+dqeLHRaK)A}#6+M_<kVIOlJ{mCe|j}7l,D=,Vj4XafJ/%M/;?*Z%# T!:L' );
define( 'SECURE_AUTH_SALT', 'q:uDq>KtYtX1QWk?5<DZJ,~}XA49NJy+Ovcj:uzC`,4M<d@7b<3G Nw.PE%O$/&h' );
define( 'LOGGED_IN_SALT',   'vCMfb,zmAK3]WIZTg*qJwOa{M>kHv;RWX5YyC8@E,*o#;Y+i1KuZT#eKB]:w-*=y' );
define( 'NONCE_SALT',       'ipH/l`ZKn}7-B>UnVMFroe]]s6Jwxief7p@gHNjP8/<s8D&_~!pLK]cMf-VA`~;y' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
