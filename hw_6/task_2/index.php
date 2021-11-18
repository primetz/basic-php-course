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
    2. Создать калькулятор, который будет определять тип выбранной пользователем
       операции, ориентируясь на нажатую кнопку.
-->
<form action="" method="post">
    <input type="number" name="operand1">
    <input type="number" name="operand2">
    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
</form>
<?php
if (isset($_POST['operation'])) {
    $operand1 = $_POST['operand1'];
    $operand2 = $_POST['operand2'];
    $operation = $_POST['operation'];

    if (!$operation || (!$operand1 && $operand1 !== '0') || (!$operand2 && $operand2 !== '0')) {
        $error_msg = 'Не все поля заполнены!';
    } elseif (!is_numeric($operand1) || !is_numeric($operand2)) {
        $error_msg = 'Операнды должны быть цифрами!';
    } elseif ($operand2 === '0' && $operation === '/') {
        $error_msg = 'На ноль делить нельзя!';
    } else {
        switch ($operation) {
            case '+':
                $result = $operand1 + $operand2;
                break;
            case '-':
                $result = $operand1 - $operand2;
                break;
            case '*':
                $result = $operand1 * $operand2;
                break;
            case '/':
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
