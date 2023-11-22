<!DOCTYPE html>
<html lang="es">

<head>
  <base href="" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body class="container-fluid">
<main class="align-items-center justify-content-center"> 
  <div  class="col-6 mx-auto mt-5"> 
<form class="logo formid" id="formlogin" action="process/validar.php" method="POST">
<div  class="mb-4">
  <!-- <h1 class="text-center">MercaExpress</h1> -->
  <img src="../assets/img/logoME.webp" class="col-6 rounded mx-auto d-block" alt="...">
</div>
<div class="col-12 mx-auto">
  <div  class="mb-3 mt-5">
    <label class="form-label">Correo Electronico</label>
    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Ingresa el correo">    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" name="pass" placeholder="Ingresa la contraseña">
  </div>
  <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <div class="row">
    <div class="col-6 text-start"><a onclick="registrar()" class="btn btn-warning">Registrarse</a></div>
    <div class="col-6 text-end   mb-2"><button type="submit" class="btn btn-success2">Ingresar</button></div>
  </div>
  
  
  </div>
</form>
</div>
</main>

</body>

</html>
<script>
function registrar(){
    window.location= "newUser.php";
}
</script>

