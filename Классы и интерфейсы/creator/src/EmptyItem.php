<?php
namespace Item;
require_once 'Item.php';

class EmptyItem extends Item
{
    public function show()
    {
        echo 'Класс ' . $this->name . ' не найден <br/>';
    }
}
