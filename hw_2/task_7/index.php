<?php
/*
 * 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
 *      22 часа 15 минут
 *      21 час 43 минуты
*/
function formatTime(): string {
    $hoursStr = date('h') . ' час';
    $minutesStr = date('i') . ' минут';
    $minutesLastDigit = substr($minutesStr, 1, 1);

    if (((int) $hoursStr > 1 && (int) $hoursStr < 5) || (int) $hoursStr > 21) {
        $hoursStr .= 'a';
    } elseif (((int) $hoursStr > 4 && (int) $hoursStr < 21) || (int) $hoursStr === 0) {
        $hoursStr .= 'ов';
    }

    if ((int) $minutesLastDigit === 1 && (int) $minutesStr !== 11) {
        $minutesStr .= 'a';
    } elseif (((int) $minutesLastDigit > 1 && (int) $minutesLastDigit < 5) && ((int) $minutesStr < 12 || (int) $minutesStr > 14)) {
        $minutesStr .= 'ы';
    }

    return $hoursStr . ' ' . $minutesStr;
}

echo formatTime();
