<?php 
session_start();
if($_SESSION){
    session_destroy();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid text-center bg-info-subtle p-5 bs-primary-text-emphasis">
<p class="h3 mt-4">Bienvenido al Organizador de Archivos Intermunicipal de Metepec</p>
</div>

<br>


<div class="container text-center mt-5">
  <div class="row">
    <div class="col">
      <img src="imgs/portada.png" alt="">
    </div>
    <div class="col">
        <div class="mt-5">

        <form action="validar_login.php" id="loginsimonts" method="POST" autocomplete="off">
          <!-- Email input -->
          <div class="form-outline mb-4">

			<div class="mb-3">
				<label for="correo_electronico" class="form-label">Email address</label>
				<input autofocus type="email" name="correo_electronico" id="correo_electronico" placeholder="Ingresa tu correo electrónico" required class="form-control">
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password" name="contrasena" id="contrasena" placeholder="Ingresa tu contraseña" required class="form-control">
			</div>
			<div class="form-check">
				<label class="form-check-label" for="">Mostrar Contraseña</label>
				<input class="form-check-input" onclick="ver_contrasena()" type="checkbox" value="" id=""/>
          	</div>
            <button type="submit" class="btn btn-primary">Ingresar</button>

          </div>
        </form>

        </div>
    </div>
  </div>
</div>

<script>
    function ver_contrasena(){
        document.getElementById('contrasena').type = document.getElementById('contrasena').type == 'password' ? 'text' : 'password';
    }
    function resetear(){
      form.reset();
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>