<!DOCTYPE html>
<html lang="es">

<?php include "../process/conexion.php";
session_start();

if (!($_SERVER['REQUEST_METHOD'] === 'POST')) {
?>
    <script>
        alert("Error");
        history.back();
    </script>
<?php }
$usuid = $_SESSION['idusu'];
$name = $_SESSION['nom1'] . " " . $_SESSION['nom2'] . " " . $_SESSION['ape1'] . " " . $_SESSION['ape2'];
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<!-- Inicio Menu TOP -->
<header>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1f1f1f;">
<img src="../img/LogoPeq.png" alt="LOGO" style="height: 60px;">
        <a class="navbar-brand text-white" href="#">BIOSSANAR APP</a>    
    
        
            <ul class="navbar-nav ml-auto">

                <?php if ($_SESSION['rol'] == 1) {
                    echo '<li class="nav-item">
                    <a class="nav-link text-white" href="registro.php">Registros</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="equipo.php">Equipos</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link text-white" href="reporte.php">Reportes</a>
                </li>';
                }
                if ($_SESSION['rol'] == 2) {
                    echo '<li class="nav-item">
                    <a class="nav-link text-white" href="registro.php">Registros</a>
                </li>';
                } ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../process/exit.php">Salir</a>
                </li>
            </ul>        
    </nav>
</header>

<body>
    <!-- Inicio Menu LATERAL -->
    <div class="offcanvas offcanvas-start menulat" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel"></div>
    <!-- Fin Menu LATERAL -->

    <main class="container-fluid mt-2">
        <form id="formid" action="../process/newreporte.php" method="POST">
            <div class="mb-4">
                <h2 class="text-center">Reportar Problema</h2>
            </div>
            <div class="col-8 mx-auto">
                <div class="row">
                    <div class="col-6 mb-3 mt-3">
                        <label for="id" class="form-label">ID</label>

                        <?php
                        $id;
                        $sql = $conexion->query("SELECT MAX(idrep) FROM reportes");
                        $datos = $sql->fetch_array();
                        if ($datos) {
                            $id = $datos["MAX(idrep)"];
                            $id++;
                        } else {
                            $id++;
                        } ?>
                        <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" readonly>                        
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="nserie" class="form-label">Computador</label>                        
                        <input type="text" class="form-control" readonly name="idcom" value="<?php echo $_POST['com']; ?>">
                    </div>
                    <div class="col-6 mb-3 mt-3">
                        <label for="nombre" class="form-label">Usuario</label>
                        <input type="text" class="form-control" name="usu" value="<?php echo $usuid; ?>" hidden>  
                        <input type="text" class="form-control" value="<?php echo $name; ?>" readonly>                                                                                      
                    </div>
                    <div class="col-6 mb-3 mt-3">
                        <label for="nombre" class="form-label">Uso Registro</label>
                        <input type="text" class="form-control" name="reg" value="<?php echo $_POST['reg']; ?>" readonly>                                            
                    </div>
                    <div class="col-12 mb-3 mt-3">
                        <label for="horaInicio" class="form-label">Descripción Problema</label>
                        <textarea class="form-control" name="det"></textarea>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-6 text-start"><a onclick="history.back()" class="btn btn-outline-danger"><b>Regresar</b></a></div>
                <div class="col-6 text-end   mb-2"><button type="submit" class="btn btn-outline-success"><b>Registrar</b></button></div>
            </div>


            </div>

    </main>
</body>
<script src="https://kit.fontawesome.com/70d8b545d5.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</html>