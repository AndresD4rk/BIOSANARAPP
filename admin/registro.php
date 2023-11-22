<!DOCTYPE html>
<html lang="es">
<?php include "../process/conexion.php";?>
<head>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<!-- Inicio Menu TOP -->
<header class="header-bg-color" id="topheader">

</header>
<!-- Fin Menu TOP -->

<body>   
    <main class="container-fluid mt-2">
        <div class="row">
            <div class="col-12  mb-2">
                <a href="AddUsu.php" class="btn btn-outline-success w-100"><i class="fa-solid fa-user-plus me-2"></i><b>Agregar Usuario</b></a>
            </div>
            <div class="col-12">
                <table class="table table-responsive table-hover" id="dataTable-1">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col">ID</th>
                            <th scope="col">N° Serie</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora Inicio</th>
                            <th scope="col">Hora Final</th>                            
                            <th scope="col">Acciones</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $sql = $conexion->query("SELECT c.idcompu, d.serie, u.prinom, u.priape, c.fecuso, c.horini, c.horfin 
                          From computador c
                          Inner Join usuario u On c.idusu=u.idusu
                          Inner Join det d On c.detcompu=d.iddetcom;
                        ");
                        while ($datos = $sql->fetch_array()) {
                            $id = $datos['c.idcompu'];
                            $nserie = $datos['d.serie'];
                            $Nombre = $datos['prinom'] . " " . $datos['segnom'] . " " . $datos['priape'] . ' ' . $datos['segape'];
                            $Email = $datos['correo'];
                            $Cel = $datos['numcel'];
                            $Rol = $datos['rol'];
                            
                            if (array_key_exists($Rol, $roles)) {
                                $nombreRol = $roles[$Rol];
                            } else {
                                $nombreRol = 'Rol Desconocido';
                            }
                            // <th scope='col'>$idusu</th>
                            echo  "<tr style='text-align: center;''>                         
                            <td>$id</td>  
                            <td>$nserie</td>  
                            <td>$Nombre</td>                                               
                            <td>$Nombre</td>  
                            <td>$Nombre</td>  
                            <td>$Nombre</td>                              
                            <td>$Nombre</td>";

                        ?><td>
                                <a class="btn btn-outline-danger m-1" onclick="eliminar(<?php echo $idusu ?>)"><b>Eliminar</b></a>
                                <a class="btn btn-outline-success m-1" href="EdiUsu.php?id=<?php echo $idusu ?>"><b>Editar</b></a>
                            </td>
                            </tr><?php
                                }
                                    ?>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>
<script src="https://kit.fontawesome.com/70d8b545d5.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</html>