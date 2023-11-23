<?php
session_start();
include "conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_SESSION['idusu'])) {
        ?>
        <script>
            alert("Error");
            history.back();
        </script>
        <?php
    } else {
        $id = $_POST['id'];
        try {
            $stmt = $conexion->prepare("UPDATE reportes 
                SET estpro = 1
                WHERE idrep = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();

            // Verifica si se actualizó algún registro
            if ($stmt->affected_rows > 0) {
                ?>
                <script>
                    alert("Registro Actualizado Exitosamente!");
                    window.location="../admin/reporte.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("No se encontró el registro con el ID proporcionado o ya estaba actualizado.");
                    window.location="../admin/reporte.php";
                </script>
                <?php
            }

            // Cierra la declaración preparada
            $stmt->close();

        } catch (Exception $e) {
            ?>
            <script>
                alert("Error: <?php echo $e->getMessage(); ?>");
                window.location="../admin/reporte.php";
            </script>
            <?php
        }
    }
}
?>
