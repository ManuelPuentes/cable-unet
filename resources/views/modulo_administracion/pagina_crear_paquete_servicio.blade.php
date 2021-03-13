<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(count($servicios_cable) + count($servicios_internet) + count($servicios_telefonia) != 0)
        <script src="{{ asset('js/validaciones_formulario_3.js') }}"></script>
    @endif
    <title>Crear paquete de servicio</title>
</head>
<body>

    Nuevo paquete de servicio
    
    <br>
    <br>

    @if(count($servicios_cable) + count($servicios_internet) + count($servicios_telefonia) != 0)

        <form action="{{ url('/modulo_administracion/procesar_crear_paquete_servicio') }}" method="post">
            {{ csrf_field() }}
            <table> 
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>Precio:</td>
                    <td>Se puede establecer un precio, o</td>
                </tr>
                <tr>
                    <td></td>
                    <td>en caso contrario, el precio será la</td>
                </tr>
                <tr>
                    <td></td>
                    <td>suma de los valores de los precios</td>
                </tr>
                <tr>
                    <td></td>
                    <td>de los servicios seleccionados</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="establecer_sumatoria" id="sumatoria" value="sumatoria">Sumatoria</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="radio" name="establecer_sumatoria" id="establecer" value="establecer" checked>Establecer precio</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="number" name="precio" id="precio"> $</td>
                </tr>
                <tr>
                    <td>Descripción:</td>
                    <td><input type="text" name="descripcion"></td>
                </tr>
                @if(count($servicios_cable) != 0)

                    @foreach ($servicios_cable as $servicio_cable)
                        <input type="hidden" id="servicios_cable_{{ $servicio_cable->nombre }}" value="{{ $servicio_cable->precio }}">
                    @endforeach

                    <tr>
                        <td>Servicios cable</td>
                        <td>
                            <select name="servicios_cable" id="servicios_cable">
                                <option value=""></option>
                                @foreach ($servicios_cable as $servicio_cable)
                                    <option value="{{ $servicio_cable->nombre }}">{{ $servicio_cable->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                @endif
                @if(count($servicios_internet) != 0)

                    @foreach ($servicios_internet as $servicio_internet)
                        <input type="hidden" id="servicios_internet_{{ $servicio_internet->nombre }}" value="{{ $servicio_internet->precio }}">
                    @endforeach

                    <tr>
                        <td>Servicios internet</td>
                        <td>
                            <select name="servicios_internet" id="servicios_internet">
                                <option value=""></option>
                                @foreach ($servicios_internet as $servicio_internet)
                                    <option value="{{ $servicio_internet->nombre }}">{{ $servicio_internet->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                @endif
                @if(count($servicios_telefonia) != 0)

                    @foreach ($servicios_telefonia as $servicio_telefonia)
                        <input type="hidden" id="servicios_telefonia_{{ $servicio_telefonia->nombre }}" value="{{ $servicio_telefonia->precio }}">
                    @endforeach

                    <tr>
                        <td>Servicios telefonía</td>
                        <td>
                            <select name="servicios_telefonia" id="servicios_telefonia">
                                <option value=""></option>
                                @foreach ($servicios_telefonia as $servicio_telefonia)
                                    <option value="{{ $servicio_telefonia->nombre }}">{{ $servicio_telefonia->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                @endif
                <tr>
                    <td><input type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>

    @else
        No hay algún tipo de servicio registrado, registre algún tipo de servicio y vuelva a intentar
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
-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(count($servicios_cable) + count($servicios_internet) + count($servicios_telefonia) != 0)
        <script src="{{ asset('js/validaciones_formulario_3.js') }}"></script>
    @endif
    <title>Crear paquete de servicio</title>
</head>
<body>

    Nuevo paquete de servicio

    <br>
    <br>

    @if(count($servicios_cable) + count($servicios_internet) + count($servicios_telefonia) != 0)

        <form action="{{ url('/modulo_administracion/procesar_crear_paquete_servicio') }}" method="post">
            {{ csrf_field() }}
            <table> 
                <tr>
                    <td>Nombre:</td>
                    <td><input type="text" name="nombre"></td>
                </tr>
                <tr>
                    <td>precio:</td>
                    <td><input type="number" name="precio"></td>
                </tr>
                <tr>
                    <td>Descripción:</td>
                    <td><input type="text" name="descripcion"></td>
                </tr>
                @if(count($servicios_cable) != 0)
                    <tr>
                        <td>Servicios cable</td>
                        <td>
                            <select name="servicios_cable" id="servicios_cable">
                                <option value=""></option>
                                @foreach ($servicios_cable as $servicio_cable)
                                    <option value="{{ $servicio_cable->nombre }}">{{ $servicio_cable->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                @endif
                @if(count($servicios_internet) != 0)
                    <tr>
                        <td>Servicios internet</td>
                        <td>
                            <select name="servicios_internet" id="servicios_internet">
                                <option value=""></option>
                                @foreach ($servicios_internet as $servicio_internet)
                                    <option value="{{ $servicio_internet->nombre }}">{{ $servicio_internet->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                @endif
                @if(count($servicios_telefonia) != 0)
                    <tr>
                        <td>Servicios telefonía</td>
                        <td>
                            <select name="servicios_telefonia" id="servicios_telefonia">
                                <option value=""></option>
                                @foreach ($servicios_telefonia as $servicio_telefonia)
                                    <option value="{{ $servicio_telefonia->nombre }}">{{ $servicio_telefonia->nombre }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                @endif
                <tr>
                    <td><input type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>

    @else
        No hay algún tipo de servicio registrado, registre algún tipo de servicio y vuelva a intentar
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