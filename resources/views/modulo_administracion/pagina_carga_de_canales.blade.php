<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
    <title>Cargar canal</title>
</head>
<body>
    
    Nuevo canal

    <br>
    <br>

    <form action="{{ url('/modulo_administracion/procesar_carga_de_canales') }}" method="post">
        {{ csrf_field() }}
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <tr>
                <td>Descripción:</td>
                <td><input type="text" name="descripcion"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar"></td>
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

    <a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
        <input type="button" value="Regresar">
    </a>

</body>
</html>