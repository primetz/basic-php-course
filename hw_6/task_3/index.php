<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отзывы</title>
</head>
<body>
<!--
    3. Добавить функционал отзывов в имеющийся у вас проект.
-->
<?php
require_once 'markup_reviews.php';
?>
<form action="reviews.php" method="post">
    <textarea name="review" placeholder="Ваш отзыв:" required></textarea>
    <label for="user-firstname">Имя:</label>
    <input type="text" name="firstname" placeholder="Иван" id="user-firstname" required>
    <label for="user-lastname">Фамилия:</label>
    <input type="text" name="lastname" placeholder="Иванов" id="user-lastname" required>
    <label for="user-email">Эл. почта:</label>
    <input type="email" name="useremail" placeholder="example@example.com" id="user-email" required>
    <input type="submit" name="send" value="Отправить">
</form>
</body>
</html>
