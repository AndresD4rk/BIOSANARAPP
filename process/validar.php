<?php
session_start();
include "conexion.php";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['email']) and empty($_POST['pass'])) {
        ?><script>
            alert("Campos Vacíos");
        </script><?php
             
    } else {
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $sql = $conexion->query("SELECT idusu FROM
        seguridad WHERE correo='$email' and clave='$pass'");
        $datos = $sql->fetch_array();
        if ($datos) {
            $idusu = $datos["idusu"];
            $sql1 = $conexion->query("SELECT * FROM
            usuario WHERE idusu=$idusu");
            $datos1 = $sql1->fetch_array();
            if ($datos1) {
                $_SESSION['idusu'] = $datos1["idusu"];
                $_SESSION['nom1'] = $datos1['prinom'];
                $_SESSION['nom2'] = $datos1['segnom'];
                $_SESSION['ape1'] = $datos1['priape'];
                $_SESSION['ape2'] = $datos1['segape'];
                $_SESSION['rol'] = $datos1['rol'];
                ?><script>window.location = "../admin/registro.php";</script><?php                
            } 
        } else{
            ?><script>history.back();</script><?php                
        }
    }
}


?>
