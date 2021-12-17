<?php
header('Content-Type: application/json');

require_once './connect.php';

if ($_POST['marked'] == 'null') {
    $error = 'Оставьте оценку';
    $responseStatus = 0;
} else {
    if (empty($_POST['reviewName']) || empty($_POST['reviewText'])) {
        $error = 'Заполните поля';
        $responseStatus = 0;
    } else {
        $responseStatus = 1;
        $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = {$_COOKIE['authorized']}"));
        mysqli_query($conn, "INSERT INTO reviews (user_name, user_avatar, review, text, product_id) VALUES ('{$_POST['reviewName']}', '{$result['avatar']}', {$_POST['marked']}, '{$_POST['reviewText']}', {$_POST['id']})");
    }
}

$response = array(
    'message' => $error,
    'status' => $responseStatus,
);

echo json_encode($response);
?>