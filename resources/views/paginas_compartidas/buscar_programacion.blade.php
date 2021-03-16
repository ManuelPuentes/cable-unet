<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(count($canales) != 0)
        <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
    @endif
    <title>Buscar programación</title>
</head>
<body>
    
    Buscar programación

    <br>
    <br>

    @if(count($canales) != 0)
        <form action="{{ url('/modulo_suscriptor/procesar_buscar_programacion') }}" method="post">
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
                <tr>
                    <td><input type="submit" value="Buscar"></td>
                </tr>
            </table>
        </form>
    @else
        No hay canales disponibles
    @endif

    <br>
    <br>

    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>

</body>
</html>