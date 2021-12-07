<?php
require_once 'src/Creator.php';

$mas_class = ['Hardware', 'SUV', 'RX-4', 'Component', 'Sedan', 'Automate', 'Item-545', 'Jeep', 'Liftback', 'Oop'];
$creator = new Creator\Creator;

foreach ($mas_class as $class_name) {
    $class = $creator::create($class_name);
    $class->show();
}
