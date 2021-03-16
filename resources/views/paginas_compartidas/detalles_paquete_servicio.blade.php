<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<link href="{{ asset('css/paginau.css') }}" rel="stylesheet">
	
    <title>Detalles paquete servicio</title>
</head>
<body class="">
	
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container fluid">
    <a class="navbar-brand">
      <img src="../../public/Img/logo.png" alt="" height="70">
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
		
		
    <form class="card-body bg-light" action="{{url('/modulo_suscriptor/detalles_contratar/contratar')}}" method="post">
		<h2>Detalles del Paquete</h2>
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$paquete_servicio->id}}">
        
            <tr>
                <td>Nombre:</td>
                <td>{{$paquete_servicio->nombre}}</td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td>{{$paquete_servicio->precio}}$</td>
            </tr>
            <tr>
                <td>Descripción:</td>
                <td>{{$paquete_servicio->descripcion}}</td>
            </tr>
            <tr>
			
			<table class="table mt-4">
                <td class="table-primary">Servicios:</td>
            </tr>
            @foreach ($servicios as $servicio)
                <tr>
                    <td>
                        {{$servicio}}
                    </td>
                </tr>
            @endforeach
            <tr>
                <td>
				<br>
                    <input class="btn btn-primary" type="submit" value="Contratar">
                </td>
            </tr>
        </table>
    </form>
	
	</div>
	</div
 </div>
</body>
</html>