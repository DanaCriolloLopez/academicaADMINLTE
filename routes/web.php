<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;
use App\Http\Controllers\Profesores;

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

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listadoFac');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro']);
Route::post('/facultades/registrar', [Facultades::class, 'registrar']);
Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar'])->name('eliminaFac');
Route::get('/facultades/editar/{id}', [Facultades::class, 'editar'])->name('editarFac');
Route::post('/facultades/editar/{id}', [Facultades::class, 'actualizar'])->name('actualizar_facultad');

Route::get('/programas/listado', [Programas::class, 'index'])->name('listadoPro');
Route::get('/programas/registro', [Programas::class, 'form_registro']);
Route::post('/programas/registro', [Programas::class, 'registrar']);
Route::get('/programas/eliminar/{id}', [Programas::class, 'eliminar'])->name('eliminaPro');
Route::get('/programas/editar/{id}', [Programas::class, 'editar'])->name('editarPro');
Route::post('/programas/editar/{id}', [Programas::class, 'actualizar'])->name('actualizar_programa');

Route::get('/estudiantes/listado', [Estudiantes::class, 'index'])->name('listadoEst');
Route::get('/estudiantes/registro', [Estudiantes::class, 'form_registro']);
Route::post('/estudiantes/registro', [Estudiantes::class, 'registrar']);
Route::get('/estudiantes/eliminar/{id}', [Estudiantes::class, 'eliminar'])->name('eliminaEst');
Route::get('/estudiantes/editar/{id}', [Estudiantes::class, 'editar'])->name('editarEst');
Route::post('/estudiantes/editar/{id}', [Estudiantes::class, 'actualizar'])->name('actualizar_estudiante');



Route::get('/profesores/listado', [Profesores::class, 'index'])->name('listadoProfe');
Route::get('/profesores/registro', [Profesores::class, 'form_registro']);
Route::post('/profesores/registro', [Profesores::class, 'registrar']);
Route::get('/profesores/eliminar/{id}', [Profesores::class, 'eliminar'])->name('eliminaProfe');
Route::get('/profesores/editar/{id}', [Profesores::class, 'editar'])->name('editarProfe');
Route::post('/profesores/editar/{id}', [Profesores::class, 'actualizar'])->name('actualizar_profesor');

Route::get('/regnotas/listado', [Calificaciones::class, 'index']);







