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