<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
    
    <link href="{{ asset('css/admin_page.css') }}" rel="stylesheet">
	
	
    <title>Administración usuarios</title>
</head>
<body class="">	
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container fluid">
    <a class="navbar-brand" href="#">
      <img src="../../public/Img/logo.png" alt="" height="70">
    </a>
	
	<form class="d-flex">
	
	<a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
        <input class="btn btn-outline-danger" type="button" value="Regresar">
    </a>
    </form>
  </div>
  </nav>
		@if(count($usuarios) + count($administradores) != 0)
        @if(count($administradores) != 0)
		
		<div class="container">
			
			<br>
		
            <h2>Administradores</h2>

            <br>
            <br>
            
            <table class="table table-light">
                <tr class="table-primary">
                    <td><strong>Nombres</strong></td>
                    <td><strong>Apellidos</strong></td>
                    <td><strong>Cédula</strong></td>
                    <td><strong>Correo</strong></td>
                    <td><strong>Teléfono</strong></td>
                    <td><strong>Nombre usuario</strong></td>
                    <td><strong>Contraseña</strong></td>
					<td></td><td></td>                
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
                                <input class="btn btn-warning" type="button" value="Modificar">
                            </a>
                        </td>
                        <td>
                            <a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/eliminar/administrador/{{$administrador->id}}">
                                <input class="btn btn-danger" type="button" value="Eliminar">
                            </a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    
                        
                   
                </tr>
            </table>
				
				<a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/registrar/administrador/null">
                            <input class="btn btn-primary" type="button" value="Agregar">
                        </a>
            <br>
            <br>

        @else
            No hay administradores registrados

            <br>
            <br>

            <a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/registrar/administrador/null">
                <input class="btn btn-ligth" type="button" value="Agregar">
            </a>

            <br>
            <br>

        @endif

        @if(count($usuarios) != 0)
	
		<br>
            <h2>Suscriptores</h2>
            <br>
            <br>
            
            <table class="table table-light">
                <tr class="table-primary">
                    <td><strong>Nombres</strong></td>
                    <td><strong>Apellidos</strong></td>
                    <td><strong>Cédula</strong></td>
                    <td><strong>Correo</strong></td>
                    <td><strong>Teléfono</strong></td>
                    <td><strong>Nombre usuario</strong></td>
                    <td><strong>Contraseña</strong></td>
					<td></td><td></td>
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
                                <input class="btn btn-warning" type="button" value="Modificar">
                            </a>
                        </td>
                        <td>
                            <a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/eliminar/usuario/{{$usuario->id}}">
                                <input class="btn btn-danger" type="button" value="Eliminar">
                            </a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    
                </tr>
            </table>
				
				<a href="{{url('/modulo_administracion/procesar_administracion_usuarios')}}/registrar/usuario/null">
                            <input class="btn btn-primary" type="button" value="Agregar">
                        </a>
				
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

    
	</div>
</body>
</html>