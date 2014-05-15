<?php
/**
 * User  : Nikita.Makarov
 * Date  : 5/15/14
 * Time  : 2:41 PM
 * E-Mail: nikita.makarov@effective-soft.com
 */
require_once implode(DIRECTORY_SEPARATOR, array(dirname(dirname(__FILE__)), 'compiled', 'GoogleApi.phar'));
$gClient = new \Google\Client();
var_dump($gClient);

