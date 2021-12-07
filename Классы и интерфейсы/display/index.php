<?php
namespace App;
require_once 'src/SlashFormat.php';
require_once 'src/AsciiRender.php';
require_once 'src/DuoDotFormat.php';
require_once 'src/Display.php';

$display = new \Display\Display;
$splash_format = new \Formatter\SlashFormat;
$ascii_render = new \Renderable\AsciiRender;
$duo_dot_format = new \DuoDotFormat\DuoDotFormat;
$other = 'Рендерю';

$mas_string = ['Привет как дела', 'Что делаешь', 'Что нового', 'Как вообще живётся?'];
$mas_how = [$splash_format, $ascii_render, $duo_dot_format, $other];

foreach ($mas_string as $str) {
    foreach ($mas_how as $rndr) {
        $display::show($rndr, $str);
    }
}
