<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Калькулятор</title>
</head>
<body>
<!--
    1. Создать форму-калькулятор с операциями: сложение, вычитание, умножение, деление.
       Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <select>.
-->
<form action="" method="post">
    <input type="number" name="operand1">
    <select name="operation">
        <option value="plus">+</option>
        <option value="minus">-</option>
        <option value="multiply">*</option>
        <option value="divide">/</option>
    </select>
    <input type="number" name="operand2">
    <input type="submit" name="calculate">
</form>
<?php
if (isset($_POST['calculate'])) {
    $operand1 = $_POST['operand1'];
    $operand2 = $_POST['operand2'];
    $operation = $_POST['operation'];

    if (!$operation || (!$operand1 && $operand1 !== '0') || (!$operand2 && $operand2 !== '0')) {
        $error_msg = 'Не все поля заполнены!';
    } elseif (!is_numeric($operand1) || !is_numeric($operand2)) {
        $error_msg = 'Операнды должны быть цифрами!';
    } elseif ($operand2 === '0' && $operation === 'divide') {
        $error_msg = 'На ноль делить нельзя!';
    } else {
        switch ($operation) {
            case 'plus':
                $result = $operand1 + $operand2;
                break;
            case 'minus':
                $result = $operand1 - $operand2;
                break;
            case 'multiply':
                $result = $operand1 * $operand2;
                break;
            case 'divide':
                $result = $operand1 / $operand2;
                break;
        }
    }

    if (isset($error_msg)) {
        echo '<p>' . $error_msg . '</p>';
    } elseif (isset($result)) {
        echo '<p>' . $result . '</p>';
    }
}
?>
</body>
</html>
