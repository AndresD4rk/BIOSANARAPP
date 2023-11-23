<?php
$idusu = 0;
include "conexion.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $nserie = $_POST["nserie"];
    $marca = $_POST["marca"];
    $sistemaOperativo = $_POST["sistemaoperativo"];
    $licencia = isset($_POST["licencia"]) ? 1 : 0;
    $modelo = $_POST["modelo"];
    $procesador = $_POST["procesador"];
    $tarjetaMadre = $_POST["tarjetamadre"];
    $discoDuro = $_POST["discoduro"];
    $unidadLectora = $_POST["unidadlectora"];
    $tarjetaVideo = $_POST["tarjetavideo"];
    $tarjetaRed = $_POST["tarjetared"];
    $monitor = $_POST["monitor"];
    $teclado = $_POST["teclado"];
    $mouse = $_POST["mouse"];
    $sql = $conexion->query("SELECT MAX(idusu) FROM usuario");
    $datos = $sql->fetch_array();
    $sql1 = $conexion->query("INSERT INTO det (iddetcom, serie, marca, sisope, sislic, modelo, procesador, tarmad, discdur, unilec, tarvid, tarred, monitor, teclado, mouse)
    VALUES ($id, '$nserie', '$marca',$sistemaOperativo, $licencia, '$modelo', '$procesador', '$tarjetaMadre', '$discoDuro', '$unidadLectora', '$tarjetaVideo', '$tarjetaRed', $monitor, $teclado, $mouse);");
    if ($sql1) {
        ?>
            <script>alert("Registro Exitoso!");            
                 window.location="../admin/equipo.php";</script>
            <?php
    } else{
        ?>
        <script>alert("Error!");            
             history.back();</script>
        <?php
    }
}