<?php
session_start();
session_destroy();
header("location:../index1.php");
include "conexion.php";
mysqli_close($conexion)
?>