<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'spaceShip-Countdown');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Gpujidz-+ks7mPM5v2!0iJ~$Q3T*ML.l+>Z`?+6EOxK9/nPj @/J}iTEpd3cnp~2');
define('SECURE_AUTH_KEY',  'Y)CzhtVXu9S&Bi.-!hzOp{~B{P@;5-^KK,#nN(Q#G9$cNJ9=_3OJRoPsAFFw0DA:');
define('LOGGED_IN_KEY',    'n5E u%n|aak7|Kq,w~!<|~c/[_:7E/Q|OveY2*>2tvCY~(ly9ynB(Zs0@c~1P*X}');
define('NONCE_KEY',        '|u+JLR(0M9:(<i{j{jJdkJGP0-Qu-UTCJ[]z*.f+n`b7D(?FZV~.-2rk_3L_&l~J');
define('AUTH_SALT',        'hf||@]H#U0Md@_T2afXd+aV`z~p-+:vuYB*NnyU-V3^DRv4d,*9eRsB(O/LaAPL$');
define('SECURE_AUTH_SALT', 'z<M|$~3O;y}UIQ:=xzh.3-v;G~DQ P~)s?@+E2{))EicB>Oir]+i6n6-NI7(CKj7');
define('LOGGED_IN_SALT',   '[ClArqkZp|+e:sA#[noP1*doC95wO?1U4jBM*J$K;JF| |1Ik){Z>K}|_Pfg7<iC');
define('NONCE_SALT',       'b99W;-trhP->fw-jjJkAs~ZZE9IDN,LQ)}g7;t Ks^ #H.Jz}Vs=+JtV|0x1#S/n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'sc_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
