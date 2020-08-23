<?php
namespace App\Controller;

use Mora\Core\Control\Controller;
use Mora\Core\View\Template;

class NotfoundController extends Controller
{

    public function index($params)
    {
        http_response_code(404);
        Template::print("NotFound",[
            "uri" => $_SERVER["REQUEST_URI"]
        ]);

    }

    public function ActionNotFound($actionName, $params)
    {
        
    }
}
