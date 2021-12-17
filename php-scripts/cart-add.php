<?php
require_once './connect.php';

$checkQuery = mysqli_query($conn, "SELECT * FROM cart WHERE {$_GET['id']} = product_id AND {$_COOKIE['authorized']} = user_id");
$productQuery = mysqli_fetch_assoc(mysqli_query($conn, "SELECT product_price FROM products WHERE {$_GET['id']} = id"));
$productPrice = intval($productQuery['product_price']);
if (!mysqli_num_rows($checkQuery)) {
    if (empty($_GET['count'])) {
        mysqli_query($conn, "INSERT INTO cart (product_id, user_id, count, total_price) VALUES ({$_GET['id']}, {$_COOKIE['authorized']}, 1, $productPrice)");
    } else {
        mysqli_query($conn, "INSERT INTO cart (product_id, user_id, count, total_price) VALUES ({$_GET['id']}, {$_COOKIE['authorized']}, {$_GET['count']}, {$_GET['price']})");
    }
}




header("Location: /cart.php");