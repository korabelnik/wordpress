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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'athena' );

/** Database username */
define( 'DB_USER', 'korabelnik' );

/** Database password */
define( 'DB_PASSWORD', 'k0r.27' );

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
define( 'AUTH_KEY',         '4M`j4/kuYJD8GpJdY1qS!HGs>>5Mb1 ;:OxajDW>)kYD|@w$$rv4CfbuI:8]Xx`j' );
define( 'SECURE_AUTH_KEY',  'e4mZ]O<CoL#WknTF_HdRavgg^<ZQ|>2A?O_)wsagIbDlAk]]|_Q<YYUnr0WB] QX' );
define( 'LOGGED_IN_KEY',    'p<ZB$/,Fn2]^J}Ary]X&67h.3f>g^.Avd?38gA;r^G$=<-HCcWt^<}eL$8=O~V2r' );
define( 'NONCE_KEY',        '1%M.OZ7UEQn4G(#s&qfTjDkloMU*H-u#N4-K_ezDBNqE6O]!CIRK,,${>]hD}Q~:' );
define( 'AUTH_SALT',        '=^%7{WUm)RISV~YKzO>x[r(t}L[>]gD?]n=H @VYLt+O5ceY<UY~+u8=:f#k&wY=' );
define( 'SECURE_AUTH_SALT', 'I|e`Wr:FKUs]FZvz-B91y+-&N>cjpD{tGkWh-SQ.g)x9}QtR@.>;rNoF|jiy*dxd' );
define( 'LOGGED_IN_SALT',   'K)eSB4;y|>5~Hjj3N)(A0_AcfyLJ0Bv^:MNB2ca)?3o2WC2A/*:XLkV*!Is36Cc5' );
define( 'NONCE_SALT',       '=44h}@U7XDQecNSv_lbozbk,}MEJFU*?qus<YI/hz5ja:ZZ<I9wG/.2L,m;n6G86' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
