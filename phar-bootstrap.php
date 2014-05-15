<?php
if (!function_exists('__def')) {
    function __def($constant, $value)
    {
        if (strlen($constant) <= 0) {
            return false;
        }
        if (!defined($constant)) {
            define($constant, $value);
            return true;
        }
        //Already Defined
        return false;
    }
}
__def('DS', DIRECTORY_SEPARATOR);

if (version_compare(PHP_VERSION, '5.3.0') < 0) {
    exit("PHP must be 5.3.0+");
}

Phar::mapPhar();

if (!function_exists('GoogleApiAutoloader')) {
    function GoogleApiAutoloader($class)
    {
        $basePath = 'phar://' . __FILE__ . '/';
        if (is_readable($basePath . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php')) {
            @require_once $basePath . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        };

    }

    spl_autoload_register('GoogleApiAutoloader');
}
/**
 * TODO: Handle cacerts.pem
 */
if (!defined('CA_FILE_PATH')) {
    @mkdir(sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'GoogleApi', 0777, true);
    file_put_contents(sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'GoogleApi' . DIRECTORY_SEPARATOR . 'cacerts.pem', file_get_contents('phar://' . __FILE__ . '/Google/IO/cacerts.pem'));
    define('CA_FILE_PATH', sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'GoogleApi' . DIRECTORY_SEPARATOR . 'cacerts.pem');
}
__HALT_COMPILER();
?>
