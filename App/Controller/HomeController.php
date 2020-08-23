<?php
namespace App\Controller;

use Mora\Core\Control\Controller;
use Mora\Core\View\Template;

class HomeController extends Controller{
    public function index($params){
        // or echo Template::load
        Template::print("Home",[
            "title" => "Hello Word!",
            "message" => "This is a website powered by mora Framework!"
        ]);
    }

    public function ActionNotFound($actionName,$params){
        
    }
}