<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Administrador;
use App\Models\Usuario;
use App\Models\ServicioCable;
use App\Models\ServicioInternet;
use App\Models\ServicioTelefonia;
use App\Models\PaqueteServicio;
use App\Models\Canal;
use App\Models\Programacion;
use App\Models\Contrato;
use App\Models\SolicitudCambio;

use App\Http\Controllers\ControlSesion;

class ModuloAdministracion extends Controller
{

    public function paginaIniciarSesion()
    {
        $redireccionar = ControlSesion::sesion("pagina_no_sesion");
        if($redireccionar != "") return redirect($redireccionar);

        return view("modulo_administracion.iniciar_sesion_administrador");
    }

    public function procesarIniciarSesion(Request $request)
    {
        $mensaje;

        $where = Administrador::where("nombre_usuario", $request->nombre_usuario)
        ->where("contraseña", $request->contraseña)
        ->get();
        
        if(count($where) != 0) {
            session_start();
            $_SESSION["sesion_activa"] = true;
            $_SESSION["sesion_administrador"] = true;
            $_SESSION["datos_administrador"] = $where[0];

            return redirect('/modulo_administracion/pagina_principal_administracion');
        }
        else $mensaje = "Nombre de usuario o contraseña incorrecta";
        
        return view("modulo_administracion.iniciar_sesion_administrador")
        ->with('mensaje_servidor', $mensaje);
    }



    public function paginaPrincipalAdministracion()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        return view("modulo_administracion.pagina_principal_administracion");
    }



    public function paginaCreacionDeServicios()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        return view("modulo_administracion.pagina_creacion_de_servicios");
    }

    public function crearServicioCable()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        $canales = Canal::get();
        return view("modulo_administracion.pagina_crear_servicio_cable")
        ->with('canales', $canales);
    }

    public function crearServicioInternet()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        return view("modulo_administracion.pagina_crear_servicio_internet");
    }

    public function crearServicioTelefonia()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        return view("modulo_administracion.pagina_crear_servicio_telefonia");
    }

    public function procesarCrearServicioCable(Request $request)
    {
        $mensaje;

        $where = ServicioCable::where("nombre", $request->nombre)->get();
        
        if(count($where) != 0) $mensaje = "Ya existe un servicio de cable con este nombre, seleccione otro";
        else{

            $canales = "";
            for ($i=0; $i < count($request->canales); $i++) {
                if($i != count($request->canales) - 1) $canales .= $request->canales[$i] . "-";
                else $canales .= $request->canales[$i];
            }

            $create = ServicioCable::create(["nombre" => $request->nombre, "precio" => $request->precio, "descripcion" => $request->descripcion,
            "canales" => $canales]);
            $where = ServicioCable::where("nombre", $request->nombre)->get();
            if(count($where) != 0) $mensaje = "Se ha registrado con exito este servicio de cable";
            else $mensaje = "Ha ocurrido un error al registrar este servicio de cable";
        }

        $canales = Canal::get();

        return view("modulo_administracion.pagina_crear_servicio_cable")
        ->with('mensaje_servidor', $mensaje)
        ->with('canales', $canales);
    }
    
    public function procesarCrearServicioInternet(Request $request)
    {
        $mensaje;

        $where = ServicioInternet::where("nombre", $request->nombre)->get();
        
        if(count($where) != 0) $mensaje = "Ya existe un servicio de internet con este nombre, seleccione otro";
        else{
            $create = ServicioInternet::create(["nombre" => $request->nombre, "precio" => $request->precio, "descripcion" => $request->descripcion]);
            $where = ServicioInternet::where("nombre", $request->nombre)->get();
            if(count($where) != 0) $mensaje = "Se ha registrado con exito este servicio de internet";
            else $mensaje = "Ha ocurrido un error al registrar este servicio de internet";
        }
        
        return view("modulo_administracion.pagina_crear_servicio_internet")
        ->with('mensaje_servidor', $mensaje);
    }
    
    public function procesarCrearServicioTelefonia(Request $request)
    {
        $mensaje;

        $where = ServicioTelefonia::where("nombre", $request->nombre)->get();

        if(count($where) != 0) $mensaje = "Ya existe un servicio de telefonía con este nombre, seleccione otro";
        else{
            ServicioTelefonia::create(["nombre" => $request->nombre, "precio" => $request->precio, "descripcion" => $request->descripcion]);
            $where = ServicioTelefonia::where("nombre", $request->nombre)->get();
            if(count($where) != 0) $mensaje = "Se ha registrado con exito este servicio de telefonía";
            else $mensaje = "Ha ocurrido un error al registrar este servicio de telefonía";
        }
        
        return view("modulo_administracion.pagina_crear_servicio_telefonia")
        ->with('mensaje_servidor', $mensaje);
    }



    public function crearPaqueteServicio()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        $servicios_cable = ServicioCable::get();
        $servicios_internet = ServicioInternet::get();
        $servicios_telefonia = ServicioTelefonia::get();
        return view("modulo_administracion.pagina_crear_paquete_servicio")
        ->with('servicios_cable', $servicios_cable)
        ->with('servicios_internet', $servicios_internet)
        ->with('servicios_telefonia', $servicios_telefonia);
    }

    public function procesarCrearPaqueteServicio(Request $request)
    {
        $mensaje;

        $where = PaqueteServicio::where("nombre", $request->nombre)->get();

        if(count($where) != 0) $mensaje = "Ya existe un paquete de servicio con este nombre, seleccione otro";
        else{
            $paquetes = "";

            if($request->servicios_cable != "")
            $paquetes = "c:" . $request->servicios_cable;
            
            if($request->servicios_internet != ""){
                if($paquetes != "") $paquetes .= "-i:" . $request->servicios_internet;
                else $paquetes = "i:" .$request->servicios_internet;
            }

            if($request->servicios_telefonia != ""){
                if($paquetes != "") $paquetes .= "-t:" . $request->servicios_telefonia;
                else $paquetes = "t:" . $request->servicios_telefonia;
            }

            PaqueteServicio::create(["nombre" => $request->nombre, "precio" => $request->precio, "descripcion" => $request->descripcion, 
            "paquetes" => $paquetes]);
            $where = PaqueteServicio::where("nombre", $request->nombre)->get();
            if(count($where) != 0) $mensaje = "Se ha registrado con exito este paquete de servicio";
            else $mensaje = "Ha ocurrido un error al registrar este paquete de servicio";
        }

        $servicios_cable = ServicioCable::get();
        $servicios_internet = ServicioInternet::get();
        $servicios_telefonia = ServicioTelefonia::get();  

        return view("modulo_administracion.pagina_crear_paquete_servicio")
        ->with('servicios_cable', $servicios_cable)
        ->with('servicios_internet', $servicios_internet)
        ->with('servicios_telefonia', $servicios_telefonia)
        ->with('mensaje_servidor', $mensaje);
    }



    public function paginaCargaDeCanales()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        return view("modulo_administracion.pagina_carga_de_canales");
    }

    public function procesarCargaDeCanales(Request $request)
    {
        $mensaje;

        $where = Canal::where("nombre", $request->nombre)->get();

        if(count($where) != 0) $mensaje = "Ya existe un canal con este nombre, seleccione otro";
        else{
            Canal::create(["nombre" => $request->nombre, "descripcion" => $request->descripcion]);
            $where = Canal::where("nombre", $request->nombre)->get();
            if(count($where) != 0) $mensaje = "Se ha registrado con exito este canal";
            else $mensaje = "Ha ocurrido un error al registrar este canal";
        }

        return view("modulo_administracion.pagina_carga_de_canales")
        ->with('mensaje_servidor', $mensaje);
    }



    public function agregarProgramacion()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        $canales = Canal::get();

        return view("modulo_administracion.pagina_crear_programacion")
        ->with('canales', $canales);
    }
    
    public function procesarAgregarProgramacion(Request $request)
    {
        $mensaje;
        
        $where = Programacion::where("nombre_canal", $request->nombre_canal)
        ->where("dia", $request->dia)
        ->get();

        if(count($where) != 0) $mensaje = "Este canal ya tiene una programación para este día, seleccione otro día";
        else{
            
            $programacion = $request->h0 . "-" . $request->h1 . "-" . $request->h2 . "-" . $request->h3 . "-";
            $programacion .= $request->h4 . "-" . $request->h5 . "-" . $request->h6 . "-" . $request->h7 . "-";
            $programacion .= $request->h8 . "-" . $request->h9 . "-" . $request->h10 . "-" . $request->h11 . "-";
            $programacion .= $request->h12 . "-" . $request->h13 . "-" . $request->h14 . "-" . $request->h15 . "-";
            $programacion .= $request->h16 . "-" . $request->h17 . "-" . $request->h18 . "-" . $request->h19 . "-";
            $programacion .= $request->h20 . "-" . $request->h21 . "-" . $request->h22 . "-" . $request->h23;    

            Programacion::create(["nombre_canal" => $request->nombre_canal, "dia" => $request->dia,
            "programacion" => $programacion]);

            $where = Programacion::where("nombre_canal", $request->nombre_canal)
            ->where("dia", $request->dia)
            ->get();

            if(count($where) != 0) $mensaje = "Se ha registrado con exito la programación";
            else $mensaje = "Ha ocurrido un error al registrar la programación";
        }

        $canales = Canal::get();

        return view("modulo_administracion.pagina_crear_programacion")
        ->with('canales', $canales)
        ->with('mensaje_servidor', $mensaje);
    }



    public function facturaMensual()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        return view("modulo_administracion.factura_mensual");
    }

    public function procesarFacturaMensual(Request $request)
    {
        $where = Contrato::where("nombre_usuario", $request->nombre_usuario)->get();

        if(count($where) != 0){
            
            $total = 0;
            foreach ($where as $contrato)
            $total += $contrato->precio;

            return view("paginas_compartidas.factura_mensual_usuario")
            ->with("contratos", $where)
            ->with("total", $total);
        } else {
            return view("modulo_administracion.factura_mensual")
            ->with("mensaje_servidor", "Este usuario no existe, o no ha contratado aún algún paquete de servicio");
        }
    }



    public function solicitudesCambio()
    {
        $where = SolicitudCambio::where("estado", "espera")->get();

        return view("modulo_administracion.solicitudes_cambios")
        ->with("solicitudes_cambio", $where);
    }

    public function procesarCambio($id, $estado)
    {
        $solicitud_cambio = SolicitudCambio::where("id_contrato", $id)->get();
        $solicitud_cambio = $solicitud_cambio[0];
        $solicitud_cambio->estado = $estado;
        $solicitud_cambio->save();
        if($estado == "aceptada"){
            $where = PaqueteServicio::where("nombre", $solicitud_cambio->servicio_nuevo)->get();
            $where = $where[0];
            $contrato = Contrato::find($id);
            $contrato->servicio_contratado = $where->nombre;
            $contrato->precio = $where->precio;
            $contrato->save();
        }
        return redirect('/modulo_administracion/solicitudes_cambio');
    }



    public function administracionUsuarios()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        $usuarios = Usuario::get();
        $administradores = Administrador::get();

        return view("modulo_administracion.administracion_usuarios")
                ->with("usuarios", $usuarios)
                ->with("administradores", $administradores);
    }

    public function procesarAdministracionUsuarios($tipo_proceso, $tipo_usuario, $id)
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        $datos_usuario;

        if(!is_numeric($id) && $tipo_proceso != "registrar") return redirect('/modulo_administracion/administracion_usuarios');
        
        if(is_numeric($id) && $tipo_proceso != "registrar"){
            if($tipo_usuario == "administrador")
            $datos_usuario = Administrador::find($id);
            else if($tipo_usuario == "usuario")
            $datos_usuario = Usuario::find($id);
    
            if($datos_usuario == null) return redirect('/modulo_administracion/administracion_usuarios');
        }
        
        if($tipo_proceso == "eliminar"){
            $objeto;

            if($tipo_usuario == "administrador") $objeto = Administrador::find($id);
            else if($tipo_usuario == "usuario") $objeto = Usuario::find($id);

            if($objeto != null) $objeto->delete();
        }
        else if($tipo_proceso == "modificar"){
            if($tipo_usuario == "administrador"){
                return view("modulo_administracion.registrar_modificar_usuario")
                ->with("registrar_modificar", "modificar")
                ->with("usuario", "administrador")
                ->with("datos_usuario", $datos_usuario);
            } else if($tipo_usuario == "usuario"){
                return view("modulo_administracion.registrar_modificar_usuario")
                ->with("registrar_modificar", "modificar")
                ->with("usuario", "usuario")
                ->with("datos_usuario", $datos_usuario);
            }
        } else if($tipo_proceso == "registrar"){
            if($tipo_usuario == "administrador"){
                return view("modulo_administracion.registrar_modificar_usuario")
                       ->with("registrar_modificar", "registrar")
                       ->with("usuario", "administrador");
            } else if($tipo_usuario == "usuario"){
                return view("modulo_administracion.registrar_modificar_usuario")
                ->with("registrar_modificar", "registrar")
                ->with("usuario", "usuario");
            }
        }

        return redirect('/modulo_administracion/administracion_usuarios');
    }
    
    public function procesarAdministracionUsuariosDos(Request $request){
        if($request->registrar_modificar == "registrar"){
            $mensaje;
            if($request->tabla == "administrador") $mensaje = $this->procesarRegistrarAdministrador($request);
            else $mensaje = $this->procesarRegistrarUsuario($request);
            if($mensaje == "Se ha registrado con exito") return redirect('/modulo_administracion/administracion_usuarios');
            else{
                return view("modulo_administracion.registrar_modificar_usuario")
                ->with("registrar_modificar", "registrar")
                ->with("usuario", $request->tabla)
                ->with("mensaje_servidor", $mensaje);
            }
        }else{
            $mensaje;

            $objeto;
            if($request->tabla == "administrador") $objeto = Administrador::find($request->id);
            else $objeto = Usuario::find($request->id);

            $val = ($objeto->nombre_usuario != $request->nombre_usuario);
            $val2 = ($objeto->cedula != $request->cedula);

            $objeto->nombres = $request->nombres;
            $objeto->apellidos = $request->apellidos;
            $objeto->cedula = $request->cedula;
            $objeto->correo = $request->correo;
            $objeto->telefono = $request->telefono;
            $objeto->nombre_usuario = $request->nombre_usuario;
            $objeto->contraseña = $request->contraseña;

            if($request->tabla == "administrador") $mensaje = $this->procesarModificarAdministrador($objeto, $val, $val2);
            else $mensaje = $this->procesarModificarUsuario($objeto, $val, $val2);
            if($mensaje != "") {
                return view("modulo_administracion.registrar_modificar_usuario")
                ->with("registrar_modificar", "modificar")
                ->with("usuario", $request->tabla)
                ->with("datos_usuario", $request)
                ->with("mensaje_servidor", $mensaje);
            }
            $objeto->save();
            return redirect('/modulo_administracion/administracion_usuarios');
        }
    }

    public function procesarRegistrarAdministrador($request)
    {
        $mensaje;

        $where = Administrador::where("nombre_usuario", $request->nombre_usuario)->get();
        
        if(count($where) != 0) $mensaje = "Ya existe un administrador con ese nombre de administrador, seleccione otro";
        else {
            $where = Administrador::where("cedula", $request->cedula)->get();
            if(count($where) != 0) $mensaje = "Ya existe un administrador con este número de cédula, seleccione otro";
            else{
                $create = Administrador::create(["nombres" => $request->nombres, "apellidos" => $request->apellidos, "cedula" => $request->cedula, "correo" => $request->correo,
                "telefono" => $request->telefono, "nombre_usuario" => $request->nombre_usuario, "contraseña" => $request->contraseña]);
                $where = Administrador::where("nombre_usuario", $request->nombre_usuario)->get();
                if(count($where) != 0) $mensaje = "Se ha registrado con exito";
                else $mensaje = "Ha ocurrido un error al registrar";
            }
        }
        
        return $mensaje;
    }

    public function procesarRegistrarUsuario($request)
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
        
        return $mensaje;
    }

    public function procesarModificarAdministrador($request, $val, $val2)
    {
        $mensaje = "";

        $where = Administrador::where("nombre_usuario", $request->nombre_usuario)->get();
        
        if(count($where) != 0 && $val) $mensaje = "Ya existe un administrador con ese nombre de administrador, seleccione otro";
        else {
            $where = Administrador::where("cedula", $request->cedula)->get();
            if(count($where) != 0 && $val2) $mensaje = "Ya existe un administrador con este número de cédula, seleccione otro";
        }
        
        return $mensaje;
    }

    public function procesarModificarUsuario($request, $val, $val2)
    {
        $mensaje = "";

        $where = Usuario::where("nombre_usuario", $request->nombre_usuario)->get();
        
        if(count($where) != 0 && $val) $mensaje = "Ya existe un usuario con ese nombre de usuario, seleccione otro";
        else {
            $where = Usuario::where("cedula", $request->cedula)->get();
            if(count($where) != 0 && $val2) $mensaje = "Ya existe un usuario con este número de cédula, seleccione otro";
        }
        
        return $mensaje;
    }

    

    public function cerrarSesion()
    {
        $redireccionar = ControlSesion::sesion("pagina_sesion_administrador");
        if($redireccionar != "") return redirect($redireccionar);

        session_destroy();
        return redirect('/modulo_administracion/iniciar_sesion');
    }
}