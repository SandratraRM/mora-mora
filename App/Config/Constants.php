<?php
define('WEBROOT', str_ireplace('/index.php','',$_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace('\\','/',dirname(dirname(__DIR__))));
define('PROJECT_NAME','App');
define('APP',ROOT. "/".PROJECT_NAME);
define('CONFIG', APP.'/Config');
define('VIEW',APP . '/View');
define('CONTROLLER',APP . '/Controller');
define('MODEL', APP . '/Model');
define('FIREWALL',APP . '/Firewall');