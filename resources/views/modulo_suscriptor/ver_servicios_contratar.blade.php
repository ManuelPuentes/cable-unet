<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver servicios disponibles o contratar uno</title>
</head>
<body>

    @if(count($servicios_cable) + count($servicios_internet) + count($servicios_telefonia) + count($paquetes_servicios) != 0)

        @if(count($paquetes_servicios) != 0)

            Paquetes de servicios

            <br>
            <br>

            <table>
                <tr>
                    <td>Nombre</td>
                    <td>Precio</td>
                </tr>
                @foreach ($paquetes_servicios as $paquete_servicios)
                    <tr>
                        <td>{{$paquete_servicios->nombre}}</td>
                        <td>{{$paquete_servicios->precio}}$</td>
                        <td>
                            <a href="{{url('/modulo_suscriptor/detalles_contratar/detalles/paquete')}}/{{$paquete_servicios->id}}">
                                <input type="button" value="Ver detalles o contratar">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>

            <br>
            <br>

        @endif
        
        Detalles de servicios

        <br>
        <br>

        @if(count($servicios_cable) != 0)

            Servicios de cable

            <br>
            <br>

            <table>
                <tr>
                    <td>Nombre</td>
                </tr>
                @foreach ($servicios_cable as $servicio_cable)
                    <tr>
                        <td>{{$servicio_cable->nombre}}</td>
                        <td>
                            <a href="{{url('/modulo_suscriptor/detalles_contratar/detalles/cable')}}/{{$servicio_cable->id}}">
                                <input type="button" value="Ver detalles">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>

            <br>
            <br>

        @endif
        @if(count($servicios_internet) != 0)

            Servicios de internet

            <br>
            <br>

            <table>
                <tr>
                    <td>Nombre</td>
                </tr>
                @foreach ($servicios_internet as $servicio_internet)
                    <tr>
                        <td>{{$servicio_internet->nombre}}</td>
                        <td>
                            <a href="{{url('/modulo_suscriptor/detalles_contratar/detalles/internet')}}/{{$servicio_internet->id}}">
                                <input type="button" value="Ver detalles">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>

            <br>
            <br>

        @endif
        @if(count($servicios_telefonia) != 0)

            Servicios de telefonía

            <br>
            <br>

            <table>
                <tr>
                    <td>Nombre</td>
                </tr>
                @foreach ($servicios_telefonia as $servicio_telefonia)
                    <tr>
                        <td>{{$servicio_telefonia->nombre}}</td>
                        <td>
                            <a href="{{url('/modulo_suscriptor/detalles_contratar/detalles/telefonia')}}/{{$servicio_telefonia->id}}">
                                <input type="button" value="Ver detalles">
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>

            <br>
            <br>
        @endif

    @else
        Por los momentos no hay ningún servicio disponible

        <br>
        <br>
    @endif


    <a href="{{ url('/modulo_suscriptor/pagina_principal_usuario') }}">
        <input type="button" value="Regresar">
    </a>
</body>
</html>