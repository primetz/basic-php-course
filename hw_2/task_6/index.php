<?php
/*
 * 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow),
 *    где $val – заданное число, $pow – степень.
*/
function power($val, $pow): int {
    if ($val === 0) {
        return 0;
    } elseif ($pow === 0) {
        return 1;
    }
    return $val * pow($val, --$pow);
}

echo power(8, 3);
