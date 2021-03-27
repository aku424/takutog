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
define( 'DB_NAME', 'takutog' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'l(F`jO1#CTQ@>n]Df~/YE4Uyo@owK.NNlot>#r`8%A(YYv-cc>Dp{Fd#/5B=:Wv ' );
define( 'SECURE_AUTH_KEY',  'waHQi]Cpn9N_H0)S~q~/#ybCbBlWRH..sI[{k{:@)/8=&c0J8^ In<EK R~0;{4^' );
define( 'LOGGED_IN_KEY',    'kW2s2((JwUp%}&feW1Lx`,$t}h;G*~$cM1&.C@on-!Q1r0HzGpo&39sFx`3OR1?V' );
define( 'NONCE_KEY',        '_{QAn@g7ds%_*B*bT*Zx^M@w/%z-:7AAr#1JY+Q %8|Cd1F<pNf65X2lJ?Lo*no#' );
define( 'AUTH_SALT',        'oKOugs*_:`9Ar]O2~Who_*5psP(Yy^GQ^Mbd6cqS~MrWRAR09G>7?w(Dr`ZAyR1z' );
define( 'SECURE_AUTH_SALT', 's;gu)MN,JGBK^?yx8XY-QH_oiolUQw_lC[(Kf]CT`pPun5HJgo]z1;=XzDBlP/V}' );
define( 'LOGGED_IN_SALT',   'sL;m#6gDqs3tx83O/eH<{^Cb;[j-*dba;T9N>f{VAM$cH1(>QHsWhDrbNW1U3Pzr' );
define( 'NONCE_SALT',       'eS@hN<N0N<Lkf5M34Or:K,>;KzmjIp0_uS}z%Y_TPT8^|r&S^[w9QcU8/z/foT!t' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
