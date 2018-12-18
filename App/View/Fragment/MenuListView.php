<?php
namespace App\View\Fragment;


use Mora\Core\View\HtmlFragment;

/**
 * Class MenuListView
 * @package App\View\Fragment
 */
class MenuListView extends HtmlFragment
{
    public function __construct($row = [])
    {
        parent::__construct();
        $style = (empty($row))? 'style="display:none;"': "";
        $empty = (empty($row))? '<p>Aucune donnée</p>' : "";
        $this->setData( [
            "style" => $style,
            "item" => $row,
            "empty" => $empty
        ]);
    }
}