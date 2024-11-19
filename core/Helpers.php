<?php

namespace Core;

abstract class Helpers
{
    public static function slugify(string $string): string
    {
        $string = strip_tags($string);
        $string = preg_replace('~[^\pL\d]+~u', '-', $string);
        setlocale(LC_ALL, 'en_US.utf8');
        $string = iconv('utf-8', 'us-ascii//TRANSLIT', $string);
        $string = preg_replace('~[^-\w]+~', '', $string);
        $string = trim($string, '-');
        $string = preg_replace('~-+~', '-', $string);
        $string = strtolower($string);
        if (empty($string)) {
            return 'n-a';
        }
        return $string;
    }
}
