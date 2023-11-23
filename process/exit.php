<?php
session_start();
session_destroy();
header("location:../index.php");
include "conexion.php";
mysqli_close($conexion)
?>