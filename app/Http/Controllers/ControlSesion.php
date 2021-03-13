<?php

namespace App\Http\Controllers;

class ControlSesion
{
	public static function sesion($tipo_pagina)
	{
        session_start();
        $pagina_redireccionar = "";
        if($tipo_pagina == "pagina_sesion_usuario" && !isset($_SESSION["sesion_usuario"])
        || $tipo_pagina == "pagina_sesion_administrador" && !isset($_SESSION["sesion_administrador"])
        || $tipo_pagina == "pagina_no_sesion" && isset($_SESSION["sesion_activa"])){
            if(!isset($_SESSION["sesion_activa"])) $pagina_redireccionar = "/";
            else $pagina_redireccionar = (isset($_SESSION["sesion_usuario"])) ? "/modulo_suscriptor/pagina_principal_usuario" : "/modulo_administracion/pagina_principal_administracion";
        }
        return $pagina_redireccionar;
	}
}