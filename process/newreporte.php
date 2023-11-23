<?php
include "conexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $reg = $_POST["reg"];    
    $usu = $_POST["usu"];    
    $comp = $_POST["idcom"];
    $det = $_POST["det"];    
    $sql1 = $conexion->query("INSERT INTO reportes (idrep, idcom, idusu, iddet, detpro, estpro)
    VALUES ($id, $reg, $usu, $comp, '$det',0);");
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
