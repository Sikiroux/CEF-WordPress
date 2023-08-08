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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'z9rGLJ4dFXI6DNvjyweiohag74yetYAgqsBA37fYQ0/qq26Y1yaFK0UGxtlf73s9gk0Z1rOl2qnQpEvW+Bx4yQ==');
define('SECURE_AUTH_KEY',  'LV7/dkVrIkO5gF0047UrazUy/fC36JfkV56k8yGtXwzZqu6MfVVDmzQ+SAA++CArPeRT9zqZLWATcKYNrdpIzA==');
define('LOGGED_IN_KEY',    'IkKyTWu22wxhgld3mCU22o2kEvq9+M4DEwJOf6JpEQ03R5VtIU5B16OXHiv0Jp7YRtOPb2sXq8t7YoH2qtoTig==');
define('NONCE_KEY',        '156p138r6AOr9k3QQrfbOBJ17jbipXE6sVrcL94l5+8eV/I4v36QBZpm8A9L1Ize27FOUWYZFanghX6BoFkrKg==');
define('AUTH_SALT',        '0YZW2wxOUTqLJCEEwqAwhuIvGC0nOD9ZLEwzAwdmirE0aA1kEioQH6kIZtdEKe2uKgMDjMb/paUNYcl1oib1dQ==');
define('SECURE_AUTH_SALT', 'vgukEGwxsiHLZ1jHOXgif7i41x0b1hJwA5ANtu/+NTMHECq9bnDkpuZOSmmPxHiXB5XgdGct8BLOwAtLWkEB8Q==');
define('LOGGED_IN_SALT',   'KGbtSd/axhd/mMfIxzsF4HocIOxuFaSL1sRbtDxbYZKjW0ygVGtX0cDop+uTN6xapQSMUz501moikEzToVaOsw==');
define('NONCE_SALT',       '9ubYbuG4M/wswfdShaTGWHCsMBMSC6l0F7joxokO1/GTG+WcBtGrM4DpjZlW/4haWt0ceUwFfQkevEKp4672rg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
