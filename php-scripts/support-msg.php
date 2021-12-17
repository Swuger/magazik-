<?php
header("Content-Type: application/json");

if (!empty($_COOKIE['authorized'])) {
    require_once './connect.php';
    $user = $_COOKIE['authorized'];
    $message = $_POST['message'];
    if (!empty($message)) {
        mysqli_query($conn, "INSERT INTO support (user_id, message) VALUES ({$_COOKIE['authorized']}, '$message')");
        $responseStatus = 1;
    } else {
        $responseStatus = 2;
        $error = 'Напишите что-нибудь';
    }
} else {
    $responseStatus = 0;
}

$response = array(
    'status' => $responseStatus,
    'message' => $error
);

echo json_encode($response);

?>