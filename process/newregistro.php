<?php
$id = 0;
include "conexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nserie = $_POST["nserie"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $fecha = $_POST["fecha"];
    $horaInicio = $_POST["horaInicio"];
    $horaFinal = $_POST["horaFinal"];
    $sql = $conexion->query("SELECT MAX(idcompu) FROM computador");
    $datos = $sql->fetch_array();
    if ($datos) {
        $id = $datos["MAX(idcompu)"];
        $id++;
    } else {
        $id++;
    }
    $sql1 = $conexion->query("INSERT INTO
        computador (idcompu,detcompu,idusu,fecuso,horini,horfin,estcom)
        VALUES ($id,'$nom1','$nom2','$fecha','$horaInicio','$horaFinal',$rol)");
    if ($sql1) {
        $sql2 = $conexion->query("INSERT INTO
        a (correo, clave, idusu)
        VALUES ('$email','$clave',$idusu)");
        if ($sql2) {

        } 
    }  
    // Aquí puedes realizar las operaciones que necesites con los datos recibidos
    // Por ejemplo, almacenar en una base de datos, realizar cálculos, etc.

    // En este ejemplo, simplemente se imprimirán los valores recibidos
    echo "ID: " . $id . "<br>";
    echo "N° Serie: " . $nserie . "<br>";
    echo "Nombre: " . $nombre . "<br>";
    echo "Apellido: " . $apellido . "<br>";
    echo "Fecha: " . $fecha . "<br>";
    echo "Hora Inicio: " . $horaInicio . "<br>";
    echo "Hora Final: " . $horaFinal . "<br>";
}
?>
