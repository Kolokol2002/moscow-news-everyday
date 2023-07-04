<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'moscow_db' );

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
define( 'AUTH_KEY',         '/U=KZp8SqFR<6d!]B37v:fg48.wyVO9ir6{JU5B/i:?8)Bra:,9|+)mH`+Mtr>1%' );
define( 'SECURE_AUTH_KEY',  'dnY|X6&n3c}:rX =3PwqsL,:q!#2Mt@3Smg$0Gq$]fZl(4MSGZ$ og~YQ@^[Eycq' );
define( 'LOGGED_IN_KEY',    '%P].0ger`So]8RlW`6dM]=`IH>Zr}u9eqLq,dTo}v_.=ih981cw]5EBd3FWTWh.;' );
define( 'NONCE_KEY',        'NWfD.=|AEJy@<h>3Nc}Qmyd?sw8a0p@+4{+D22nwi/F82+Ldb_1O.>y1K>{Jog-5' );
define( 'AUTH_SALT',        'iijmt(;Cl`J+8sz`DJGOta/`#Kplzii*xgrlM3clm/zWeJ=WM}# > 5oY4f=i?>y' );
define( 'SECURE_AUTH_SALT', '@KI}Gu.0dj/SPMa)b0k72]/_:k5s,,X1S<$(-4<qh8r&v(wL&:$9/B@H=(U~eV6S' );
define( 'LOGGED_IN_SALT',   't$v}p>03~,{Q!FBW}(F`Ov>Neq}eC.2+O`&}.d]HKI)+,ffxdL/Kq!tc6,l-K7_%' );
define( 'NONCE_SALT',       '#?N6q,fc<P7bT];lz(#85/}7(:y>EKYImlc6Tt-<Cx{)~FQF<V5x|kYK]$emu$/*' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
