<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<link href="{{ asset('css/paginau.css') }}" rel="stylesheet">
	
    <title>Mensaje solicitud cambio</title>
</head>
<body>
    <div class="container">
		<div class="row justify-content-center align-items-center vh-100">
		<div class="col">
		<div class="card card-body bg-light">
			<h1 class="text-center">
		@isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
			</h1>
		</div>
		</div>
		</div>
		</div>
        
</body>
</html>