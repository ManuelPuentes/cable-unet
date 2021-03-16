<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administración usuarios</title>
</head>
<body>
    @if(count($usuarios) + count($administradores) != 0)
        @if(count($administradores) != 0)
            
            Administradores

            <br>
            <br>
            
            <table>
                <tr>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>Cédula</td>
                    <td>Correo</td>
                    <td>Teléfono</td>
                    <td>Nombre usuario</td>
                    <td>Contraseña</td>
                </tr>
                @foreach($administradores as $administrador)
                    <tr>
                        <td>{{$administrador->nombres}}</td>
                        <td>{{$administrador->apellidos}}</td>
                        <td>{{$administrador->cedula}}</td>
                        <td>{{$administrador->correo}}</td>
                        <td>{{$administrador->telefono}}</td>
                        <td>{{$administrador->nombre_usuario}}</td>
                        <td>{{$administrador->contraseña}}</td>
                        <td>
                            <a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/modificar/administrador/{{$administrador->id}}">
                                <input type="button" value="Modificar">
                            </a>
                        </td>
                        <td>
                            <a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/eliminar/administrador/{{$administrador->id}}">
                                <input type="button" value="Eliminar">
                            </a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>
                        <a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/registrar/administrador/null">
                            <input type="button" value="Agregar">
                        </a>
                    </td>
                </tr>
            </table>
            
            <br>
            <br>

        @else
            No hay administradores registrados

            <br>
            <br>

            <a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/registrar/administrador/null">
                <input type="button" value="Agregar">
            </a>

            <br>
            <br>

        @endif

        @if(count($usuarios) != 0)

            Suscriptores

            <br>
            <br>
            
            <table>
                <tr>
                    <td>Nombres</td>
                    <td>Apellidos</td>
                    <td>Cédula</td>
                    <td>Correo</td>
                    <td>Teléfono</td>
                    <td>Nombre usuario</td>
                    <td>Contraseña</td>
                </tr>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->nombres}}</td>
                        <td>{{$usuario->apellidos}}</td>
                        <td>{{$usuario->cedula}}</td>
                        <td>{{$usuario->correo}}</td>
                        <td>{{$usuario->telefono}}</td>
                        <td>{{$usuario->nombre_usuario}}</td>
                        <td>{{$usuario->contraseña}}</td>
                        <td>
                            <a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/modificar/usuario/{{$usuario->id}}">
                                <input type="button" value="Modificar">
                            </a>
                        </td>
                        <td>
                            <a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/eliminar/usuario/{{$usuario->id}}">
                                <input type="button" value="Eliminar">
                            </a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td>
                        <a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/registrar/usuario/null">
                            <input type="button" value="Agregar">
                        </a>
                    </td>
                </tr>
            </table>
            
            <br>
            <br>

        @else
            No hay suscriptores registrados

            <br>
            <br>

            <a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/registrar/usuario/null">
                <input type="button" value="Agregar">
            </a>

            <br>
            <br>

        @endif

    @else
        No hay algún tipo de usuario registrado
    @endif

    <a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
        <input type="button" value="Regresar">
    </a>
</body>
</html>