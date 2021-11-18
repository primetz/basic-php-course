<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Корзина</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container">
    <?php
    if (!isset($_SESSION['basket']) || empty($_SESSION['basket'])) {
        echo "<p class='cart-empty'>Нет товаров в корзине</p>";
    } else {
        $link = mysqli_connect('mysql', 'root', 'secret', 'test');

        $ids = array_map('intval', array_keys($_SESSION['basket']));

        $query = mysqli_query($link, sprintf("SELECT * FROM goods WHERE id IN (%s)", implode(',', $ids)));

        echo '<ul class="products-list">';

        while ($row = mysqli_fetch_assoc($query)) {
            echo ' <li class="products-list__item">';
            echo '<img src="https://via.placeholder.com/360x220" alt="" width="360" height="220">';
            echo '<h2 class="products-list__title">' . $row['title'] . '</h2>';
            echo '<p class="products-list__description">' . $row['description'] . '</p>';
            echo '<span class="products-list__price">' . 'Price: ' . $row['price'] . ' &dollar;</span>';
            echo '<span>' . 'Количество: ' . $_SESSION['basket'][$row['id']] . '</span>';
            echo '<a href="cart_handler.php?add_product=1&product_id=' . $row['id'] . '" class="products-list__tobasket">+</a>';
            echo '<a href="cart_handler.php?product_id=' . $row['id'] . '" class="products-list__tobasket">-</a>';
            echo '</li>';
        }

        echo '</ul>';

        mysqli_close($link);
    }
    ?>
</div>
</body>
</html>
