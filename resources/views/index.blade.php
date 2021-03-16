<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	
    <title>Cable Unet</title>
</head>
<body>

<nav class="navbar navbar-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../public/Img/logo.png" alt="" height="70">
    </a>
	<form class="d-flex">
	<a href="{{ url('/modulo_administracion/iniciar_sesion') }}">
        <input class="btn btn-outline-primary m-2" type="button" value="Iniciar sesión administrador">
    </a>

    <a href="{{ url('/modulo_suscriptor/iniciar_sesion') }}">
        <input class="btn btn-outline-primary m-2" type="button" value="Iniciar sesión suscriptor">
    </a>

    <a href="{{ url('/modulo_suscriptor/registrar') }}">
        <input class="btn btn-outline-primary m-2" type="button" value="Registrar suscriptor">
    </a>
    </form>
  </div>
</nav>

<div id="carouselExampleControls" class="carousel slide carousel-fade"  data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../public/Img/navegacion.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../public/Img/telefonia.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="../public/Img/tv.jpg" class="d-block w-100" alt="...">
    </div>
	<div class="carousel-item">
      <img src="../public/Img/atencion al cliente.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

    
</body>
</html>