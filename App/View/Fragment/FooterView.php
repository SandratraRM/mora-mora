<?php

namespace App\View\Fragment;

use Mora\Core\View\HtmlFragment;

class FooterView extends HtmlFragment
{
    public function __construct($text)
    {
        parent::__construct();
        $this->setData(
            ["text" => $text]
        );
    }
}