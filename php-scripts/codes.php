<?php
header("Content-Type: application/json");
session_start();
require_once './connect.php';

$query = mysqli_query($conn, "SELECT * FROM codes WHERE '{$_POST['promo']}' = code");

if (mysqli_num_rows($query)) {
    $price = mysqli_fetch_assoc($query)['discount'];
    $responseStatus = 1;
} else {
    $error = 'Неверный промокод';
    $responseStatus = 0;
}

$response = array(
    'error' => $error,
    'price' => $price,
    'status' => $responseStatus
);

echo json_encode($response);


?>