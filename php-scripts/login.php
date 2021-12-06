<?php
header('Content-Type: application/json');

require_once './connect.php';

$tel = $_POST['log-tel'];
$pass = $_POST['log-pass'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE main_tel = $tel AND password = '$pass'");

if (empty($tel) || empty($pass)) {
    $error = 'Заполните все поля.';
    $responseStatus = 0;
} else {
    if (mysqli_num_rows($query)) {
        $error = null;
        $responseStatus = 1;

        // unique cookie id
        $queryId = mysqli_query($conn, "SELECT id, main_tel FROM users WHERE main_tel = $tel");
        while ($result = mysqli_fetch_assoc($queryId)) {
            $id = $result['id'];
        }
        setcookie('authorized', $id, '', '/');
    } else {
        $error = 'Пользователь не найден.';
        $responseStatus = 0;
    }
}

$response = array(
    'message' => $error,
    'status' => $responseStatus,
);

echo json_encode($response);
