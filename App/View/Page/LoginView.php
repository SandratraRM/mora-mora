<?php
namespace App\View\Page;


use App\View\Fragment\HeaderView;
use App\View\Fragment\MainView;
use Mora\Core\View\Html;

class LoginView extends Html
{
    public static function output(){
        $form = Html::include('loginForm');
        $header = new HeaderView('Login');
        $main = new MainView("Login",$header.$form);
        $main->printHTML();
    }
}