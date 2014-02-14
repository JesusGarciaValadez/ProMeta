<?php
/**
 *  MODX Configuration file
 */
$database_type = 'mysql';
$database_server = 'localhost';
$database_user = 'pr0m374';
$database_password = 'YE(U2o24[qMBjHpX6,N*tJ';
$database_connection_charset = 'utf8';
$dbase = 'prometa_web';
$table_prefix = 'modx_';
$database_dsn = 'mysql:host=localhost;dbname=prometa_web;charset=utf8';
$config_options = array (
);
$driver_options = array (
);

$lastInstallTime = 1389043157;

$site_id = 'modx52cb1dd5c136c1.74245532';
$site_sessionname = 'SN52cb1d3768236';
$https_port = '443';
$uuid = '8681eee6-e236-4519-884b-a240f5a9fa89';

if (!defined('MODX_CORE_PATH')) {
    $modx_core_path= '/Applications/XAMPP/xamppfiles/htdocs/prometa/core/';
    define('MODX_CORE_PATH', $modx_core_path);
}
if (!defined('MODX_PROCESSORS_PATH')) {
    $modx_processors_path= '/Applications/XAMPP/xamppfiles/htdocs/prometa/core/model/modx/processors/';
    define('MODX_PROCESSORS_PATH', $modx_processors_path);
}
if (!defined('MODX_CONNECTORS_PATH')) {
    $modx_connectors_path= '/Applications/XAMPP/xamppfiles/htdocs/prometa/connectors/';
    $modx_connectors_url= '/prometa/connectors/';
    define('MODX_CONNECTORS_PATH', $modx_connectors_path);
    define('MODX_CONNECTORS_URL', $modx_connectors_url);
}
if (!defined('MODX_MANAGER_PATH')) {
    $modx_manager_path= '/Applications/XAMPP/xamppfiles/htdocs/prometa/manager/';
    $modx_manager_url= '/prometa/manager/';
    define('MODX_MANAGER_PATH', $modx_manager_path);
    define('MODX_MANAGER_URL', $modx_manager_url);
}
if (!defined('MODX_BASE_PATH')) {
    $modx_base_path= '/Applications/XAMPP/xamppfiles/htdocs/prometa/';
    $modx_base_url= '/prometa/';
    define('MODX_BASE_PATH', $modx_base_path);
    define('MODX_BASE_URL', $modx_base_url);
}
if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
    $isSecureRequest = false;
} else {
    $isSecureRequest = ((isset ($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on') || $_SERVER['SERVER_PORT'] == $https_port);
}
if (!defined('MODX_URL_SCHEME')) {
    $url_scheme=  $isSecureRequest ? 'https://' : 'http://';
    define('MODX_URL_SCHEME', $url_scheme);
}
if (!defined('MODX_HTTP_HOST')) {
    if(defined('PHP_SAPI') && (PHP_SAPI == "cli" || PHP_SAPI == "embed")) {
        $http_host='localhost';
        define('MODX_HTTP_HOST', $http_host);
    } else {
        $http_host= $_SERVER['HTTP_HOST'];
        if ($_SERVER['SERVER_PORT'] != 80) {
            $http_host= str_replace(':' . $_SERVER['SERVER_PORT'], '', $http_host); // remove port from HTTP_HOST
        }
        $http_host .= ($_SERVER['SERVER_PORT'] == 80 || $isSecureRequest) ? '' : ':' . $_SERVER['SERVER_PORT'];
        define('MODX_HTTP_HOST', $http_host);
    }
}
if (!defined('MODX_SITE_URL')) {
    $site_url= $url_scheme . $http_host . MODX_BASE_URL;
    define('MODX_SITE_URL', $site_url);
}
if (!defined('MODX_ASSETS_PATH')) {
    $modx_assets_path= '/Applications/XAMPP/xamppfiles/htdocs/prometa/assets/';
    $modx_assets_url= '/prometa/assets/';
    define('MODX_ASSETS_PATH', $modx_assets_path);
    define('MODX_ASSETS_URL', $modx_assets_url);
}
if (!defined('MODX_LOG_LEVEL_FATAL')) {
    define('MODX_LOG_LEVEL_FATAL', 0);
    define('MODX_LOG_LEVEL_ERROR', 1);
    define('MODX_LOG_LEVEL_WARN', 2);
    define('MODX_LOG_LEVEL_INFO', 3);
    define('MODX_LOG_LEVEL_DEBUG', 4);
}
if (!defined('MODX_CACHE_DISABLED')) {
    $modx_cache_disabled= false;
    define('MODX_CACHE_DISABLED', $modx_cache_disabled);
}
