<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<link href="{{ asset('css/paginau.css') }}" rel="stylesheet">
	
    <title>Ver servicios disponibles o contratar uno</title>
</head>
<body class="">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container fluid">
    <a class="navbar-brand" href="#">
      <img src="../../public/Img/logo.png" alt="" height="70">
    </a>
	
	<form class="d-flex">

	<a href="{{ url('/modulo_suscriptor/pagina_principal_usuario') }}">
        <input class="btn btn-outline-danger" type="button" value="Regresar">
    </a>
</form>
</div>
</nav>

<br>
<br>

<div class="container">

    @if(count($servicios_cable) + count($servicios_internet) + count($servicios_telefonia) + count($paquetes_servicios) != 0)

        @if(count($paquetes_servicios) != 0)

            <h2>Paquetes de servicios</h2>

            <br>
            <br>

            <table class="table table-light">
                <tr class="table-primary">
                    <td>Nombre</td>
                    <td>Precio</td>
					<td></td>
                </tr>
                @foreach ($paquetes_servicios as $paquete_servicios)
				
                    <tr>
                    <td>{{$paquete_servicios->nombre}}</td>
                        <td>{{$paquete_servicios->precio}}$</td>
                        <td>
                           <a href="{{url('/modulo_suscriptor/detalles_contratar/detalles/paquete')}}/{{$paquete_servicios->id}}">
								<input class="btn btn-primary" type="button" value="Ver detalles o contratar">
								</a> 
                        </td>
                    </tr>

                @endforeach
            </table>
			
			
            <br>
            <br>

        @endif
        
        <h2>Detalles de servicios </h2>

        <br>
        <br>

        @if(count($servicios_cable) != 0)
		
		
		<div class="row">
		
		<div class="col-sm">
		
		<div class="card" style="width: 18rem;">
			  <div class="card-body">
				<h3 class="card-title">TV Cable</h3>
				<table class="table">
                <tr class="table-primary">
                    <td>Nombre</td>
                </tr>
                @foreach ($servicios_cable as $servicio_cable)
                    <tr>
                        <td>{{$servicio_cable->nombre}}</td>
                    </tr>
					<td>
					<a href="{{url('/modulo_suscriptor/detalles_contratar/detalles/cable')}}/{{$servicio_cable->id}}">
                    <input class="btn btn-primary" type="button" value="Ver detalles">
					</a>
					</td>
				@endforeach
				
            </table>
				
			  </div>
		</div>
        @endif
		</div>
		<br>
		
        @if(count($servicios_internet) != 0)
		
	
		<div class="col-sm">
		
		<div class="card" style="width: 18rem;">
			  <div class="card-body">
				<h3 class="card-title">Internet</h3>
				<table class="table">
                <tr class="table-primary">
                    <td>Nombre</td>
                </tr>
                @foreach ($servicios_internet as $servicio_internet)
                    <tr>
                        <td>{{$servicio_internet->nombre}}</td>
                    </tr>
					
					<td>
					<a href="{{url('/modulo_suscriptor/detalles_contratar/detalles/internet')}}/{{$servicio_internet->id}}">
					<input class="btn btn-primary" type="button" value="Ver detalles">
					</a>
					</td>
					
                @endforeach
				</table>
				
			  </div>
		</div>

        @endif
		
		</div>
		
		<br>
        @if(count($servicios_telefonia) != 0)
		
		<div class="col-sm">
	
		<div class="card" style="width: 18rem;">
			  <div class="card-body">
				<h3 class="card-title">Telefonía</h3>
				<table class="table">
                <tr class="table-primary">
                    <td>Nombre</td>
                </tr>
                @foreach ($servicios_telefonia as $servicio_telefonia)
                    <tr>
                        <td>{{$servicio_telefonia->nombre}}</td> 
                    </tr>
					
					<td>
					<a href="{{url('/modulo_suscriptor/detalles_contratar/detalles/telefonia')}}/{{$servicio_telefonia->id}}">
                        <input class="btn btn-primary" type="button" value="Ver detalles">
                    </a>
					</td>
					
                @endforeach
            </table>
			  </div>
		</div>
		</div>
            <br>
            <br>
        @endif

    @else
        <h2>Por los momentos no hay ningún servicio disponible</h2>

        
    @endif

	
</div>
<br>
<br>
<br>
</div>
</body>
</html>