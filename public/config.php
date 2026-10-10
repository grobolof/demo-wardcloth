<?php
// APPLICATION
define('APPLICATION', 'Catalog');

// HTTP
define('HTTP_SERVER', 'http://mr-robot.docker.local/');

// DIR
define('DIR_OPENCART', '/pub/www/app/public/');
define('DIR_APPLICATION', DIR_OPENCART . 'catalog/');
define('DIR_SYSTEM', DIR_OPENCART . 'system/');
define('DIR_EXTENSION', DIR_OPENCART . 'extension/');
define('DIR_IMAGE', DIR_OPENCART . 'image/');
define('DIR_STORAGE', '/pub/www/app/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/template/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'database');
define('DB_USERNAME', 'login');
define('DB_PASSWORD', 'pass');
define('DB_DATABASE', 'opencart');
define('DB_PREFIX', 'oc_');
define('DB_PORT', '3306');
// Cache
define('CACHE_ENGINE', 'file'); // apc, file, mem, memcached or redis
//define('CACHE_HOSTNAME', 'unix:///home/user/.system/redis.sock');
//define('CACHE_PORT', 6379);
//define('CACHE_PREFIX', 'oc_cache_');
//define('CACHE_PASSWORD', 'secret');
