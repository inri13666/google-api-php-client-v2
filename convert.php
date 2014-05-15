<?php
define('ROOT', dirname(__FILE__) . DIRECTORY_SEPARATOR);

# recursively remove a directory
function rrmdir($dir)
{
    foreach (glob($dir . '/*') as $file) {
        if (is_dir($file))
            rrmdir($file);
        else
            unlink($file);
    }
    rmdir($dir);
}


/**
 * Prepare Folders
 */
if (is_dir(ROOT . 'libs/Google')) {
    rrmdir(ROOT . 'libs/Google');
}

mkdir(ROOT . 'libs/Google', 0777, true);


define('SOURCES_DIR', ROOT . 'src' . DIRECTORY_SEPARATOR . 'Google');
$sources = SOURCES_DIR;

set_include_path(get_include_path() . PATH_SEPARATOR . dirname(SOURCES_DIR));

$destantion = ROOT . 'libs';

/**
 * Make Folder Structure;
 */
function listdirs($dir)
{
    static $alldirs = array();
    $dirs = glob($dir . '/*', GLOB_ONLYDIR);
    if (count($dirs) > 0) {
        foreach ($dirs as $d) {
            $alldirs[] = trim(str_replace(SOURCES_DIR, '', $d), "\\/");
        }
    }
    foreach ($dirs as $dir) {
        listdirs($dir);
    }
    return $alldirs;
}

function listfiles($dir, $regexp = '/\.php/i')
{
    $files = scandir($dir);
    foreach ($files as $k => $v) {
        if ('.' == $v) {
            unset($files[$k]);
            continue;
        }
        if ('..' == $v) {
            unset($files[$k]);
            continue;
        }
        if (is_dir($dir . DIRECTORY_SEPARATOR . $v)) {
            unset($files[$k]);
            continue;
        }
        if (preg_match($regexp, $v)) {
            continue;
        }
        unset($files[$k]);
    }
    return $files;
}


/**
 * Create Folder Structure
 */
$directory_list = listdirs($sources);
$source_files = array();
/**
 * Step 1 Create General Folder Structure
 */
$declared_classes = get_declared_classes();

foreach ($directory_list as $dir) {
    mkdir($destantion . DIRECTORY_SEPARATOR . 'Google' . DIRECTORY_SEPARATOR . $dir, 0777, true);
    $files = listfiles($sources . DIRECTORY_SEPARATOR . $dir, '/.*/i');
    /**
     * Copy all non PHP files to their related folders
     */
    foreach ($files as $file) {
        if (preg_match('/\.php/i', $file)) {
            include_once $sources . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $file;
            continue;
        }
        file_put_contents($destantion . DIRECTORY_SEPARATOR . 'Google' . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $file, file_get_contents($sources . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $file));
    }
}
$new_classes = array_diff(get_declared_classes(), $declared_classes);
$ff = array();
foreach ($new_classes as $_class) {
    $x = end(explode('_', $_class));
    if (strtolower('Abstract') == strtolower($x)) {
        $_ = str_replace('_', DIRECTORY_SEPARATOR, $_class);
        $ff[$_class] = '\\' . str_replace('_', '\\', $_class) . end(explode(DIRECTORY_SEPARATOR, dirname($_)));
        continue;
    }

    if (strtolower('Resource') == strtolower($x)) {
        $x1 = explode('_', $_class);
        $x1[count($x1) - 1] = $x1[count($x1) - 2];
        $x1[count($x1) - 2] = $x;

        $ff[$_class] = '\\' . implode('\\', $x1);
        continue;
    }

    $ff[$_class] = '\\' . str_replace('_', '\\', $_class);

}
ksort($ff);
$ff = array_reverse($ff);
$d1 = array_values($ff);
$d2 = array_values($ff);
foreach ($d1 as $k => &$v) {
    $d2[$k] = "'" . ltrim($v, '\\') . "'";
    $d1[$k] = "'" . $v . "'";
}

$d11 = array_values($ff);
$d22 = array_values($ff);
foreach ($d11 as $k => &$v) {
    $d22[$k] = "'" . ltrim($v, '\\') . "'";
    $d11[$k] = "\"" . $v . "\"";
}

foreach ($ff as $_class => $_namespace) {
    $class = new ReflectionClass($_class);
    $fileName = $class->getFileName();
    $startLine = $class->getStartLine() - 1; // getStartLine() seems to start after the {, we want to include the signature
    $endLine = $class->getEndLine() - 1;
    $numLines = $endLine - $startLine;

    if (!empty($fileName)) {
        $lines = file($fileName);
        $classSource = "";
        for ($i = $startLine; $i <= $endLine; $i++) {
            $classSource .= $lines[$i];
        }
        $new_filename = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, trim($_namespace, '\\')) . '.php';
        mkdir($destantion . DIRECTORY_SEPARATOR . dirname($new_filename), 0777, true);
        /**
         * Google Specific replacements
         */
        $classSource = str_replace("sys_get_temp_dir() . '/\\Google\\Client'", "sys_get_temp_dir() . '/Google_Client'", $classSource);
        $classSource = str_replace("extends Exception", "extends \\Exception", $classSource);
        $classSource = str_replace("implements ArrayAccess", "implements \\ArrayAccess", $classSource);
        $classSource = str_replace("Iterator, Countable", "\\Iterator, \\Countable", $classSource);
        $classSource = str_replace("Google_Io_Stream", "Google_IO_Stream", $classSource);
        $classSource = str_replace("Google_Io_Curl", "Google_IO_Curl", $classSource);
        $classSource = str_replace("Google_Io_Abstract", "Google_IO_Abstract", $classSource);
        $classSource = str_replace("curl_setopt(\$curl, CURLOPT_CAINFO, dirname(__FILE__) . '/cacerts.pem');", "if (defined('CA_FILE_PATH')) { curl_setopt(\$curl, CURLOPT_CAINFO, CA_FILE_PATH); } else { curl_setopt(\$curl, CURLOPT_CAINFO, dirname(__FILE__) . '/cacerts.pem'); }", $classSource);
        $classSource = str_replace("\$requestSslContext[\"cafile\"] = dirname(__FILE__) . '/cacerts.pem';", "if (defined('CA_FILE_PATH')) { \$requestSslContext[\"cafile\"] = CA_FILE_PATH; } else { \$requestSslContext[\"cafile\"] = dirname(__FILE__) . '/cacerts.pem'; }", $classSource);

        $classSource = str_replace(array_keys($ff), array_values($ff), $classSource);
        $classSource = str_replace($d1, $d2, $classSource);
        $classSource = str_replace($d11, $d22, $classSource);


        $new_namespace = str_replace(DIRECTORY_SEPARATOR, '\\', dirname(str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, trim($_namespace, '\\'))));
        $classSource = str_replace('class \\' . $new_namespace . '\\', 'class ', $classSource);
        file_put_contents($destantion . DIRECTORY_SEPARATOR . $new_filename, '<?php ' . PHP_EOL . 'namespace ' . $new_namespace . ';' . PHP_EOL . $classSource);
    }
}