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
<!-- Fin Menu TOP -->

<body>   
    <main class="container-fluid mt-2">
        <div class="row">
            <div class="col-12  mb-2">
                <a href="addregistro.php" class="btn btn-outline-success w-100"><i class="fa-solid fa-user-plus me-2"></i><b>Agregar Registro</b></a>
            </div>
            <div class="col-12">
                <table class="table table-responsive table-hover" id="dataTable-1">
                    <thead>
                        <tr style="text-align: center;">
                            <th scope="col">ID</th>
                            <th scope="col">N° Serie</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora Inicio</th>
                            <th scope="col">Hora Final</th>                            
                            <th scope="col">Acciones</th>
                        </tr>

                    </thead>
                    <tbody>
                        <?php
                        $usu=$_SESSION['rol'];
                        if($usu==2){
                            $sql = $conexion->query("SELECT c.idcompu, d.serie, u.prinom, u.priape,u.segnom, u.segape, c.fecuso, c.horini, c.horfin 
                            From computador c
                            Inner Join usuario u On c.idusu=u.idusu
                            Inner Join det d On c.detcompu=d.iddetcom
                            WHERE c.idusu=$usu;
                          ");
                        }else{
                        $sql = $conexion->query("SELECT c.idcompu, d.serie, u.prinom, u.priape,u.segnom, u.segape, c.fecuso, c.horini, c.horfin 
                          From computador c
                          Inner Join usuario u On c.idusu=u.idusu
                          Inner Join det d On c.detcompu=d.iddetcom;
                        ");
                        }
                        while ($datos = $sql->fetch_array()) {
                            $id = $datos['idcompu'];
                            $nserie = $datos['serie'];
                            $name = $datos['prinom'] . " " . $datos['segnom'];
                            $segname = $datos['priape'] . ' ' . $datos['segape'];
                            $fecuso = $datos['fecuso'];
                            $horini = $datos['horini'];
                            $horfin  = $datos['horfin'];
                            
                         
                            // <th scope='col'>$idusu</th>
                            echo  "<tr style='text-align: center;''>                         
                            <td>$id</td>  
                            <td>$nserie</td>  
                            <td>$name</td>                                               
                            <td>$segname</td>  
                            <td>$fecuso</td>  
                            <td>$horini</td>  
                            <td>$horfin</td>";

                        ?><td>
                                <form action="../process/detregistro.php" method="POST">
                                    <input type="hidden" value="<?php echo $id;?>" name="id">
                                    <button type="submit" class="btn btn-outline-danger m-1"><b>Eliminar</b></button>
                                </form>
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