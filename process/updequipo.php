<?php
$idusu = 0;
include "conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $iddetcom = $_POST["id"]; // Supongo que el valor de iddetcom se envía como "id" en el formulario
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

    $sql_update = $conexion->prepare("UPDATE det SET 
        serie = ?,
        marca = ?,
        sisope = ?,
        sislic = ?,
        modelo = ?,
        procesador = ?,
        tarmad = ?,
        discdur = ?,
        unilec = ?,
        tarvid = ?,
        tarred = ?,
        monitor = ?,
        teclado = ?,
        mouse = ?
        WHERE iddetcom = ?");

    $sql_update->bind_param("ssiisssssssiiii", $nserie, $marca, $sistemaOperativo, $licencia, $modelo, $procesador, $tarjetaMadre, $discoDuro, $unidadLectora, $tarjetaVideo, $tarjetaRed, $monitor, $teclado, $mouse, $iddetcom);

    if ($sql_update->execute()) {
        ?>
        <script>alert("Actualización Exitosa!");            
            window.location="../admin/equipo.php";</script>
        <?php
    } else {
        ?>
        <script>alert("Error en la Actualización!");            
            history.back();</script>
        <?php
    }

    $sql_update->close();
}
?>
