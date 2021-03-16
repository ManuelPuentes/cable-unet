<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_page.css') }}" rel="stylesheet">
    <title>Factura mensual usuario</title>
</head>
<body>

<div class="container">

<div class="row justify-content-center align-items-center vh-100 ">

  <div class="col-4 "> 
  <form class= "form-control" action="{{ url('/modulo_administracion/procesar_factura_mensual') }}" method="post">
        {{ csrf_field() }}


        <a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
                <input class="btn-close" type="button" value="">
        </a>

        <div class="input-group mb-3 text-align-center">
                <h2 class="text-center">Factura Mensual Usuario</h2>
        </div>

        <table class ="col-12" >
            <tr class="input-group justify-content-center col-12" >
                <td class="col-12">
                    <input input class="form-control  mb-1" type="text" name="nombre_usuario">
                </td>
            </tr>
            <tr class="input-group justify-content-center col-12">
                <td class="col-12" >
                    <input input class="btn btn-outline-primary" type="submit" name="enviar" value="Enviar">
                </td>
            </tr>
        </table>
    </form>
  
  </div>
  
</div>
  
</div>
    



    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>



</body>
</html>