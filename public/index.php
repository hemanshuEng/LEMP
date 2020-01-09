<?php
/**
 * Website document root
 */
define('DOCROOT', __DIR__.DIRECTORY_SEPARATOR);

define('APPPATH', realpath(__DIR__.'/../app/').DIRECTORY_SEPARATOR);

require APPPATH."bootstrap.php";

$test = new App\Classes\TestController();
echo $test->test();


