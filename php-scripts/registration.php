<?php
header('Content-Type: application/json');

require_once './connect.php';

// reg-modal vars
$tel = $_POST['tel'];
$pass = $_POST['pass'];
$repeatPass = $_POST['repeat_pass'];
$politics = $_POST['politics'];

$query = mysqli_query($conn, "SELECT main_tel FROM users");

while ($result = mysqli_fetch_assoc($query)) {
    if ($tel === $result['main_tel']) {
        $telDenied = true;
        break;
    }
}

// reg-script
if ($tel === '' || $pass === '' || $repeatPass === '') {
    $error = 'Заполните все поля.';
    $responseStatus = 0;
} else {
    if ($telDenied) {
        $error = 'Номер телефона уже зарегистрирован.';
        $responseStatus = 0;
    } else {
        if ($pass === $repeatPass) {
            if (!$politics) {
                $error = 'Примите условия соглашения.';
                $responseStatus = 0;
            } else {
                $query = "INSERT INTO users (main_tel, password) VALUES ($tel, '$pass')";
                if (mysqli_query($conn, $query)) {
                    $lastId = mysqli_insert_id($conn);
                }
                $responseStatus = 1;
                setcookie('authorized', $lastId, '', '/');
                $error = null;
            }
        } else {
            $error = 'Пароли не совпадают.';
            $responseStatus = 0;
        }
    }
}

// ajax response
$response = array(
    'message' => $error,
    'status' => $responseStatus
);

echo json_encode($response);