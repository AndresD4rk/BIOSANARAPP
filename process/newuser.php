<?php
session_start();
$idusu = 0;
include "conexion.php";
if (empty($_POST['email'])) {
    ?>
    <script>alert("Error!");            
                 history.back();</script>
            <?php      
} else if ($_POST["clave"] == $_POST["clave2"]) {
    $email = $_POST["email"];
    $clave = $_POST["clave"];
    $nom1 = $_POST["nom1"];
    $nom2 = $_POST["nom2"];
    $ape1 = $_POST["ape1"];
    $ape2 = $_POST["ape2"];    
    $sql = $conexion->query("SELECT MAX(idusu) FROM usuario");
    $datos = $sql->fetch_array();
    if ($datos) {
        $idusu = $datos["MAX(idusu)"];
        $idusu++;
    } else {
        $idusu++;
    }

    $sql1 = $conexion->query("INSERT INTO
        usuario (idusu,prinom,segnom,priape,segape,rol)
        VALUES ($idusu,'$nom1','$nom2','$ape1','$ape2', 2)");
    if ($sql1) {
        $sql2 = $conexion->query("INSERT INTO
        seguridad (correo, clave, idusu)
        VALUES ('$email','$clave',$idusu)");
        if ($sql2) {
            $_SESSION['idusu'] = $idusu;
            $_SESSION['nom1'] = $nom1;
            $_SESSION['nom2'] = $nom2;
            $_SESSION['ape1'] = $ape1;
            $_SESSION['ape2'] = $ape2;            
            $_SESSION['rol'] = 2;         
            ?><script>window.location = "../admin/addregistro.php";</script><?php                
        }        
        } else {
            ?>
            <script>alert("Error!");            
                 history.back();</script>
            <?php           
        }
    } else {
        ?>
          <script>alert("Error!");            
                 history.back();</script>
            <?php  

    }