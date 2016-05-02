<?php

$table_prefix  = 'wp_';

define('DB_NAME', 'database_name_here');
define('DB_USER', 'username_here');
define('DB_PASSWORD', 'password_here');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

define('WP_DEBUG', false);
define('WP_DEFAULT_THEME', 'mytheme');

define('YOUR_SITE_DOMAIN', 'your.site.com');

#####################################################
# CHANGE NOTHING BEYOND THIS POINT

define('WP_CONTENT_DIR', __DIR__ . '/assets');
define('WP_CONTENT_URL', 'http://'. YOUR_SITE_DOMAIN .'/assets');
define('WP_SITEURL', 'http://'. YOUR_SITE_DOMAIN .'/wp');
define('WP_HOME', 'http://' . YOUR_SITE_DOMAIN);

defined('ABSPATH') or define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
