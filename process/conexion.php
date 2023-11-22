<?php
$host = '127.0.0.1';
$user = "root";
$pass = '';
$db = "basebiossanar";
$conexion = mysqli_connect($host, $user, $pass, $db);
mysqli_set_charset($conexion, "utf8mb4");
?>