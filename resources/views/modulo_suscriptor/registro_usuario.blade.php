<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
    <link href="{{ asset('css/registro.css') }}" rel="stylesheet">

    <title>Registrar suscriptor</title>
</head>
<body>

<div class="contenedor">

    <header>
            <a href="" class="logo"></a>
            <span></span>
            <span></span>
            <span></span>
            <a href="{{ url('/') }}">
                <input type="button" value="Regresar">
            </a>

    </header>
    <div class="inner_contenedor">


        <div class="registro">

        <h1>Registro</h1>


        <input type="text" name="nombres" id="" placeholder="Nombres"  required>
        <input type="text" name="apellidos" id="" placeholder="Apellidos"  required>
        <input type="text" name="cedula" id="" placeholder="Cedula"  required>
        <input type="email" name="correo" id="" placeholder="Correo electronico" " required>
        <input type="text" name="telefono" id="" placeholder="Telefono"  required>
        <input type="text" name="nombre_usuario" id="" placeholder="Nombre de Usuario" class="inputs-100" required>
        <input type="password" name="password" id="" placeholder="Contraseña"  required>  
   
        <input type="submit" name="enviar" id="enviar" value="Enviar">     
        </div>

    </div>

</div>


<!-- <div class="contenedor">

        
<form action="registro.php" method="post" class="form-registro">
    <h2 class="form-titulo">Crea una Cuenta</h2>
    <div class="contenedor-inputs">

        <input type="text" name="nombre" id="" placeholder="Nombres" class="inputs-50" required>
        <input type="text" name="apellidos" id="" placeholder="Apellidos" class="inputs-50" required>
        <input type="email" name="correo" id="" placeholder="Correo electronico" class="inputs-100" required>
        <input type="text" name="direccion" id="" placeholder="Direccion" class="inputs-50" required>
        <input type="tel" name="telefono" id="" placeholder="numero de telefono " class="inputs-50" required>
        <select name="sexo" class="inputs-50" id="" required>
            <option value="HOMBRE">Hombre</option>
            <option value="MUJER">Mujer</option>
        </select>
        <input type="text" name="cedula" id="" placeholder="Cedula identidad" class="inputs-50" required>
        <input type="text" name="usuario" id="" placeholder="Usuario" class="inputs-50" required>
        <input type="password" name="password" id="" placeholder="password" class="inputs-50" required>
        <input type="submit" value="Registrar" class="btn-enviar"> 
        <p class="form-link">ya tienes una cuenta? <a href="#">Ingresa aquí</a></p>
        
    </div>

</form>
</div> -->

    <!-- <p>Hola</p>

    
    <div>
        <form action="{{ url('/modulo_suscriptor/procesar_registrar') }}" method="post">
            {{ csrf_field() }}
            <table>
                <tr>
                    <td>Nombres</td>
                    <td><input type="text" name="nombres" id="nombres"></td>
                </tr>
                <tr>
                    <td>Apellidos</td>
                    <td><input type="text" name="apellidos" id="apellidos"></td>
                </tr>
                <tr>
                    <td>Cédula</td>
                    <td><input type="number" name="cedula" id="cedula"></td>
                </tr>
                <tr>
                    <td>Correo</td>
                    <td><input type="text" name="correo" id="correo"></td>
                </tr>
                <tr>
                    <td>Teléfono de contacto</td>
                    <td><input type="text" name="telefono" id="telefono"></td>
                </tr>
                <tr>
                    <td>Nombre de usuario</td>
                    <td><input type="text" name="nombre_usuario" id="nombre_usuario"></td>
                </tr>
                <tr>
                    <td>Contraseña</td>
                    <td><input type="password" name="contraseña" id="contraseña"></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="enviar" id="enviar" value="Enviar">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <br>
    <br> -->

    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>

    <br>
    <br>


</body>
</html>