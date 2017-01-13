<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::resource('home', 'PrincipalController');

Route::get('login', function () {
    return view('login');
});

Route::get('configuracion', function () {
    return view('configuracion');
});


Route::resource('personas', 'PersonasController');

Route::resource('medicos', 'MedicosController');
Route::resource('consultorios', 'ConsultoriosController');
Route::resource('especialidades','especialidadesController');
Route::resource('historial_medico', 'HistorialMedicoController');
Route::resource('historiales_medicos_detalles', 'HistorialesMedicosDetallesController');
Route::resource('estudiantes','EstudiantesController');
Route::resource('escuelas_profesionales','EscuelasProfesionalesController');

Route::resource('citas', 'CitasController');
Route::resource('sanciones', 'SancionesController');

Route::resource('horarios','HorariosController');
Route::resource('pacientes','PacientesController');
Route::resource('p_horario','p_horarioController');
Route::resource('reservas', 'ReservaController@mostrar');
Route::resource('reservas/horario', 'ReservaController@horario');
Route::resource('reservas/citas', 'ReservaController@citas');
Route::get('Recuperar_Datos_Cita',['uses'=>'ReservasController@Recuperar_Bloque']);
