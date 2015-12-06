<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'fis_slalom_horn_wp');

/** MySQL database username */
define('DB_USER', 'fis-slalom-horn');

/** MySQL database password */
define('DB_PASSWORD', 'zx1lD9?8');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!#B871K1hZHtqObacNupmXYfM2bR7b8sEPitduvzQC!&%&sYC!3Iwr)7hq7AiK&p');
define('SECURE_AUTH_KEY',  'IRuotdjF44pRTdFTU#Dcz4hqcvBAJC#OrkMFCJdkJ2C!6Mli98WF9!!L(rJtWkaZ');
define('LOGGED_IN_KEY',    'GBDRZ6yHy1uDRK7d75Z9sZkrLe7^t#qH!wt&(JO4LYs12Kr)H!v94Lw!&0%4#vkF');
define('NONCE_KEY',        '8Va38qU0pM6lN#ptJkF6Wm!kXmWc2ZyRAzt3zb6xdS7)sb8kMnOCigYaE8LLBfKb');
define('AUTH_SALT',        'FQno#rCXd4b5cW4o*eyu3%m)Ex(b3osF%YT0k3LDD@!UYVDuK#)7Bdd3sXdz*2uU');
define('SECURE_AUTH_SALT', 'WG!%znaZr99rj!mLV4rJ0@(BW%JySyniiJJRQFx%Yj6704cJ0A2mymxYIVQqR4kr');
define('LOGGED_IN_SALT',   'oO*Ce&77uxBU0unS0JRVFE5KXOC5JTMatP55ilrZqOsUPll19CshO&K5QD93cLAo');
define('NONCE_SALT',       'EdTM9pi4PDGBW!c)dsL9WlxBJcrRY(llXav5lUi5XRGH*LJvnWhImBFfhbe3VgeH');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'KYQcf5LiF_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
