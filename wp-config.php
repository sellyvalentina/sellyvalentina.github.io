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
define( 'DB_NAME', 'UndanganCerlyCarles' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'vJv1AYX6x8voZxcTpZnoYu9T5h6zZAcj5yVk0bFYQDqInZ4fPdEM20OlpDPsDahl' );
define( 'SECURE_AUTH_KEY',  '2z45Ejq82ZWQJQuZwdjAGiFRhhDtQx5PZ88bjJYHvszxigvIVppw8qqnVOJAE6ZB' );
define( 'LOGGED_IN_KEY',    'P07AVqmwkpKcxlEmJv5E0Re1Qg1EJ2gnOZQGLD3L8qgM5HGyoUTO0ITA2tZlz7c4' );
define( 'NONCE_KEY',        'iCokPq2B3CeZRrfSYjKE2PlJyLOsCg7Y7wkvScYvHseJfJc5x5eS01MVrorqWaaA' );
define( 'AUTH_SALT',        'yghzWTMdoeXCNZc15hy5RGjs7i9dl7htuFoIdbzpg1yHvpBL9h3CLLQL8gyXvaqI' );
define( 'SECURE_AUTH_SALT', 'RARXQEefQauqgZCo44sdZhtUY729YlMrIMQXl4xxQfVNBBKGBb0icghkj2T5rCs7' );
define( 'LOGGED_IN_SALT',   'qxaUWApXIl91UJUMF5NkiSlcc10FecDceMWkDq4Eqmrt2WUyzTrNWEeIsdcvSQAw' );
define( 'NONCE_SALT',       '7NQ0C7YwO9nYDm9E5JlVcXzV6spxjR0RpIQLvzle2U4q8jzUhZkbkuWwz0Z74Yfs' );

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
