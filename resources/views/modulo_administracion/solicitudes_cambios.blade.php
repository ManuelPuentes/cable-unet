<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if(count($solicitudes_cambio) != 0)
        <table>
            <tr>
                <td>Identificador contrato</td>
                <td>Nombre usuario</td>
                <td>Paquete de servicios actual</td>
                <td>Paquete de servicios nuevo</td>
            </tr>
            @foreach ($solicitudes_cambio as $solicitud_cambio)
                <tr>
                    <td>{{$solicitud_cambio->id_contrato}}</td>
                    <td>{{$solicitud_cambio->nombre_usuario}}</td>
                    <td>{{$solicitud_cambio->servicio_actual}}</td>
                    <td>{{$solicitud_cambio->servicio_nuevo}}</td>
                    <td>
                        <a href="{{url('/modulo_administracion/procesar_cambio')}}/{{$solicitud_cambio->id_contrato}}/aceptada">
                            <input type="button" value="Aceptar">
                        </a>
                    </td>
                    <td>
                    <a href="{{url('/modulo_administracion/procesar_cambio')}}/{{$solicitud_cambio->id_contrato}}/cancelada">
                            <input type="button" value="Cancelar">
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
        <input type="button" value="Regresar">
    </a>
</body>
</html>