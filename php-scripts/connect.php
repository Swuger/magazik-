<?php
$hostname = 'localhost';
$servername = 'root';
$dbname = 'shop';

$conn = mysqli_connect($hostname, $servername, 'root', $dbname) or die('Connection error: ') . mysqli_connect_error();
