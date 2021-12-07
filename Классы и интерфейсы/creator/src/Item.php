<?php
namespace Item;
abstract class Item
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function show()
    {
        echo 'Я ' . $this->name . '<br/>';
    }
}
