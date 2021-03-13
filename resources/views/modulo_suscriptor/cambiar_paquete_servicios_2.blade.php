<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar paquete servicios</title>
</head>
<body>

    Cambiar paquete servicios        

    <br>
    <br>

    <form action="{{url('/modulo_suscriptor/cambiar_paquete_servicios_3')}}" method="post">

        {{ csrf_field() }}
        <input type="hidden" name="id_contrato" value="{{$contrato->id}}">

        <table>
            <tr>
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
                                <option value="{{$paquete_servicios->nombre}}">{{$paquete_servicios->nombre}}</option>
                            @endif
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Cambiar">
                </td>
            </tr>
        </table>

    </form>

    <br>
    <br>

    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>

    <br>
    <br>

    <a href="{{ url('/modulo_suscriptor/cambiar_paquete_servicios') }}">
        <input type="button" value="Regresar">
    </a>

</body>
</html>