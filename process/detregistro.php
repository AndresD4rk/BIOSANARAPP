<?php
session_start();
include "conexion.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_SESSION['rol']) && ($_SESSION['rol']==1)) {
        ?>
        <script>alert("Error!");            
            history.back();</script>
        <?php
    } else {
        $id = $_POST['id'];        
        $sql = $conexion->query("DELETE FROM computador WHERE idcompu=$id");                   
        if ($sql) {
            ?>
            <script>alert("Registro Eliminado");            
                 window.location="../admin/registro.php";</script>
            <?php
        } else {
            ?>
            <script>alert("Error!");            
                window.location="../admin/registro.php";</script>
            <?php
        }
    }
}