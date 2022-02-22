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
define( 'DB_NAME', 'Quimeco' );

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
define( 'AUTH_KEY',         'j*)<n1BW>I:DzfI9LLIF01(s>:|>#(Y*?B;v8FMvr9[!lihrpo)J##42XFm7uY}[' );
define( 'SECURE_AUTH_KEY',  'FjXC)GAkQ?d#F~Xw#|LdjiDDg{4.ELAu74ZY;<Wl<8Us*4F@d7@j&q>*5ZAXKsXp' );
define( 'LOGGED_IN_KEY',    '_m@gc0M@6&gof0=i:0wP4xt1Vbbzh6bX~:*~V+GqgLV |bGQ,mZk-~c@*JTQOA;=' );
define( 'NONCE_KEY',        '@*JZ6vc?5{]~i4bUr~p~G6@llUqhJ[.p-SJ>ei#kr/kG%![ULA4=S3o&c^]?Xs/K' );
define( 'AUTH_SALT',        '6<f_hio,F|9rt*>-K+cqO}#L#7c^?KrH<55S?jxn+0a?764s(5$Fc,s(?|-JMcBF' );
define( 'SECURE_AUTH_SALT', 'D^-2oV&I%}QWDq5C.19urI}SFf1YhL7`93KvU=Omc_Gg)D},;l$T*$gJ~}w8xMyy' );
define( 'LOGGED_IN_SALT',   ',O1U;~DBKV7#P6emWwQA^^]6waV3rs[`N5f0iH+]|l?eQ>6p|H-H_j9GElJ`2.Zk' );
define( 'NONCE_SALT',       'J7MHS9Ecer3EhOs)b^BQ1fCGuNtb-b59[j>[g1S-+:6ugt7`5PXO.0>WV8_Ej%Re' );

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
