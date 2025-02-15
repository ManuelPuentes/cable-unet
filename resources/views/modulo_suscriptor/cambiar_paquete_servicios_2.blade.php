<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<link href="{{ asset('css/paginau.css') }}" rel="stylesheet">
	
    <title>Cambiar paquete servicios</title>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container fluid">
    <a class="navbar-brand" href="#">
      <img src="../../../public/Img/logo.png" alt="" height="70">
    </a>
	
	<form class="d-flex">
	<a href="{{url('/modulo_suscriptor/ver_servicios_contratar')}}">
        <input class="btn btn-sm btn-outline-primary m-2" type="button" value="Ver o contratar paquetes de servicios">
    </a>

    <a href="{{url('/modulo_suscriptor/factura_mensual')}}">
        <input class="btn btn-sm btn-outline-primary m-2" type="button" value="Factura mensual">
    </a>

    <a href="{{url('/modulo_suscriptor/cambiar_paquete_servicios')}}">
        <input class="btn btn-sm btn-primary m-2" type="button" value="Cambiar paquete de servicios">
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
	<div class="row">
	<div class="col"></div>
	<div class="col-6">
	
    <h1>Cambiar paquetes</h1>        

    <br>
    <br>

    <form class="form-label" action="{{url('/modulo_suscriptor/cambiar_paquete_servicios_3')}}" method="post">

        {{ csrf_field() }}
        <input type="hidden" name="id_contrato" value="{{$contrato->id}}">

        <table class="table table-light">
            <tr class="table-primary">
                <td>Identificador del contrato:</td>
                <td>{{$contrato->id}}</td>
            </tr>
            <tr>
                <td>Paquete de servicios</td>
                <td>{{$contrato->servicio_contratado}}</td>
            </tr>
            <tr>
                <td>Nuevo paquete de servicio</td>
                <td>
                    <select name="nuevo_paquete_servicio">
                        @foreach ($paquetes_servicios as $paquete_servicios)
                            @if($paquete_servicios->nombre != $contrato->servicio_contratado)
                                <option class="form-select" value="{{$paquete_servicios->nombre}}">{{$paquete_servicios->nombre}}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
            </tr>
        </table>
		
		<input class="btn btn-primary" type="submit" value="Cambiar">

    </form>

    <br>
    <br>
	
	@isset($mensaje_servidor)
	<div class="card bg-light" id="mensaje">
			<div class="card-body">
			<h5 class="h5 text-center">
        
            {{$mensaje_servidor}}
			</h5>
	</div>
	</div>
        @endisset
	
	</div>
	
	<div class="col"></div>
    <br>
    <br>
</div>
</body>
</html>