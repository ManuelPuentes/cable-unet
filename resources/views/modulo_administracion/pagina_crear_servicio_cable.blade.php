<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(count($canales) != 0)
        <script src="{{ asset('js/validaciones_formulario_2.js') }}"></script>
    @endif
    <title>Crear servicio cable</title>
</head>
<body>

    Nuevo servicio cable

    <br>
    <br>

    @if(count($canales) != 0)

        <form action="{{ url('/modulo_administracion/pagina_creacion_de_servicios/procesar_cable') }}" method="post">
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
                    <td>Seleccionar canales</td>
                </tr>
                @for ($i = 0; $i < count($canales); $i++)
                    <tr>
                        <td><label><input type="checkbox" name="canales[]" value="{{ $canales[$i]->nombre }}">{{ $canales[$i]->nombre }}</label></td>
                    </tr>
                @endfor
                <tr>
                    <td><input type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>

    @else
        No hay canales registrados, registre canales y vuelva a intentar
    @endif

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