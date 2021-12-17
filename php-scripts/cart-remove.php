<?php
require_once './connect.php';

mysqli_query($conn, "DELETE FROM cart WHERE {$_GET['id']} = product_id");

header("Location: /cart.php");
?>