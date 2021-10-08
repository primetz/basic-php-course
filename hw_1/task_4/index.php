<?php
/*
 * 4. Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP.
 *    Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались
 *    в блоке контента из созданных переменных.
*/
$title = 'Page title';
$heading = 'Page heading';
$date = date('Y');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
</head>
<body>
<h1><?php echo $heading;?></h1>
<footer>&copy; Primetz <?php echo $date;?></footer>
</body>
</html>
