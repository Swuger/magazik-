<?php
require_once './connect.php';
header("Content-Type: application/json");

$productPrice = intval(mysqli_fetch_assoc(mysqli_query($conn, "SELECT product_price FROM products WHERE {$_POST['id']} = id"))['product_price']);

$count = intval($_POST['count']);
$totalPrice = intval($_POST['price']);
$id = intval($_POST['id']);
$userId = $_COOKIE['authorized'];

mysqli_query($conn, "UPDATE `cart` SET `count` = $count, `total_price` = $totalPrice WHERE product_id = $id AND user_id = $userId");

$response = array(
    'price' => $productPrice,
    'count' => $count
);

echo json_encode($response);
?>