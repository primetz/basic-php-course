<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goods</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<header class="page-header">
    <div class="container">
        <div class="page-header__body">
            <a href="cart.php" class="page-header__cart">Перейти в корзину</a>
        </div>
    </div>
</header>
<div class="container">
    <?php
    $link = mysqli_connect('mysql', 'root', 'secret', 'test');

    $query = mysqli_query($link, 'SELECT * FROM goods');

    echo '<ul class="products-list">';

    while ($row = mysqli_fetch_assoc($query)) {
        echo ' <li class="products-list__item">';
        echo '<img src="https://via.placeholder.com/360x220" alt="" width="360" height="220">';
        echo '<h2 class="products-list__title">' . $row['title'] . '</h2>';
        echo '<p class="products-list__description">' . $row['description'] . '</p>';
        echo '<span class="products-list__price">' . 'Price: ' . $row['price'] . ' &dollar;</span>';
        echo '<a href="cart_handler.php?add_product=1&product_id=' . $row['id'] . '" class="products-list__tobasket">Добавить в корзину</a>';
        echo '</li>';
    }

    echo '</ul>';

    mysqli_close($link);
    ?>
</div>
</body>
</html>
