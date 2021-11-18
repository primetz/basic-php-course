<?php
session_start();

$productId = $_GET['product_id'];


if (!isset($_SESSION['basket'])) {
    $_SESSION['basket'] = [];
}

if (in_array($productId, array_keys($_SESSION['basket']))) {

    if (isset($_GET['add_product'])) {
        $_SESSION['basket'][$productId] += 1;
    } elseif ($_SESSION['basket'][$productId] == 1) {
        unset($_SESSION['basket'][$productId]);
    } else {
        $_SESSION['basket'][$productId] -= 1;
    }

} else {
    $_SESSION['basket'][$productId] = '1';
}

if ($_SERVER['HTTP_REFERER'] === 'http://localhost/task_1/cart.php') {
    header('Location: /task_1/cart.php');
} else {
    header('Location: /task_1');
}
