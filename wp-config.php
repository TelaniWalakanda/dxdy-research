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
define( 'DB_NAME', 'next_wordpress' );

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
define( 'AUTH_KEY',         'EqVJmC+M`UJM>BDBh=UZIKi%DF]_3wJE8&qoiu~U>[fUNV%P1ogU5n(fxRydc~d)' );
define( 'SECURE_AUTH_KEY',  '59{$$ cwzj)51ff8nb}M!f,,9m~{]d-?2:Mj:jQ/:UI]y:/M[1k]sE_d,Ym34s,R' );
define( 'LOGGED_IN_KEY',    '5bGdu{EhHx/3*#I!MkpnioAv>51us_IJNc))QCyK3Zusd;]_,vlIeGRDa4bKblI?' );
define( 'NONCE_KEY',        'b=69?tdxn%WYH_x}Lj5c8&3t]DJ&/fUh9.@i&{<D<bm@T!Lbjutz,dRUljp--NdS' );
define( 'AUTH_SALT',        'DefPEmZOFcj!S=wQO|)*$ODA;&hz6[,YeteoT8k+[amWl*399+qS,T.){&~XV9EC' );
define( 'SECURE_AUTH_SALT', '+~OlEjRcuABB 6cr{Vc3n_jf)tG1hM,R{5lUs.ejMF:_&PB842yO-IxYZA42~y;M' );
define( 'LOGGED_IN_SALT',   'nJ5dio|78+KJ%I&-Vrq,a9s&{W/acaN:NBzBJ*>U$(nKY?x:OY]h$GTfEH,0E.? ' );
define( 'NONCE_SALT',       'L+_.<&c1|s1(MI%Y`hY<[CTi^?Y3I[C%zZ^_VSkf-&F`rwlhYAr_d._%Uk0J!%$o' );

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
