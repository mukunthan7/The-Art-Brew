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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'mukunthan' );

/** Database password */
define( 'DB_PASSWORD', '9787@Muku' );

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
define( 'AUTH_KEY',         '_!l*PIefy<opmn(]+*7~yS1X2K>/O;G!MXa,JyZX0+EQ [.qRnT22VZ~[_L-Q^ZS' );
define( 'SECURE_AUTH_KEY',  'ND6_v3QCN&tz]i2 vKs<y{i[]^U;ngQ1^aEflv-wKvm^z`gdO$R)5AE1e2AV/4-|' );
define( 'LOGGED_IN_KEY',    '8cqX{d=j@<Hu7HD;6-JUM*t,cZ*Pn7^S|&>b0Se>it0_J&lR:9wVcFu?qI0*&PlL' );
define( 'NONCE_KEY',        'm:~-?=BzOaDqOP3$sXxufE~<M}]y}]G=i9A_nk`r7Q0&)w]lPVr!riU-1IW8u^fp' );
define( 'AUTH_SALT',        '/pHQr/sGo6vHKTe:PDMkj7MzWDMIcO% %f=53l7EI=4a&gxeJ$e{KBjjyLra< >n' );
define( 'SECURE_AUTH_SALT', '6uCkf&9[Sx/#3=]F!xqf^uifrR$lU%eax#;[e9^I[!k`nWOWNXyX*UctRG6g^} *' );
define( 'LOGGED_IN_SALT',   'Zee$/vA)anLe{Ftm <w)8e;R<=!ZSK12xA3RTM_tRs%yu](&.k[9PRpqH5RbzTh)' );
define( 'NONCE_SALT',       '^>;g}rhfC@3wR0ErQNaVj|!=z6I[#5-qzw7KH-#2v5s_eV]_&`,.hS}SDTnydFwk' );

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
