<?php
namespace App\View\Fragment;

use Mora\Core\View\HtmlFragment;

/**
 * Class Error404View
 * @package App\View\Fragment
 */
class Error404View extends HtmlFragment
{
    /**
     * Error404View constructor.
     * @param string $message The error message to display
     */
    public function __construct($message = "")
    {
        parent::__construct();
        $this->setData(
            ["message"=>$message]
        );
    }

}