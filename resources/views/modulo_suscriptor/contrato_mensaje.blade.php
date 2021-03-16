<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<link href="{{ asset('css/paginau.css') }}" rel="stylesheet">
	
    <title>Contrato mensaje</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container fluid">
    <a class="navbar-brand" href="#">
      <img src="../../../public/Img/logo.png" alt="" height="70">
    </a>	
	<form class="d-flex">
	<a href="{{url('/modulo_suscriptor/ver_servicios_contratar')}}">
        <input class="btn btn-sm btn-primary m-2" type="button" value="Ver o contratar paquetes de servicios">
    </a>

    <a href="{{url('/modulo_suscriptor/factura_mensual')}}">
        <input class="btn btn-sm btn-outline-primary m-2" type="button" value="Factura mensual">
    </a>

    <a href="{{url('/modulo_suscriptor/cambiar_paquete_servicios')}}">
        <input class="btn btn-sm btn-outline-primary m-2" type="button" value="Cambiar paquete de servicios">
    </a>
	
	<a href="{{url('/modulo_suscriptor/buscar_programacion')}}">
        <input class="btn btn-sm btn-outline-primary m-2" type="button" value="Buscar programación de canal">
    </a>
	
	<a href="{{url('/modulo_suscriptor/cerrar_sesion')}}">
        <input class="btn btn-sm btn-outline-danger m-2" type="button" value="Cerrar sesión">
    </a>
    </form>
  </div>
</nav>

	<div class="container">
	  <div class="row justify-content-center align-items-center vh-100 ">
	  <div class="col-4">
	
	<div class="card-body bg-success text-white center container">
    @if(count($informacion_contrato) != 0)
        <h2>{{$mensaje}}!</h2>

        <br>
        <br>

        Identificador del contrato: {{$informacion_contrato[0]->id}}
        <br>
        Fecha del contrato: {{$informacion_contrato[0]->fecha}}

        <br>
        <br>
	</div>
    @else
        {{$mensaje}}

        <br>
        <br>
    @endif
	
	</div></div></div>

</body>
</html>