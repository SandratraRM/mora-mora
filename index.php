<?php
session_start();
require_once './App/Config/Constants.php';
require_once './vendor/autoload.php';
\Mora\Core\Request\Handler::route();