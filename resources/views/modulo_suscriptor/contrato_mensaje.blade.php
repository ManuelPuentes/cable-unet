<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contrato mensaje</title>
</head>
<body>
    
    @if(count($informacion_contrato) != 0)
        {{$mensaje}}

        <br>
        <br>

        Identificador del contrato:{{$informacion_contrato[0]->id}}
        <br>
        Fecha del contrato:{{$informacion_contrato[0]->fecha}}

        <br>
        <br>

    @else
        {{$mensaje}}

        <br>
        <br>
    @endif

</body>
</html>