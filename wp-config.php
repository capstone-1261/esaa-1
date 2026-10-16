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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'E$W#3g@`7O/mAkPN_q;vHrm jVj:7tOidWGyK|f(}s8BSUTaUWv7n=RWKeA=Dxpx' );
define( 'SECURE_AUTH_KEY',   'r*;}Yrx)r4=c]P2_RiG#Wuc{qD,0K>)cEjIwOw/{~fXJM(J:2PD#OXPBz^bX_lz#' );
define( 'LOGGED_IN_KEY',     'QE.faButV?;duo~;T%{jP^FJf4|^5`m/qXxkVGIegSVo[2IxY2YlG#[s5d@`2JTC' );
define( 'NONCE_KEY',         'BWL.`+V;J<[Bt)!MeFO?wR[Atn*1PSX-42<Zsf(-e>NLNpq|wCEdNSaq3#L%UzZS' );
define( 'AUTH_SALT',         '[a1O5LmgOlJOJLiXo`m8aaFB`<:byHHW<yl%T;6<*lx3<2uO??}5K{*mn{l-2|mp' );
define( 'SECURE_AUTH_SALT',  '*=[_t[ekiLR.@[N2FY:D*L<9yV.@RlGkM|mlPTqHpMBh*+p6y6Hg^|2R?6CZW%{f' );
define( 'LOGGED_IN_SALT',    'fSdf!nRvp8s4lnM6dip*}/F4MWn4!f<#JU9~5zlJ5:iX 0o+S(+DBVAE_0I[z8[8' );
define( 'NONCE_SALT',        'Aua-7<9ei#l(b+LVIR{zj[>KD:Xf`o#8D?pOD,|Vk3`{4C3V0>:[TF_dFtK6[b)C' );
define( 'WP_CACHE_KEY_SALT', 'SFaL^HOB~,39=^|e[vb1mYO3b3Z2pyl]XWj:92RyEm^8gh,_c@YCZ]QJDc](8?%d' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
