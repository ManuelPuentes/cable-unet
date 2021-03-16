<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
    <title>Factura mensual usuario</title>
</head>
<body>

    Factura mensual usuario

    <br>
    <br>
    
    <div>
        <form action="{{ url('/modulo_administracion/procesar_factura_mensual') }}" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Nombre usuario:</td>
                    <td>
                        <input type="text" name="nombre_usuario">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="enviar" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <br>
    <br>

    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>

    <br>
    <br>

    <a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
        <input type="button" value="Regresar">
    </a>

</body>
</html>