<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal administración</title>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin_page.css') }}" rel="stylesheet">
    
</head>
<body>

<div class="container-fluid vh-100">

    <div class="row justify-content-start .align-top ">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">    
    <div class="container fluid">
    <a class="navbar-brand" href="#">
      <img src="../../public/Img/logo.png" alt="" height="70">
    </a>
  
  <form class="d-flex">

<div class="dropdown  m-2">
  <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Servicios
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li>
    <a href="{{ url('/modulo_administracion/pagina_creacion_de_servicios/cable') }}">
            <input  class="btn btn-outline-primary m-2 "type="button" value="Creación: servicio de cable ">
        </a>

    </li>
    <li>
    <a href="{{ url('/modulo_administracion/pagina_creacion_de_servicios/telefonia') }}">
            <input  class="btn btn-outline-primary m-2 "type="button" value="Creación: servicio de telefono">
        </a>

    </li>

    <li>
    <a href="{{ url('/modulo_administracion/pagina_creacion_de_servicios/internet') }}">
            <input  class="btn btn-outline-primary m-2 "type="button" value="Creación: servicio internet">
        </a>

    </li>

    <li>
    <a href="{{ url('/modulo_administracion/pagina_crear_paquete_servicio') }}">
            <input  class="btn btn-outline-primary m-2 "type="button" value="Creación: paquete">
        </a>

    </li>




    <li>
        <a href="{{ url('/modulo_administracion/pagina_carga_de_canales') }}">
            <input class="btn btn-outline-primary m-2 " type="button" value="Cargar canal">
        </a>
    </li>
    <li>
        <a href="{{ url('/modulo_administracion/programacion/agregar') }}">
            <input class="btn btn-outline-primary m-2 " type="button" value="Agregar programación">
        </a>
    </li>
  </ul>
</div>
    
    <a href="{{ url('/modulo_administracion/factura_mensual') }}">
        <input class="btn btn-outline-primary  m-2" type="button" value="Factura mensual usuario">
    </a>

    <a href="{{ url('/modulo_administracion/solicitudes_cambio') }}">
        <input class="btn btn-outline-primary  m-2" type="button" value="Solicitudes de cambio de paquete de servicios">
    </a>

    <a href="{{ url('/modulo_administracion/administracion_usuarios') }}">
        <input class="btn btn-outline-primary  m-2" type="button" value="Administración de usuarios">
    </a>

    <a href="{{ url('/modulo_administracion/cerrar_sesion') }}">
        <input class="btn btn-outline-danger  m-2" type="button" value="Cerrar sesión">
    </a>

</form>
</div>
</nav>
    
    </div>

</div>

</body>
</html>