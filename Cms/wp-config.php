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
define( 'DB_NAME', 'cms1804230' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'CC~wbbQ1&F6+xR6X?~]ISY^*h35oD]J3@nPrE=*#o(04n5`sKn}xWy-(^ 4flMlJ' );
define( 'SECURE_AUTH_KEY',  '}td{E/)q(K2A9%Tb9y2</#hH}f~CPVqF&U?BBL;b66rm81nU!@ljdOxHY$-/E@g<' );
define( 'LOGGED_IN_KEY',    'Ot_qts,u*k&f{@&qEC}8(aZ$}ui`wx:Hk2#g]}<}-:t1hUg@(eS~XK?0`-xGAg,(' );
define( 'NONCE_KEY',        'srl]DT9`Rz:J4HhwH(!Z{0,;%<>t]Jt`|Gv RH+NxR.-GtWKuUEl.-`L@Ji]03z=' );
define( 'AUTH_SALT',        '{_Ka>U5L#s4} /x=6-YP}i&`pNXG78zHkPbPL(%153 ;wKuD{#mQ9sbht/76]~7e' );
define( 'SECURE_AUTH_SALT', 'aIG.WoQM8lp8)KJ/uQEgcrATZ:8 ywi[j{>u}Ic39xAt2`._1mL5Md;pgm.eCK%C' );
define( 'LOGGED_IN_SALT',   '4hSp#Eo;P@bTt)3# bM#5e<#Hjw%2y_;66|}4AL,v[m~wd1ad*X?j>nZpc+sOPaB' );
define( 'NONCE_SALT',       '3K`-~Yfun7a{YPO;I(!7*f}mF(KTjJZz~PHGPuy0uB0ab.ZOsXa(Wp:e#[SaWnp^' );

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
