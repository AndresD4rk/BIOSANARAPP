<!DOCTYPE html>
<html lang="es">

<head>
  <title>Biossanar App</title>
    <link rel="icon" href="../img/LogoPeq.png" type="image/png"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<main class="d-flex align-items-center justify-content-center"> 
  <div id="loginform"> 
<form id="formid" action="../process/newuser.php" method="POST" enctype="multipart/form-data">
<div  class="mb-2">
  <img src="../img/biossanarLogo.png" class="col-6 rounded mx-auto d-block" alt="...">
</div>
<div class="col-11 mx-auto">
<h2 class="text-center">Registro de Usuario</h2>
<div class="row">
<div  class="col-6 mb-3 mt-3">
    <label for="exampleInputEmail1" class="form-label ">Primer Nombre</label>
    <input type="text" class="form-control" name="nom1" aria-describedby="emailHelp" placeholder="Ingresa tu primer nombre">
  </div>
  <div  class="col-6 mb-3 mt-3">
    <label for="exampleInputEmail1" class="form-label ">Segundo Nombre</label>
    <input type="text" class="form-control" name="nom2" aria-describedby="emailHelp" placeholder="Ingresa tu segundo nombre">
  </div>
  <div  class="col-6 mb-3 mt-3">
    <label for="exampleInputEmail1" class="form-label ">Primer Apellido</label>
    <input type="text" class="form-control" name="ape1" aria-describedby="emailHelp" placeholder="Ingresa tu primer apellido">
  </div>
  <div  class="col-6 mb-3 mt-3">
    <label for="exampleInputEmail1" class="form-label ">Segundo Apellido</label>
    <input type="text" class="form-control" name="ape2" aria-describedby="emailHelp" placeholder="Ingresa tu segundo apellido">
  </div>
</div>
<div class="row">
  <div  class="col-12 mb-3 mt-3">
    <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingresa el correo">    
  </div> 
  </div>
  <div class="row">
  <div class="col-6 mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="clave" placeholder="Ingresa la contraseña">
  </div>
  <div class="col-6 mb-3">
    <label for="exampleInputPassword1" class="form-label">Verifica la Contraseña</label>
    <input type="password" class="form-control" name="clave2" placeholder="Ingresa la nuevamente contraseña">
  </div>
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <div class="row">
    <div class="col-6 text-start"><a onclick="irlogin()" class="btn btn-warning">Regresar</a></div>
    <div class="col-6 text-end   mb-2"><button type="submit" class="btn btn-success">Registrarse</button></div>
  </div>
  
  
  </div>
  </div>
</form>
</div>
</main>

</body>

</html>

<script>
function irlogin(){
    window.location= "../index1.php";
}
</script>


