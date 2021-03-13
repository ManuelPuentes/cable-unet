<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factura mensual usuario</title>
</head>
<body>
    @if(count($contratos) != 0)

        Factura mensual        

        <br>
        <br>

        Contratos

        <table>
            <tr>
                <td>Identificador del contrato</td>
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
                </tr>
            @endforeach
        </table>

        <br>
        <br>

        Total a pagar mensual: {{$total}}$
    @else
        Aún no has contratado algún paquete de servicios

        <br>
        <br>

    @endif

    
</body>
</html>