<?php
// HTTP
define('HTTP_SERVER', 'http://oc.local/');

// HTTPS
define('HTTPS_SERVER', 'http://oc.local/');

// DIR
define('DIR_APPLICATION', 'C:/OSPanel/domains/oc.local/catalog/');
define('DIR_SYSTEM', 'C:/OSPanel/domains/oc.local/system/');
define('DIR_IMAGE', 'C:/OSPanel/domains/oc.local/image/');
define('DIR_STORAGE', 'C:/OSPanel/domains/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'oc');
define('DB_PASSWORD', 'oc');
define('DB_DATABASE', 'oc');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');