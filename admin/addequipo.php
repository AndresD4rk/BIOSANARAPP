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
                <h2 class="text-center">Registrar Equipo</h2>
            </div>
            <div class="col-8 mx-auto">
                <div class="row">
                    <div class="col-6 mb-3 mt-3">
                        <label for="id" class="form-label">ID</label>
                        <?php 
                        $id;
                        $sql = $conexion->query("SELECT MAX(iddetcom) FROM det");
                        $datos = $sql->fetch_array();
                        if ($datos) {
                            $id = $datos["MAX(iddetcom)"];
                            $id++;
                        } else {
                            $id++;
                        }?>
                        <input disabled type="text" class="form-control" value="<?php echo $id;?>">
                        <input hidden type="text" class="form-control" value="<?php echo $id;?>" name="id">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="nserie" class="form-label">N° Serie</label>
                        <input type="text" class="form-control" name="nserie">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="marca" class="form-label">Marca</label>
                        <input type="text" class="form-control" name="marca">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="sistemaOperativo" class="form-label">Sistema Operativo</label>
                        <select id="select-categoria" class="form-select" aria-label="Default select example" name="sistemaoperativo" required>
                            <option value="">Elija un Sistema Operativo</option>
                            <?php
                            $sql = $conexion->query("SELECT * 
                                FROM sisoperativo");
                            while ($datos = $sql->fetch_array()) {
                                echo '<option value="' . $datos['idsisop'] . '">' . $datos['detsis'].'</option>';
                            }
                            ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="sistemaOperativo"> -->
                    </div>

                    

                    <div class="col-6 mb-3 mt-3">
                        <label for="modelo" class="form-label">Modelo</label>
                        <input type="text" class="form-control" name="modelo">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="procesador" class="form-label">Procesador</label>
                        <input type="text" class="form-control" name="procesador">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="tarjetaMadre" class="form-label">Tarjeta Madre</label>
                        <input type="text" class="form-control" name="tarjetamadre">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="discoDuro" class="form-label">Disco Duro</label>
                        <input type="text" class="form-control" name="discoduro">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="unidadLectora" class="form-label">Unidad Lectora</label>
                        <input type="text" class="form-control" name="unidadlectora">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="tarjetaVideo" class="form-label">Tarjeta de Video</label>
                        <input type="text" class="form-control" name="tarjetavideo">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="tarjetaRed" class="form-label">Tarjeta de Red</label>
                        <input type="text" class="form-control" name="tarjetared">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="monitor" class="form-label">Monitor</label>
                        <select id="select-categoria" class="form-select" aria-label="Default select example" name="monitor" required>
                            <option value="">Elija un Monitor</option>
                            <?php
                            $sql = $conexion->query("SELECT * 
                                FROM monitor");
                            while ($datos = $sql->fetch_array()) {
                                echo '<option value="' . $datos['idmon'] . '">' . $datos['detmon'].'</option>';
                            }
                            ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="monitor"> -->
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="teclado" class="form-label">Teclado</label>
                        <select id="select-categoria" class="form-select" aria-label="Default select example" name="teclado" required>
                            <option value="">Elija un Teclado</option>
                            <?php
                            $sql = $conexion->query("SELECT * 
                                FROM teclado");
                            while ($datos = $sql->fetch_array()) {
                                echo '<option value="' . $datos['idtec'] . '">' . $datos['dettec'].'</option>';
                            }
                            ?>
                        </select>
                        <!-- <input type="text" class="form-control" name="teclado"> -->
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="mouse" class="form-label">Mouse</label>
                        <!-- <input type="text" class="form-control" name="mouse"> -->
                        <select id="select-categoria" class="form-select" aria-label="Default select example" name="mouse" required>
                            <option value="">Elija un Mouse</option>
                            <?php
                            $sql = $conexion->query("SELECT * 
                                FROM mouse");
                            while ($datos = $sql->fetch_array()) {
                                echo '<option value="' . $datos['idmou'] . '">' . $datos['detmou'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-6 mb-3 mt-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="licencia" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Licencia</label>
                        </div>
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
<script src="../assets/js/reusephp.js"></script>

</html>