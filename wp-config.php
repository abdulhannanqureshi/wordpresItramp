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
define( 'DB_NAME', 'itramp' );

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
define( 'AUTH_KEY',         'a?+}0!IbnkSr|x)!(0|],~sk~:w4q7zc@mV<^bi)])IIsW<o:0R,O^6`LebquBjG' );
define( 'SECURE_AUTH_KEY',  '6u@zCx0UI^31@h0^(m/@_UF`=Fyf`} oXPk9V.zDW[EnwTxyK0r=xM833)BqC.Py' );
define( 'LOGGED_IN_KEY',    'iHOK-(SNDjtELN>$Xn>:,MjwmhXsUY9#9oS%QZd;wN}X)3YN0l?RZ00RnmT]6Zr3' );
define( 'NONCE_KEY',        'zQ1zpdVXm~|2Y1qVQAO9sm1b/:uAS%VC`4ex9FSaZ_ES%r8kiF}W#ZgpG5?Yp&v1' );
define( 'AUTH_SALT',        'F.o~6cTzRo_A eHSp?fYXHTOb=6|j(x8YYI|:2?iV7;!;SBhyf+ |$Ct?al?!I^U' );
define( 'SECURE_AUTH_SALT', '8uaD V_=K^D/&yI17fEDoRXnR[>wXgzw}rPFTzr&K6K#1#`m )eZb@jZ$vpH4w2m' );
define( 'LOGGED_IN_SALT',   '=:|Qc6r+<VJATuyb7(0K^wQ%p*XO>!YNA_[pY)_otGc0&He%LkFw)=&Mrk|HF*wE' );
define( 'NONCE_SALT',       'ZH7<^^?rs[J?UE!D-xN s0@9Or<_tFvrP%M}.y;j%jPhD(485 eFK;<a2,%c.p>1' );

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
