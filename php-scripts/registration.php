<?php
session_start();

require_once './connect.php';

$tel = preg_replace("/\s+/", "", $_POST['tel']);
$pass = $_POST['pass'];
$passReapat = $_POST['repeat_pass'];
$politics = $_POST['politics'];

$query = mysqli_query($conn, "SELECT main_tel FROM users");

while ($result = mysqli_fetch_assoc($query)) {
    if ($tel === $result['main_tel']) {
        $telDenied = true;
        break;
    }
}

if ($tel === '' || $pass === '' || $passReapat === '') {
    $_SESSION['regMsg'] = 'Заполните все поля.';
    header('Location: /index.php');
} else {
    if ($telDenied) {
        $_SESSION['regMsg'] = 'Номер телефона уже зарегистрирован.';
        header('Location: /index.php');
    } else {
        if ($pass === $passReapat) {
            if (!$politics) {
                $_SESSION['regMsg'] = 'Примите условия соглашения.';
                header('Location: /index.php');
            } else {
                $query = "INSERT INTO users (main_tel, password) VALUES ($tel, '$pass')";
                // mysqli_query($conn, $query);
                $_SESSION['regMsg'] = 'da';
                setcookie('authorized', true);
                header('Location: /cabinet.php');
            }
        } else {
            $_SESSION['regMsg'] = 'Пароли не совпадают.';
            header('Location: /index.php');
        }
    }
}
