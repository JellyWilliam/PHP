<?php
namespace DuoDotFormat;
class DuoDotFormat
{
    public function format(string $string): string
    {
        $mas_str = explode(' ', $string);
        for ($i = 0; $i < count($mas_str); $i++) {
            $mas_str[$i] .= '::';
        }
        return implode(' ', $mas_str);
    }
}
