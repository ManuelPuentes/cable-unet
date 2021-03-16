<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if(count($canales) != 0)
        <script src="{{ asset('js/validaciones_formulario.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/cargar_canal.css') }}" rel="stylesheet">
    

    @endif
    <title>Crear programación</title>
</head>
<body>

<div class="container vh-100 ">

<div class="row justify-content-center align-items-center">

  <div class="col-4 ">
  @if(count($canales) != 0)
        <form class = "form-control"  action="{{ url('/modulo_administracion/programacion/procesar_agregar') }}" method="post">
            {{ csrf_field() }}

        <a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
                <input class="btn-close" type="button" value="">
        </a>

        <div class="input-group mb-3 text-align-center">
                <h2 class="text-center">Cargar Programacion</h2>
        </div>

            <table class ="col-12" >

                <tr>
                    <td>Día de la programación:</td>
                    <td >
                        <input  class ="form-control" type="date" id="dia" name="dia" value="2021-03-16" min="2021-03-16">
                    </td>
                </tr>

                <tr>
                    <td >Nombre de canal:</td>
                    <td >
                        <select class= "form-select "name="nombre_canal">
                            @foreach ($canales as $canal)
                                <option value="{{ $canal->nombre }}">{{ $canal->nombre }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>

                @for($i=0; $i < 24; $i++)
                    <tr>
                        <td>Hora {{ $i }}:00</td>
                        <td >
                            <input class ="form-control"type="text" name="{{ 'h' . $i }}">
                        </td>
                    </tr>
                @endfor
                <tr>
                    <td><input class = "btn btn-outline-primary m-2 mb-3"type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>
    @else
        No hay canales registrados, registre canales y vuelva a intentar
    @endif
  
  
  
  </div>


</div>
</div>
    


    <br>
    <br>

    <div id="mensaje">
        @isset($mensaje_servidor)
            {{$mensaje_servidor}}
        @endisset
    </div>

    <!-- <br>
    <br>

    <a href="{{ url('/modulo_administracion/pagina_principal_administracion') }}">
        <input type="button" value="Regresar">
    </a> -->

</body>
</html>