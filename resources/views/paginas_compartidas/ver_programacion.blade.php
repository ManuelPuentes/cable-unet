<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver programación</title>
</head>
<body>
    
    Ver programación

    <br>
    <br>

    <table>
        <tr>
            <td>Nombre de canal:</td>
            <td>
                {{$informacion_programacion->nombre_canal}}
            </td>
        </tr>
        <tr>
            <td>Día de la programación:</td>
            <td>
                {{$informacion_programacion->dia}}
            </td>
        </tr>
        @for($i=0; $i < 24; $i++)
            <tr>
                <td>Hora {{ $i }}:00</td>
                <td>
                    {{$programas[$i]}}
                </td>
            </tr>
        @endfor
    </table>

</body>
</html>