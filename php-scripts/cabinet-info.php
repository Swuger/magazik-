<?php
header('Content-Type: application/json');

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["uploadPhoto"]["name"]);

$firstName = $_POST['firstProfileName'];
$lastName = $_POST['lastProfileName'];
$patronymic = $_POST['patronymic'];
$email = $_POST['emailProfile'];
$mainTel = $_POST['mainTel'];
$subTel = $_POST['subTel'];
$oldPass = $_POST['oldPass'];
$newPass = $_POST['newPass'];
$regPass = $_POST['regPass'];

$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if ($imageFileType === 'jpg' || $imageFileType === 'jpeg' || $imageFileType === 'png') {
   $error = 'success';
} else {
    $error = 'error';
}



$response = array(
    'message' => $_FILES
);

echo json_encode($response);

?>