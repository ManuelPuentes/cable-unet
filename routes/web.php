<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ModuloAdministracion;
use App\Http\Controllers\ModuloSuscriptor;
use App\Http\Controllers\ControlSesion;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $redireccionar = ControlSesion::sesion("pagina_no_sesion");
    if($redireccionar != "") return redirect($redireccionar);
    
    return view('index');
});


//................................................suscriptor........................................................



Route::get('/modulo_suscriptor/registrar', [ModuloSuscriptor::class, 'registrar']);

Route::post('/modulo_suscriptor/procesar_registrar', [ModuloSuscriptor::class, 'procesarRegistrar']);



Route::get('/modulo_suscriptor/iniciar_sesion', [ModuloSuscriptor::class, 'paginaIniciarSesion']);

Route::post('/modulo_suscriptor/procesar_iniciar_sesion', [ModuloSuscriptor::class, 'procesarIniciarSesion']);



Route::get('/modulo_suscriptor/pagina_principal_usuario', [ModuloSuscriptor::class, 'paginaPrincipalUsuario']);



Route::get('/modulo_suscriptor/ver_servicios_contratar', [ModuloSuscriptor::class, 'verServiciosContratar']);

Route::get('/modulo_suscriptor/detalles_contratar/{detalles_contratar}/{tipo_servicio}/{id}', [ModuloSuscriptor::class, 'detallesContratar']);

Route::post('/modulo_suscriptor/detalles_contratar/contratar', [ModuloSuscriptor::class, 'contratar']);



Route::get('/modulo_suscriptor/factura_mensual', [ModuloSuscriptor::class, 'facturaMensual']);



Route::get('/modulo_suscriptor/buscar_programacion', [ModuloSuscriptor::class, 'buscarProgramacion']);

Route::post('/modulo_suscriptor/procesar_buscar_programacion', [ModuloSuscriptor::class, 'procesarBuscarProgramacion']);



Route::get('/modulo_suscriptor/cambiar_paquete_servicios', [ModuloSuscriptor::class, 'cambiarPaqueteServicios']);

Route::get('/modulo_suscriptor/cambiar_paquete_servicios_2/{id}', [ModuloSuscriptor::class, 'cambiarPaqueteServiciosDos']);

Route::post('/modulo_suscriptor/cambiar_paquete_servicios_3', [ModuloSuscriptor::class, 'cambiarPaqueteServiciosTres']);



Route::get('/modulo_suscriptor/cerrar_sesion', [ModuloSuscriptor::class, 'cerrarSesion']);



//................................................administracion........................................................



Route::get('/modulo_administracion/iniciar_sesion', [ModuloAdministracion::class, 'paginaIniciarSesion']);

Route::post('/modulo_administracion/procesar_iniciar_sesion', [ModuloAdministracion::class, 'procesarIniciarSesion']);



Route::get('/modulo_administracion/pagina_principal_administracion', [ModuloAdministracion::class, 'paginaPrincipalAdministracion']);



Route::get('/modulo_administracion/pagina_creacion_de_servicios', [ModuloAdministracion::class, 'paginaCreacionDeServicios']);

Route::get('/modulo_administracion/pagina_creacion_de_servicios/cable', [ModuloAdministracion::class, 'crearServicioCable']);

Route::get('/modulo_administracion/pagina_creacion_de_servicios/internet', [ModuloAdministracion::class, 'crearServicioInternet']);

Route::get('/modulo_administracion/pagina_creacion_de_servicios/telefonia', [ModuloAdministracion::class, 'crearServicioTelefonia']);

Route::post('/modulo_administracion/pagina_creacion_de_servicios/procesar_cable', [ModuloAdministracion::class, 'procesarCrearServicioCable']);

Route::post('/modulo_administracion/pagina_creacion_de_servicios/procesar_internet', [ModuloAdministracion::class, 'procesarCrearServicioInternet']);

Route::post('/modulo_administracion/pagina_creacion_de_servicios/procesar_telefonia', [ModuloAdministracion::class, 'procesarCrearServicioTelefonia']);



Route::get('/modulo_administracion/pagina_crear_paquete_servicio', [ModuloAdministracion::class, 'crearPaqueteServicio']);

Route::post('/modulo_administracion/procesar_crear_paquete_servicio', [ModuloAdministracion::class, 'procesarCrearPaqueteServicio']);



Route::get('/modulo_administracion/pagina_carga_de_canales', [ModuloAdministracion::class, 'paginaCargaDeCanales']);

Route::post('/modulo_administracion/procesar_carga_de_canales', [ModuloAdministracion::class, 'procesarCargaDeCanales']);



Route::get('/modulo_administracion/programacion/agregar', [ModuloAdministracion::class, 'agregarProgramacion']);

Route::post('/modulo_administracion/programacion/procesar_agregar', [ModuloAdministracion::class, 'procesarAgregarProgramacion']);



Route::get('/modulo_administracion/factura_mensual', [ModuloAdministracion::class, 'facturaMensual']);

Route::post('/modulo_administracion/procesar_factura_mensual', [ModuloAdministracion::class, 'procesarFacturaMensual']);



Route::get('/modulo_administracion/solicitudes_cambio', [ModuloAdministracion::class, 'solicitudesCambio']);

Route::get('/modulo_administracion/procesar_cambio/{id}/{estado}', [ModuloAdministracion::class, 'procesarCambio']);



Route::get('/modulo_administracion/administracion_usuarios', [ModuloAdministracion::class, 'administracionUsuarios']);

Route::get('/modulo_administracion/procesar_administracion_usuarios/{tipo_proceso}/{tipo_usuario}/{id}', [ModuloAdministracion::class, 'procesarAdministracionUsuarios']);

Route::post('/modulo_administracion/procesar_administracion_usuarios_2', [ModuloAdministracion::class, 'procesarAdministracionUsuariosDos']);



Route::get('/modulo_administracion/cerrar_sesion', [ModuloAdministracion::class, 'cerrarSesion']);