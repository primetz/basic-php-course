<?php
/*
 * 1. Установить программное обеспечение: веб-сервер, базу данных, интерпретатор,
 *    текстовый редактор и проверить, что всё работает правильно.
 *
 * 2. Выполнить примеры из методички, разобраться, как это работает.
*/

/* Hello, World! */
echo "Hello World! <br>";

/* Переменные и константы */
$name = "GeekBrains user";
echo "Hello $name <br>";

//const MY_CONST = 100;
define('MY_CONST', 100);
echo MY_CONST . '<br>';

/* Типы данных */
$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "Десятеричная система $int10 <br>";
echo "Двоичная система $int2 <br>";
echo "Восьмеричная система $int8 <br>";
echo "Шестнадцатеричная система $int16 <br>";

$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-4;
echo "$precise1 | $precise2 | $precise3 <br>";

$a = 1;
echo "$a <br>";
echo '$a <br>';

$a = 10;
$b = (boolean) $a;
var_dump($b);
echo '<br>';

/* Операции со строками */
$a = 'Hello, ';
$b = 'World!';
$c = $a . $b;
echo $c . '<br>';

/* Математические операции */
$a = 4;
$b = 5;
echo $a + $b . '<br>';    // сложение
echo $a * $b . '<br>';    // умножение
echo $a - $b . '<br>';    // вычитание
echo $a / $b . '<br>';  // деление
echo $a % $b . '<br>'; // остаток от деления
echo $a ** $b . '<br>'; // возведение в степень

$a = 4;
$b = 5;
$a += $b;
echo 'a = ' . $a . '<br>';
$a = 0;
echo $a++ . '<br>';     // Постинкремент
echo ++$a . '<br>';    // Преинкремент
echo $a-- . '<br>';     // Постдекремент
echo --$a . '<br>';    // Предекремент

/* Операции сравнения */
$a = 4;
$b = 5;
var_dump($a == $b);  // Сравнение по значению
echo '<br>';
var_dump($a === $b); // Сравнение по значению и типу
echo '<br>';
var_dump($a > $b);    // Больше
echo '<br>';
var_dump($a < $b);    // Меньше
echo '<br>';
var_dump($a <> $b);  // Не равно
echo '<br>';
var_dump($a != $b);   // Не равно
echo '<br>';
var_dump($a !== $b); // Не равно без приведения типов
echo '<br>';
var_dump($a <= $b);  // Меньше или равно
echo '<br>';
var_dump($a >= $b);  // Больше или равно
