<!DOCTYPE html>
<html lang="es">
<?php include "../process/conexion.php";
?>

<head>
    <base href="" />
    <title>SVMeEx</title>
    <meta charset="utf-8" />
    <meta name="description" content="Supermercado Virtual MercaExpress" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="es_CO" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Supermercado Virtual MercaExpress" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="SVMeEx" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<!-- Inicio Menu TOP -->
<header class="header-bg-color" id="topheader">

</header>
<!-- Fin Menu TOP -->

<body>
    <!-- Inicio Menu LATERAL -->
    <div class="offcanvas offcanvas-start menulat" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel"></div>
    <!-- Fin Menu LATERAL -->

    <main class="container-fluid mt-2">
        <div class="row">
            <div class="col-12  mb-2">
                <a href="AddUsu.php" class="btn btn-outline-success w-100"><i class="fa-solid fa-user-plus me-2"></i><b>Agregar Usuario</b></a>
            </div>
            <div class="col-12">
                <table class="table table-responsive table-hover" id="dataTable-1">
                    <thead>
                        <tr style="text-align: center;">
                            <!-- <th scope="col">#</th> -->
                            <th scope="col">ID</th>
                            <th scope="col">N Serie</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Sistema Operativo</th>
                            <th scope="col">Licencia</th>
                            <th scope="col">Modelo</th>
                            <th scope="col">Procesador</th>
                            <th scope="col">Tarjeta Madre</th>
                            <th scope="col">Disco Duro</th>
                            <th scope="col">Unidad Lectora</th>
                            <th scope="col">Tarjeta de Video</th>
                            <th scope="col">Tarjeta de Red</th>
                            <th scope="col">Monitor</th>
                            <th scope="col">Teclado</th>
                            <th scope="col">Mouse</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = $conexion->query("SELECT c.idcompu, d.serie, d.marca, s.detsis, d.sislic, d.modelo, d.procesador, 
                        d.tarmad, d.discdur, d.unilec, d.tarvid, d.tarred, m.detmon, t.dettec, o.detmou
                        FROM det as d
                        INNER JOIN computador as c ON d.iddetcom=c.idcompu
                        INNER JOIN monitor as m ON d.monitor=m.idmon
                        INNER JOIN teclado AS t ON d.teclado=t.idtec
                        INNER JOIN mouse AS o ON d.mouse=o.idmou
                        INNER JOIN sisoperativo AS s ON d.sisope=s.idsisop;
                        ");
                        while ($datos = $sql->fetch_array()) {
                            $idcompu = $datos['idcompu'];
                            $serie = $datos['serie'];
                            $marca = $datos['marca'];
                            $detsis = $datos['detsis'];
                            $lic = $datos['sislic'];
                            $sislic = [
                                1 => 'Si',
                                2 => 'No',
                            ];
                            if (array_key_exists($lic, $sislic)) {
                                $licencia = $sislic[$lic];
                            } else {
                                $licencia = 'No se encontro el campo';
                            }
                            $modelo = $datos['modelo'];
                            $procesador = $datos['procesador'];
                            $tarmad = $datos['tarmad'];
                            $discdur = $datos['discdur'];
                            $unilec = $datos['unilec'];
                            $tarvid = $datos['tarvid'];
                            $tarred = $datos['tarred'];
                            $detmon = $datos['detmon'];
                            $dettec = $datos['dettec'];
                            $detmou = $datos['detmou'];
                            // <th scope='col'>$idusu</th>
                            echo  "<tr style='text-align: center;''>                         
                        <td>$idcompu</td>  
                        <td>$serie</td> 
                        <td>$marca</td> 
                        <td>$detsis</td> 
                        <td>$licencia</td>
                        <td>$modelo</td>
                        <td>$procesador</td>
                        <td>$tarmad</td> 
                        <td>$discdur</td>
                        <td>$unilec</td>
                        <td>$tarvid</td>
                        <td>$tarred</td>
                        <td>$detmon</td>
                        <td>$dettec</td>
                        <td>$detmou</td>
                       ";

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
<script src="../assets/js/reusephp.js"></script>
<script>
    function eliminar(usu) {
        swal({
                title: "¿Esta Seguro?",
                text: "Una vez eliminado, no se podra recuperar!",
                icon: "warning",
                buttons: true,
                buttons: {
                    cancel: "Cancelar",
                    danger: "Eliminar",
                },
                dangerMode: true,
            })
            .then((value) => {
                if (value == "danger") {


                    $.ajax({
                        url: 'process/detusu.php',
                        type: 'GET',
                        dataType: 'json',
                        data: {
                            usu: usu
                        },
                        success: function(data) {
                            // La solicitud se completó con éxito                                                                                 
                            swal({
                                title: data.title,
                                text: data.text,
                                icon: data.icon,
                                buttons: data.buttons,
                                timer: data.timer,
                            }).then(() => {
                                location.reload();
                            });

                        },
                        error: function(xhr, textStatus, errorThrown) {
                            // Ocurrió un error en la solicitud
                            console.error('Error en la solicitud:', errorThrown);
                            swal({
                                title: "Ha ocurrido un error!",
                                text: "",
                                icon: "error",
                                buttons: false,
                                timer: 3000,
                            }).then(() => {
                                location.reload();
                            });
                            //alert('Ha ocurrido un error en la solicitud. Por favor, inténtalo nuevamente más tarde.');
                        }
                    });
                }
            });


    }
</script>

</html>