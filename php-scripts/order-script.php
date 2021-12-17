<?php
header('Content-Type: application/json');
require_once './connect.php';


if (empty($_POST['adress']) || empty($_POST['deliveryFullname']) || empty($_POST['deliveryPhone']) || empty($_POST['district']) || empty($_POST['payment'])) {
    $err = 'Заполните поля';
    $responseStatus = 0;
} else {
    mysqli_query($conn, "INSERT INTO orders (user_id, user_products, products_count, payment, order_date, order_status, adress, district, comment) VALUES ({$_COOKIE['authorized']}, '{$_POST['user_products']}', '{$_POST['products_count']}', '{$_POST['payment']}', CURRENT_TIMESTAMP(), 'Готовится', '{$_POST['adress']}', '{$_POST['district']}', '{$_POST['comment']}')");
    $responseStatus = 1;
    mysqli_query($conn, "DELETE FROM `cart` WHERE user_id = {$_COOKIE['authorized']}");
}

$response = array(
    'status' => $responseStatus,
    'message' => $err,
    'test' => $_POST
);

echo json_encode($response);

?>