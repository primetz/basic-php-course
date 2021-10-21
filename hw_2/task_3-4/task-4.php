<?php
/*
 * 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation),
 *    где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.
 *    В зависимости от переданного значения операции выполнить одну из арифметических операций
 *    (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
*/
require './task-3.php';
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            return sum($arg1, $arg2);
        case '-':
            return diff($arg1, $arg2);
        case '*':
            return mult($arg1, $arg2);
        case '/':
            return div($arg1, $arg2);
        default:
            return 'Unknown operation.';
    }
}

echo mathOperation(5, 3, '+');
