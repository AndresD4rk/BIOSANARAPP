<!DOCTYPE html>
<html lang="es">
<?php include "../process/conexion.php";
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<!-- Inicio Menu TOP -->
<header class="header-bg-color" id="topheader">

</header>

<body>
    <!-- Inicio Menu LATERAL -->
    <div class="offcanvas offcanvas-start menulat" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel"></div>
    <!-- Fin Menu LATERAL -->

    <main class="container-fluid mt-2">
        <form id="formid" action="process/newUser.php" method="POST" enctype="multipart/form-data">
            <div class="mb-4">
                <h2 class="text-center">Registrar Usuario</h2>
            </div>
            <div class="col-8 mx-auto">
                <div class="row">
                    <div class="col-6 mb-3 mt-3">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" class="form-control" name="id">
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
                        <input type="text" class="form-control" name="sistemaOperativo">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" name="licencia" role="switch" id="flexSwitchCheckDefault">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Licencia</label>
                        </div>
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
                        <input type="text" class="form-control" name="tarjetaMadre">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="discoDuro" class="form-label">Disco Duro</label>
                        <input type="text" class="form-control" name="discoDuro">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="unidadLectora" class="form-label">Unidad Lectora</label>
                        <input type="text" class="form-control" name="unidadLectora">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="tarjetaVideo" class="form-label">Tarjeta de Video</label>
                        <input type="text" class="form-control" name="tarjetaVideo">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="tarjetaRed" class="form-label">Tarjeta de Red</label>
                        <input type="text" class="form-control" name="tarjetaRed">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="monitor" class="form-label">Monitor</label>
                        <input type="text" class="form-control" name="monitor">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="teclado" class="form-label">Teclado</label>
                        <input type="text" class="form-control" name="teclado">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="mouse" class="form-label">Mouse</label>
                        <input type="text" class="form-control" name="mouse">
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