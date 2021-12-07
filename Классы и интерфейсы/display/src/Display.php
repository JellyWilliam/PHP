<?php
namespace Display;

class Display
{
    public static function show($formatter, string $string)
    {
        $type = gettype($formatter);
        if ($type == 'object') {
            if (is_a($formatter, 'Formatter\\Formatter')) {
                $output = $formatter->format($string);
            } elseif (is_a($formatter, 'Renderable\\Renderable')) {
                $formatter->render($string);
                return;
            } else {
                if (method_exists($formatter, 'format')) {
                    $output = $formatter->format($string);
                } else {
                    $output = $string;
                }
            }
        } else {
            $output = $string;
        }
        echo $output . '<br/>';
    }
}
