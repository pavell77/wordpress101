<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MYSQL_DATABASE') );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') );

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
define('AUTH_KEY',         '.qlekf=|#0IqD)=/rCqo y9/SWT)R{=|aO|C=zz=p3Nl.V{:%p)+-q<(A3mBS+2Q');
define('SECURE_AUTH_KEY',  'zPm]fSc5eonwt-3miN`[CRaY4]a+dmztr:}dC+}>]yi;]%dfi<S>-i[-:+}gH.KP');
define('LOGGED_IN_KEY',    'N@i2=)y}+9[izGAEOB{7M+:VWG439{-RD?3}-&$+c+[>E#.PEPtf3UX9LP8Ch+QW');
define('NONCE_KEY',        'H+zMR^,.;T7?1>h@7u,21ahHR&z8|4,VU25bw8q$4JSLw4QBS/T3-%nLD9cmOd@n');
define('AUTH_SALT',        '99%V`;0UkO-^[L:AV!7v6mk{@)?<{x`%*@Gp-kh3t,,sjDhnj9xg.Dd[Ia;?XF#+');
define('SECURE_AUTH_SALT', '2A|yR|tPfZZ)hJJUnQX|{9^{9;nWF&oTi``rYla#d)My-%5`k{Nd`$ZYrKSlMt;6');
define('LOGGED_IN_SALT',   'j%c$7(Wz4ARpxw0,L~@R%RWuae+&si{;xH%g~qu rdx]Z&]z)#2~j!A;OAs~`!pY');
define('NONCE_SALT',       '[iYYH;fV=}&!/dr@9-_P{4*wWc2x#E,$Q8UnZ{Cq`Pw[UHbi`]0y)QWIn+Ec1<d ');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in a single database if you give each
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
define( 'WP_DEBUG', true ); // Включите отладку на время разработки

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';