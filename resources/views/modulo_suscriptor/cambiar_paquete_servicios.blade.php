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
	
    @if(count($contratos) != 0)

        <h1>Tus Contratos</h1>
        <br>

        <table class="table table-light">
            <tr class="table-primary">
                <td><strong>Identificador</td>
                <td><strong>Paquetes de servicios</td>
                <td><strong>Precio</td>
				<td></td>
            </tr>
            @foreach ($contratos as $contrato)
                <tr>
                    <td>
                        {{$contrato->id}}
                    </td>
                    <td>
                        {{$contrato->servicio_contratado}}
                    </td>
                    <td>
                        {{$contrato->precio}}
                    </td>
                    <td>
                        <a href="{{ url('/modulo_suscriptor/cambiar_paquete_servicios_2') }}/{{ $contrato->id }}">
                            <input class="btn btn-primary" type="button" value="Cambiar">
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>

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
        
    @else
			
		<div class="container">
		<div class="row justify-content-center align-items-center vh-100">
		<div class="col">
		<div class="card-body bg-danger">
			<h1 class="text-white">Aún no has contratado algún paquete de servicios</h1>
		</div>
		</div>
		</div>
		</div>

        <br>
        <br>

    @endif
	
	</div>
	<div class="col"></div>
	</div>
	</div>
    
</body>
</html>