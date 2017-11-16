<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '895fa1sr');

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
define('AUTH_KEY',         'K./%/BSSK]X?m8TXur=jdc$mdJT:J@KHjvNOr16Qg1KBFvIWR(,nVp-xz#s+Af$y');
define('SECURE_AUTH_KEY',  '3t[L^L1c  d={^`R,=MptKR(:>]%!SuK(%~jzrmQiV7{i6^u$Rme1J!eQ7{E -L?');
define('LOGGED_IN_KEY',    'x~@<$Fn+maj|I<|;|oJ4D#x+8}Q-0%%=QWCxQ}p6Q%07PJ_IN&-10/4g4Pkm*{rz');
define('NONCE_KEY',        '#LT lYRXHIw83@_H(?aNWn)DH`u7U}nG7.PRuH0z0 =o05.I~mWz;U$9|0lmx~;%');
define('AUTH_SALT',        'w43HjOh+RB4Wq@*8@(,Qa4rs3,22{$r:qlH/W]4[9}LHyu|Xlo~&{CVJy&e<s#`z');
define('SECURE_AUTH_SALT', 'c.cY;]Gni+Jv4+XI#^3n1qo,,Hb: Q8&IO`/SZhY2jg.j};hS<$U@l?[4o&nPU+z');
define('LOGGED_IN_SALT',   '?NHzah9bQxDytM,tC.PAK:-P5tI8TzI4uZU:f{@[Ot+CH}PU:[M6E0BQ4E{d=StA');
define('NONCE_SALT',       '1^mcSJvjS$_C~Gn{|n~c+)U)$zW2!H(@j7[&7gq<LUp]sA{w.u4mKupf!c&~G#H6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
define('ABSPATH', dirname(__FILE__) . '/');

/** Set up upload files */

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Set up for French translation.  */
define('WPLANG', 'fr_FR');

/** update localhost. */
define('FS_METHOD', 'direct');




