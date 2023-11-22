<!DOCTYPE html>
<html lang="es">
<?php include "process/conexion.php";
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
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>

                    <div class="col-6 mb-3 mt-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido">
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