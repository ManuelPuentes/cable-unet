<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(count($canales) != 0)
        <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
    @endif
	
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<link href="{{ asset('css/paginau.css') }}" rel="stylesheet">
	
    <title>Buscar programación</title>
</head>
<body>


	<div class="container">
	<div class="row justify-content-center align-items-center vh-100">
	<div class="col-4">

    @if(count($canales) != 0)
		<div class="card">
		<div class="card-body">
		
            <a href="{{ url('/') }}">
                <input class="btn-close" type="button" value="">
             </a>
        	<h2>Buscar programación</h2>
		
        <form class= "form-control" action="{{ url('/modulo_suscriptor/procesar_buscar_programacion') }}" method="post">
            {{ csrf_field() }}

            <table>
                <tr>
                    <td><strong>Nombre de canal:</strong></td>
                    <td>
                        <select class="form-select" name="nombre_canal">
                            @foreach ($canales as $canal)
                                <option value="{{ $canal->nombre }}">{{ $canal->nombre }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><strong>Día de la programación: </strong></td>
                    <td>
                        <input class="form-control" type="date" id="dia" name="dia" value="2021-03-16" min="2021-03-16">
                    </td>
                </tr>
                    <td></td>
            </table>
			<br>
			<input class="btn btn-primary" type="submit" value="Buscar">

        </form>
		
    @else
		<div class="container">
		<br><br>
		<div class="row justify-content-center align-items-center">
		<div class="col">
		<div class="card-body bg-danger">
			<h1 class="text-white">No hay Canales Disponibles</h1>
		</div>
		</div>
		</div>
		</div>
  
    @endif

    <br>
    <br>

    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>
	</div>
	<div class="col"></div>

	</div>	
</div>
	
</body>
</html>