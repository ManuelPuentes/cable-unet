<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

use App\Models\ServicioCable;
use App\Models\ServicioInternet;
use App\Models\ServicioTelefonia;
use App\Models\PaqueteServicio;
use App\Models\Canal;
use App\Models\Contrato;
use App\Models\Programacion;
use App\Models\SolicitudCambio;


use App\Http\Controllers\ControlSesion;

class ModuloSuscriptor extends Controller
{

    public function registrar()
    {
        $redireccionar = ControlSesion::sesion("pagina_no_sesion");
        if($redireccionar != "") return redirect($redireccionar);

        return view("modulo_suscriptor.registro_usuario");
    }

    public function procesarRegistrar(Request $request)
    {
        $mensaje;

        $where = Usuario::where("nombre_usuario", $request->nombre_usuario)->get();
        
        if(count($where) != 0) $mensaje = "Ya existe un usuario con ese nombre de usuario, seleccione otro";
        else {
            $where = Usuario::where("cedula", $request->cedula)->get();
            if(count($where) != 0) $mensaje = "Ya existe un usuario con este número de cédula, seleccione otro";
            else{
                $create = Usuario::create(["nombres" => $request->nombres, "apellidos" => $request->apellidos, "cedula" => $request->cedula, "correo" => $request->correo,
                "telefono" => $request->telefono, "nombre_usuario" => $request->nombre_usuario, "contraseña" => $request->contraseña]);
                $where = Usuario::where("nombre_usuario", $request->nombre_usuario)->get();
                if(count($where) != 0) $mensaje = "Se ha registrado con exito";
                else $mensaje = "Ha ocurrido un error al registrar";
            }
        }
        
        return view("modulo_suscriptor.registro_usuario")
        ->with('mensaje_servidor', $mensaje);
    }
    


    public function paginaIniciarSesion()
    {
        $redireccionar = ControlSesion::sesion("pagina_no_sesion");
        if($redireccionar != "") return redirect($redireccionar);

        return view("modulo_suscriptor.iniciar_sesion_usuario");
    }

    public function procesarIniciarSesion(Request $request)
    {
        $mensaje;

        $where = Usuario::where("nombre_usuario", $request->nombre_usuario)
        ->where("contraseña", $request->contraseña)
        ->get();
        
        if(count($where) != 0) {
            session_start();
            $_SESSION["sesion_activa"] = true;
            $_SESSION["sesion_usuario"] = true;
            $_SESSION["datos_usuario"] = $where[0];
            
            return redirect('/modulo_suscriptor/pagina_principal_usuario');
        }
        else $mensaje = "Nombre de usuario o contraseña incorrecta";
        
        return view("modulo_suscriptor.iniciar_sesion_usuario")
        ->with('mensaje_servidor', $mensaje);
    }



    public function paginaPrincipalUsuario()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_usuario");
        if($redireccionar != "") return redirect($redireccionar);

        return view("modulo_suscriptor.pagina_principal_usuario");
    }



    public function verServiciosContratar()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_usuario");
        if($redireccionar != "") return redirect($redireccionar);

        $servicios_cable = ServicioCable::get();
        $servicios_internet = ServicioInternet::get();
        $servicios_telefonia = ServicioTelefonia::get();
        $paquetes_servicios = PaqueteServicio::get();

        return view("modulo_suscriptor.ver_servicios_contratar")
        ->with('servicios_cable', $servicios_cable)
        ->with('servicios_internet', $servicios_internet)
        ->with('servicios_telefonia', $servicios_telefonia)
        ->with('paquetes_servicios', $paquetes_servicios);
    }

    public function detallesContratar($detalles_contratar, $tipo_servicio, $id)
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_usuario");
        if($redireccionar != "") return redirect($redireccionar);

        if($detalles_contratar == "contratar"){
            
        } else{
            if($tipo_servicio == "cable"){
                $canales = explode("-", ServicioCable::find($id)->canales);
                return view("paginas_compartidas.detalles_servicio_cable")
                ->with('servicio_cable', ServicioCable::find($id))
                ->with('canales', $canales);
            } else if($tipo_servicio == "internet"){
                return view("paginas_compartidas.detalles_servicio_internet")
                ->with('servicio_internet', ServicioInternet::find($id));
            } else if($tipo_servicio == "telefonia"){
                return view("paginas_compartidas.detalles_servicio_telefonia")
                ->with('servicio_telefonia', ServicioTelefonia::find($id));
            } else{
                $servicios = explode("-", PaqueteServicio::find($id)->paquetes);
                for($i = 0; $i < count($servicios); $i++)
                $servicios[$i] = explode(":", $servicios[$i])[1];
                
                return view("paginas_compartidas.detalles_paquete_servicio")
                ->with('paquete_servicio', PaqueteServicio::find($id))
                ->with('servicios', $servicios);
            }
        }
    }

    public function contratar(Request $request)
    {
        $datos_servicio = PaqueteServicio::find($request->id);

        $fecha_actual = date("Y-m-d H:i:s");

        session_start();

        Contrato::create([
            "nombre_usuario" => $_SESSION["datos_usuario"]->nombre_usuario,
            "fecha" => $fecha_actual,
            "tipo_servicio_contratado" => "paquete",
            "servicio_contratado" => $datos_servicio->nombre,
            "precio" => $datos_servicio->precio
        ]);

        $where = Contrato::where("nombre_usuario", $_SESSION["datos_usuario"]->nombre_usuario)
        ->where("fecha", $fecha_actual)
        ->get();
        
        $mensaje = "";

        if(count($where) != 0) $mensaje = "Este contrato ha sido registrado con exito";
        else $mensaje = "Ha ocurrido un error al registrar este contrato, vuelva a intentar";

        return view("modulo_suscriptor.contrato_mensaje")
        ->with("mensaje", $mensaje)
        ->with("informacion_contrato", $where);
    }

    public function facturaMensual()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_usuario");
        if($redireccionar != "") return redirect($redireccionar);

        $where = Contrato::where("nombre_usuario", $_SESSION["datos_usuario"]->nombre_usuario)->get();

        $total = 0;

        if(count($where) != 0)
        foreach ($where as $contrato)
        $total += $contrato->precio;

        return view("paginas_compartidas.factura_mensual_usuario")
        ->with("contratos", $where)
        ->with("total", $total);
    }



    public function buscarProgramacion()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_usuario");
        if($redireccionar != "") return redirect($redireccionar);

        $canales = Canal::get();

        return view("paginas_compartidas.buscar_programacion")
        ->with("canales", $canales);
    }



    public function procesarBuscarProgramacion(Request $request)
    {
        $mensaje;
        
        $where = Programacion::where("nombre_canal", $request->nombre_canal)
        ->where("dia", $request->dia)
        ->get();

        if(count($where) != 0){
            $programas = explode("-", $where[0]->programacion);
            return view("paginas_compartidas.ver_programacion")
            ->with("informacion_programacion", $where[0])
            ->with("programas", $programas);
        }else{
            $canales = Canal::get();
            
            return view("paginas_compartidas.buscar_programacion")
            ->with("canales", $canales)
            ->with("mensaje_servidor", "No hay una programación registrada para este día");
        }
    }



    public function cambiarPaqueteServicios()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_usuario");
        if($redireccionar != "") return redirect($redireccionar);

        $where = Contrato::where("nombre_usuario", $_SESSION["datos_usuario"]->nombre_usuario)->get();

        return view("modulo_suscriptor.cambiar_paquete_servicios")
        ->with("contratos", $where);
    }

    public function cambiarPaqueteServiciosDos($id)
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_usuario");
        if($redireccionar != "") return redirect($redireccionar);

        if(!is_numeric($id)) redirect('/modulo_suscriptor/pagina_principal_usuario'); 

        $solicitud_cambio = SolicitudCambio::where("id_contrato", $id)->where("estado", "espera")->get();

        if(count($solicitud_cambio) != 0){
            $where = Contrato::where("nombre_usuario", $_SESSION["datos_usuario"]->nombre_usuario)->get();

            return view("modulo_suscriptor.cambiar_paquete_servicios")
            ->with("contratos", $where)
            ->with("mensaje_servidor", "El contrato seleccionado actualmente esta en proceso de espera para ser cambiado, por este motivo no se puede seleccionar");
        } else{
            $contrato = Contrato::find($id);
            $paquetes_servicios = PaqueteServicio::get();
    
            return view("modulo_suscriptor.cambiar_paquete_servicios_2")
            ->with("contrato", $contrato)
            ->with("paquetes_servicios", $paquetes_servicios);
        }
    }

    public function cambiarPaqueteServiciosTres(Request $request)
    {

        $solicitud_cambio = SolicitudCambio::where("id_contrato", $request->id_contrato)->where("estado", "espera")->get();

        if(count($solicitud_cambio) != 0) return redirect('/modulo_suscriptor/cambiar_paquete_servicios');

        $contrato = Contrato::find($request->id_contrato);
        SolicitudCambio::create([
            "id_contrato" => $request->id_contrato,
            "estado" => "espera",
            "nombre_usuario" => $contrato->nombre_usuario,
            "servicio_actual" => $contrato->servicio_contratado,
            "servicio_nuevo" => $request->nuevo_paquete_servicio
        ]);
        
        $where = SolicitudCambio::where("id_contrato", $request->id_contrato)->get();

        $mensaje;

        if(count($where) != 0) $mensaje = "La solicitud de cambio de paquete de servicios se ha enviado de forma exitosa, debe esperar a que sea aceptada o cancelada";
        else $mensaje = "Ha ocurrido un error al enviar la solicitud de cambio de paquete de servicios";
        
        session_start();
        $where = Contrato::where("nombre_usuario", $_SESSION["datos_usuario"]->nombre_usuario)->get();

        return view("modulo_suscriptor.cambiar_paquete_servicios")
        ->with("contratos", $where)
        ->with("mensaje_servidor", $mensaje);
    }



    public function cerrarSesion()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_usuario");
        if($redireccionar != "") return redirect($redireccionar);

        session_destroy();
        return redirect('/modulo_suscriptor/iniciar_sesion');
    }
}