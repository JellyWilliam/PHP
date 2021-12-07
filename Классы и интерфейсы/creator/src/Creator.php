<?php
namespace Creator;

require_once 'Item.php';
require_once 'EmptyItem.php';
require_once 'Liftback.php';
require_once 'Sedan.php';
require_once 'SUV.php';

class Creator
{
    public static function create(string $name): \Item\Item
    {
        if (class_exists('\\Item\\' . $name)) {
            return match ($name) {
                'Liftback' => new \Item\Liftback($name),
                'Sedan' => new \Item\Sedan($name),
                'SUV' => new \Item\SUV($name)
            };
        } else {
            return new \Item\EmptyItem($name);
        }
    }
}
