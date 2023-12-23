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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'word_ajax' );

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
define( 'AUTH_KEY',         'E-?/#&eldP}+7=}75UuIs~lm=8z :U&x%[(]WjQc ~yBM9df+K7d>s9&13*mpa(Q' );
define( 'SECURE_AUTH_KEY',  's]hDq@f/W?;w+zlBx45h-%rz[(N()cnuzO@AeZ<@=ZuzzmVt(jE*jG>|Qj}on)P{' );
define( 'LOGGED_IN_KEY',    'fWYTjRt4`D^2kPP>vK4dY]9mPr|/3Ij*ws$H)!9P-0Q&V<UE:VS[L~]!sZiJLv><' );
define( 'NONCE_KEY',        'Z<]Ie`1XQutKP)>#=pD4uh yGX4{ZL Pe@Knav=GA0Oh&XHp3gNqG1pXD#oFY>{O' );
define( 'AUTH_SALT',        ',4e~Z8n|d k4 `Xs;{,~yvQ%L0@3z`~;Z=7G]?qIV*CONhcNT3)c$c!zu%<}LbdH' );
define( 'SECURE_AUTH_SALT', 'RDl=B=bj0-spj0Ui8jCwSKHVRAq_#%aG~b0OiJ[wu5xz7:EUzb[[7c-]g=,:m)kS' );
define( 'LOGGED_IN_SALT',   'X0>7dD,1N~]0/d$`reltWm4On|rAr/UD,e,)fZgbe3pUhuXr3tq;Ix& ,@~Q.`,x' );
define( 'NONCE_SALT',       'mip+#0hvJ7Tj}U!uBJt|2&W;b (Yv7NYY@A+jKBjd(Oy,s#~~iptJq:sqzL39G.h' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
