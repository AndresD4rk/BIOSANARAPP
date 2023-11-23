<!DOCTYPE html>
<html lang="es">
<?php include "../process/conexion.php";
session_start();
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<!-- Inicio Menu TOP -->
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">___BIOSSANAR APP___</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <?php if ($_SESSION['rol'] == 1) {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="registro.php">Registros</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="equipo.php">Equipos</a>
                </li>
                    <li class="nav-item">
                    <a class="nav-link" href="reporte.php">Reportes</a>
                </li>';
                }
                if ($_SESSION['rol'] == 2) {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="registro.php">Registros</a>
                </li>';
                } ?>
                <li class="nav-item">
                    <a class="nav-link" href="../process/exit.php">Salir</a>
                </li>


            </ul>
        </div>
    </nav>
</header>

<body>
    <!-- Inicio Menu LATERAL -->
    <div class="offcanvas offcanvas-start menulat" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel"></div>
    <!-- Fin Menu LATERAL -->

    <main class="container-fluid mt-2">
        <form id="formid" action="process/newUser.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <h2 class="text-center">Registrar</h2>
            </div>
            <div class="col-8 mx-auto">
                <div class="row">
                    <div class="col-6 mb-3 mt-3">
                        <label for="id" class="form-label">ID</label>
                        
                        <?php 
                        $id;
                        $sql = $conexion->query("SELECT MAX(idcompu) FROM computador");
                        $datos = $sql->fetch_array();
                        if ($datos) {
                            $id = $datos["MAX(idcompu)"];
                            $id++;
                        } else {
                            $id++;
                        }?>
                        <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" hidden>
                        <input type="text" class="form-control" name="id" value="<?php echo $id; ?>" disabled>
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="nserie" class="form-label">Computador</label>
                        <!-- <input type="text" class="form-control" name="nserie"> -->
                        <select id="select-categoria" class="form-select" aria-label="Default select example" name="idcom" required>
                            <option value="">Elija un Computador</option>
                            <?php
                            $sql = $conexion->query("SELECT iddetcom 
                                FROM det");
                            while ($datos = $sql->fetch_array()) {
                                echo '<option value="' . $datos['iddetcom'] . '">' . $datos['iddetcom'].'</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="nombre" class="form-label">Usuario</label>                                    
                            <?php
                            $usuid=$_SESSION['idusu'];
                            $sql = $conexion->query("SELECT * 
                            FROM usuario WHERE idusu=$usuid");
                        if ($datos = $sql->fetch_array()) {
                            $usuname=$datos['prinom']." ".$datos['segnom']." ".$datos['priape']." ".$datos['segape'];
                        }                        
                            ?>
                            <input type="text" class="form-control" name="usu" value="<?php echo $usuname; ?>" hidden>
                        <input type="text" class="form-control" value="<?php echo $usuname; ?>" disabled>
                        </select>                        
                    </div>
                    <div class="col-6 mb-3 mt-3">
                        <label for="fecha" class="form-label">Fecha</label>
                        <input type="date" class="form-control" name="fecha">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="horaInicio" class="form-label">Hora Inicio</label>
                        <input type="time" class="form-control" name="horaInicio">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="horaFinal" class="form-label">Hora Final</label>
                        <input type="time" class="form-control" name="horaFinal">
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