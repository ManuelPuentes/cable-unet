<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(count($servicios_cable) + count($servicios_internet) + count($servicios_telefonia) != 0)
        <script src="{{ asset('js/validaciones_formulario_3.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin_page.css') }}" rel="stylesheet">
    @endif
    <title>Crear paquete de servicio</title>
</head>
<body>

<div class="container">

<div class="row justify-content-center align-items-center vh-100 ">

  <div class="col-4 ">
  @if(count($servicios_cable) + count($servicios_internet) + count($servicios_telefonia) != 0)

<form class="form-control" action="{{ url('/modulo_administracion/procesar_crear_paquete_servicio') }}" method="post">
    {{ csrf_field() }}

    <a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
        <input class="btn-close" type="button" value="">
    </a>

    <div class="input-group mb-3 text-align-center">
        <h2 class="text-center">Creacion Paquete de Servicio</h2>
    </div>

    <table class="col-12"> 
        <tr  class="input-group justify-content-center col-12 ">
            <td class="col-12"><input class="form-control  mb-1" type="text" name="nombre" placeholder="Nombre"></td>
        </tr>
        <tr class="input-group justify-content-center col-12 ">
            <td class="col-12"  ><input class="form-control  mb-1" type="number" name="precio" placeholder="Precio"></td>
        </tr>
        <tr class="input-group justify-content-center col-12">
            <td class="col-12" ><input class="form-control  mb-1" type="text" name="descripcion" placeholder="Descripcion"></td>

        </tr class="input-group justify-content-center col-12">


        @if(count($servicios_cable) != 0)
            <tr class="input-group justify-content-center col-12">

                <td class="col-12" >

                <label for="">Servicio de Cable</label>
                    <select class="form-select  mb-1 "name="servicios_cable" id="servicios_cable">
                        <option value=""></option>
                        @foreach ($servicios_cable as $servicio_cable)
                            <option value="{{ $servicio_cable->nombre }}">{{ $servicio_cable->nombre }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
        @endif
        @if(count($servicios_internet) != 0)
            <tr class ="input-group justify-content-center col-12">
                <td class="col-12">

                <label for="">Servicio de Internet</label>
                    <select class="form-select  mb-1 "name="servicios_internet" id="servicios_internet">
                        <option value=""></option>
                        @foreach ($servicios_internet as $servicio_internet)
                            <option value="{{ $servicio_internet->nombre }}">{{ $servicio_internet->nombre }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
        @endif
        @if(count($servicios_telefonia) != 0)
            <tr class="input-group justify-content-center col-12">
                <td class="col-12">
                <label for="">Servicio de Telefonia</label>
                    <select class ="form-select"name="servicios_telefonia" id="servicios_telefonia">
                        <option value=""></option>
                        @foreach ($servicios_telefonia as $servicio_telefonia)
                            <option value="{{ $servicio_telefonia->nombre }}">{{ $servicio_telefonia->nombre }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
        @endif
        <tr>
            <td class="col-12" ><input class ="btn btn-outline-primary m-2" type="submit" value="Enviar"></td>
        </tr>
    </table>
</form>

@else
No hay algún tipo de servicio registrado, registre algún tipo de servicio y vuelva a intentar
@endif
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