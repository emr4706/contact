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
define( 'DB_NAME', 'checkon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '4FU28|vi kn|E7vH)CpW6jss3HD_^Yg=U|N|0UMO!IA=)dim$!+TW9};diDr.fI%' );
define( 'SECURE_AUTH_KEY',  ')zNAeAjw5i+)LvuM:zbKLg&!=%5g?yDtn;80B_ilx3A]g#F+Rmx?[N>G)rIq=Z.{' );
define( 'LOGGED_IN_KEY',    '%KB!YjJlV]zwf1(/>4iAJ6ko#.n&{i)}oIQK1QQU=pw3/DnOA+y/_!hYKWr3o=e,' );
define( 'NONCE_KEY',        'TZTWvmB&>LY@mw{qI?Y0!OadEFD8}n`45v3AR0;Yq*1DBSpffBjmxyxi51mroFYE' );
define( 'AUTH_SALT',        'orN&d!XU<-b~x/U1C%KR}*PMY35*Gr{ojHh@F&]eqKz^0k{wIp>.48`0mg-Hoam7' );
define( 'SECURE_AUTH_SALT', 'prze;G]:-K{l=<!obL}<{t2hM<LaHPrlvWQ~*:`xz126tR^@U$yP(%$NDdda5i@>' );
define( 'LOGGED_IN_SALT',   '_qjs6a Z1)#}p{ _c56EZ_!xP]Ednrn<I%1AIGacu1R}^HDv5%e|9Gp4?]coN4CA' );
define( 'NONCE_SALT',       'K=J2U]ddM{F<fH}!G{dZ P8~9zgS@X!dXUK$CTR9{>`PbAp0&`3PR)|B18W4*]>{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'syo_';

define('DISALLOW_FILE_EDIT', true );
define('FORCE_SSL_LOGIN', false);
define('FORCE_SSL_ADMIN', false);
define('SCRIPT_DEBUG', false );
define('WP_POST_REVISIONS', 2 );

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
define ('WP_DEBUG', false );
define ('FS_METHOD', 'direct');

/** Increase PHP Memory */

define( 'WP_MEMORY_LIMIT', '512M');

/**
* Override File Permissions
*/

define ('FS_CHMOD_DIR', (0755 & ~ umask()));
define ('FS_CHMOD_FILE', (0644 & ~ umask()));
define ('WP_SITEURL', 'http://localhost:8888/kantoorcontact/');
define ('WP_HOME', 'http://localhost:8888/kantoorcontact/');

/**
* Change wp-content to 'files'
**/

define ('WP_CONTENT_FOLDERNAME', 'files');
define ('WP_CONTENT_DIR', ABSPATH . WP_CONTENT_FOLDERNAME) ;
define ('WP_CONTENT_URL', 'http://localhost:8888/kantoorcontact/'.WP_CONTENT_FOLDERNAME);
define ('WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins');
define ('WP_PLUGIN_URL', WP_CONTENT_URL.'/plugins');
define ('CONCATENATE_SCRIPTS', false);
define('automatic_updater_disabled', true);
define('wp_auto_update_core', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
