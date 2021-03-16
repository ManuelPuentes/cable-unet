<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('css/commons.css') }}" rel="stylesheet">
    <title>Index</title>
</head>

<body>    
    <div class="container"> 
    
       <header>
            <a href="" class="logo"> </a>
            <span> </span>   
               <a href="{{ url('/modulo_administracion/iniciar_sesion') }}" class="button">
                    <input type="button" value="Sesión admin">
                </a>
                <a href="{{ url('/modulo_suscriptor/iniciar_sesion') }}">
                    <input type="button" value="Sesión cliente">
                </a>
                <a href="{{ url('/modulo_suscriptor/registrar') }}" class="index_button">
                    <input type="button" value="Registrate">
                </a>
        </header>

        <div class="feed">
            <div class="slider">
                
                <div class="slide"> <p>Contacta con nosotros!</p> </div>
                <div class="slide"> <p>Navega sin limites y a la Maxima Velocidad </p> </div>
                <div class="slide"> <p>Mantente en Contacto con Todos</p> </div>
                <div class="slide"> <p>Disfruta de Los Mejores Canales</p> </div>

            </div>
        </div>

    
    </div>



</body>
</html>