<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('inicio');
});


Route::resource('alumnos', 'App\Http\Controllers\AlumnoController');
Route::resource('cursos', 'App\Http\Controllers\CursoController');
Route::resource('lista', 'App\Http\Controllers\ListaController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Rutas alumno
Route::get('/capturar-alumno', array(
    'as' => 'createAlumno',
    'uses' => 'App\Http\Controllers\AlumnoController@createAlumno'
));

Route::post('/guardar-alumno', array(
    'as' => 'saveAlumno',
    'uses' => 'App\Http\Controllers\AlumnoController@saveAlumno'
));

Route::get('/guardar-seleccion-Cursos/{alumno_id}/{curso_id}/{ciclo}', array(
    'as' => 'saveSeleccionCursos',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\CursoController@saveSeleccionCursos'
));

Route::get('/cambiar-estatus/{alumno_id}/{curso_id}/{ciclo}', array(
    'as' => 'cambiar-estatus',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\CursoController@cambiarEstatus'
));

Route::get('/elegirCursos/{alumno_id}/{ciclo}', array(
    'as' => 'elegirCursos',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\CursoController@obtenerCursos'
));

// Rutas curso
Route::get('/listadoCursos/{ciclo}', array(
    'as' => 'listadoCursos',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\CursoController@listarCursos'
));

Route::get('/capturar-curso/{ciclo}', array(
    'as' => 'createCurso',
    'uses' => 'App\Http\Controllers\CursoController@createCurso'
));

Route::post('/guardar-curso', array(
    'as' => 'saveCurso',
    'uses' => 'App\Http\Controllers\CursoController@saveCurso'
));

Route::get('/editar-curso/{curso_id}', array(
    'as' => 'editar-curso',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\CursoController@editarCurso'
));

Route::get('/delete-curso/{curso_id}', array(
    'as' => 'delete-curso',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\CursoController@delete'
));

Route::post('/update-curso/{curso_id}', array(
    'as' => 'update-curso',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\CursoController@update'
));

Route::get('/estadisticas', array(
    'as' => 'estadisticas',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\CursoController@getEstadisticas'
));

Route::get('/listadoAlumnos', array(
    'as' => 'listadoAlumnos',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\AlumnoController@listarAlumnos'
));

Route::get('/listadoPorGrupo/{curso_id}', array(
    'as' => 'listadoPorGrupo',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\CursoController@listaPorCurso'
));



Route::get('/editar-alumno/{alumno_id}', array(
    'as' => 'editar-alumno',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\AlumnoController@editarAlumno'
));

Route::get('/info-alumnos/{curso_id}', array(
    'as' => 'info-alumnos',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\CursoController@infoAlumnosPorCurso'
));

Route::get('/miniatura/{filename}', array(
    'as' => 'ine',
    'uses' => 'App\Http\Controllers\AlumnoController@getImagen'
));

Route::get('/delete-alumno/{alumno_id}', array(
    'as' => 'delete-alumno',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\AlumnoController@delete'
));

Route::get('/kardex-alumno/{alumno_id}', array(
    'as' => 'kardex-alumno',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\AlumnoController@kardexAlumno'
));

Route::get('/delete-lista/{lista_id}/{alumno_id}', array(
    'as' => 'listaDelete',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\ListaController@delete'
));

Route::get('/delete-lista-grupo/{lista_id}/{curso_id}', array(
    'as' => 'listaDeleteGrupo',
    'middleware' => 'auth',
    'uses' => 'App\Http\Controllers\ListaController@deleteListaGrupo'
));

Route::name('print')->get('/imprimir/{alumno_id}', 'App\Http\Controllers\PdfController@imprimir');
Route::name('printLista')->get('/imprimirLista/{curso_id}', 'App\Http\Controllers\PdfController@imprimirLista');
