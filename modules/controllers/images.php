<?php
namespace Controllers;
use Models\Image;

class Images extends BaseController {
    function list()
    {
        $ctx = ['cnt' => Image::get_count()];
        $this->render('list', $ctx);
    }

    function item(int $index)
    {
        $item = Image::get_image($index);
        $ctx = ['item' => $item];
        $this->render('item', $ctx);
    }
}