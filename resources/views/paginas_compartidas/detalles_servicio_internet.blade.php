<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles servicio internet</title>
</head>
<body>
    Detalles servicio internet

    <br>
    <br>

    <table>
        <tr>
            <td>Nombre:</td>
            <td>{{$servicio_internet->nombre}}</td>
        </tr>
        <tr>
            <td>Descripción:</td>
            <td>{{$servicio_internet->descripcion}}</td>
        </tr>
    </table>

</body>
</html>