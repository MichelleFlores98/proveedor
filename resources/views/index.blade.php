<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="stilos.css"> 
  </head>
<body>
<div class="container-fuid bg-gray-100 dark:bg-gray-900 sm:items-center">

<div class="row">
<img class="chica" src="/ReportInventario/views/Login/imagenes/logo-Pinturerias_regular.png">
@if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif



<section class="vh-100">
  <div class="bienvenido2 container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class=" bienvenido col-md-6 col-lg-6 col-xl-5 text-center">
        <br>
        <br>
        <h1>¡Bienvenido!</h1>
        <br>
        <br>
        <h2>Registra los artículos negados</h>
        <br>
        <br>
        <div class=row>
        <div class="text-center">
      <img src="/ReportInventario/views/Login/imagenes/logo-Pinturerias_regular2.png" class="img-fluid" >
      </div>
      <br>
      <br>
      <br>
      <div class="text-center">
      <img src="/ReportInventario/views/Login/imagenes/logoComex.png" class="img-fluid" >
      <br>
      <br>
      </div>
      </div>
      </div>
    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1 ">  
    <div class="row">
    <form method="POST" action="index.php" id=login-form>
         <br>
         <br>
         <h1 class="text-center">Ventas Negadas</h1>
        <br>
        
          <div class="row">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start" class="centrar">
            <h2 class="text-center">Iniciar Sesión</h2>
        <br>
        <br>
        <br>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>
          <div class="form-outline mb-4">
          <i class="bi bi-person-circle" style="font-size: 2rem; color: cornflowerblue;"></i>            
            <label class="form-label">Nombre de Usuario</label>
            <input type="text" id="nameuser" class="form-control form-control-lg" placeholder="Ingrese su nombre de usuario" />
          </div>
          <div class="form-outline mb-3">
          <i class="bi bi-lock" style="font-size: 2rem; color: cornflowerblue;"></i>
            <label class="form-label" for="labelContraseña">Contraseña</label>
            <input type="password" id="clave" class="form-control form-control-lg" placeholder="Ingrese contraseña" autocomplete="on" />
          </div>
         
          <div class="d-flex justify-content-between align-items-center">
          <div class="col-auto justify-content-">
            <!--div class="g-recaptcha" id="recaptcha" data-sitekey="6Ldq7PwmAAAAACxtTKcQPT0W4sJKkKfyg6dLUZHD"></div!-->
            <br>
            </div>
            </div>
            <div class="form-outline mb-3">
            <button class="btn btn-primary" type="button" id="login">Iniciar Sesión</button>
           </div>	 
           <br>
           <br>
           <br>
           <br>              	

          <div class="row justify-content-center">
            <div class="col-lg-4">             
              <!--input class="btn btn-primary" type="button" value="Iniciarsesión" id="login"!-->
              <br>
              <br>
            </div>
          </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </div>  
  </div>
</section>
<br>
<br>
<br>
<br>
<br>
</div> 