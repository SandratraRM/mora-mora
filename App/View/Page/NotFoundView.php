<?php
namespace App\View\Page;


use App\View\Fragment\Error404View;
use App\View\Fragment\MainView;
use Mora\Core\View\Html;

class NotFoundView extends Html
{
    /**
     * @param string $message Le message d'erreur
     */
    public function __construct($message = "")
    {
        $error = new Error404View($message);
        $html = new MainView("404 Page Non trouvée",$error->getHTML());
        $this->setHtml($html->getHTML());
    }

}