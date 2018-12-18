<?php
namespace App\View\Fragment;


use Mora\Core\View\HtmlFragment;

class HomeInsertFormView extends HtmlFragment
{
    public function __construct($count)
    {
        parent::__construct();
        $this->setData(['count'=>$count]);
    }

}