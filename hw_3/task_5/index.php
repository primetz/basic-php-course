<?php
/*
 * 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
*/
function replaceSpaces($string): string {
    $string = mb_str_split($string);
    foreach ($string as &$item) {
        if ($item === ' ') {
            $item = '_';
        }
    }
    unset($item);
    return implode('', $string);
}

echo replaceSpaces('Функция заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку');
