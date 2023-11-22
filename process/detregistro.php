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
        die;
        $sql = $conexion->query("DELETE FROM carrito            
            WHERE idusu=$usu AND estado = 1");                   
        if ($sql) {
            ?>
            <script>alert("");            
                 window.location="../admin/equipo";</script>
            <?php
        } else {
            ?>
            <script>alert("Error Borrado");            
                window.location="../admin/equipo";</script>
            <?php
        }
    }
}