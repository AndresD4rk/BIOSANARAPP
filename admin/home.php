<?php
include_once url_app . '/views/resources/header.php';
?>

<div class="container">

    <div class="contenido-acciones-formulario-computadores mb-3">

        <div class="boton-problemas">
            <a href="#" class="btn btn-primary">Problemas</a>
        </div>
        

        <div class="formulario-buscar">
            <form action="" class="form-inline">
                <div class="form-group mr-2">
                    <input type="search" name="buscar" id="buscar" class="form-control" placeholder="Buscar Equipo" require>
                </div>
                <div class="form-group">
                    <button class="btn btn success">Buscar</button>
                </div>
            </form>
        </div>

    </div>

    <div class="tabla-vista-computadores-uso-acciones">

        <table class="table">

            <tr>
                <th>ID</th>
                <th>N° Serie</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha</th>
                <th>Hora Inicio</th>
                <th>Hora Final</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>

            <?php foreach($datos['computadores'] as $datosComputadores): ?>
            
                <tr>

                <th><?php echo $datosComputadores->idcompu ?></th>
                <th><?php echo $datosComputadores->serie ?></th>
                <th><?php echo $datosComputadores->prinom ?></th>
                <th><?php echo $datosComputadores->priape ?></th>
                <th><?php echo $datosComputadores->fecuso ?></th>
                <th><?php echo $datosComputadores->horini ?></th>
                <th><?php echo $datosComputadores->horfin ?></th>
                <th><?php echo $datosComputadores->estcom ?></th>
                <th>
                    <a href="#" class="btn btn-info">Editar</a>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </th>

                </tr>

            <?php endforeach ?>

        </table>

    </div>

</div>

<?php
include_once url_app . '/views/resources/footer.php';
?>