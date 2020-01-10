<?php


define ('APPPATH', realpath(__DIR__.'/../app').DIRECTORY_SEPARATOR);

require APPPATH.'bootstrap.php';

$test = new \App\classes\TestController();

echo $test->test();
