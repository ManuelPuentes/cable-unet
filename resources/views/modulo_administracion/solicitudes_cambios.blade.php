<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.js') }}"></script>
	<link href="{{ asset('css/paginau.css') }}" rel="stylesheet">
	
    <title>Document</title>
</head>
<body>
	
	<div class="container">
	
	<br>
	<h2>Solicitudes</h2>
	<br>
	
    @if(count($solicitudes_cambio) != 0)
        <table class="table table-light">
            <tr class="table-primary">
                <td><strong>Identificador contrato</strong></td>
                <td><strong>Nombre usuario</strong></td>
                <td><strong>Paquete de servicios actual</strong></td>
                <td><strong>Paquete de servicios nuevo</strong></td>
				<td></td><td></td>
            </tr>
            @foreach ($solicitudes_cambio as $solicitud_cambio)
                <tr>
                    <td>{{$solicitud_cambio->id_contrato}}</td>
                    <td>{{$solicitud_cambio->nombre_usuario}}</td>
                    <td>{{$solicitud_cambio->servicio_actual}}</td>
                    <td>{{$solicitud_cambio->servicio_nuevo}}</td>
                    <td>
                        <a href="{{url('/modulo_administracion/procesar_cambio')}}/{{$solicitud_cambio->id_contrato}}/aceptada">
                            <input class="btn btn-primary" type="button" value="Aceptar">
                        </a>
                    </td>
                    <td>
                    <a href="{{url('/modulo_administracion/procesar_cambio')}}/{{$solicitud_cambio->id_contrato}}/cancelada">
                            <input class="btn btn-danger" type="button" value="Cancelar">
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @else
        No hay solicitudes de cambio de paquete de servicios en este momento
    @endif

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
        <input class="btn btn-danger" type="button" value="Regresar">
    </a>
	
	</div>
</body>
</html>