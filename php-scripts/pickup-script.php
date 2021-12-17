<?php
header('Content-Type: application/json');
require_once './connect.php';


if (empty($_POST['fullname']) || empty($_POST['action']) || empty($_POST['phone'])) {
    $err = 'Заполните поля';
} else {
    mysqli_query($conn, "INSERT INTO orders (user_id, user_products, products_count, payment, order_date, order_status, pickup_time) VALUES ({$_COOKIE['authorized']}, '{$_POST['user_products']}', '{$_POST['products_count']}', 'Банковская карта', CURRENT_TIMESTAMP(), 'Готовится', '{$_POST['action']}')");
    $responseStatus = 1;
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = {$_COOKIE['authorized']}");
}

$response = array(
    'status' => $responseStatus,
    'message' => $err,
);

echo json_encode($response);

?>