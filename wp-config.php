<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'j$b[$^ ZMZX,f1e^y]+02!$nDIAG_|dUkO 7JPa4A|tut1=*%[fqj1Id8v}`LYvL');
define('SECURE_AUTH_KEY',  '3 -6pat.k!aM:HBSgJE<:h#W/%Wn6JmL8]m)CcK]d2^;Yt,kuG#]IlD_Mc%Wr|m5');
define('LOGGED_IN_KEY',    'RuD[CqzkHv0$/txtJr8<aCJ]Il*p2:w6Nb &&3O*cCET^xH+@W$li[TN3QE/^)iW');
define('NONCE_KEY',        'h:_V?%^q&!4F*6UvYjw_1a&!G(54ryc_cI_&R%!>Xt*hC7&1>zMSuk,/+n}zx3>_');
define('AUTH_SALT',        '!7t~`)JN*+{s5(b|F]Z,:tuJUG^L&@2zA?8NJ/o$Sb|C:X;-BG8LgK%%5{RCm@67');
define('SECURE_AUTH_SALT', '$S7wysL|Pjx_T5H!z=I_|8UZ#vzW;0GzV+ac?CpC^DbV4kG1`Z=z_O>X#:uLTwU<');
define('LOGGED_IN_SALT',   'zxU)hQ}@:v_+;{e]KgW&|t`P(,T:VMm3QU0e.!UbMUjgA_+@~zH;d+$q-#42:0=1');
define('NONCE_SALT',       '6q]i|d+SrsXDg)-uf:G2)(%n6rfnMMnG`CypYsU>yJG}Be,{er&/{=y/*K+B+.Zd');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
