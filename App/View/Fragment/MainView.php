<?php

namespace App\View\Fragment;


use Mora\Core\View\HtmlFragment;

class MainView extends HtmlFragment
{
    public function __construct($title,$content)
    {
        parent::__construct();
        $this->setData(["title"=>$title,"content"=>$content]);
        $this->setHtml(str_replace("head>",'head><base href="'.WEBROOT.'/">',$this->html));
    }
}