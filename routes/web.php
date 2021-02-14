<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\administracion;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Notas;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Carreras;

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

Route::get('/dashboard', function () {
    return view('principal');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [Administracion::class, 'index']) ;
//EStudiantes
Route::get('estudiantes', [Estudiantes::class, 'index'] )->name('listadoEstudiantes');
Route::get('estudiantes/registro', [Estudiantes::class , 'formularioReg'])->name('form_registroEstudiante');
Route::post('estudiantes/registro', [Estudiantes::class, 'registrar'])->name('registrarEstudiante');
Route::get('estudiantes/detalle/{id}', [Estudiantes::class, 'detalle'] )->name('detalleEstudiante');
Route::post('estudiantes/registro', [Estudiantes::class, 'registrar'])->name('registrarEstudiante');
Route::get('estudiantes/actualizar/{id}', [Estudiantes::class, 'formularioAct'])->name('form_actualizaEstudiante');
Route::post('estudiantes/actualizar/{id}', [Estudiantes::class, 'actualizar'])->name('actualizarEstudiante');
Route::get('estudiantes/eliminar/{id}', [Estudiantes::class, 'eliminar'])->name('eliminarEstudiante');
Route::get('estudiantes/buscar', [Estudiantes::class, 'form_buscar'])->name('form_buscar');
Route::post('estudiantes/buscar', [Estudiantes::class, 'buscar'])->name('buscar');
//Carreras
Route::get('carreras', [Carreras::class, 'index'])->name('listadoCarreras');
Route::get('carreras/registro', [Carreras::class , 'formularioReg'])->name('form_registroCarrera');
Route::post('carreras/registro', [Carreras::class, 'registrar'])->name('registrarCarrera');
Route::get('carreras/actualizar/{id}', [Carreras::class, 'formularioAct'])->name('form_actualizaCarrera');
Route::post('carreras/actualizar/{id}', [Carreras::class, 'actualizar'])->name('actualizarCarrera');
Route::get('carreras/eliminar/{id}', [Carreras::class, 'eliminarCar'])->name('eliminarCarrera');
Route::get('carreras/buscar', [Carreras::class, 'form_buscarCar'])->name('form_buscarCar');
Route::post('carreras/buscar', [Carreras::class, 'buscarCar'])->name('buscarCar');
//profesores
Route::get('profesores', [Profesores::class, 'index'])->name('listadoProfesores');
Route::get('profesores/registro', [Profesores::class , 'formularioreg'])->name('registrarpro');
Route::post('profesores/registro', [Profesores::class , 'registrar'])->name('registrarProfesor');
Route::get('profesores/actualizar/{id}', [Profesores::class, 'formularioAct'])->name('form_actualizaProfesor');
Route::post('profesores/actualizar/{id}', [Profesores::class, 'actualizar'])->name('actualizarProfesor');
Route::get('profesores/eliminar/{id}', [Profesores::class, 'eliminarPro'])->name('eliminarProfesor');
Route::get('profesores/buscar', [Profesores::class, 'form_buscarPro'])->name('form_buscarPro');
Route::post('profesores/buscar', [Profesores::class, 'buscarPro'])->name('buscarPro');

//notas

Route::get('notas', [Notas::class, 'index'])->name('listadoNotas');
Route::get('notas/registro', [Notas::class , 'formularioreg'])->name('registrarnota');
Route::post('notas/registro', [Notas::class , 'registrar'])->name('registrarNota');
Route::get('notas/actualizar/{id}', [Notas::class, 'formularioAct'])->name('form_actualizaNota');
Route::post('notas/actualizar/{id}', [Notas::class, 'actualizar'])->name('actualizarNota');
Route::get('notas/eliminar/{id}', [Notas::class, 'eliminarNot'])->name('eliminarNota');
