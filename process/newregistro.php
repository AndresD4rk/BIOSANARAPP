<?php
include "conexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $comp = $_POST["idcom"];
    $usu = $_POST["usu"];    
    $fecha = $_POST["fecha"];
    $horaInicio = $_POST["horainicio"];
    $horaFinal = $_POST["horafinal"];
    $fechaFormateada = date("Y-m-d", strtotime($fecha));   
    $sql1 = $conexion->query("INSERT INTO computador (idcompu, detcompu, idusu, fecuso, horini, horfin)
    VALUES ('$id', '$comp', '$usu', '$fechaFormateada', '$horaInicio', '$horaFinal');");
    if ($sql1) {
        ?>
            <script>alert("Registro Exitoso!");            
                 window.location="../admin/registro.php";</script>
            <?php
    } else{
        ?>
        <script>alert("Error!");            
             history.back();</script>
        <?php
    }

}
?>
