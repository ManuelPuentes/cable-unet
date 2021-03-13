<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambiar paquete servicios</title>
</head>
<body>
    @if(count($contratos) != 0)

        Cambiar paquete servicios        

        <br>
        <br>

        Contratos

        <br>
        <br>

        <table>
            <tr>
                <td>Identificador</td>
                <td>Paquetes de servicios</td>
                <td>Precio</td>
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
                            <input type="button" value="Cambiar">
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>

        <br>
        <br>

        <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
        </div>
        
    @else
        Aún no has contratado algún paquete de servicios

        <br>
        <br>

    @endif

    <a href="{{ url('/modulo_suscriptor/pagina_principal_usuario') }}">
        <input type="button" value="Regresar">
    </a>
    
</body>
</html>