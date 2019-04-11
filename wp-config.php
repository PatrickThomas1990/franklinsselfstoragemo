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
define( 'DB_NAME', 'darlahen_624' );

/** MySQL database username */
define( 'DB_USER', 'darlahen_624' );

/** MySQL database password */
define( 'DB_PASSWORD', 'E9BD8A27FCcv6gden1w0p3f5q4' );

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
define( 'AUTH_KEY',          ':LgI^Kj8z_f#9{>68hrQEL8}Pvu#L%/&5%2(&G5>SY|KD#eVMBa@$2LK;+ud[[]_' );
define( 'SECURE_AUTH_KEY',   'Nz(8`WcO5B9Ez=$Ef0SdFjIG<+Ci?E&wd1hKmhXsO}+H-Y1 QS@Yg1x%Lh>l+{WQ' );
define( 'LOGGED_IN_KEY',     'aniVb5 HkbGd(:u;&bK<t=r!HH~Iatg7GS)5=hSp6%y[[hj,g/fl.dvMO|?<C`Oe' );
define( 'NONCE_KEY',         'uB?6&fhrZ.#uVq*Qr!%K 74Ies>r)0!xM9[A@&&~jJAqzOff}/{Q18a@0B;+@uc>' );
define( 'AUTH_SALT',         '#`.ob2Py8B_~<GE|.D3_pl$7dWN Q#~D,IVoQqKI.>MR<5:h(z2:p<xr3KUo5e=I' );
define( 'SECURE_AUTH_SALT',  'T&5^xBsG$R/qhQm!mUqTlTDKT0/96pgqOrzp5WCp*tSeG3o>S`5NigJPuQOh[F/J' );
define( 'LOGGED_IN_SALT',    '?x{9$jYwbl6#Uin8F*rEfX|Nk{a{j?aPE/wJB*E7{-J>nkh9X CT@;-^ljKr-oVx' );
define( 'NONCE_SALT',        'z>PBMxIIV!R4_xUVsc*>qZ1&z-H#}0RvFX%? $,PD5p/Uy,mdzgp}x&2%([VP)=,' );
define( 'WP_CACHE_KEY_SALT', 'SK0k0LSj]4b_^Fa1Y=N{}$B2]fr5AJtnBh-hEm?R7TL5=Md;g.Do:67HMk(!/{y4' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '624_';



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
