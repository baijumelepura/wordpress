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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'elitepsc' );

/** MySQL database username */
define( 'DB_USER', 'samir' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Samirbey1' );

/** MySQL hostname */
define( 'DB_HOST', 'mysqlcluster5.registeredsite.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8]x:2IU)O+Iwk1LcMx93@kG5JT7#W2sfWp]e~9=1Q]a[N*DQ8sWhQ[tk5X^.A3e>' );
define( 'SECURE_AUTH_KEY',  'PX.ux-~zh{%(Qt$l>GXl&*_7;c)K{$T5nq+yVeZl1R+]/JS=<]-{U -2xFCc+@h[' );
define( 'LOGGED_IN_KEY',    'Y:G7u!E(=+yptS[ZWU6[p~bem/wahG9/>#Tc($sxVxR:-*`Ux5= ^xX*875K7kmo' );
define( 'NONCE_KEY',        'M[@ yg|RGynZ?_Cf0n%WSijtV2[]tBW~CP5]?.%RP60QJd5Td<fS5,Mfy=2O>bXk' );
define( 'AUTH_SALT',        '<L1~_$E/Rc=OycL Zy|HZxK.e)n)^[2T%VTg]F`De<{<we${Xr_xv<2Jnm&^Q}X(' );
define( 'SECURE_AUTH_SALT', 'X0cZ=Uf%{[dA!chfmI+&-sxYoVY,bicB&V5I#f[wwd^?i;%,2St?/VkC:r#,JB x' );
define( 'LOGGED_IN_SALT',   '{WU8F[:{o?hF=P{,S]9Lf{!yMiPrICawjNkkw@{L+Pz}XK#)R_*Vu=heM+s4.}+H' );
define( 'NONCE_SALT',       '/uJ(}><J9XvUH,G^5.T0ag!Qugx6eHo(].ob|+DwI_1IL937{V_nF/w{m212S~`i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );