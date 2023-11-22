<?php
$idusu = 0;
include "conexion.php";
if (empty($_POST['email'])) {
} else if ($_POST["clave"] == $_POST["clave2"]) {
    $id = $_POST["id"];
    $nserie = $_POST["nserie"];
    $marca = $_POST["marca"];
    $sistemaOperativo = $_POST["sistemaOperativo"];
    $licencia = isset($_POST["licencia"]) ? "Sí" : "No"; // Verifica si el checkbox está marcado
    $modelo = $_POST["modelo"];
    $procesador = $_POST["procesador"];
    $tarjetaMadre = $_POST["tarjetaMadre"];
    $discoDuro = $_POST["discoDuro"];
    $unidadLectora = $_POST["unidadLectora"];
    $tarjetaVideo = $_POST["tarjetaVideo"];
    $tarjetaRed = $_POST["tarjetaRed"];
    $monitor = $_POST["monitor"];
    $teclado = $_POST["teclado"];
    $mouse = $_POST["mouse"];
    $sql = $conexion->query("SELECT MAX(idusu) FROM usuario");
    $datos = $sql->fetch_array();
    if ($datos) {
        $idusu = $datos["MAX(idusu)"];
        $idusu++;
    } else {
        $idusu++;
    }
    $sql1 = $conexion->query("INSERT INTO
        usuario (idusu,prinom,segnom,priape,segape,numcel,rol)
        VALUES ($idusu,'$nom1','$nom2','$ape1','$ape2','$cel',$rol)");
    if ($sql1) {
        $sql2 = $conexion->query("INSERT INTO
        seguridad (correo, clave, idusu)
        VALUES ('$email','$clave',$idusu)");
        if ($sql2) {

        } 
    }  
}