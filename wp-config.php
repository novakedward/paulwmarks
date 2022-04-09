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
define('AUTH_KEY',         'JteI2oeIl3iTiJJUvsfAWdjba/sxPeWTGCj/YcffEa9YdhRJMTCmqxwrF8I4rXug5G8nxDvHfUl8hXcvu5UZhA==');
define('SECURE_AUTH_KEY',  's3R6yS/Y+HeKjau9GOMOZuV+0ATLu9YDJN7LwxK181vlO4vIMGADmArlNZWrMCGrKAFJpT0ku/1gXGCvwySYbg==');
define('LOGGED_IN_KEY',    'YCEb5nkti9hpHGCEK3LjopJJRM1cA9nUKD7Fp0wRlUo6TTHGSW/iRV/F0kVqMfYzqnVtmDLtCXlfwCHEMGrbQg==');
define('NONCE_KEY',        'zvfn77TXDh3ODuNyPzJDCie0Obx9SjlOACkMpc3a5KmkDZutJsVFqHgM8UyY5yKcCsypyPLAziQncaiZBZP/Nw==');
define('AUTH_SALT',        '7Tjt0wTyZaXHrepfmoxJu+mDxzwi4lBPYvOCjywYYZUGY2WUD/qMmPo59XU5CVUT3o5ddhL6ySaSA2CllKSlVQ==');
define('SECURE_AUTH_SALT', 'HVbuzMVAgMGPUaRZwtyfk9cROKRQyehBTUZPDhyynShYKe3avnBZinHYpWtQI13/fGmjTyXTYlGc8hFW/MIxPg==');
define('LOGGED_IN_SALT',   '/85Gt9Auxp8KV37mE5acyXN4x6l4qON4WnAw8UyMxZmM1pnxF+FOdx38VR+qYxC+EWWnrFXKFKXRt+e+g5UV0g==');
define('NONCE_SALT',       '0L79Y6p26NnzX5+XdX8ey3Oii9pdg1O272QMVgLiIk2hv8CKP2ebeG9Xu8XI4TXJL8YfWeRLGclg38fYnD7r1A==');

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
