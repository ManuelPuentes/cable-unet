<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<link href="{{ asset('css/paginau.css') }}" rel="stylesheet">

    <title>Ver programación</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container fluid">
    <a class="navbar-brand" href="#">
      <img src="../../public/Img/logo.png" alt="" height="70">
    </a>
	
	<form class="d-flex">
	<a href="{{url('/modulo_suscriptor/ver_servicios_contratar')}}">
        <input class="btn btn-sm btn-outline-primary m-2" type="button" value="Ver o contratar paquetes de servicios">
    </a>

    <a href="{{url('/modulo_suscriptor/factura_mensual')}}">
        <input class="btn btn-sm btn-outline-primary m-2" type="button" value="Factura mensual">
    </a>

    <a href="{{url('/modulo_suscriptor/cambiar_paquete_servicios')}}">
        <input class="btn btn-sm btn-outline-primary m-2" type="button" value="Cambiar paquete de servicios">
    </a>
	
	<a href="{{url('/modulo_suscriptor/buscar_programacion')}}">
        <input class="btn btn-sm btn-primary m-2" type="button" value="Buscar programación de canal">
    </a>
	
	<a href="{{url('/modulo_suscriptor/cerrar_sesion')}}">
        <input class="btn btn-sm btn-outline-danger m-2" type="button" value="Cerrar sesión">
    </a>
    </form>
  </div>
</nav>
	
	<div class="container">
	<br>
    <h2>Ver programación</h2>

    <br>
    <br>

    <table class="table table-hover table-light">
        <tr class="table-primary">
            <td ><strong>Nombre de canal:</strong></td>
            <td>
                {{$informacion_programacion->nombre_canal}}
            </td>
        </tr>
        <tr class="table-primary">
            <td><strong>Día de la programación:</strong></td>
            <td>
                {{$informacion_programacion->dia}}
            </td>
        </tr>
        @for($i=0; $i < 24; $i++)
            <tr>
                <td>Hora {{ $i }}:00</td>
                <td>
                    {{$programas[$i]}}
                </td>
            </tr>
        @endfor
    </table>
	
	</div>
</body>
</html>