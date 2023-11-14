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
define( 'DB_NAME', 'mywp_6edec0d6' );

/** Database username */
define( 'DB_USER', 'mywp_6edec0d6' );

/** Database password */
define( 'DB_PASSWORD', 'dXHTb97WbQi3onE' );

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
define( 'AUTH_KEY',          'e2yrm%Vbei^>O}nn>Zw=d8y[-Kb,w1L.{nU_,Z.m~2!2z6;P2XgzLWl8{RX$|wzd' );
define( 'SECURE_AUTH_KEY',   'OpNZqAfBZ-<*Wh,f(*t1U@Fa{,YUY#eZ!R3,X&ot]_I wY(Hu,n 8k=7hv{N8XUi' );
define( 'LOGGED_IN_KEY',     'dKksLMvE.&U5U|:B4&%v^Auk|hsW=pCBNlGVjskFwEC{HS4I}Hy=h)w,0+VfaRIN' );
define( 'NONCE_KEY',         'n!?^{J8;DXU3bZR%Ue}~aRD!1x7n-3`/LbvmcP0Q@RF]mY[)Etk#@2{l8k)+t0{R' );
define( 'AUTH_SALT',         '*LF4v+[)+LR,T/{uv6DnFeOU%Tk_<I<M]<kM3%We2 mO*C)D7kPINl&Phz+3[BW*' );
define( 'SECURE_AUTH_SALT',  'pKN&|v#`TAe|?~(-SR%,&?s%M5IB{D= (j^FM;m`/Sd]U?~;?#;e wf62q<X}4.G' );
define( 'LOGGED_IN_SALT',    '=u]KpF@gUFp$k=={CK|>2, #`<b.aKB%yL~RlxniPd[>UwCAu;3mmx.)X>XeY69P' );
define( 'NONCE_SALT',        '}-Bp2V$%gE)W](?8Dj2/h?jGaa#urG|w@L?ZYNL0_d|xCo{AxW~a|E}EGXI:b/(H' );
define( 'WP_CACHE_KEY_SALT', 'b#},Oj(!O~T9It)]la~iTAcI!+o_{uY8HKjM,di1Mq5h?)DOwWV60-HmUgQVK:`O' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
