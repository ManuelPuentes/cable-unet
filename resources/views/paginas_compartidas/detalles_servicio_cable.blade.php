<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles servicio cable</title>
</head>
<body>
    Detalles servicio cable

    <br>
    <br>

    <table>
        <tr>
            <td>Nombre:</td>
            <td>{{$servicio_cable->nombre}}</td>
        </tr>
        <tr>
            <td>Descripción:</td>
            <td>{{$servicio_cable->descripcion}}</td>
        </tr>
        <tr>
            <td>Canales:</td>
        </tr>
            @foreach ($canales as $canal)
                <tr>
                    <td>
                        {{$canal}}
                    </td>
                </tr>
            @endforeach
    </table>

</body>
</html>