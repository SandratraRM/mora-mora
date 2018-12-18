<?php
namespace App\View\Page;
use App\View\Fragment\FooterView;
use App\View\Fragment\HeaderView;
use App\View\Fragment\HomeInsertFormView;
use App\View\Fragment\MainView;
use App\View\Fragment\MenuListView;
use Mora\Core\View\Html;

class HomeView extends Html
{
    public function __construct($array,$count)
    {
        $header = new HeaderView((isset($_SESSION['user']))? $_SESSION["user"] : "Not logged");
        $list = new MenuListView($array);
        $form = new HomeInsertFormView($count);
        $footer = new FooterView("Copyright " . Date("Y"));
        $html = new MainView("Test de liste",$header.$form.$list.$footer);
        $this->html = $html->getHTML();
    }
}