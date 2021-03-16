<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<link href="{{ asset('css/paginau.css') }}" rel="stylesheet">
	
    <title>Detalles servicio telefonía</title>
</head>
<body>
	
	<div class="container">
	  <div class="row justify-content-center align-items-center vh-100">
	  <div class="col-4">
	
	<div class="card-body bg-light">
    <h2>Detalles servicio telefonía</h2>
    <br>

    <table>
        <tr>
            <td>Nombre:</td>
            <td>{{$servicio_telefonia->nombre}}</td>
        </tr>
        <tr>
            <td>Descripción:</td>
            <td>{{$servicio_telefonia->descripcion}}</td>
        </tr>
    </table>
	
	</div></div></div></div>
	
</body>
</html>