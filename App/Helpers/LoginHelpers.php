<?php
namespace App\Helpers;


class LoginHelpers
{

    public static function log($test){
        $_SESSION["user"] = $test;
        $_SESSION["type"] = "admin";
        header("location:".WEBROOT."/");
    }
}