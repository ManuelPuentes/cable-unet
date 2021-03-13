<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles paquete servicio</title>
</head>
<body>
    Detalles paquete servicio
    
    <br>
    <br>

    <form action="{{url('/modulo_suscriptor/detalles_contratar/contratar')}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$paquete_servicio->id}}">
        <table>
            <tr>
                <td>Nombre:</td>
                <td>{{$paquete_servicio->nombre}}</td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td>{{$paquete_servicio->precio}}$</td>
            </tr>
            <tr>
                <td>Descripción:</td>
                <td>{{$paquete_servicio->descripcion}}</td>
            </tr>
            <tr>
                <td>Servicios:</td>
            </tr>
            @foreach ($servicios as $servicio)
                <tr>
                    <td>
                        {{$servicio}}
                    </td>
                </tr>
            @endforeach
            <tr>
                <td>
                    <input type="submit" value="Contratar">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>