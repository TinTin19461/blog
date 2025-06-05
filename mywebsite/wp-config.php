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
define( 'DB_NAME', 'mywebsite_db' );

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
define( 'AUTH_KEY',         'oPG]KQ-lrp@*|}27s}uQ~U@W*NgJwt,0%];h/5ELma/9Ra}(.qa!m,#gOQy%JDB!' );
define( 'SECURE_AUTH_KEY',  'bdUoqL?^_kgX~uRD+~|Q)ch**tCy9]QqTaQO!Kv,wt:O_R)q0zg^:z!e@@FQSw=V' );
define( 'LOGGED_IN_KEY',    '4T1|Qba__KD5CK1sV<ZF`qR=1c:LtO<5J7}* CZMuF^A}hG}i]bovzVjACAW2ZM<' );
define( 'NONCE_KEY',        'rYqR)e`o1k5&pr^Lonr%)jF.loRbCdZaSdcuFz9I~ESo^{ P!Mehs$s~5U+fpSTF' );
define( 'AUTH_SALT',        'io>qg`FOD$+`fZ&<:o9LQ#<tB5T*vL!c}?a;0D?,fQ=R6[f=D~ ix@9DFeT?;_L*' );
define( 'SECURE_AUTH_SALT', 'vAV&I2[bepP}1FZ ;{@3(+Ou}QVl4M_VI3a/6YqsPbolOUAQfx6f][7Sha5jvo&U' );
define( 'LOGGED_IN_SALT',   '!>)@^b2:&])PU1rNKxcdN1YP&`?o2j<G>3$(h@5AA@sK6q! 5rFmV)NeW{8sH~HG' );
define( 'NONCE_SALT',       '.0MgWFf!Dlqr&/t2qd1pAn4lJq?C[w1Za661Th_!_ e%FaaBYp2kQhJ&U)W!{A>i' );

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
