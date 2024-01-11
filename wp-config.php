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
define( 'DB_NAME', 'local' );

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
define('AUTH_KEY',         'c8vJcpkvKjKWrHfncQ6mv+KgSSOSDFNXPgX/XQBvSjMsGoEuQOTW1OJ+CRDna0zsCRNUPUCMUgHm359bUPinpQ==');
define('SECURE_AUTH_KEY',  'meoDQvDkHz2pJntxmKmUIhl1CeJPhHU25KZv1wbKRIOMPLgJWOv0r0PnA3/7ggSplodUkLZREjuPynuWn727Dg==');
define('LOGGED_IN_KEY',    'UxBxFoG0gXJTKv5J4P8wAS4rm21Agvbc4brbFYl4oa6SEEDF/KqY2unS/TSMsOMxVZtrQY9yU3fBQqrEjXAvcA==');
define('NONCE_KEY',        'QnGBqpjuJcN9JngKxP4TrJ3Ic5E2hAlHlQqRrKKFQ4iDJCOAWq42wuPpLSsBPboP8V9HNHue9sz0LlEtoE9meg==');
define('AUTH_SALT',        '0Fa5VdnOHJojUMjT1JuklOy3Q6cbafxWae2HNvYomQ0N8yoH5sI1K9DgxPokxSoW8BcipT433H75ogTJK/UjYg==');
define('SECURE_AUTH_SALT', 'blBW8ntkoDjZyy5Qv4/rC6euEo1RZAZv60kwRteQYCZ+Nkdm59cMDBCJ0JOR56XB4sKdNEn5aeUJUTZO/dDiSw==');
define('LOGGED_IN_SALT',   'BsN0JnCwjoez8/oTlw1xCMabq3vx0PCUvId7gyE40q9vhJs+GobCQ0hwG4jI/HJnzyacqZf1zhYEzW22u52NZA==');
define('NONCE_SALT',       'vzg++1OFL/+Wb66et3y/fX/9U5JPiJPtKjoxVi2pZfg2BMtBk2W+/ZQmm/VdnpNxSCkT+lH/1/uQdUEP177MUw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
