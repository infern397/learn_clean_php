<?php
namespace Controllers;
use Models\Image;

class Images extends BaseController {
    function list()
    {
        $ctx = ['list' => new \Models\Image()];
        $this->render('list', $ctx);
    }

    function item(int $index)
    {
        $item = Image::get_image($index);
        $ctx = ['item' => $item, 'site_title' => $item['desc']];
        $this->render('item', $ctx);
    }
}