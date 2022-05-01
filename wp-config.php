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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'law' );

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
define( 'AUTH_KEY',         '^/z4<J1RV!fYQ|b$]`f4zE}/bJ=O<=zN<y:@z=.y,j&ZeT(A>Vly,8+jJ*~Vo=99' );
define( 'SECURE_AUTH_KEY',  'pmN%IZ.aMS]q,F4UzZ>LsF%Qs09wbj[v)w2){P!8AK{<8(Widl*QewS3z=` /0-=' );
define( 'LOGGED_IN_KEY',    'b:Sni$<+Y9&WTs#^h,dWuycCY@gz]T_-_J#H|}OLmfqxa^*1-(1B`*QYq>gp~dxi' );
define( 'NONCE_KEY',        'oI/Zn=3=#zFv<z8ekeQVd)xpJ]gM%*{,_v)mRqX85a)<0!a!Z&!/r4%<>Ff+4OE?' );
define( 'AUTH_SALT',        'JiN(TtN&qT]:(7%Z$7`MWs>}) 8JQFeE*WH>Hl&]5wvAcP30bJrkK1 buBt0{hb@' );
define( 'SECURE_AUTH_SALT', ' <^}:]+l3`6.(@aGos*197Gg$oc@nbX;8YeY>iQ3w12w9c+-~r+c+4nszUqhOzNv' );
define( 'LOGGED_IN_SALT',   '}(^PnDl;(Pukn;9I[MH@:4hN4#5tP{iSz:q|{n>K-2P<x?1vH$:F3} Es=c/LO>y' );
define( 'NONCE_SALT',       'i>h==V>JRJ;)g[h3A}bi%In!)<P@iRq@L/JW$G4>fFRcE{}(uwKsxv/Z?;J/Zvz{' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
