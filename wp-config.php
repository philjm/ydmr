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
define( 'DB_NAME', 'yourdailymacros' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Xe?0lkYOoJ>Y51d>I=NOPf,Y%iR03ggW0%A,8/V1*z!SWgCBS1D*IxqTrKx-C}G_' );
define( 'SECURE_AUTH_KEY',  'QpW!$7uuu]Es:kD-n5$o5gPGN?qX<g7}`J,nSY+}PeFr!v/@if`T*{;Dx&S5RVJA' );
define( 'LOGGED_IN_KEY',    '.Lo{z(N<-&xFk%U$<vY]*}c,6xah>9r;N!I48zdmSq*3 rOf2fmm)|e&l678HEpK' );
define( 'NONCE_KEY',        'qs^6uMiJV+7)_wLO`}Mub(6KbTRj4hy}-;Si^<G(1JJ/WD=z2+ZTwL sr~;*sps<' );
define( 'AUTH_SALT',        '&zb%Wzb_ePr7jJ!uPuA=v&`n3la&R//)]X^P-PL{0M?!<|l;<e<8$&6uWpK>M]^2' );
define( 'SECURE_AUTH_SALT', 'h jrke[ |zFXE(Fj4H?Al,.a99[ dE>mUNB>x)pTjgt<*/T[hV>s=w>Ki_p<j{,R' );
define( 'LOGGED_IN_SALT',   'z}BJ#}gXt%)TKf73b:3{;*DJ+qLbMz}HZ[Z>zOnf8DvRV!V<.V}I+77QTnvY/yWF' );
define( 'NONCE_SALT',       '?|D7@Gxau5])R.9D3&GK|[:oA}F Hsm:rxt|2L`^inQA D@&N$:HIcZTz*XGR9+%' );

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
