<?php
namespace Renderable;
require_once 'Renderable.php';
class AsciiRender implements Renderable
{
    public function render(string $string)
    {
        echo ord($string) . '<br/>';
    }
}
