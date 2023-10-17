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
define( 'DB_NAME', 'eswarigr_wp812' );

/** Database username */
define( 'DB_USER', 'eswarigr_wp812' );

/** Database password */
define( 'DB_PASSWORD', '1Y]]S80p22' );

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
define( 'AUTH_KEY',         '60qsgjtdghkd1uee89hncvooh5svtpamp6nineeejffltubsmqqltbldutq1gkzc' );
define( 'SECURE_AUTH_KEY',  'mjwnruq694wu9mr4bltt0d5xnz7dej18mn04mr3jmrqg9s1muqhkexomzcg56j2y' );
define( 'LOGGED_IN_KEY',    'f9tkeycwyfagmk1t52iqyjqhxv1hh1o9mbnhpv9it7ayc0thkvmodsllu1pqipl8' );
define( 'NONCE_KEY',        'bubayqy6sam5yk7crp7z6wmu8fvnwxer6sxcnlec7g4ewktxniz0d8av9hc87v0l' );
define( 'AUTH_SALT',        'edbuodtpaejw9rwd8iiksc3imj9djeepkrfpypyumecglu1liirloscazlfhhyic' );
define( 'SECURE_AUTH_SALT', 'puhyel0genccax30rbrp2jfnqw21lknrpwqexdte9nmgfbk0me4yfihpq6otfmul' );
define( 'LOGGED_IN_SALT',   'jchvefwcmyjfvnmtwhboeioxbdyj7529ruzjuzihfjbkkwe5hvklukjvrmpaquql' );
define( 'NONCE_SALT',       'rmcraxylgzvix0svmgjugfrxttg3dzeucqlakmmvflxcbbmy1vhccbml3d30gndt' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdq_';

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
