<?php
/*
 * 6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP.
 *    Необходимо представить пункты меню как элементы массива и вывести их циклом.
 *    Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
*/
$regions = [
    'Московская область' => [
        'Москва',
        'Зеленоград',
        'Клин'
    ],
    'Ленинградская область' => [
        'Санкт-Петербург',
        'Всеволожск',
        'Павловск',
        'Кронштадт'
    ],
    'Рязанская область' => [
        'Рязань',
        'Новомичуринск',
        'Скопин',
        'Спасск-Рязанский',
        'Сасово'
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 6</title>
</head>
<body>
<ul>
    <?php foreach ($regions as $key => $region):?>
    <li>
        <?php echo $key?>
        <ul>
            <?php foreach ($region as $item):?>
                <li><?php echo $item?></li>
            <?php endforeach;?>
        </ul>
    </li>
    <?php endforeach;?>
</ul>
</body>
</html>
