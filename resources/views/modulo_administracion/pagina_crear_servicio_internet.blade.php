<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/validaciones_formulario_1.js') }}"></script>
    <title>Crear servicio internet</title>
</head>
<body>
    
    Nuevo servicio internet

    <br>
    <br>

    <form action="{{ url('/modulo_administracion/pagina_creacion_de_servicios/procesar_internet') }}" method="post">
        {{ csrf_field() }}
        
        <table>
            <input type="hidden" name="precio" id="precio" value="0">
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre"></td>
            </tr>
            <!--
            <tr>
                <td>Precio:</td>
                <td><input type="number" name="precio" id="precio" value="0"></td>
                <td>Opcional</td>
            </tr>
            -->
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

    <a href="{{ url('/modulo_administracion/pagina_creacion_de_servicios') }}">
        <input type="button" value="Regresar">
    </a>

</body>
</html>