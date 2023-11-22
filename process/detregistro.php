<?php
session_start();
include "conexion.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_SESSION['idcompu'])) {
        ?>
        <script>alert("Error");            
            history.back();</script>
        <?php
    } else {
        $id = $_POST['id'];
        echo $id;
        //die;
        $sql = $conexion->query("DELETE FROM computadores WHERE idcompu=$id");                   
        if ($sql) {
            ?>
            <script>alert("Registro Eliminado");            
                 window.location="../admin/registro.php";</script>
            <?php
        } else {
            ?>
            <script>alert("Error Borrado");            
                window.location="../admin/registro.php";</script>
            <?php
        }
    }
}