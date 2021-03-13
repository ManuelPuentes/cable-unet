<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(count($canales) != 0)
        <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
    @endif
    <title>Crear programación</title>
</head>
<body>
    
    Nueva programación

    <br>
    <br>

    @if(count($canales) != 0)
        <form action="{{ url('/modulo_administracion/programacion/procesar_agregar') }}" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Nombre de canal:</td>
                    <td>
                        <select name="nombre_canal">
                            @foreach ($canales as $canal)
                                <option value="{{ $canal->nombre }}">{{ $canal->nombre }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Día de la programación:</td>
                    <td>
                        <input type="date" id="dia" name="dia" value="2021-03-16" min="2021-03-16">
                    </td>
                </tr>
                @for($i=0; $i < 24; $i++)
                    <tr>
                        <td>Hora {{ $i }}:00</td>
                        <td>
                            <input type="text" name="{{ 'h' . $i }}">
                        </td>
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

    <a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
        <input type="button" value="Regresar">
    </a>

</body>
</html>