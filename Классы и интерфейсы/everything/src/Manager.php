<?php
namespace Manager;
class Manager
{
    public function place($item)
    {
        $type = gettype($item);
        if ($type == 'object') {
            if ($item instanceof Papers\Papers) {
                echo 'Положил ' . get_class($item) . ' на стол <br/>';
            } elseif ($item instanceof Instrument\Instrument) {
                echo 'Убрал ' . get_class($item) . ' внутрь стола <br/>';
            } else {
                echo 'Выкинул ' . get_class($item) . ' в корзину <br/>';
            }
        } else {
            echo 'Выкинул ' . $item . ' в корзину <br/>';
        }
    }
}
