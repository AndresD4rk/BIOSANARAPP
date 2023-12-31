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
        try {
            $stmt = $conexion->prepare("DELETE FROM det WHERE iddetcom = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
        
            // Verifica si se eliminó algún registro
            if ($stmt->affected_rows > 0) {
                ?>
                <script>
                    alert("Registro Eliminado Exitosamente!");
                    window.location="../admin/equipo.php";
                </script>
                <?php
            } else {
                ?>
                <script>
                    alert("No se encontró el registro con el ID proporcionado.");
                    window.location="../admin/equipo.php";
                </script>
                <?php
            }
        
            // Cierra la declaración preparada
            $stmt->close();
        
        } catch (Exception $e) {
            ?>
            <script>
                alert("Error: <?php echo $e->getMessage(); ?>");
                window.location="../admin/equipo.php";
            </script>
            <?php
        }
        
    }
}