<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(count($canales) != 0)
        <script src="{{ asset('js/validaciones_formulario_2.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/admin_page.css') }}" rel="stylesheet">
    @endif
    <title>Crear servicio cable</title>
</head>
<body>


    @if(count($canales) != 0)
    <div class="container">

      <div class="row justify-content-center align-items-center vh-100 ">

        <div class="col-4">
        
        <form class= "form-control" action="{{ url('/modulo_administracion/pagina_creacion_de_servicios/procesar_cable') }}" method="post">
            {{ csrf_field() }}

            <a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
                <input class="btn-close" type="button" value="">
            </a>
            
            <div class="input-group mb-3 text-align-center">
                <h2 class="text-center">Creacion Servicio de Cable</h2>
            </div>
            
            <table class ="col-12"> 
                <input type="hidden" name="precio" id="precio" value="0">
                <tr class="input-group justify-content-center col-12 ">
                    <td  class="col-12"><input class="form-control  mb-1" type="text" name="nombre" placeholder="Nombre del Paquete"></td>
                </tr>

                <tr class="input-group justify-content-center col-12 ">
                    <td class= "col-12"><input class="form-control"  type="text" name="descripcion" placeholder="Descripcion del Paquete"></td>
                </tr>
                <tr>
                    <td>Seleccionar canales</td>
                </tr>
                @for ($i = 0; $i < count($canales); $i++)
                    <tr>
                        <td><label class="form-check-label"><input class ="form-check-input" type="checkbox" name="canales[]" value="{{ $canales[$i]->nombre }}"> {{ $canales[$i]->nombre }}</label></td>
                    </tr>
                @endfor
                <tr>
                    <td><input class="btn btn-outline-primary m-2" type="submit" value="Enviar"></td>
                </tr>
            </table>


        </form>

        
        
        </div>

      </div>
    
    </div>


    @else
        No hay canales registrados, registre canales y vuelva a intentar
    @endif

    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>

</body>
</html>