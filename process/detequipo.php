<?php
session_start();
include "conexion.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_SESSION['idusu'])) {
        ?>
        <script>alert("Error");            
            history.back();</script>
        <?php
    } else {
        $id = $_POST['id'];
        echo $id;
        // die;
        $sql = $conexion->query("DELETE FROM det WHERE iddetcom=$id");                   
        if ($sql) {
            ?>
            <script>alert("");            
                 window.location="../admin/equipo.php";</script>
            <?php
        } else {
            ?>
            <script>alert("Error Borrado");            
                window.location="../admin/equipo.php";</script>
            <?php
        }
    }
}