<?php

?>

<div class="container">

<div class="contenido-acciones-formulario-equipos mb-3">

    <div class="boton-registrar">
        <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registroModal">Registrar</a>
    </div>

    <div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="registroModalLabel">Registro de Equipos</h5>
                </div>
                <div class="modal-body">
                    <!-- Formulario de Registro -->
                    <form action="registrar.php" method="post">
                       
                        <div class="form-group">
                            
                            <label for="serie">N serie:</label>
                            <input type="text" id="serie" name="serie" class="form-control" required>
                            <?php foreach($datos['options']->marca as $datosMarca): ?>
                                <option value="<?php echo $datosMarca->idmarca ?>"><?php echo $datosMarca->detmarca ?></option>
                            <?php endforeach ?>
                        </div>

                        <label for="marca">Marca:</label>
                        <input type="text" id="marca" name="marca" class="form-control" required>
                        
                        <label for="sisoperativo">Sistema Operativo:</label>
                        <input type="text" id="sisoperativo" name="sisoperativo" class="form-control" required>

                        <label for="licencia">Licencia:</label>
                        <input type="text" id="licencia" name="licencia" class="form-control" required>

                        <label for="modelo">Modelo:</label>
                        <input type="text" id="modelo" name="modelo" class="form-control" required>

                        <label for="procesador">Procesador:</label>
                        <input type="text" id="procesador" name="procesador" class="form-control" required>

                        <label for="tarmadre">Tarjeta Madre:</label>
                        <input type="text" id="tarmadre" name="tarmadre" class="form-control" required>

                        <label for="discduro">Disco Duro:</label>
                        <input type="text" id="discduro" name="discduro" class="form-control" required>

                        <label for="unidadlector">Unidad Lectora:</label>
                        <input type="text" id="unidadlector" name="unidadlector" class="form-control" required>

                        <label for="tarvideo">Tarjeta de Video:</label>
                        <input type="text" id="tarvideo" name="tarvideo" class="form-control" required>

                        <label for="tarred">Tarjeta de Red:</label>
                        <input type="text" id="tarred" name="tarred" class="form-control" required>

                        <label for="monitor">Monitor:</label>
                        <input type="text" id="monitor" name="monitor" class="form-control" required>

                        <label for="teclado">Teclado:</label>
                        <input type="text" id="teclado" name="teclado" class="form-control" required>

                        <label for="mouse">Mouse:</label>
                        <input type="text" id="mouse" name="mouse" class="form-control" required>

                        <input type="submit" value="Registrarse" class="btn btn-primary">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
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

    <div class="tabla-vista-equipos-acciones">

        <table class="table">

            <tr>
                <th>ID</th>
                <th>N Serie</th>
                <th>Marca</th>
                <th>Sistema Operativo</th>
                <th>Licencia</th>
                <th>Modelo</th>
                <th>Procesador</th>
                <th>Tarjeta Madre</th>
                <th>Disco Duro</th>
                <th>Unidad Lectora</th>
                <th>Tarjeta de Video</th>
                <th>Tarjeta de Red</th>
                <th>Monitor</th>
                <th>Teclado</th>
                <th>Mouse</th>
                <th>Acciones</th>
            </tr>

            <?php foreach($datos['equipos'] as $datosEquipos): ?>
            
                <tr>

                <th><?php echo $datosEquipos->iddetcom ?></th>
                <th><?php echo $datosEquipos->serie ?></th>
                <th><?php echo $datosEquipos->marca ?></th>
                <th><?php echo $datosEquipos->sisope ?></th>
                <th><?php echo $datosEquipos->sislic ?></th>
                <th><?php echo $datosEquipos->modelo ?></th>
                <th><?php echo $datosEquipos->procesador ?></th>
                <th><?php echo $datosEquipos->tarmad ?></th>
                <th><?php echo $datosEquipos->discdur ?></th>
                <th><?php echo $datosEquipos->unilec ?></th>
                <th><?php echo $datosEquipos->tarvid ?></th>
                <th><?php echo $datosEquipos->tarred ?></th>
                <th><?php echo $datosEquipos->monitor ?></th>
                <th><?php echo $datosEquipos->teclado ?></th>
                <th><?php echo $datosEquipos->mouse ?></th>
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