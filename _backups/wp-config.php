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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home4/allisop9/public_html/test/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'allisop9_875' );

/** MySQL database username */
define( 'DB_USER', 'allisop9_875' );

/** MySQL database password */
define( 'DB_PASSWORD', 'D048F7ABCEf9e5umqb36g1v2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R{#</Mkdu xV&0,jTCLmp^#wYYG15T>{qU|+YZyIcy[u6`I<ds_)h m!kU&:quNS' );
define( 'SECURE_AUTH_KEY',  '|CN#wze$WmIGO{=eyqwD+uR1w;4NO*a#A++(w^SUr!E6y:Cv_`A_-$QzG*%m1R.t' );
define( 'LOGGED_IN_KEY',    'Vu|v-,sz`]L0-,a.adGf.4y|V!>G6?d?^UlS%%(0<);fb1c?AD=B@`j<e5B~cT!^' );
define( 'NONCE_KEY',        'a(}HWZD73=kCiT0j61Jg)jWF.Q?lsr3M7rMoQ;vk0]0l}&-<4N!jXS5kxaS0CAi1' );
define( 'AUTH_SALT',        '~?9f.nM=q^J?:]!}0oI6M9UiRciIfL=EQ}QME.W=Cxj.kcA?adRW1GAo%X~tAF0E' );
define( 'SECURE_AUTH_SALT', 'FJcA1LyQPx#buI0$W!g*W<]f!965hxX4mA4`@d`IRZ~Ap.;l7*`MI2sM)~l/]^82' );
define( 'LOGGED_IN_SALT',   ':5b&)>4c$?Ykssxn |*@rF>=:Nv+|IffRH{il=4cv,-oU%q.]IMB;aB}t40yUVI8' );
define( 'NONCE_SALT',       'Z+)z[h]aC6dz}yYd-&+pKZwSrhGLc,n! h=oK:x2_KEV:R$ lMWv}%[]SO8{*7v/' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '875_';



define( 'AUTOSAVE_INTERVAL',    300  );
define( 'WP_POST_REVISIONS',    5    );
define( 'EMPTY_TRASH_DAYS',     7    );
define( 'WP_AUTO_UPDATE_CORE',  true );
define( 'WP_CRON_LOCK_TIMEOUT', 120  );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
