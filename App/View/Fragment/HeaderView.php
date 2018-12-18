<?php

namespace App\View\Fragment;

use Mora\Core\View\HtmlFragment;

class HeaderView extends HtmlFragment
{
    public function __construct($title)
    {
        parent::__construct();
        $this->setData(
            [
                "title" => $title
            ]
        );
    }
}