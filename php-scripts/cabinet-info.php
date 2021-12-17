<?php
session_start();

require_once './connect.php';

$id = mysqli_fetch_assoc(mysqli_query($conn, "SELECT id FROM users WHERE id = {$_COOKIE['authorized']}"));

$target_dir = "uploads/";
$target_file = $target_dir . $id['id'] . basename($_FILES["uploadPhoto"]["name"]);

echo $target_file;

$firstName = $_POST['firstProfileName'];
$lastName = $_POST['lastProfileName'];
$patronymic = $_POST['patronymic'];
$email = $_POST['emailProfile'];
$mainTel = $_POST['mainTel'];
$subTel = $_POST['subTel'];
$oldPass = $_POST['oldPass'];
$newPass = $_POST['newPass'];
$repPass = $_POST['repPass'];

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// IMAGE UPLOAD
if (!empty($_FILES['uploadPhoto']['name'])) {
    if ($imageFileType === 'jpg' || $imageFileType === 'jpeg' || $imageFileType === 'png') {
        // delete previous file
        $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT avatar FROM users WHERE id = {$_COOKIE['authorized']}"));
        if (isset($result['avatar'])) {
            unlink("../{$result['avatar']}");
        }
        // upload current file
        move_uploaded_file($_FILES['uploadPhoto']['tmp_name'], "../$target_file");
        mysqli_query($conn, "UPDATE users SET `avatar` = '/$target_file' WHERE id = {$_COOKIE['authorized']}");
     } else {
         $_SESSION['error'] = 'Это не картинка';
     }
}

// PASS UPLOAD
if (!empty($oldPass) || !empty($newPass) || !empty($repPass)) {
    if ($oldPass === '' || $newPass === '' || $repPass === '') {
        $_SESSION['error'] = 'Заполните все поля';
    } else {
        // bd
        $result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT password FROM users WHERE id = {$_COOKIE['authorized']}"));
        if ($result['password'] !== $oldPass) {
            $_SESSION['error'] = 'Старый пароль введён неверно';
        } else {
            // repeat
            if ($newPass === $repPass) {
                mysqli_query($conn, "UPDATE users SET `password` = '$newPass' WHERE id = {$_COOKIE['authorized']}");
            } else {
                $_SESSION['error'] = 'Введённые пароли не совпадают';
            }
        }
    }
} 

// OTHER DATA UPLOAD
if (!empty($firstName)) {
    mysqli_query($conn, "UPDATE users SET `firstname` = '$firstName' WHERE id = {$_COOKIE['authorized']}");
}

if (!empty($lastName)) {
    mysqli_query($conn, "UPDATE users SET `lastname` = '$lastName' WHERE id = {$_COOKIE['authorized']}");
}

if (!empty($patronymic)) {
    mysqli_query($conn, "UPDATE users SET `patronymic` = '$patronymic' WHERE id = {$_COOKIE['authorized']}");
}

if (!empty($subTel)) {
    mysqli_query($conn, "UPDATE users SET `sub_tel` = '$subTel' WHERE id = {$_COOKIE['authorized']}");
}

if (!empty($email)) {
    mysqli_query($conn, "UPDATE users SET `email` = '$email' WHERE id = {$_COOKIE['authorized']}");
}

header("Location: /cabinet.php");
?>